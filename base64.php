<?php

if (isset($_GET['enc'])) {	
	$data =  base64_encode($_POST['enc']);
}elseif(isset($_GET['dec'])){
	$data =  base64_decode($_POST['dec']);	
}
if (isset($data)) {
	echo $data;
}else{
	echo "Data Kosong";
}
sleep(1);

