<?php
  
    class userRecommandation{
        public array $recommandation;
        //TODO
        public function __construct()
        {
          $this->recommandation = array();
        }
        public function getRecommandation(int $index){
          if (($open = fopen("recommendation.csv", "r")) !== FALSE) 
          {
              while (($data = fgetcsv($open, 1000, ",")) !== FALSE && $data[0]<=$index) {
                  if ($data[0]==$index){
                    print_r($data);
                    echo '<br>';
                  }
              }

              fclose($open);
          }
        }
    }
    $recommandObject =  new userRecommandation();
    $recommandObject->getRecommandation(5);