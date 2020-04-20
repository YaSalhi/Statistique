var PV=<?php echo json_encode($PV);?>;
var PNV=<?php echo json_encode($PNV);?>;
var PAJ=<?php echo json_encode($PAJ);?>;
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    theme: "light2",
    animationEnabled: true,
    title: {
        text: "Statistiques for students"
    },
    subtitles: [{
        text: "GI, 2019",
        fontSize: 16
    }],
    data: [{
        type: "pie",
        indexLabelFontSize: 18,
        radius: 80,
        indexLabel: "{label} - {y}",
        yValueFormatString: "###0.0\"%\"",
        click: explodePie,
        dataPoints: [
            { y: PV, label: "validée" },
            { y: PNV, label: "non validée" },
            { y: PAJ, label: "ajournée" }
        ]
    }]
});
chart.render();

function explodePie(e) {
    for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
        if(i !== e.dataPointIndex)
            e.dataSeries.dataPoints[i].exploded = false;
    }
}

}