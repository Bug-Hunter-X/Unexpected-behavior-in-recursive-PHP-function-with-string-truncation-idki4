```php
function processData(array $data): array {
  $newData = [];
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $newData[$key] = processData($value); // Recursive call
    } elseif (is_string($value) && strlen($value) > 10) {
      $newData[$key] = substr($value, 0, 10);
    } else {
      $newData[$key] = $value; // Copy other values
    }
  }
  return $newData;
}

$data = [
  'name' => 'John Doe',
  'address' => [
    'street' => '123 Main Street, This is a very long street address',
    'city' => 'Anytown',
  ],
  'phone' => '555-1234',
];

$processedData = processData($data);
print_r($processedData);
```