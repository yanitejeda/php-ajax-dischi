
<?php include "element.php" ;
//var_dump ($response)
?>


<?php
    foreach ($response as $disc){
        //  echo $disc['title'] .' <br> ';
        // echo $disc['year'] .' <br>';
        //  echo $disc['author'] .'<br>';

            $discposter =$disc['poster'];
            $discTittle =$disc['title'];
            $discauthor=$disc['author'];
            $discyear= $disc['year'];


            include "cardDisco.php";
        // include __DIR__ ."/../components/cardDisco.php";

    }
?>