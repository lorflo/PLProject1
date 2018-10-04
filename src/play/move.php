<?php
include 'board.php';


$move = null;
$ack_move = null;
$response_move;

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
else
{
    $ack_move = array('slot' => $slot, 'isWin'=>$isWin,'isDraw'=>$isDraw,'row'=> $row);
}


?>