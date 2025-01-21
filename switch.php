<?php 


 /**
  *Switch Case ek control structure hai jo multiple conditions ko efficiently handle karne ke liye use hota hai. Agar aapke paas multiple conditions ho, to if-else ke bajaye switch ka use karna fast aur readable hota hai.
  */
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