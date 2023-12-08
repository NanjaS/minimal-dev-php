<?php

/**
 * --------------------------------------------------------------
 * Programming exercises arrays and loops
 * --------------------------------------------------------------
 *
 * Task: solve all tasks by using one of the four loop types. The same loop type can be used for all functions.
 *
 * Execute file: "php -f array_exercises.php"
 */


// Test data for exercises
$testA = [4, 6, 0, 3, 7, 10, 4, 5, 6, 9, 3, 8, 9, 0, 3, 5, 3, 4, 9, 4];
$testB = [3, 14, 15, 13, 5, 3, 14, 8, 12, 11, 13, 14, 15, 2, 3, 15, 8, 1, 12, 0, 6, 9, 11, 0, 14, 5, 2, 2, 15, 13];
$testC = [2,3,4,5,6,7,8];

/**
 * ---------------------------------------
 * Examples functions with different loops
 * ---------------------------------------
 */
function echoElements(array $input)
{
    $max = count($input);
    // --------------------
    // Common loops
    // --------------------
    // Desc: These loops will terminate and won't loop forever.

    // for loop
    echo "for loop", '<br />';
    for ($i = 0; $i < $max; $i++) {
        echo $input[$i];
    }
    echo PHP_EOL;
    echo '<br />';
    // foreach loop
    echo '<br />', "foreach loop", '<br />';
    foreach ($input as $item) {
        echo $item;
    }
    echo PHP_EOL;
    echo '<br />';

    // --------------------
    // Less common loops
    // --------------------
    // Desc: These loops can loop forever, if the condition and increment are set wrong.

    // while loop
    echo '<br />', "while loop", '<br />';
    $i = 0;
    while ($i < $max) {
        echo $input[$i];
        $i++; // increment i, otherwise it will loop forever
    }
    echo PHP_EOL;
    echo '<br />';

    // do while
    echo '<br />', "do while", '<br />';
    $j = 0;
    do {
        echo $input[$j];
        $j++; // increment i, otherwise it will loop forever
    } while ($j < $max);
    echo PHP_EOL;
}

// Output/Echo with loops
echoElements($testB);

// Output/echo with created helper function
println($testB);
echo '<br />';


/**
 * -------------------------------
 * Exercises / Tasks
 * -------------------------------
 */

/**
 * Find the lowest number in array
 *
 * @param array $arrayA
 * @return int
 */
echo '<br />', "Exercise 1: Find the lowest number in array", '<br />';
function findLowest(array $testA): int
{
    // @Todo Code here and update return type
    $lowestValue = PHP_INT_MAX;

    foreach ($testA as $value) {
        if ($value < $lowestValue) {
            $lowestValue = $value;
        }
    }
    return $lowestValue;
}
$lowestValue = findLowest($testA);

echo "The lowest number is: ", $lowestValue;
echo '<br />';


//$result1 = findLowest($testA);
//$result2 = findLowest($testB);
//println($result1);
//println($result2);
// shorter method
//println(findLowest($testA));


/**
 * Find the highest number in array
 *
 * @param array $arrayA
 * @return int
 */
echo '<br />', "Exercise 2: Find the highest number in array", '<br />';
function findHighest(array $testA): int
{
    // @Todo Code here and update return type
    $highestValue = PHP_INT_MIN;
    foreach ($testA as $value) {
        if ($value > $highestValue) {
            $highestValue = $value;
        }
    }
    return $highestValue;
}
echo "The highest number is: ";
println(findHighest($testA));
echo "& ";
println(findHighest($testB));
echo '<br />';


/**
 * Find combine two arrays and return the combined result array
 *
 * @param array $arrayA
 * @param array $arrayB
 * @return array
 */
echo '<br />', "Exercise 3: Find combine two arrays and return the combined result array", '<br />';
function combineArrays(array $testA, array $testB): array
{
    // @Todo Code here and update return type
    $result = [];

    foreach ($testA as $key => $value) {
        $result[$key] = $value;
    }
    foreach ($testB as $key => $value) {
        if (array_key_exists($key, $result)) {
            $result[$key . '_2'] = $value;
        } else {
            $result[$key] = $value;
        }
    }
    return $result;
}
$result = combineArrays($testA, $testB);
print_r($result);
echo '<br />';

/**
 * Find combine two arrays and count elements number in array
 *
 * @param array $arrayA
 * @param array $arrayB
 * @return int
 */
