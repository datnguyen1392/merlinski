<script type="text/javascript">
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);
	function drawChart() {
		  var data = google.visualization.arrayToDataTable([
		  ['Task', 'Hours per Day'],
		  ['Work', 8],
		  ['Eat', 2],
		  ['TV', 4],
		  ['Gym', 2],
		  ['Sleep', 8]
		]);
		  var options = {'title':'My Average Day', 'width':550, 'height':400};
		  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  			chart.draw(data, options);
}
</script>