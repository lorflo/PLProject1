<?php
$response_move = '';
$move = null;

if(isset($_GET['move']))
{
    $move = $_GET['move'];
    if($move > 7 || $move < 0)//not a correct slot
    {
        $response_move =  array('response' => false, 'reason' => "invalid slot ".$move);
    }
}
if($move == null)//no Strategy
{
    $response_move =  array('response' => false, 'reason' => "Move  not specified");
}
?>