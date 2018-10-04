    <?php
    include 'move.php';
    
    $response = null;
    $p_id = null;
    
    if(file_exists('game.txt'))
       {
           $p_id =$_GET['pid'];
           
         if($p_id != file_get_contents('game.txt'))
               {
                   $response = array('response' => false, 'reason' => "Unknown Player id");
                   
               } 
               elseif(p_id == null)//no Strategy
               {
                   $response =  array('response' => false, 'reason' => "Player id  not specified");
               }
       }
            
     
    elseif($response_move != null)
    {
        echo jason_encode($response_move);
    }
    
    else
    {
        $response = array('response' => true, 'ack_move' => $ack_move);
    }
    
    echo json_encode($response);
    ?>