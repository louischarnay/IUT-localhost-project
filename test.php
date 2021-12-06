<?php
    try
    {
        $data=new PDO('sqlite:' . __DIR__ . '/database.db');
        $data->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $Eception)
    {
        die(1);
        echo "<p>mort<p>";
    }

    function read($csv){
        $file = fopen($csv, 'r');
        while (!feof($file) ) {
            $line[] = fgetcsv($file, 1024);
        }
        fclose($file);
        return $line;
    }

    // Définir le chemin d'accès au fichier CSV
    $csv = 'ml-latest-small/movies.csv';
    $csv = read($csv);
    echo '<pre>';
    print_r($csv[0]);
    echo '</pre>';
    $data->exec("DELETE FROM movies ");

    

    die();

    for($i=0;$i<9741;$i++)
    {
            $value=$data->prepare("INSERT INTO movies (id,name,type) VALUES (:idMovie,:nameMovie,:typeMovie);");

            echo substr($csv[$i][1],0,1);
            if(substr($csv[$i][1],0,1)=="\""){
                echo "special";
                $value->execute(
                [
                    'idMovie'=>$csv[$i][0],
                    'nameMovie'=>substr($csv[$i][1],1,-1),
                    'typeMovie'=>substr($csv[$i][2],0,-1)
                ]);
            }

            else{
                echo "normal";
                $value->execute(
                    [
                        'idMovie'=>$csv[$i][0],
                        'nameMovie'=>$csv[$i][1],
                        'typeMovie'=>substr($csv[$i][2],0,-1)
                    ]);
            }        
    }
    ?>