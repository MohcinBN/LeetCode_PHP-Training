class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
    // create an empty array to stock the value of the main array into it 
    $duplicat_array = [];
        
        // loop over the nums array as key value array
        foreach($nums as $key => $value) {
            
            // check if this array values bigger is more than one in the same array. 
            if(++$duplicat_array[$value] > 1) {
                
                // remove the duplicated keys
                unset($nums[$key]);
            }
        }
    }
}
