<?php
    function averageNote($id){
        $file = fopen("ratings.csv", 'r');

        $line[] = fgetcsv($file, 1024);
        $nb=0;
        $i=0;
        $average=0;

        while (!feof($file))
        {
            if($line[$i][1]==$id)
            {
                $average+=$line[$i][2];
                $nb++;
            }
            $line[] = fgetcsv($file, 1024);
            $i++;
        }

        return $average/$nb;
    }