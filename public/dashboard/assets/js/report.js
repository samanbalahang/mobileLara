$(function () {
    var firstChart = document.getElementById('firstChart');
    var secChart = document.getElementById('secChart');
    var thirdChart = document.getElementById('thirdChart');
    var forthChart = document.getElementById('forthChart');
    var fifthChart = document.getElementById('fifthChart');
    new Chart(firstChart, {
        type: 'bar',
        data: {
            labels: ["jan", "feb", "mar", "Apr", "may", "june", "july"],
            datasets: [{
                label: 'My First Dataset',
                data: [65, 59, 80, 81, 56, 55, 40],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        },
    });
    new Chart(secChart, {
        type: 'pie',
        data: {
            labels: [
                'Red',
                'Blue',
                'Yellow'
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [300, 50, 100],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        },
    });
    new Chart(thirdChart, {
        type: 'doughnut',
        data: {
            labels: [
                'Red',
                'Blue',
                'Yellow'
            ],
            datasets: [{
                label: 'My First Dataset',
                data: [300, 50, 100],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        },
    });
    new Chart(forthChart, {
        type: 'bubble',
        data: {
            datasets: [{
                label: 'First Dataset',
                data: [{
                    x: 20,
                    y: 30,
                    r: 15
                }, {
                    x: 30,
                    y: 20,
                    r: 12
                }, {
                    x: 40,
                    y: 10,
                    r: 10
                }],
                backgroundColor: 'rgb(255, 99, 132)'
            }]
        },
        options: {}
    });
    new Chart(fifthChart, {
        type: 'scatter',
        data: {
            datasets: [{
                label: 'Scatter Dataset',
                data: [{
                    x: -10,
                    y: 0
                }, {
                    x: 0,
                    y: 10
                }, {
                    x: 10,
                    y: 5
                }, {
                    x: 0.5,
                    y: 5.5
                }],
                backgroundColor: 'rgb(255, 99, 132)'
            }],
        },
        options: {
            scales: {
                x: {
                    type: 'linear',
                    position: 'bottom'
                }
            }
        }
    });
});
