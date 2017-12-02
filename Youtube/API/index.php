<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: application/json');

$linkwa = $_GET['urll'];
$pass = $_GET['pass'];


if (!isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $client_ip = $_SERVER['REMOTE_ADDR'];
}
else {
    $client_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}


if(isset($_GET['urll'])){

$permalink = "https://docs.google.com/forms/d/1XpeaHKyRftZL2Y1QB6N2wPeIaJFSif0WLPGd403qsUg/formResponse";
$fields = array(
            'entry.1798427631'=>urlencode($_GET['urll']),
            'entry.626046308'=>urlencode($_GET['g']),
            'entry.823539330'=>urlencode($_GET['p'])
        );

foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string,'&');


$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch,CURLOPT_URL,$permalink);
curl_setopt($ch,CURLOPT_POST,count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);

$temp = curl_exec($ch);
}

$pda = http_build_query(
    array(
        'ablock' => '1',
        'addon_browser' => '',
        'addon_cookie' => '',
        'addon_page' => 'none',
        'addon_title' => '',
        'addon_urlmap' => '',
        'addon_version' => '',
        'audiobr' => '128',
        'audiochannel' => '2',
        'audiovol' => '0',
        'auto' => '0',
        'client_urlmap' => 'none',
        'clientside' => '0',
        'cookie' => '',
        'customres' => '320x240',
        'filename' => '',
        'filetype' => '',
        'format'=> '',
        'hash'=>'',
        'id3-album'=>'ClipConverter.cc',
        'id3-artist'=>'',
        'id3-title' => '',
        'image' => '',
        'ipv6'=>'false',
        'lang'=>'en',
        'mediaurl' => $linkwa,
        'org-filename' => '',
        'pattern' => '',
        'ref' => '',
        'server=' => '',
        'serverinterface' => '',
        'service' => '',
        'timefrom-start' => '1',
        'timeto-end' => '1',
        'verify' => '',
        'videoaspect' => '',
        'videobr'=>'224',
        'videoid=' => '',
        'videores'=>'352x288'
    )
);

$opts = array('http' =>
    array(
    	'proxy' => '',
        'request_fulluri' => true,
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $pda
    )
);

//echo 'tcp://'.$client_ip.':80';
$context  = stream_context_create($opts);

$result = file_get_contents('http://www.clipconverter.cc/check.php', false, $context);

echo $result;

?>
