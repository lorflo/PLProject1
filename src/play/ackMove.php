<?php
include 'board.php';

$move = null;//url tag
$ack_move = null;//players move
$response_move = null;//checking if a move was made

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
        $ackState = '../writable/boardState.json';
        $ack_state =  file_get_contents($ackState);
        $ackState_ = json_decode($ack_state);
      
           for ($rownum = 5; $rownum >= 0; $rownum--)
            {
                if($ackState_[$slot][$rownum] != null )
                {
                    
                }
                else 
                {
                    $rowNum = $rownum;
                    break;
                }
            }
            
        $ackState_[$slot][$rowNum] = "Blue";
        $update = json_encode($ackState_);
       // echo $update;
        file_put_contents('../writable/boardState.json', $update);
        $isWin = isWin();
        $isDraw = isDraw();
        $ack_move = array('slot' => $slot, 'isWin'=>$isWin,'isDraw'=>$isDraw,'row'=> $row);

        
        
    }
}
else
{
    $response_move =  array('response' => false, 'reason' => "Move  not specified");
}
?>