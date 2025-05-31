google.charts.load('current', { packages: ['corechart'] });
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
    [
      'Day',
      'Gpt',
      'Canva',
      'Netflix',
      'YouTube',
      'Disney Plus',
      'Grammarly',
      'Capcut',
    ],
    ['Sunday', 15, 27, 60, 95, 60, 30, 23],
    ['Monday', 28, 25, 80, 75, 30, 78, 90],
    ['Tuesday', 80, 74, 45, 27, 50, 40, 35],
    ['Wednesday', 16, 78, 41, 85, 30, 79, 80],
    ['Thursday', 26, 24, 12, 85, 60, 52, 80],
    ['Friday', 46, 94, 62, 95, 99, 78, 13],
    ['Saturday', 22, 40, 42, 75, 60, 90, 67],
  ]);

  var options = {
    title: 'OrderFlow',
    titleTextStyle: {
      fontSize: 32, // size of the title font
      color: '#111116', // title color (dark blue)
      bold: false, // make it bold
      italic: false, // no italic
      fontName: 'DM Sans', // font family
    },
    chartArea: {
      width: '90%',
      height: '50%',
      top: 90, // pushes the chart area down, creating space below title
    },
    legend: { position: 'bottom' },
    hAxis: { title: 'Day' },
    bar: { groupWidth: '70%' },
    legend: { position: 'bottom' },
    isStacked: false,
    hAxis: {
      title: 'Day',
    },
    bar: { groupWidth: '70%' },
  };

  var chart = new google.visualization.ColumnChart(
    document.getElementById('chart_div')
  );
  chart.draw(data, options);
}
