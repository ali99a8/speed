// box1
var xValues = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
var yValues = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];

new Chart("myChart", {
    type: "line",
    data: {
        labels: xValues,
        datasets: [{
            fill: false,
            lineTension: 0,
            backgroundColor: "rgba(0,0,255,1.0)",
            borderColor: "rgba(0,0,255,0.1)",
            data: yValues
        }]
    },
    options: {
        legend: { display: false },
        scales: {
            yAxes: [{ ticks: { min: 6, max: 16 } }],
        }
    }
});

// box2
var xaxisValues = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
var yaxisValues = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];

new Chart("myChart2", {
    type: "line",
    data: {
        labels: xaxisValues,
        datasets: [{
            fill: false,
            lineTension: 0,
            backgroundColor: "rgba(0,0,255,1.0)",
            borderColor: "rgba(0,0,255,0.1)",
            data: yaxisValues
        }]
    },
    options: {
        legend: { display: false },
        scales: {
            yAxes: [{ ticks: { min: 6, max: 16 } }],
        }
    }
});


// box3
var xaxisValue = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150];
var yaxisValue = [7, 8, 8, 9, 9, 9, 10, 11, 14, 14, 15];

new Chart("myChart3", {
    type: "line",
    data: {
        labels: xaxisValue,
        datasets: [{
            fill: false,
            lineTension: 0,
            backgroundColor: "rgba(0,0,255,1.0)",
            borderColor: "rgba(0,0,255,0.1)",
            data: yaxisValue
        }]
    },
    options: {
        legend: { display: false },
        scales: {
            yAxes: [{ ticks: { min: 6, max: 16 } }],
        }
    }
});

/// settingsgo to  home
var btn_home_chart = document.querySelector(".btn_home_chart");
btn_home_chart.onclick = function() {
    window.open("index.html", "_parent");
    btn_home_chart.style.border = 'none';
    btn_home_chart.style.outline = 'none';

}

//// settings menubar
var menubar = document.querySelector(".menubar"),
    closebar = document.querySelector(".closebar");
menubar.onclick = function() {
    menubar.style.display = "none"
    closebar.style.display = "block"
}


closebar.onclick = function() {
    closebar.style.display = "none"
    menubar.style.display = "block"
}