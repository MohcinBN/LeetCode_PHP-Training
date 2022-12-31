    function sortedSquares($nums) {
        
        $array_count = count($nums);
        $response = [];
        
        // loop over the array and replace every elements with it's square
        for($i=0; $i < $array_count; $i++) {
            $response[$i] = $nums[$i] * $nums[$i];
        }
        
        sort($response);
        return $response;
        
    }
