<<<<<<< HEAD
<?php
=======
<?php

$pid = uniqid();
$game_file = 'game.txt';
$handle = fopen($game_file, 'w');
fwrite($handle, $pid);

$response = null; 
$strat = null;

>>>>>>> branch 'master' of https://github.com/lorflo/PLProject1.git
if (isset($_GET['strategy'])){
    $strat = $_GET['strategy'];
    switch ($strat) {
        case "Smart":
            $response = array('response' => true, 'pid' => $pid);
        break;
        case "Random":
            $response = array('response' => true, 'pid' => $pid);
        break;
        default:
            $response = array('response' => false, 'reason' => "Unknown strategy");
        break;
    }
}
else
    $response = array('response' => false, 'reason' => "Strategy not specified");

echo json_encode($response);

?>