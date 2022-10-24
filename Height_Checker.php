    function heightChecker($heights) {
        
        // create a copy of the original array 
        $copy = $heights;
        // ascending sort of the copy
        $sorted_arr = sort($copy);
        
        $result = 0;
        
        for ($i = 0; $i < count($heights); $i++) {
            
            // check every element in the array is not equal the element of the copy array increment..
            if ($heights[$i] != $copy[$i]) {
                $result++;
            }
        }
        return $result;
    }
