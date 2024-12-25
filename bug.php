```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } elseif (is_string($value) && strlen($value) > 10) {
      $data[$key] = substr($value, 0, 10); // Truncate long strings
    }
  }
  return $data;
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