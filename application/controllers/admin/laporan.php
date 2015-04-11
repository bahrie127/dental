<?php
/**
 * Created by JetBrains PhpStorm.
 * User: bahrie
 * Date: 12/5/12
 * Time: 10:30 PM
 * To change this template use File | Settings | File Templates.
 */
class Laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->auth->restrict();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('m_laporan');
        $this->load->library('grocery_CRUD');

    }


    function index()
    {
        $data['laporan'] = $this->m_laporan->get_all()->result();
        $this->load->view('admin/laporan', $data);
    }

    function lihat()
    {
        $tipe = $this->input->post('lihat');
        $dari=$this->input->post('dari');
        $sampai=$this->input->post('sampai');

        if($tipe=="Lihat"){
            if(!$dari || !$sampai ){
                $data['laporan'] = $this->m_laporan->get_all()->result();
            }else{
            $data['laporan'] = $this->m_laporan->get_by_date($dari,$sampai)->result();
            }
            $this->load->view('admin/laporan', $data);
        }else{
        //load our new PHPExcel library
        $this->load->library('excel');
        //activate worksheet number 1
        $this->excel->setActiveSheetIndex(0);
        //name the worksheet
        $this->excel->getActiveSheet()->setTitle('pembukuan');
        //set cell A1 content with some text
            if(!$dari || !$sampai ){
                $datas = $this->m_laporan->get_all();
            }else{
                $datas = $this->m_laporan->get_by_date($dari,$sampai);
            }

     //   $fields = $datas->list_fields();
        //print_r($fields);exit;
        $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(6);
        $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(15);
        $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(15);
        $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(15);
        $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(15);
        $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(20);


        $this->excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->excel->getActiveSheet()->getStyle('B1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->excel->getActiveSheet()->getStyle('C1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->excel->getActiveSheet()->getStyle('D1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->excel->getActiveSheet()->getStyle('E1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->excel->getActiveSheet()->getStyle('F1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

        $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
        $this->excel->getActiveSheet()->getStyle('B1')->getFont()->setBold(true);
        $this->excel->getActiveSheet()->getStyle('C1')->getFont()->setBold(true);
        $this->excel->getActiveSheet()->getStyle('D1')->getFont()->setBold(true);
        $this->excel->getActiveSheet()->getStyle('E1')->getFont()->setBold(true);
        $this->excel->getActiveSheet()->getStyle('F1')->getFont()->setBold(true);

        $col = 0;
        while ($col < 6)
        {
            if ($col == 0) $f = "No";
            elseif ($col == 1) $f = "Tanggal";
            elseif ($col == 2) $f = "Pemasukan";
            elseif ($col == 3) $f = "Pengeluaran";
            elseif ($col == 4) $f = "Total";
            elseif ($col == 5) $f = "Keterangan";

            $this->excel->getActiveSheet()->setCellValueByColumnAndRow($col, 1, $f);
            $col++;
        }

        // Fetching the table data
        $row = 2;
        $total_pemasukan = 0;
        $total_pengeluaran = 0;
        $total_pendapatan = 0;
        foreach ($datas->result() as $data)
        {
            $col = 0;$no=1;
            while ($col < 6)
            {

                if ($col == 0) $f = $no;
                elseif ($col == 1) $f = $data->tanggal;
                elseif ($col == 2) $f = $data->pemasukan;
                elseif ($col == 3) $f = $data->pengeluaran;
                elseif ($col == 4) $f = $data->pemasukan - $data->pengeluaran;
                elseif ($col == 5) $f = $data->keterangan;

                $this->excel->getActiveSheet()->getStyle('C' . $row)->getNumberFormat()->setFormatCode('#,##0');
                $this->excel->getActiveSheet()->getStyle('D' . $row)->getNumberFormat()->setFormatCode('#,##0');
                $this->excel->getActiveSheet()->getStyle('E' . $row)->getNumberFormat()->setFormatCode('#,##0');
                $this->excel->getActiveSheet()->getStyle('E' . $row)->getFont()->setBold(true);
                $this->excel->getActiveSheet()->getStyle('B' . $row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                $this->excel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $f);
                $col++;
            }
            $total_pendapatan += $data->pemasukan - $data->pengeluaran;
            $total_pemasukan += $data->pemasukan;
            $total_pengeluaran += $data->pengeluaran;
            $row++;$no++;
        }

        $col = 0;
        while ($col < 6)
        {
            if ($col == 0) $f = "";
            elseif ($col == 1) $f = "Jumlah";
            elseif ($col == 2) $f = $total_pemasukan;
            elseif ($col == 3) $f = $total_pengeluaran;
            elseif ($col == 4) $f = $total_pendapatan;
            elseif ($col == 5) $f = "";
            $this->excel->getActiveSheet()->getStyle('A' . $row)->getFont()->setBold(true);
            $this->excel->getActiveSheet()->getStyle('B' . $row)->getFont()->setBold(true);
            $this->excel->getActiveSheet()->getStyle('B' . $row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            $this->excel->getActiveSheet()->getStyle('C' . $row)->getNumberFormat()->setFormatCode('#,##0');
            $this->excel->getActiveSheet()->getStyle('D' . $row)->getNumberFormat()->setFormatCode('#,##0');
            $this->excel->getActiveSheet()->getStyle('E' . $row)->getNumberFormat()->setFormatCode('#,##0');
            $this->excel->getActiveSheet()->getStyle('C' . $row)->getFont()->setBold(true);
            $this->excel->getActiveSheet()->getStyle('D' . $row)->getFont()->setBold(true);
            $this->excel->getActiveSheet()->getStyle('E' . $row)->getFont()->setBold(true);
            $this->excel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $f);
            $col++;
        }
        $filename = 'Pembukuan_' . date(DATE_RFC822) . '.xls'; //save our workbook as this file name
        header('Content-Type: application/vnd.ms-excel'); //mime type
        header('Content-Disposition: attachment;filename="' . $filename . '"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache

        //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want to save it as .XLSX Excel 2007 format
        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');
        }
    }

}