
/*++++++++++:.Sliding Info Style.++++++++++*/
$(document).ready(function(){
    $(".trigger").click(function(){
        $(".panel").toggle("fast");
        $(this).toggleClass("active");
        return false;
    });
});






/*++++++++++:.Notifications Style.++++++++++*/

var div = $("#notify");

function runIt(){
    div.fadeIn('slow');
    setTimeout(div, 500000);

}
runIt();

$(function(){
    $('#notify').hover(
        function(){
            $(this).css({'opacity':'1'})
        },
        function(){
            $(this).css({'opacity':'0.5'})
        }
    )

    $('#notify i').click(function(){
        $('#notify').removeClass('visible-desktop');
        $('#notify').fadeOut();
        return false;
    })

})

/*++++++++++:.Tooltip Style.++++++++++*/
 $(function(){
     $('.table-wrapper a').mouseenter(function(){
          $(this).tooltip('show')
     })
 })




/*++++++++++:.Checkbox Style.++++++++++*/
function toggleCheckedAllPost(status) {
    $(".checkbox-allPost").each( function() {
        $(this).attr("checked",status);
    })

}

function toggleCheckedPublished(status) {

    $(".checkbox-published").each( function() {
        $(this).attr("checked",status);
    })

}

function toggleCheckedDraft(status) {

    $(".checkbox-draft").each( function() {
        $(this).attr("checked",status);
    })

}

function toggleCheckedTrash(status) {

    $(".checkbox-trash").each( function() {
        $(this).attr("checked",status);
    })
}

function toggleCheckedFile(status) {

    $(".checkbox-file").each( function() {
        $(this).attr("checked",status);
    })
}

function toggleCheckedTables1(status) {

    $(".checkbox-tables1").each( function() {
        $(this).attr("checked",status);
    })
}

function toggleCheckedTables2(status) {

    $(".checkbox-tables2").each( function() {
        $(this).attr("checked",status);
    })
}

function toggleCheckedTables3(status) {

    $(".checkbox-tables3").each( function() {
        $(this).attr("checked",status);
    })
}

function toggleCheckedTables4(status) {

    $(".checkbox-tables4").each( function() {
        $(this).attr("checked",status);
    })
}

function toggleCheckedTables5(status) {

    $(".checkbox-tables5").each( function() {
        $(this).attr("checked",status);
    })
}

function toggleCheckedTables6(status) {

    $(".checkbox-tables6").each( function() {
        $(this).attr("checked",status);
    })
}

/*++++++++++:.Expand switch sidebar Style.++++++++++*/
 $(function(){
     $('#sidebar-switch').click(function(){
        $('#sidebar-left').removeClass('span2');
         $('#sidebar-left').addClass('span1');
         $('#sidebar-center').removeClass('span7');
         $('#sidebar-center').addClass('span8');
         $('#sidebar-left span').hide();
         $('#sidebar-left i.sidebar-caret').addClass('icon-caret-right');

         $('#sidebar-left li.sidebar-li-default').css({'display':'none'});
         $('#sidebar-left li.sidebar-li').css({'display':'block'});


         $('#sidebar-switch i').removeClass('icon-caret-left');
         $('#sidebar-switch i').addClass('icon-caret-right');
     })
 })


/*++++++++++:.Close Style.++++++++++*/
$(document).on("click", ".accordion-heading", function (eventObject) {


    if (eventObject.type === 'click') {
        $(this).find("i.icon-minus").toggleClass('icon-caret-down');
    }
});


/*++++++++++:.Switch Style.++++++++++*/
$(function(){
    if($.cookie("css")) {
        $("link#default").attr("href",$.cookie("css"));
    }
    $("#list-themes li a").click(function() {
        $("link#default").attr("href",$(this).attr('rel'));
        $.cookie("css",$(this).attr('rel'), {expires: 365, path: '/'});
        return false;
    });

    $("#list-themes2 li:eq(0)").click(function() {
        $("body").removeClass("bg1").removeClass("bg2").removeClass("bg3").removeClass("bg4").removeClass("bg5")
            .addClass("bg0");

    });

    $("#list-themes2 li:eq(1)").click(function() {
        $("body").removeClass("bg0").removeClass("bg2").removeClass("bg3").removeClass("bg4").removeClass("bg5")
            .addClass("bg1");


    });

    $("#list-themes2 li:eq(2)").click(function() {
        $("body").removeClass("bg1").removeClass("bg0").removeClass("bg3").removeClass("bg4").removeClass("bg5")
            .addClass("bg2");

    });

    $("#list-themes2 li:eq(3)").click(function() {
        $("body").removeClass("bg0").removeClass("bg1").removeClass("bg2").removeClass("bg4").removeClass("bg5")
            .addClass("bg3");

    });

    $("#list-themes2 li:eq(4)").click(function() {
        $("body").removeClass("bg0").removeClass("bg1").removeClass("bg2").removeClass("bg3").removeClass("bg5")
            .addClass("bg4");

    });

    $("#list-themes2 li:eq(5)").click(function() {
        $("body").removeClass("bg0").removeClass("bg1").removeClass("bg2").removeClass("bg3").removeClass("bg4")
            .addClass("bg5");

    });

    $("#list-themes-mobile li a").click(function() {
        $("link#default").attr("href",$(this).attr('rel'));
        $.cookie("css",$(this).attr('rel'), {expires: 365, path: '/'});
        return false;
    });
});











