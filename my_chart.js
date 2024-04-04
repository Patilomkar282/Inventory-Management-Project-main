var ctx = document.getElementById('myChart').getContext('2d');
var earning = document.getElementById('earning').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'polarArea',
    data: {
        labels: ['Lab407-A', 'Lab407-B', 'Lab408-A', 'Lab408-B','Lab409','Lab413','Lab414'],
        datasets: [{
            label: 'Product Count',
            data: [490, 600, 800, 300,200,550,680],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(0, 0, 255, 0.8)',
                'rgba(255, 206, 0, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(75, 192, 192, 1)'
            ],
        }]
    },
    Options: {
        responsive: true,
    }
});


var mychart = new Chart(earning, {
  type: 'bar',
  data: {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
    datasets: [{
        label: 'Products Purchased',
        data: [1200, 1090, 3000, 5400, 1220, 3600, 4800, 4578, 2566, 8545, 4587, 9000],
        backgroundColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(0, 0, 255, 0.8)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)',
            'rgba(255, 99, 132, 1)',
            'rgba(0, 0, 255, 0.8)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
        ],
    }]
},
Options: {
    responsive: true,
}
});