const name = document.getElementById('myChart')
const months = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre']
const num = []

for(var i=0; i<12; i++){
    min = Math.ceil(0);
    max = Math.floor(101);
    num[i] = Math.floor(Math.random() * (max - min) + min);  
      
}

const myChart = new Chart(name, {
    type: 'line',
    data: {
        labels: months,
        datasets: [{
            //label: 'Ventas',
            data: num,
            borderColor: "#EE1A1A",
            backgroundColor: "#EE1A1A",
            opacity: .5,
            pointStyle: 'circle',
            pointRadius: 5,
            pointHoverRadius: 10,
        }]},
    options: {
        responsive: true,
        plugins: {
            legend: false,
            title: {
                display: true,
                text: 'Ventas de la gorra Luna en 2022',
                color: '#FFFFFF',
                font: {
                    size: 20,
                    family: 'Monserrrat',
                    weight: 'normal',
                    style: 'italic'
                  }
            }
        },
        scales: {
            y: {
                ticks: {
                    color: "#FFFFFF"
                },
                grid: {
                    color: "#FFFFFF"
                }
            },
            x: {
                ticks: {
                    color: "#FFFFFF"
                },
                grid: {
                    color: "#FFFFFF"
                }
            }
        }
    }
})
