<?php


$response = null;
$p_id = null;

if(isset($_GET['pid'])){
    $p_id = $_GET['pid'];
    if($p_id != $pid ){
        $response = array('response' => false, 'reason' => "Unknown Player id");
    }  
}
if($p_id == null){
    $response =  array('response' => false, 'reason' => "Player id  not specified");
} 


echo json_encode($response);
?>