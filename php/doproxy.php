<?php
	define('SCRIPTROOT', realpath(dirname(__FILE__) . '/'));
	include SCRIPTROOT.'/util/config.php';
	include SCRIPTROOT.'/util/lib/SnsNetwork.php';
	
	$url = base64_decode($_REQUEST['url']);
	$params = json_decode(base64_decode($_REQUEST['param']), true);
	$method = strtoupper($_REQUEST['type']);
	if(!in_array($method, array('GET','POST','JSON')))
		$method = 'GET';
	$httpResult = SnsNetwork::makeRequest($url, $params, array(), $method);
	echo $httpResult;
?>