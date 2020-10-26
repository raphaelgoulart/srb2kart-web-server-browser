<?php 
include 'srb2query.php';

/*error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set("xdebug.var_display_max_children", '-1');
ini_set("xdebug.var_display_max_data", '-1');
ini_set("xdebug.var_display_max_depth", '-1');*/

$query = new SRB2Query;
$query->Ask($_GET['ip'], $_GET['port']);
$info = $query->Info($addr);
$info['servername'] = $query->Colorize($info['servername']);
$info['addons'] = $query->Fileinfo();
//var_dump($info);
header('Content-Type: application/json');
echo json_encode($info);
//var_dump(json_last_error());
$query->Close();
?>