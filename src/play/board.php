<?php

function isWin()
{
  return false;  
}

function isDraw()
{
    $boardState = '../writable/boardState.json';
    $board_state =  file_get_contents($boardState);
    $board= json_decode($board_state);
    for ($i = 0; $i < 7; $i++) 
    {
        for ($j = 0; $j < 6; $j++)
        {
            if($board[$i][$j] != null)
            {
                $draw = true;
            }
            else
            {
                $draw = false; ;
            }
        }
       
        
   }
    
    return $draw;
}
function random_strategy()
{
    $boardState = '../writable/boardState.json';
    $board_state =  file_get_contents($boardState);
    $board_ = json_decode($board_state);
    $col = rand(0,6);
    
    while(true)
    {
         if($board_[$col][0] != null)
         {
             $col = rand(0,6);   
         }
         else
         {
            return $col ;
         }
    }
  
}
function smart_strategy()
{
    return rand(0,6);
}

function checkRow($x,$y,$color){
    $x1 = $x;
    $y1 = $y;
    $x2 = $x;
    $y2 = $y;
    $counter = 0;
    
    // Calls the updated board
    $boardState = '../writable/boardState.json';
    $board_state =  file_get_contents($boardState);
    $board_ = json_decode($board_state);
    
    return checkRow($x1,$y1,$x2,$y2,$counter,$board_,$color);
}

function checkRow($x1,$y1,$x2,$y2, $counter, $board_state,$color){
    // Im still confused how the board is set up but if you need to change it up lol
    if(($board_state[$x1][$y1] == null || $board_state[$x1][$y1] != $color) &&
        ($board_state[$x2][$y2] == null || $board_state[$x2][$y2] != $color)){
        return false;
    }   
    elseif($counter >= 4){
        return true;
    }else{
        checkRow($x1,$y1 + 1,$x2,$y2 + 1, $counter + 1, $board_state,$color);
    }
}


function checkColumn($x,$y,$color){
    $x1 = $x;
    $y1 = $y;
    $x2 = $x;
    $y2 = $y;
    $counter = 0;
    
    // Calls the updated board
    $boardState = '../writable/boardState.json';
    $board_state =  file_get_contents($boardState);
    $board_ = json_decode($board_state);
    
    return checkColumn($x1,$y1,$x2,$y2,$counter,$board_,$color);
}

function checkColumn($x1,$y1,$x2,$y2, $counter, $board_state,$color){
    // Im still confused how the board is set up but if you need to change it up lol
    if(($board_state[$x1][$y1] == null || $board_state[$x1][$y1] != $color) &&
        ($board_state[$x2][$y2] == null || $board_state[$x2][$y2] != $color)){
            return false;
    }
    elseif($counter >= 4){
        return true;
    }else{
        checkColumn($x1 + 1,$y1,$x2 + 1,$y2, $counter + 1, $board_state, $color);
    }
}

function checkDiagonalRow1($x,$y,$color){
    $x1 = $x;
    $y1 = $y;
    $x2 = $x;
    $y2 = $y;
    $counter = 0;
    
    // Calls the updated board
    $boardState = '../writable/boardState.json';
    $board_state =  file_get_contents($boardState);
    $board_ = json_decode($board_state);
    
    return checkDiagonalRow1($x1,$y1,$x2,$y2,$counter,$board_,$color);
}

function checkDiagonalRow1($x1,$y1,$x2,$y2, $counter, $board_state,$color){
    // Im still confused how the board is set up but if you need to change it up lol
    if(($board_state[$x1][$y1] == null || $board_state[$x1][$y1] != $color) &&
        ($board_state[$x2][$y2] == null || $board_state[$x2][$y2] != $color)){
            return false;
    }
    elseif($counter >= 4){
        return true;
    }else{
        checkDiagonalRow1($x1 + 1,$y1 + 1,$x2 - 1,$y2 - 1, $counter + 1, $board_state,$color);
    }
}

function checkDiagonalRow2($x,$y,$color){
    $x1 = $x;
    $y1 = $y;
    $x2 = $x;
    $y2 = $y;
    $counter = 0;
    
    // Calls the updated board
    $boardState = '../writable/boardState.json';
    $board_state =  file_get_contents($boardState);
    $board_ = json_decode($board_state);
    
    return checkDiagonalRow2($x1,$y1,$x2,$y2,$counter,$board_,$color);
}

function checkDiagonalRow2($x1,$y1,$x2,$y2, $counter, $board_state,$color){
    // Im still confused how the board is set up but if you need to change it up lol
    if($x1 ){
        
    }elseif(($board_state[$x1][$y1] == null || $board_state[$x1][$y1] != $color) &&
        ($board_state[$x2][$y2] == null || $board_state[$x2][$y2] != $color)){
            return false;
    }elseif($counter >= 4){
        return true;
    }else{
        checkDiagonalRow2($x1 - 1,$y1 + 1,$x2 + 1,$y2 - 1, $counter + 1, $board_state,$color);
    }
}

?>