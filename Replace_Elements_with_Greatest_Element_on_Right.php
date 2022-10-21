    function replaceElements($arr) {
        
        $size = count($arr);
        
        // gretest element from right is every element -1
        $max_array_from_right = $arr[$size - 1];

        // The next greatest element for the rightmost element is always -1
        $arr[$size - 1] = -1;
     

        for($i = $size - 2; $i >= 0; $i--)
        {
            // create tem array to store element of i 
            $temp = $arr[$i];
            
            // put the max from array on this array
            $arr[$i] = $max_array_from_right;
            
            if($max_array_from_right < $temp) {
                $max_array_from_right = $temp;
            }
        }
        return $arr;
    }
