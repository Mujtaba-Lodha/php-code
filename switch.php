<?php 

 $membership = "platinum";
 $orderAmount = 2000;

 if($orderAmount >= 1000){

    switch($membership){

        case "platinum" :
            echo "You have 50% discount";
            break;
        case "gold" :
            echo "You have 30% discount";
            break;
        case "silver" :
            echo "You have 10% discount";
            break;
        default:
            echo "You have no membership but you have 5% discount";
            break;
    }
 } else {
     echo "You order amount is less than 1000 so you have no discount";
 }



?>