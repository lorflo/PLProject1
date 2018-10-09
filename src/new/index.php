<?php

$pid = uniqid();
$filename = 'gameState';

$gameFileName = '../writable/'.$filename.".json";
$newFileContent = json_encode($pid);

file_put_contents($gameFileName, $newFileContent);//created a php file in writable with pid in it

$board = array();

for($i = 0;$i < 7; $i++)
{
    for($j = 0;$j < 6; $j++)
    {
        $board[$i][$j] = '';
    }
}

$boardname = 'boardState';
$boardFileName = '../writable/'.$boardname.".json";
$newFileContent = json_encode($board);
file_put_contents($boardFileName, $newFileContent);// create a new board
 

$response; 
$strat;

if (isset($_GET['strategy']))
{
    $strat = $_GET['strategy'];
    $filename = 'stratState';
    $gameFileName = '../writable/'.$filename.".json";
    $newFileContent = json_encode($strat);
    file_put_contents($gameFileName, $newFileContent);//created a file in writable to store the stratgey
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