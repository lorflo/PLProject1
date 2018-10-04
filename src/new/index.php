<?php
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