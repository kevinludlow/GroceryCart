<?php

  // Check to make sure that the basic security variable has been set
  // thus ensuring tht the file is not being loaded directly.

  if( ! defined( '_SECURITY_BASIC' ) )
    die( '' );

  // Disconnect from the database.

  mysql_close( $dbh );

?>
