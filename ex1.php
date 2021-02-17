<?php

$user_input = 6;
$output = exercise_one($user_input);
echo "Above: " . $output['above'] . "<br>Below:" . $output['below'];

function exercise_one($input_number): array
{
    // Based on the wording of the exercise, I went with the assumption that the number inputted will not appear in the array.
    $test_array = [9, 48, 40, 22, 45, 24, 27, 5, 21, 1, 4, 24, 46, 2, 8, 20, 18, 23, 21, 42, 38, 8, 21, 39, 7];
    $above = count(
        array_filter($test_array, function ($result) use ($input_number) {
            return $result > $input_number;
        })
    );
    $below = count($test_array) - $above;
    return [
        'above' => $above,
        'below' => $below
    ];
}