    function twoSum($nums, $target) {
        $arrayLenght = count($nums);
        // need more explination before recording 
        for($i=0; $i <= $arrayLenght; $i++){
          
            for($j= $i + 1; $j <= $arrayLenght; $j++) {

                $sum = $nums[$i] + $nums[$j];
                if($sum === $target) {
                    return [$i, $j];
                }
            }

        }
        return [];
    }


