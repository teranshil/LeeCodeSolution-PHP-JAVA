<?php


function lengthOfLongestSubstring($string) {

    $unique = [];
    $removeIndex = 0; $max = 0;
    for($index = 0; $index < strlen($string); $index++) {

        $element = $string[$index];

        if(isset($unique[$element])) {

            $removeIndex =$unique[$element];

        }

        $max = max($max, ($index - $removeIndex) + 1);
        $unique[$element] =  $index + 1;
    }

    return $max;

}

echo lengthOfLongestSubstring('abacbd');