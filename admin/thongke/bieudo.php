
<div class="row">

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<body>
    

<div
id="myChart">
</div>

<script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['DANH MỤC', 'Số lượng sản phẩm'],
  <?php 
        $tongdm=count($listthongke);
        $i=1;
        foreach ($listthongke as $thongke) {
            extract($thongke);
            if($i==$tongdm) $dauphay =""; else $dauphay =",";
            echo "['".$thongke['tendm']."',".$thongke['countsp']."]".$dauphay;
        }
  ?>

]);

var options = {
  title:'THỐNG KÊ SẢN PHẨM THEO DANH MỤC', 'width' :1100, 'height': 800};

var chart = new google.visualization.PieChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>
</div>
