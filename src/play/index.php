 
    <?php
    include 'ackMove.php';
    include 'move.php';
    $compare_pid = '../writable/gameState.json'; 
     $id =  file_get_contents($compare_pid);
     $i_d = json_decode($id);
     
     if($isWin == false && $isDraw == false)
     {
         $comp_move = array('slot'=> $slot_c, 'isWin'=>$isWin_c,'isDraw'=>$isDraw_c,'row'=> $row_c);
     }
     
    $response = json_encode(array('response' => true, 'ack_move' => $ack_move, 'move' => $comp_move));
    $p_id = $_GET['pid'];
    
    if($response_move != null)
    {
        $response = json_encode($response_move);
    }
    
    if($p_id == null)
    {
        $response =  json_encode(array('response' => false, 'reason' => "Player id  not specified"));
    }
    else
    {
        if($p_id != $i_d)
        {
            $response = json_encode(array('response' => false, 'reason' => "Unknown Player id"));
            
        } 
    }
    
    echo $response;
    
    ?>

