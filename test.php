<?php
   $host        = getenv('HOST');
   $port        = getenv('PORT');
   $dbname      = getenv('DB_NAME');
   $credentials = getenv('DB_USER');

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
?>
