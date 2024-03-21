<?php
function findDuplicates($arr) {
    $duplicates = array();
    $count = count($arr);
    
    for ($i = 0; $i < $count; $i++) {
        for ($j = $i + 1; $j < $count; $j++) {
            if ($arr[$i] == $arr[$j]) {
                $duplicates[] = $arr[$i];
                break; // Break to avoid adding the same duplicate multiple times
            }
        }
    }
    
    return $duplicates;
}

// Example usage:
$array = array(1, 2, 3, 4, 2, 5, 3, 6, 6);
$duplicates = findDuplicates($array);
print_r($duplicates);

?>