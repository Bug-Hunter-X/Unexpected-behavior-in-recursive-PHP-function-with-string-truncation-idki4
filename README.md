# PHP Recursive Function Bug

This repository demonstrates an uncommon bug in a recursive PHP function that processes nested arrays and truncates strings. The function shows unexpected behavior, which is difficult to track and debug.

## Bug Description

The `processData` function recursively processes a nested array. It truncates strings exceeding 10 characters. However, the recursive call and string truncation lead to unexpected changes in the original array that are not intended. This bug can be a potential source of errors in data processing scenarios, especially when dealing with nested structures.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output compared to the expected behavior.

## Solution

The solution involves creating a copy of the array before making changes, avoiding unintended side effects on the original structure. See the `bugSolution.php` file for a corrected version of the function. 
