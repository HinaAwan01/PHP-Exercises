<?php


/*
+---+
| 1 |
+---+
Declare variable named redLight and 
assign it with the value true.
*/

$redLight=true;

/*
Use "if" statement to check if the red light is on,
if so, print "Stop the car!".
*/

if($redLight){
    
    echo "Stop the car!";
}


/*
If the red light is on, use ternary operator to print "Stop the car!" as a paragraph.
*/

echo ($redLight)? "<p>Stop the car!</p>" : "";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Reasign redLight with the value false.
*/

$redLight=false;

/*
Use if/else statement to check if the red light is on,
if so, print "Stop the car!", otherwise print "Are you sure that yellow light is not on?".
*/

if($redLight){
    
    echo "Stop the car!";
    
}
else{
    
    echo "Are you sure that yellow light is not on?";
    
}

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare variable named yellowLight and 
assign it with the value false.
*/

$yellowLight=false;

/*
Use if/else statement to check if the red or yellow light is on,
if so, print "Stop the car!", otherwise print "Are you sure that traffic lights are working at all?".
*/

if($redLight || $yellowLight){
    
    echo "Stop the car!";
    
    
}

else{
    
    echo "Are you sure that traffic lights are working at all?";
    
}



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Declare variable named greenLight and 
assign it with the value false.
*/

$greenLight=false;

/*
Use if/else-if/else statement.

Check if the red or yellow light is on, and the green light is off,
if so, print "Stop the car!".

Next, check if the red and yellow and green light is off,
In this case, print "Power outage!".

Next, check if the red and yellow light is off, and the green light is on.
In this case, print "Keep moving!";

Next, check if the red or yellow light is on, and the green light is on too.
In this case, print "Traffic lights are messed up!".

In any other case, print "Use the common sense and stay safe!".
*/

if(($redLight || $yellowLight) && ($greenLight)){    //first condition
    
    
    echo "Stop the car!";
    
}

else if($redLight==false && $yellowLight==false && $greenLight==false){     //second condition
    
    echo "Power outage!";
}


else if(($redLight==false && $yellowLight==false) && ($greenLight==true)){  //third condition
    
    echo "Keep moving!";
}

else if(($redLight==true || $yellowLight==true) &&($greenLight==true)){     //fourth condition
    
    echo "Traffic lights are messed up!";
}

else{                                                                       //default
    
    echo "Use the common sense and stay safe!";
    
}



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Handle the problem from the task 4 with switch-statement!
The referencial value will be true.
*/

switch(true){
        
    case ($redLight || $yellowLight) && ($greenLight):  //first case
       echo "Stop the car!";
       break;
        
    case ($redLight==false && $yellowLight==false && $greenLight==false):  // second case
       echo "Power outage!";
       break;  
        
    case (($redLight==false && $yellowLight==false) && ($greenLight==true)):  // third case
       echo "Keep moving!";
       break; 
    
    case (($redLight==true || $yellowLight==true) &&($greenLight==true)):  // fourth case
       echo "Traffic lights are messed up!";
       break;  
        
    default:
        
       echo "Use the common sense and stay safe!";                  //default case
        
}




?>
