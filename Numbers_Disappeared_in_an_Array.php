    function findDisappearedNumbers($nums) {
        
       $arry_count = count($nums);

       $range = range(1, $arry_count);

       return array_diff($range , $nums);

    }
