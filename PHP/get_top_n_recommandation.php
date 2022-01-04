<?php
    include "getRecommandation.php";
    include "getMovieTitle.php";
    include "getMovieInfo.php";


/**
 * @param int $index L'ID de l'utilisateur pour lequel on veut les 20 premières recommandations
 *
 * @return mixed Un tableau à deux dimension du type $result[movieIndex][caracteristicID]
 *
 * movieIndex est comprise entre 0 et 19 et contient un tableau de caractéristique concernant un film
 *
 * caracteristicID est comprise en 0 et 6 chaque index correspond à une donnée
 * caracteristicID = title : Titre du film (format : String)
 * caracteristicID = averageNote : Note moyenne (format : Float)
 * caracteristicID = description : Résumé du film (format : String)
 * caracteristicID = imagePortrait : Lien image affiche du film (PORTRAIT) (format : String)
 * caracteristicID = imagePaysage : Lien image affiche du film (PAYSAGE) (format : String)
 * caracteristicID = releaseDate : Date de sortie du film
 * caracteristicID = genre : ID du genre du film (récupéré le nom du genre n'est pas encore implémenté)
 *
 */
function get_top_n_recommandation(int $index){
        $result[] = [];
        $user_recommand = getRecommandation($index);
        $compteur = 0;
        foreach ($user_recommand as $key=> $movie){
            if ($compteur != 0 && $compteur != 1) {
                $tmp_title = returnMovieName($movie);
                $return_var = getMovieInfo($tmp_title);
                array_push($result,$return_var);
                $return_var = null;
            }
            $compteur++;
        }
        return $result;

    }


    $reco = get_top_n_recommandation(5);