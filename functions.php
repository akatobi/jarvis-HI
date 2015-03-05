<?php 

    $dbname = "" ;
    $dbhost = "" ;
    $dbuser = "" ;
    $dbpass = "" ;

        $dbconecct = mysql_connect($dbhost,$dbuser,$dbpass); 

        if (!$dbconecct)  {
    
                die("не удалось подклюиться");
    
                    }
    else {
    echo ("подключились"); 
    }



?>