<?php
function longestPalindrome($string) {

    $max = 0; $maxStr = "";
    for ($outer = 0; $outer < strlen($string); $outer++) {

        $left = $outer; $right = $outer;
        // odd numbers
        while($left >= 0 && $right < strlen($string)
                         && $string[$left] === $string[$right]) {
              if(($right - $left + 1) > $max) {
                  $max = ($right - $left + 1);
                  $maxStr = substr($string, $left, $max);
              }

              $left -= 1;
              $right += 1;
        }

        $left = $outer; $right = $outer + 1;
        while($left >= 0 && $right < strlen($string)
            && $string[$left] === $string[$right]) {
            if(($right - $left + 1) > $max) {
                $max = ($right - $left + 1);
                $maxStr = substr($string, $left, $max);
            }

            $left -= 1;
            $right += 1;
        }
    }
    return $maxStr;

}

echo longestPalindrome('cbbd');