echo '<br />', "Exercise 4: Find combine two arrays and count elements number in array", '<br />';
function combineArraysAndCountElements(array $testA, array $testB): int
{
    // @Todo Code here and update return type
    $combinedArray = combineArrays($testA, $testB);
    function countElement($combinedArray) {
        $count = 0;

        foreach ($combinedArray as $element) {
            $count++;
        }
        return $count;
    }
    return countElement($combinedArray);
}
$totalElement = combineArraysAndCountElements($testA, $testB);
echo "The number of elements in the combined array is: " . $totalElement;
echo '<br />';

/**
 * Find combine two arrays and sum all values
 *
 * @param array $arrayA
 * @param array $arrayB
 * @return int
 */
echo '<br />', "Exercise 5: Find combine two arrays and sum all values", '<br />';
function combineArraysAndSum(array $testA, array $testB): int
{
    // @Todo Code here and update return type
    $combinedArrays = combineArrays($testA, $testB);
    function sum($combinedArrays) {
        $sum = 0;

        foreach ($combinedArrays as $value) {
            $sum += $value;
        }
        return $sum;
    }
    return sum($combinedArrays);
}
$totalSum = combineArraysAndSum($testA, $testB);
echo "The result is: " . $totalSum;
echo '<br />';

/**
 * Find all even numbers
 *
 * @param array $arrayA
 * @return int
 */
echo '<br />', "Exercise 6: Find all even numbers", '<br />';
function findAllEvenNumbers(array $testA): array
{
    // @Todo Code here and update return type
    $evenNumbers = [];

    foreach ($testA as $array) {
        if ($array % 2 === 0) {
            $evenNumbers[] = $array;
        }
    }
    return $evenNumbers;
}
$evenNumbers = findAllEvenNumbers($testA);
echo "Even numbers in the array: " . implode(', ', $evenNumbers);
echo '<br />';

/**
 * Find all odd numbers
 *
 * @param array $arrayA
 * @return int
 */
echo '<br />', "Exercise 7: Find all odd numbers", '<br />';
function findAllOddNumbers(array $testA): array
{
    // @Todo Code here and update return type
    $oddNumbers = [];
    foreach ($testA as $array) {
        if ($array % 2 != 0) {
            $oddNumbers[] = $array;
        }
    }
    return $oddNumbers;
}
$oddNumbers = findAllOddNumbers($testA);
echo "Odd numbers in the array: " . implode(', ', $oddNumbers);
echo '<br />';

//-------------------------------------
// Find the errors and correct them
//-------------------------------------

/**
 * This function has a small error. Find it and fix it.
 * Runtime Message: "PHP Notice:  Undefined offset: 30 in ...."
 *
 * Hint: use the debugger
 */
echo '<br />', "Exercise 8: Find the errors and correct them";
function findTheErrorRemoveTheNotice(array $input)
{
    echo '<br />';
    $max = count($input);
    // while loop
    $i = 0;
    while ($i < $max) {
        echo $input[$i];
        $i++; // increment i, otherwise it will loop forever
    }
    echo '<br />';
    echo PHP_EOL;

    // do while
    $i = 0;
    do {
        echo $input[$i];
        $i++; // increment i, otherwise it will loop forever
    } while ($i < $max);
    echo PHP_EOL;
}
findTheErrorRemoveTheNotice($testB);
echo '<br />';

//-------------------------------------
// Advanced - Sorting
//-------------------------------------

/**
 * Find combine two arrays and order values ascending
 *
 * @param array $arrayA
 * @param array $arrayB
 * @return array
 */
echo '<br />', "Exercise 9: Find combine two arrays and order values ascending", '<br />';
function combineArraysAndSortAsc(array $testA, array $testB): array
{
    // @Todo Code here and update return type
//    $combinedArrays = combineArrays($testA, $testB);
    $combinedArrays = array_merge($testA, $testB);
    $n = count($combinedArrays);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($combinedArrays[$j] > $combinedArrays[$j + 1]) {
                $temp = $combinedArrays[$j];
                $combinedArrays[$j] = $combinedArrays[$j + 1];
                $combinedArrays[$j + 1] = $temp;
            }
        }
    }
    return $combinedArrays;
}
$sortedCombinedArray = combineArraysAndSortAsc($testA, $testB);
foreach ($sortedCombinedArray as $value) {
    echo $value . PHP_EOL;
}
echo '<br />';

/**
 * Find combine two arrays and order values descending
 *
 * @param array $arrayA
 * @param array $arrayB
 * @return array
 */
