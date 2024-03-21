<?php
function findDuplicates($arr) {
    $duplicates = array();
    $hashMap = array();

    foreach ($arr as $value) {
        if (isset($hashMap[$value])) {
            if ($hashMap[$value] == 1) {
                $duplicates[] = $value;
            }
            $hashMap[$value]++;
        } else {
            $hashMap[$value] = 1;
        }
    }

    return $duplicates;
}

// Example usage:
$array = array(1, 2, 3, 4, 2, 5, 3, 6, 6,7,9,7,1);
$duplicates = findDuplicates($array);
print_r($duplicates);

?>