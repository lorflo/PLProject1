    <?php
    include 'move.php';
    ini_set("include_path", "new");
    
    $response = array('response' => true, 'ack_move' => $ack_move);
    define($p_id , $_GET['pid']);
    
    echo file_get_contents('game.txt');
    
   if(!file_exists('game.txt'))
    {
        $response =  array('response' => false, 'reason' => "Player id  not specified");
    }
    else
    {
        if($p_id != file_get_contents('game.txt'))
        {
            $response = array('response' => false, 'reason' => "Unknown Player id");
            
        } 
    }
    
  /*  if (file_exists('game.txt'))
    {
        $$p_id = $_GET['pid'];
        switch ($p_id) 
        {
            case $p_id != file_get_contents('game.txt'):
                $response = array('response' => false, 'reason' => "Unknown Player id");
                break;
            default:
                $response =  array('response' => false, 'reason' => "Player id  not specified");
                break;
        }
    }
    */
  /*  if(file_exists('game.txt'))
       {     
         if($p_id != file_get_contents('game.txt'))
               {
                   $response = array('response' => false, 'reason' => "Unknown Player id");
                   
               } 
          if(p_id == null)//no Strategy
               {
                   $response =  array('response' => false, 'reason' => "Player id  not specified");
               }
       }
     */       
     
 /*  if($response_move != null)
    {
        echo jason_encode($response_move);
    }
    
    else
    {
        
    }
    */
    echo json_encode($response);
    ?>