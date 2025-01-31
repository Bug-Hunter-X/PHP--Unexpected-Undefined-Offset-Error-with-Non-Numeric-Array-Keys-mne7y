The `foreach` loop is the recommended approach for iterating over associative arrays in PHP.  However, if you need to access elements by numerical index, you must first ensure the array is numerically indexed. Here's how to handle this:

```php
<?php
$myArray = array('a' => 1, 'b' => 2, 'c' => 3);

foreach ($myArray as $key => $value) {
  echo "Key: " . $key . ", Value: " . $value . "\n";
}

//Correct way to access elements using their string keys
echo $myArray['a']; // Output: 1
echo $myArray['b']; // Output: 2

//Convert to numerical array (if needed) - loses original keys
$numericalArray = array_values($myArray);
echo $numericalArray[0]; // Output: 1
?>
```

Using `array_values()` converts the associative array into a numerically indexed array, allowing for access with numerical indices.  However, note this loses the original string keys.