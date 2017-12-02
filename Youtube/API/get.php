<?php
if( isset($_GET['attachu']) ){
	$attach = urldecode($_GET['attachu']);
	if( isset($_GET['name'], $_GET['type']) ){

			if(isset($_GET['filesize']) && $_GET['filesize']!=0 && $_GET['filesize']!="" && $_GET['filesize']!=" "){
				$filesize = $_GET['filesize'];
			}
				else{
					$head = array_change_key_case(get_headers($attach, TRUE));
					$filesize = $head['content-length'];		
				}
				header('Content-Description: File Transfer');
				header('Content-Type: application/octet-stream');
			    header('Content-Disposition: attachment; filename="'.basename(urldecode($_GET['name']).'.'.$_GET['type']).'"');
			    header('Expires: 0');
			    header('Cache-Control: must-revalidate');
			    header('Pragma: public');
			    header('Content-Length: ' . $filesize);
			    readfile($attach);
	}
  exit;
}

else if($_GET['tempadarling'] && $_GET['piss'] == "indeedpiss"){
		header('Content-Type: application/json');
		header('Access-Control-Allow-Origin: *');
		header('Access-Control-Allow-Methods: GET, POST');
		header('Access-Control-Allow-Headers: X-Requestes-With');
		$temp = (exec('~/./youtube-dl --dump-json '.$_GET['tempadarling']));
		  if(empty($temp)){
		  	$mes = array('status' => 404);
		  	echo json_encode($mes);
		  } else {
		  	echo $temp;
		  }
}
	else
		echo json_encode("ops");


?>