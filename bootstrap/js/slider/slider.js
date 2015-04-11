/*++++++++++:.Slider Style.++++++++++*/
$(function() {
    $( "#slider" ).slider();
});

$(function() {
    // setup master volume
    $( "#master" ).slider({
        value: 60,
        orientation: "horizontal",
        range: "min",
        animate: true
    });
    // setup graphic EQ
    $( "#eq > span" ).each(function() {
        // read initial values from markup and remove that
        var value = parseInt( $( this ).text(), 10 );
        $( this ).empty().slider({
            value: value,
            range: "min",
            animate: true,
            orientation: "vertical"
        });
    });
});

$(function() {
    $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 500,
        values: [ 75, 300 ],
        slide: function( event, ui ) {
            $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
        " - $" + $( "#slider-range" ).slider( "values", 1 ) );
});

$(function() {
    $( "#slider-range-min" ).slider({
        range: "min",
        value: 37,
        min: 1,
        max: 700,
        slide: function( event, ui ) {
            $( "#amount2" ).val( "$" + ui.value );
        }
    });
    $( "#amount2" ).val( "$" + $( "#slider-range-min" ).slider( "value" ) );
});

$(function() {
    $( "#slider3" ).slider({
        value:100,
        min: 0,
        max: 500,
        step: 50,
        slide: function( event, ui ) {
            $( "#amount3" ).val( "$" + ui.value );
        }
    });
    $( "#amount3" ).val( "$" + $( "#slider3" ).slider( "value" ) );
});

$(function() {
    $( "#slider-range4" ).slider({
        orientation: "vertical",
        range: true,
        values: [ 17, 67 ],
        slide: function( event, ui ) {
            $( "#amount4" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        }
    });
    $( "#amount4" ).val( "$" + $( "#slider-range4" ).slider( "values", 0 ) +
        " - $" + $( "#slider-range4" ).slider( "values", 1 ) );
});