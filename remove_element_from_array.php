    function removeElement(&$nums, $val) {
        foreach($nums as $key => $value_of_the_array) {
            if($value_of_the_array == $val) {
                unset($nums[$key]);
            }
        }
        return count($nums);
    }
