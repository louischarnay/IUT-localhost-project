<?php
  
    function getRecommandation(int $index){
        if (($open = fopen("recommendation.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($open, 1000, ",")) !== FALSE && $data[0]<=$index) {
                if ($data[0]==$index){
                  return $data;
                }
            }
            fclose($open);
            return $data;
        }
    };