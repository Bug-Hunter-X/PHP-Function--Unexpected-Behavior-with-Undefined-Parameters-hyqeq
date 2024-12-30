# PHP Function: Unexpected Behavior with Undefined Parameters

This repository demonstrates a common error in PHP functions: not explicitly handling undefined parameters.  The `foo` function attempts to add two numbers, but it doesn't check for `undefined` values, resulting in unexpected behavior or errors when the function receives undefined parameters.

The solution provided addresses this by checking for `undefined` values before performing the addition, ensuring the function behaves reliably.

## Bug

The original `foo` function lacks a check for undefined parameters, leading to potential issues.

## Solution

The updated function checks if parameters are undefined using `isset()`, handling the case gracefully and returning null if either a or b is undefined.  This prevents unexpected behavior or errors.