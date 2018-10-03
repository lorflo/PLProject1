<?php
  
$pid = uniqid();

$response = null; 
$strat = null;

if(isset($_GET['strategy']))
{
    $strat = $_GET['strategy'];
    if($strat == "Smart")
    {
        $response = array('response' => true, 'pid' => $pid);
    }
    elseif($strat == "Random")
    {
        $response =array('response' => true, 'pid' => $pid);
    }
    //for an unkown strategy
    else
    {
        $response = array('response' => false, 'reason' => "Unknown strategy");
    }
}
if($strat == null)//no Strategy
{
    $response =  array('response' => false, 'reason' => "Strategy not specified");
}   


echo json_encode($response);

?>