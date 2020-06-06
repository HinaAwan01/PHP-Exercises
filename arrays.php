<?php


/*******************          Author: HINA SHAFIQUE AWAN              ************************/



/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food= [ ];  //declare array

$food=["garlic-bread", "biryani", "lettuce", "ice-cream"];  //assign values to the array

/*
Print every array element in a new line.
*/

echo  $food[0];       //array element first
echo '<br>';

echo  $food[1];       //array element second
echo '<br>';

echo  $food[2];      //array element third
echo '<br>';

echo  $food[3];      //array element forth
echo '<br>';

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/


echo '<ul>';               //start of un-ordered list

echo '<li>';               //start of first list item

echo $food[0];             //array element first

echo  '</li>';             //end of first list item


echo '<li>';               //start of second list item

echo $food[1];            //array element second 

echo  '</li>';            //end of second list item


echo '<li>';              //start of third list item

echo $food[2];            //array element third  

echo  '</li>';            //end of third list item
 

echo '<li>';              //start of forth list item

echo $food[3];            //array element forth  

echo  '</li>';            //end of forth list item

 
echo '</ul>';             //end of un-ordered list







// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/


$food_assoc=[ ];

$food_assoc=[ 

        "garlic-bread"      =>  "starter",
        "biryani"  =>  "main-course",
        "lettuce"        =>  "salad",
        "dessert"      =>  "ice-cream"

];

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

foreach($food_assoc as $key => $val){
    
    
    echo $val . " | " . $key . "<br>";
}







// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/


$food_assoc = [
  "garlic-bread" => [
    "type" => "starter",
    "origin" => "Italy"
  ],
  "biryani" => [
    "type" => "main course",
    "origin" => "India"
  ],
    
  "lettuce" => [
    "type" => "salad",
    "origin" => "India"
  ],
    
  "ice-cream" => [
    "type" => "main course",
    "origin" => "Japan"
  ]
];


/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/



foreach($food_assoc as $key => $val){
    
    echo $key;
    
    
    foreach($val as $k => $v){    
        
       
        echo " | $v";
        
    }
        
    echo "<br>";  
    
    
}



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/


echo "<table border=1 width=30% align=center>";


echo "<tr><th>food</th><th>type</th><th>origin</th></tr>";

foreach($food_assoc as $key => $val){
    
    echo "<tr>";
    echo "<td align=center>$key</td>";
    
    
    foreach($val as $key1 => $val1){    
        
       
        echo "<td align=center>$val1</td>";
        
    }
        
    echo "</tr>";
    
    
}



echo "</table>";







?>