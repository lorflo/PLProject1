<?php
include 'board.php';

$move = null;
$ack_move = null;
$response_move = null;

if(isset($_GET['move'])){
    $move = $_GET['move'];
    // Not correct move
    if($move > 7 || $move < 0){
         $response_move =  array('response' => false, 'reason' => "invalid slot ".$move);
    }
    // No Strategy
    if($move == null){
    $response_move =  array('response' => false, 'reason' => "Move  not specified");
    }
    else
    {
        $ack_move = array('slot' => $slot, 'isWin'=>$isWin,'isDraw'=>$isDraw,'row'=> $row);
    }
}
?>