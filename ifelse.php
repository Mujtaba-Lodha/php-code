<?php 
 

//  declare(strict_types=1); // Strict type mode enabled
 
 $amount = 3000; // User ke order ka amount
 $membership = "Silver"; // User ka membership level (Silver, Gold, Platinum)
 
 if ($amount >= 1000) {
     if ($membership === "Platinum") {
         echo "Aapko 30% discount milega!";
     } elseif ($membership === "Gold") {
         echo "Aapko 20% discount milega!";
     } elseif ($membership === "Silver") {
         echo "Aapko 10% discount milega!";
     } else {
         echo "Membership nahi hai, isliye aapko 5% discount milega.";
     }
 } else {
     echo "Aapka order amount ₹1000 se kam hai, isliye aapko koi discount nahi milega.";
 }

 




?>