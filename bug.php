In PHP, a common yet easily overlooked error arises when dealing with array keys that are not strictly numeric.  Consider this scenario:

```php
<?php
$myArray = array('a' => 1, 'b' => 2, 'c' => 3);

foreach ($myArray as $key => $value) {
  echo "Key: " . $key . ", Value: " . $value . "\n";
}

//Attempting to access with an integer index
echo $myArray[0]; //Notice:  Undefined offset: 0 in ...
?>
```

While the `foreach` loop works correctly, directly accessing array elements using numerical indices will fail if the keys are strings.  PHP's loose typing often masks this issue until runtime.