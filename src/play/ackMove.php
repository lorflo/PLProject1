<?php
include 'board.php';

$move = null;//url tag
$ack_move = null;//players move
$response_move = null;//checking if a move was made
$isWin = isWin();
$isDraw = isDraw();
$row = array();

if(isset($_GET['move']))
{
    $move = $_GET['move'];
    // Not correct move
    if($move > 6 || $move < 0)
    {
        $response_move =  array('response' => false, 'reason' => "invalid slot ".$move);
    }
    // No Strategy
    else
    {
        $slot = $move;
        $ack_move = array('slot' => $slot, 'isWin'=>$isWin,'isDraw'=>$isDraw,'row'=> $row);
    }
}
else
{
    $response_move =  array('response' => false, 'reason' => "Move  not specified");
}
?>