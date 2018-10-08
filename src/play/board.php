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
        if($board_[$i][0] != null)
        {
            $draw = true;
        }
        else
        {
            $draw = false; ;
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
?>