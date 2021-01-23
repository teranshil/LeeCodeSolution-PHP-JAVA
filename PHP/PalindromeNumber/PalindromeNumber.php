<?php
// First Solution
//    function isPalindrome($number)
//    {
//        if ($number < 0)
//            return false;
//
//        $number = (string)$number;
//        $length = strlen($number);
//        for ($index = 0; $index <= floor(($length - 1) / 2); $index++) {
//            if ($number[$index] !== $number[$length - $index - 1])
//                return false;
//        }
//        return true;
//    }
// Second Solution
function isPalindrome($number)
{

    if($number < 0 || ($number % 10 == 0 && $number !== 0))
        return false;

    $right = 0;
    while($number > $right) {
        $right = ($right * 10) + $number % 10;
        $number = intval($number / 10);
    }

    return ($right === $number || $number === intval($right / 10));


}
echo isPalindrome(3212123) ? 'true' : 'false';