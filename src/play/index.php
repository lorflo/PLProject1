<?php
include move.php;
$include_path = 'C:\Users\lorfl\HW1PL\PLProject1\src\info\index.php';
set_include_path($include_path);


$response = null;
$p_id = null;

if(isset($_GET['pid']))
{
    $p_id = $_GET['pid'];
    if($p_id != $pid )
    {
        $response = array('response' => false, 'reason' => "Unknown Player id");
    }  
}
if($p_id == null)//no Strategy
{
    $response =  array('response' => false, 'reason' => "Player id  not specified");
} 


echo json_encode($response);
?>