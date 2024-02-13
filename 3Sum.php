<!-- 
     i != j,
     i != k,
     and j != k,
     and nums[i] + nums[j] + nums[k] == 0.
    read array 

    for loop in array loop in first i,  st = frist element len array - k 
    for loop in array loop in second j, st = i +1            
    for loop in array loop in third k,  st = j +1   lena array 
    chekc condition,
     
 -->


<?php

$arr = [-1,0,1,2,-1,-4];


function ans($arr)
{
    # code...
    $res = [];
    for ($i=0; $i < count($arr) ; $i++) {
        # code...

        for ($j=0; $j < count($arr); $j++) {
            # code...
            if ($i == $j) {
                continue;
            }
            for ($k=0; $k < count($arr); $k++) {
                # code...
                if ($i == $k && $k == $j &&
                ($arr[$i] + $arr[$j] + $arr[$k] != 0)) {
                    continue;
                }
                $po = [];
                array_push($po, [$arr[$i], $arr[$j], $arr[$k]]);
                array_push($res, $po);
            }
        }
    }
    return $res;
}
echo "<pre>";
$res = (array_unique(ans($arr)));
print_r($res);
