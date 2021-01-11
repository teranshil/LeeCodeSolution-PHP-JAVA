<?php

//function lengthOfLongestSubstring($string)
//{
//
//    $max = 1;
//
//    if($string === "")
//        return 0;
//
//    for ($outer = 0; $outer < strlen($string) - 1; $outer++) {
//
//        $tempArray = [];
//        $tempArray[$string[$outer]] = $string[$outer];
//        $length = 1;
//
//        for ($inner = $outer + 1; $inner < strlen($string); $inner++) {
//            if (!isset($tempArray[$string[$inner]])) {
//                $tempArray[$string[$inner]] = $string[$inner];
//                $length += 1;
//            } else break;
//        }
//
//        $max = max($max,  $inner -  $outer);
//
//    }
//
//    return $max;
//}

echo lengthOfLongestSubstring("abcdabcd");

// moving window
function lengthOfLongestSubstring($string)
{

    if ($string === "")
        return 0;

    $outer = 0;
    $inner = 0;
    $max = 1;
    $size = strlen($string);
    $unique = [];

    while ($inner < $size && $outer < $size) {

        if (!isset($unique[$string[$inner]])) {
            $unique[$string[$inner]] = $string[$inner];
            $max = max($max, ($inner - $outer) + 1);
            $inner += 1;
        } else {
            array_shift($unique);
            $outer += 1;
        }
    }

    return $max;
}