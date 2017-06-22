<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['', ''],
         /* ["最喜歡的機器人", 44],
          ["西遊記 ", 31],
          ["西南航空", 12],*/
        <?php foreach ($likes as $like): ?>
          ["<?= $like['name'] ?>", <?= $like['total'] ?>],
        <?php endforeach; ?>
        ]);

        var options = {
          title: 'Analyze data opening moves',
          width: 700,
          legend: { position: 'none' },
          chart: { title: '統計分析表',},
          bars: 'horizontal', 
          axes: {
            x: {
              0: { side: 'top', label: '熱門標籤排行'} // Top x-axis.
            }
          },          
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
  </head>
  <body>
    <div id="top_x_div" style="width: 900px; height: 300px;"></div>
  </body>
</html>