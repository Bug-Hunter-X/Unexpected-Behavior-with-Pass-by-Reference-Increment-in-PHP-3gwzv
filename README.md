# PHP Pass-by-Reference Increment Bug

This repository demonstrates an uncommon bug in PHP related to incrementing values passed by reference.  PHP's dynamic typing, while flexible, can lead to unexpected results when not carefully managed.  This example shows how attempting to increment an array element via pass-by-reference results in an error rather than the expected behavior.

## Bug Description
The core issue is the implicit type coercion in PHP.  The `increment` function expects a numeric value. When an array element is passed, the function tries to increment it, but it treats the array element as a string, causing an error.

## Solution
The solution involves type checking and handling before attempting to increment the value, adding robustness to the function. 
