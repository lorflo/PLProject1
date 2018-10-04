<?php

$pid = uniqid();
$game_file = 'game.txt';
$handle = fopen($game_file, 'w');
fwrite($handle, $pid);

$response = null; 
$strat = null;

if(isset($_GET['strategy']))
{
    $strat = $_GET['strategy'];
    switch ($strat)
    {
        case "Smart": 
            $response =  array('response' => true, 'pid' => $pid);
        break;
        case"Random":
            $response = array('response' => true, 'pid' => $pid);
            break;
        default:
            $response =  array('response' => false, 'reason' => "unkown strategy");
            break;
            
    }
}
else
{
    $response =  array('response' => false, 'reason' => "Strategy not specified");
}   


echo json_encode($response);

?>