<!DOCTYPE html>
<html>
 <head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
      var ex_office_analytics = <?php echo $ex_office_status; ?>
        
        google.charts.load('current', {'packages':['corechart']});

        google.charts.setOnLoadCallback(drawExternalOfficeChart);

          function drawExternalOfficeChart()
          {
            var ex_office_data = google.visualization.arrayToDataTable(ex_office_analytics);
            var options = {
              title :'',
              titleTextStyle: {color: 'black', fontSize: 16, bold: 600},
              pieHole: 0.3,
              pieSliceTextStyle: {fontSize: 14},
              backgroundColor: 'transparent',
              width: 250,
              height: 270,
              chartArea: {left: 30, right: 10, top: 20, bottom: 0, width: '100%', height: '80%'},
              legend: {position: 'top', textStyle: {color: 'black', fontSize: 13}},
              tooltipTextStyle: {color: 'black', fontSize: 13}
            };
            var chart = new google.visualization.PieChart(document.getElementById('ex_office_donutchart'));
            chart.draw(ex_office_data, options);
          }

    </script>

 </head>
 <body>

  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12" align="left">
      <div id="ex_office_donutchart"></div>
    </div>
  </div>
  <a href="<?php echo e(url('files/office/external')); ?>">
    <button type="button" class="btn btn-default btn-block btn-flat">View All &nbsp<i class="fas fa-arrow-circle-right"></i></button>
  </a>
  

 </body>
</html>
<?php /**PATH C:\xampp\htdocs\doctracker\resources\views/livewire/files/office/external-chart-js.blade.php ENDPATH**/ ?>