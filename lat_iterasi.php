<?php
$i = 1; // Initialize counter
while ($i < 30) { // Check condition
  echo $i; // Execute code
  $i = $i + 1; // Increment counter
}

for($i=1; $i<20; $i++){
  echo $i."<br>";
}

$members = array("Peter", "Ben", "Joe");

foreach ($members as $key => $value) {
  echo "$key : $value <br>";
}

for($i=0;$i<=1;$i++){
  echo $members[$i]."<br>";
}

?>