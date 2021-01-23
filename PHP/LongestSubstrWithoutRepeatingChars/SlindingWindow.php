<?php

function lengthOfLongestSubstring($string)
{

    $max = 0;
    $starIndexMaxSeq = 0;

    for ($outer = 0; $outer < strlen($string) - 1; $outer++) {

        $tempArray = [$string[$outer]];
        $length = 1;

        for ($inner = $outer + 1; $inner < strlen($string); $inner++) {
            if (!in_array($string[$inner], $tempArray)) {
                $tempArray[] = $string[$inner];
                $length += 1;
            } else break;
        }

        if ($length > $max) {
            $max = $length;
            $starIndexMaxSeq = $outer;
        }

    }
    echo $starIndexMaxSeq;
}

lengthOfLongestSubstring("abcabcdb");