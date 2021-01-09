<?php
$maxdb = new maxdb("localhost", "MONA", "RED", "DEMODB");

/* check connection */
if (maxdb_connect_errno()) {
   printf("Connect failed: %s\n", maxdb_connect_error());
   exit();
}

/* print server version */
printf("Server version: %d\n", $maxdb->server_version);

/* close connection */
$maxdb->close();
?>