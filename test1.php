<?php

function returnMovieName($id){
    $file = fopen("ml-latest-small/movies.csv", 'r');

    $line[] = fgetcsv($file, 1024);
    $i=0;

    while ($line[$i][0]!=$id)
    {
        $line[] = fgetcsv($file, 1024);
        $i++;
    }
    return stristr($line[$i][1], '(', true);
}

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

$test=2;
echo returnMovieName($test);
echo averageNote($test);