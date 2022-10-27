    function thirdMax($nums) {
        
        //remove duplicated numbers on the array
        $nums = array_unique($nums);
        
        $count = count($nums);
        
        if($count < 3) {
            return max($nums);
        } else {
            // sort array in descending order
            rsort($nums);
            
            // so we just need to return the thirt element on the array
            return $nums[2];
        }
        
    }
