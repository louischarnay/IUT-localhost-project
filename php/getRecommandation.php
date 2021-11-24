<?php
  
    class userRecommandation{
        public $val;
        //TODO
    }


  if (($open = fopen("recommendation.csv", "r")) !== FALSE) 
  {
  
    while (($data = fgetcsv($open, 1000, ",")) !== FALSE) 
    {        
      $array[] = $data; 
    }
  
    fclose($open);
  }
  echo "<pre>";
  //To display array data
  echo($array[32][0]);
  echo "</pre>";