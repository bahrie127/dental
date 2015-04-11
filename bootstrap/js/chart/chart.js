/*++++++++++:.Charts Style.++++++++++*/
$(function () {
    var sin = [], cos = [];
    for (var i = 0; i < 14; i += 0.5) {
        sin.push([i, Math.sin(i)]);
        cos.push([i, Math.cos(i)]);
    }

    var plot = $.plot($("#placeholder"),
        [ { data: sin, label: "series 1"}, { data: cos, label: "series 2" } ], {
            series: {
                lines: { show: true },
                points: { show: true }

            },
            grid: { hoverable: true, clickable: true },
            yaxis: { min: -1.2, max: 1.2 }
        });

    function showTooltip(x, y, contents) {
        $('<div id="tooltip">' + contents + '</div>').css( {
            position: 'absolute',
            display: 'none',
            top: y + 5,
            left: x + 5,
            border: '1px solid #fdd',
            padding: '6px',
            'background-color': '#000',
            opacity: 0.80,
            color: 'white',
            borderRadius: '5px'
        }).appendTo("body").fadeIn(200);
    }

    var previousPoint = null;
    $("#placeholder").bind("plothover", function (event, pos, item) {
        $("#x").text(pos.x.toFixed(2));
        $("#y").text(pos.y.toFixed(2));

        if ($("#placeholder").length == true) {
            if (item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;

                    $("#tooltip").remove();
                    var x = item.datapoint[0].toFixed(2),
                        y = item.datapoint[1].toFixed(2);

                    showTooltip(item.pageX, item.pageY,
                        item.series.label + " of " + x + " = " + y);
                }
            }
            else {
                $("#tooltip").remove();
                previousPoint = null;
            }
        }
    });

    $("#placeholder").bind("plothover", function (event, pos, item) {
        if (item) {
            $("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
            plot.highlight(item.series, item.datapoint);
        }
    });
});

//mini chart


$(function() {
    // Just the defaults.
    $("span.pie").peity("pie")
    $(".line").peity("line")
    $(".bar-plus").peity("bar-plus")
    $(".bar-minus").peity("bar-minus")

    // Set a custom colour and/or diameter.
    $(".diameter span").peity("pie", {
        colours: function() {
            return ["#dddddd", this.getAttribute("data-colour")]
        },
        diameter: function() {
            return this.getAttribute("data-diameter")
        }
    })

    // Simple evented example.
    $("select").change(function(){
        $(this)
            .siblings("span.graph")
            .text($(this).val() + "/" + 5).change()
    }).change()

    var chartUpdate = function(event, value) {
        $("#notice").text(
            "Chart updated: " + value
        )
    }

    $("span.graph").peity("pie").bind("chart:changed", chartUpdate)
})