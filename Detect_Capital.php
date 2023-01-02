    function detectCapitalUse($word) {

        /* 
        if(ctype_upper($word)) {
            return true;
        } */

        return(ctype_upper($word) ? true : false );
    }
