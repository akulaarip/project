<?php

// get total people
$totalPeople = $_REQUEST['totalPeople'];

// initialize cards
$cardArr = ['S-A','S-2','S-3','S-4','S-5','S-6','S-7','S-8','S-9','S-X','S-J','S-Q','S-K',
            'H-A','H-2','H-3','H-4','H-5','H-6','H-7','H-8','H-9','H-X','H-J','H-Q','H-K',
            'D-A','D-2','D-3','D-4','D-5','D-6','D-7','D-8','D-9','D-X','D-J','D-Q','D-K',
            'C-A','C-2','C-3','C-4','C-5','C-6','C-7','C-8','C-9','C-X','C-J','C-Q','C-K'];


// Initialize array to hold card information
for($i=0;$i<$totalPeople;$i++){
    $playerCard[$i] = [];
}

// while there is card available
while(count($cardArr) > 0){
    // shuffle card to make sure that the selection is random
    shuffle($cardArr);
    for($i=0;$i<$totalPeople;$i++){
        // if card count is not zero
        if(count($cardArr) > 0){
            // take out one card from all available card
            $cardGivenToPlayer = array_splice($cardArr,0,1)[0];

            // give the card to this player
            array_push($playerCard[$i],$cardGivenToPlayer);
        }
    }
}

print_r(json_encode($playerCard));

?>