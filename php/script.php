<?php
    $arg = "Star wars";
    $command = 'python "theMovieDb.py" '.$arg;

    exec('python "theMovieDb.py" '.$arg,$return_var);

    print_r($return_var);
