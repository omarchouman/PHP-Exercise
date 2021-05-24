<?php 

function palindrome($string) {
  $stringLower = strtolower($string); 
  $reversedString = strrev($stringLower);

  if ($reversedString === $string) {
    echo "True: ";
    return "$string is a palindrome";
  } else {
    echo "False: ";
    return "$string is not a palindrome";
  }
}

?>





<html>
  <head>
    <title>Palindrome Checker</title>
  </head>
  <body>
    <!--Function Testing For Both Cases-->
    <?php echo palindrome("mom"); ?> 
    <br>
    <?php echo palindrome("car"); ?>
  </body>
</html>