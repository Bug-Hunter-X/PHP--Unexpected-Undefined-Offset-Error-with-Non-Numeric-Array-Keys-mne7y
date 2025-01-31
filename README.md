# PHP: Unexpected Undefined Offset Error with Non-Numeric Array Keys

This repository demonstrates a common, subtle error in PHP related to accessing array elements using numerical indices when the array keys are strings.  The issue occurs when developers assume that arrays are always zero-indexed, even if the keys are strings.

## The Problem

PHP's loose typing can mask this issue.  While a `foreach` loop iterates correctly over associative arrays, using direct numerical indexing fails if the keys are not numeric.

## The Solution

The solution involves either using the string keys directly or converting the array to a numerically indexed array if required.