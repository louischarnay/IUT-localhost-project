<?php

    function returnMovieName($id){
        $file = fopen("data/movies.csv", 'r');

        $line[] = fgetcsv($file, 1024);
        $i=0;

        while ($line[$i][0]!=$id)
        {
            $line[] = fgetcsv($file, 1024);
            $i++;
        }
        return stristr($line[$i][1], '(', true);
    }
