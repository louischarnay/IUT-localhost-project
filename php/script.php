<?php
    include "getRecommandation.php";
    include "getMovieTitle.php";

    $user_recommand = getRecommandation(52);
    foreach ($user_recommand as $key=> $movie){
        if ($key != 0) {
            $tmp_title = returnMovieName($movie);
            exec('python "theMovieDb.py" ' . $tmp_title, $return_var);
            print_r ($return_var);
        }
    }