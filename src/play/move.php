<?php
include_once 'board.php';
$slot_c;

$row_c = array();

$strategy = '../writable/stratState.json';
$strat =  file_get_contents($strategy);
$strats = json_decode($strat);



if($strats == 'Random')
{
$slot_c = random_strategy();

$ackState = '../writable/boardState.json';
$ack_state =  file_get_contents($ackState);
$ackState_ = json_decode($ack_state);

for ($row = 5; $row >= 0; $row--)
{
    if($ackState_[$slot_c][$row] != null )
    {
        
    }
    else
    {
        $rowNum = $row;
        break;
    }
}

$ackState_[$slot_c][$rowNum] = "RED";
$update = json_encode($ackState_);
file_put_contents('../writable/boardState.json', $update);

if(checkRow($slot_c,$rowNum,$color) || checkColumn($slot_c,$rowNum,$color) || checkDiagonalRow1($slot_c,$rowNum,$color) || checkDiagonalRow2($slot,$rowNum,$color)){
    $isWin_c = isWin();
}else
    $isWin_c = isWin();
$isDraw_c = isDraw();




}
else 
{
  $slot_c = smart_strategy() ;
}




?>