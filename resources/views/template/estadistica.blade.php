   @include('template.nav')
 <div id="wrapper">
    <!-- Barra de Navegacion  -->
  

                
   </div> <!-- Aqui finaliza el menu  -->


   <div id="page-wrapper">
                        	<br>  
                        	<h2>Estadisticas</h2>
                        	<br>
                        	<ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="#">Principal</a></li>
                               
                                  <li class="breadcrumb-item active">Estadisticas</li>
                                </ol>
                                
                                	
                        	<div class="row">


                            <div class="col-md-10 lienzo">
                            <canvas id="myChart" class="col-md-12"></canvas>
                          </div>
                            <style type="text/css">
                              canvas{
                                width: 100px;
                                height: 350px;
                               
                              }
                              .lienzo{
                                margin: center;
                              }

                            </style>
<script>
var ctx = document.getElementById("myChart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: 'Compras Nuevas',
            data: [1, 1, 2, 3, 1, 6],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 7
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>


                        	</div>
      </div>