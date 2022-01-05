<?php
    const API_KEY = '6f1c5d48646cdbc71d652ebcc488f3e0';


    function formalizeTitle($movieTitle){

        for ($i = 0; $i < strlen($movieTitle);$i++){
            if ($movieTitle[$i]==' '){
                $movieTitle[$i] =  '+';
            }
        }

        return $movieTitle;
    }


    function getDataFromLink($link){

        $page = file_get_contents($link);

        $firstPartBegin = strpos($page,'{',1);
        $firstPartEnd = strpos($page,'}');
        return substr($page, $firstPartBegin, $firstPartEnd-$firstPartBegin+1);

    }

    function getField($chaine, $fieldName){

        $pos = strpos($chaine, $fieldName);
        $element = substr($chaine,$pos);

        if ($fieldName=="overview"||$fieldName=="genre_ids"){
            $result = $element;
            $beginPos = strpos($element, ':');

            $result = substr($element, $beginPos+2);
            $endPos = strpos($result,'"');
            if ($fieldName=="genre_ids"){
                $result = substr($result, 0,$endPos-2);
            }
            else{
                $result = substr($result, 0,$endPos);
            }

        }
        else{
            $beginPos = strpos($element, ':');
            $endPos = strpos($element,',');

            $result = substr($element, $beginPos+1,$endPos-$beginPos-1);



            if (strpos($result,'"')!==false) {
                $result = substr($element, $beginPos + 2, $endPos - $beginPos - 3);
            }
        }
        return $result;

    }


    function getMovieInfo($movieTitle){
        $link = "https://api.themoviedb.org/3/search/movie?api_key=".API_KEY."&language=fr&query=".formalizeTitle($movieTitle);
        $movieInfo = getDataFromLink($link);
        //TITLE
        $movie["title"] = getField($movieInfo,"title");

        //DESCRIPTION
        $movie["description"] = getField($movieInfo, "overview");

        //DATE DE SORTIE
        //$movie["releaseDate"] = getField($movieInfo,"release_date");

        //NOTE MOYENNE
        $movie["averageNote"] = getField($movieInfo,"vote_average");

        //IMAGE PORTRAIT
        $movie["imagePortrait"] = "https://image.tmdb.org/t/p/w500".getField($movieInfo,"poster_path");

        //IMAGE PAYSAGE
        //$movie["imagePaysage"] = "https://image.tmdb.org/t/p/w500".getField($movieInfo,"backdrop_path");

        //GENRE
        //$movie["genre"] = getField($movieInfo,"genre_ids");

        //ID
        $movie["id"] = getField($movieInfo, "id");


        return $movie;
    }


#titre, overview,réalisateur, genre, date de sortie, acteurs, "note", image portrait, image paysage