echo '<br />', "Exercise 10: Find combine two arrays and order values descending", '<br />';
function combineArraysAndSortDesc(array $testA, array $testB): array
{
    // @Todo Code here and update return type
    $combinedArrays = array_merge($testA, $testB);
    $length = count($combinedArrays);

    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($combinedArrays[$j] < $combinedArrays[$j + 1]) {
                $temp = $combinedArrays[$j];
                $combinedArrays[$j] = $combinedArrays[$j + 1];
                $combinedArrays[$j + 1] = $temp;
            }
        }
    }
    return $combinedArrays;
}

$rsortedCombinedArray = combineArraysAndSortDesc($testA, $testB);
foreach ($rsortedCombinedArray as $value) {
    echo $value . PHP_EOL;
}
echo '<br />';

/**
 * Add a new number at beginning of the array
 *
 * @param array $arrayA
 * @param int $newNumber
 * @return array
 */
echo '<br />', "Exercise 11: Add a new number at beginning of the array", '<br />';
$arrayA = [2, 3, 4, 5, 6, 7, 8];
function addAsFirstElement(array $arrayA, int $newNumber): array
{
    // @Todo Code here and update return type
    $newArray = array($newNumber);

    foreach ($arrayA as $element) {
        $newArray[] = $element;
    }
    return $newArray;  // should return [1,2,3,4,5,6,7,8]
}
$newNumber = 1;
$newArray = addAsFirstElement($arrayA, $newNumber);
print_r($newArray);
echo '<br />';

/**
 * Add a new number at the end of the array
 *
 * @param array $arrayA
 * @param array $arrayB
 * @return array
 */
echo '<br />', "Exercise 12: Add a new number at the end of the array", '<br />';
function addAsLastElement(array $arrayA, int $newNumber): array
{
    // @Todo Code here and update return type
    foreach (array($newNumber) as $value) {
        $arrayA[] = $value;
    }
    return $arrayA;  // should { return [2,3,4,5,6,7,8,9]
}
$newArray2 = addAsLastElement($arrayA, 9);
print_r($newArray2);
echo '<br />';

/**
 * Add a new number at the given position and reorder the other numbers
 *
 * @param array $arrayA
 * @param int $newNumber
 * @param int $position
 * @return array
 */
echo '<br />', "Exercise 13: Add a new number at the given position and reorder the other numbers", '<br />';
function addElementAtPosition(array $arrayA, int $newNumber, int $position): array
{
    // @Todo Code here and update return type
    $resultArray = array();
    foreach ($arrayA as $key => $value) {
        if ($key == $position) {
            $resultArray[] = $newNumber;
        }
        $resultArray[] = $value;
    }
    if ($position >= count($arrayA)) {
        $resultArray[] = $newNumber;
    }
    return $resultArray; // should return [2,3,4,100,5,6,7,8,9]  -> note that array index start with index "0".
}
$newArray3 = addElementAtPosition($arrayA, 100, 3);
print_r($newArray3);
echo '<br />';

/**
 * Replace a element/value at a given position
 *
 * @param array $arrayA
 * @param int $newNumber
 * @param int $position
 * @return array
 */
echo '<br />', "Exercise 14: Replace a element/value at a given position", '<br />';
function replaceElementAtPosition(array $testA, int $newNumber, int $position): array
{
    // @Todo Code here and update return type
    if (array_key_exists($position, $testA)) {
        $testA[$position] = $newNumber;
        return $testA;

    } else {
        echo "Invalid Position!";
        return $testA;
    }
    // should return [4, 6, 0, 3, 7, 100, 4, 5, 6, 9, 3, 8, 9, 0, 3, 5, 3, 4, 9, 4]
}
$result = replaceElementAtPosition($testA, 100, 5);
print_r($result);
echo '<br />';

//println(replaceElementAtPosition($testA, 100, 6));


/**
 * Replace all occurrences of a value with a new value
 *
 * @param array $arrayA
 * @param int $searchValue
 * @param int $replaceValue
 * @return array
 */
echo '<br />', "Exercise 15: Replace all occurrences of a value with a new value", '<br />';
function replaceAllWith(array &$testA, int $searchValue, int $replaceValue): array
{
    // @Todo Code here and update return type
    foreach ($testA as &$value) {
        if ($value === $searchValue) {
            $value = $replaceValue;
        }
    }
    return $testA;
}
replaceAllWith($testA, 4, 100);
print_r($testA);
echo '<br />';

//println(replaceAllWith($testA, 4, 100));


//-------------------------------------
// Helper methods
//-------------------------------------
function println($input): void
{
    if (is_array($input)) {
        echo implode(', ', $input) . PHP_EOL;
        return;
    }
    echo $input . PHP_EOL;
}
