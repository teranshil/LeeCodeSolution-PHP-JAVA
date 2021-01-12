<?php
function findMedianSortedArrays(array $nums1, array $nums2) {

    $array = array_merge($nums1, $nums2);
    sort($array);
    $size = count($array);

    return $size % 2 !== 0 ? $array[floor($size / 2)]
                           : ($array[floor($size / 2)] + $array[floor($size / 2) - 1]) / 2.0;


}
echo findMedianSortedArrays([0, 1, 2, 3], [4, 5]);