```php
function calculateSum(array $numbers): int {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) { // Check if the element is numeric
      $sum += (int)$number; // Cast to integer for safe addition
    } else {
      // Handle non-numeric values appropriately (e.g., throw an exception, skip, use default value)
      trigger_error('Non-numeric value encountered in array');
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; // Now handles the string '4' correctly
```