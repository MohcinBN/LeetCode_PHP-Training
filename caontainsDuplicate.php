class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $duplacated = [];
        foreach($nums as $value) {
            if(++$duplacated[$value] > 1) {
                return true;
            }
        }
        return false;
    }
}
