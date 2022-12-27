    function findDisappearedNumbers($nums) {
        
        $disappeared = [];
        $count_of_nums = count($nums);
        
        for($i=1; $i < $count_of_nums + 1; $i++) {
            
            if(!in_array($i, $nums)) {
                $disappeared[] = $i;
            }
        }
        
        return $disappeared;

    }
