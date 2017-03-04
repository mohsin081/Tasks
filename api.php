<?php
$index = $_GET['data'];
//accessing database
$database = Array (
"SP500"=>2128.19,
"DOW"=>18150.44,
"NASDAQ"=>5194.41
);
if(isset($database[$index])) 
	responseJSON(200,"Success",$index,$database[$index]);
else
	responseJSON(200,"Not Found",$index,"");
function responseJSON($status, $msg, $index, $value){
	header("Content-type:application/json");
	header("HTTP/1.1 $status $msg");
	$resp['index'] = $index;
	$resp['value'] = $value;
	echo json_encode($resp);
}