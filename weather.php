
<?php
header("content-type: text/html" );
header("Cache-Control:no-cache");
		$cityID = $_POST["cityID"]; 
		$data = file_get_contents("http://www.weather.com.cn/data/cityinfo/".$cityID.".html");
        echo $data;
?>