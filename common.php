
    <?php
    function dump($array){  
        foreach ($array as $key => $value){
            echo sprintf("%s => %s <br>", $key, $value);
        }

    }
