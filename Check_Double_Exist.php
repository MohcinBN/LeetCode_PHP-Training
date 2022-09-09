//  Check If N and Its Double Exist

class Solution {
    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function checkIfExist($arr) {

        $n = count($arr);

        // loop over the array
        for($i = 0; $i < $n; $i++) {
            for($j = 0; $j < $n; $j++) {    
                // check if element of i and j not the same and N*2 = M
                if ($i != $j && $arr[$i] * 2 == $arr[$j]) {
                    return true;
                }
            }
        }
        return false;
    }
}
