```php
<?php
function increment(&$var) {
  if (is_numeric($var)) {
    $var++;
  } else {
    trigger_error('Cannot increment non-numeric value', E_USER_WARNING);
  }
}

$number = 10;
increment($number);
echo $number; // Outputs 11

$array = [1, 2, 3];
increment($array[0]); //Correctly increments the array element
echo $array[0]; // Outputs 2
?>
```