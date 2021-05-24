<?php 

$batata = array(
            "musicals" => array("Oklahoma", "The Music Man", "South Pacific"),
            "dramas" => array("Lawrence of Arabia", "To Kill a Mockingbird", "Casablanca"),
            "mysteries" => array("The Maltese Falcon", "Rear Window", "North by Northwest")
 );


 foreach($batata as $key => $values) {
   echo strtoupper($key);
   echo "<br>";
   foreach($values as $i => $value) {
     echo "----> $i = $value";
     echo "<br>";
   }
 }

 //Sorting The Array In Descending Order By Genre

 krsort($batata);

 echo "<br>"; 

 echo "<h3>Sorted Array</h3>";

 echo "<br>";

 foreach($batata as $key => $values) {
   echo strtoupper($key);
   echo "<br>";
   foreach($values as $i => $value) {
     echo "----> $i = $value";
     echo "<br>";
   }
 }

?>
