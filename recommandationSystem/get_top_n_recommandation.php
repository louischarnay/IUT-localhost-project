<?php
    include "getRecommandation.php";
    include "getMovieTitle.php";


/**
 * @param int $index L'ID de l'utilisateur pour lequel on veut les 20 premières recommandations
 *
 * @return mixed Un tableau à deux dimension du type $result[movieIndex][caracteristicID]
 *
 * movieIndex est comprise entre 0 et 19 et contient un tableau de caractéristique concernant un film
 *
 * caracteristicID est comprise en 0 et 6 chaque index correspond à une donnée
 * caracteristicID = 0 : Titre du film (format : String)
 * caracteristicID = 1 : Note moyenne (format : Float)
 * caracteristicID = 2 : Résumé du film (format : String)
 * caracteristicID = 3 : Lien image affiche du film (PORTRAIT) (format : String)
 * caracteristicID = 4 : Lien image affiche du film (PAYSAGE) (format : String)
 * caracteristicID = 5 : Date de sortie du film
 * caracteristicID = 6 : ID du genre du film (récupéré le nom du genre n'est pas encore implémenté)
 *
 */
function get_top_n_recommandation(int $index){
        $result[] = [];
        $user_recommand = getRecommandation($index);
        foreach ($user_recommand as $key=> $movie){
            if ($key != 0) {
                $tmp_title = returnMovieName($movie);
                exec('python "theMovieDb.py" ' . $tmp_title, $return_var);
                array_push($result,$return_var);
                $return_var = null;
            }
        }
        return $result;

    }


    $reco = get_top_n_recommandation(5);
    print_r($reco[1]);