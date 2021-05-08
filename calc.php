<?php    

function _damageCalc() {                                          // declaring function
    
    $serialNr;  
    $damage;
    
        for($serialNr = 1; $serialNr < 101; $serialNr++){         // for loop starts                   
            if($serialNr % 3 == 0 && $serialNr % 5 == 0){         // if serialNr dividable with 3 AND 5   
                $damage = 'coating damage and lighning strike';   // setting var damage
            } elseif ($serialNr % 3 == 0){                        // if serialNR dividable with 3   
                $damage  = 'coating';                             // setting var  
            } elseif ($serialNr % 5 == 0) {                       // if serialNr dividable with 5  
                $damage = 'lightning strike';                     // setting var             
            } else {
                $damage = 'no';                                   // setting var if not dividable with either          
            }
            // echoing a list item with the actual serial nr and damage of each iteration
            echo "<li> Serial number: <span>$serialNr</span>,  $damage damage. </li>"; 
        }
    };                                                            // for loop ends
    
    _damageCalc();                                                // invoking function  
    
?>