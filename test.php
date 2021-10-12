<?php
   $host        = "host = ec2-52-87-123-108.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = d8sqb85i5r50f3";
   $credentials = "user = postgres password=f2f23703d8d27d8ee39d40dc344705dd67358848407a7c712ea80ebcde2363ce";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
?>