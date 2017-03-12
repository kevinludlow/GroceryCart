<?php

  // Get the sub-op selector for the module
  // We'll default to the list any time it is
  // not set
  $op = safe_get( 'op', 'list' );

  // Load the appropriate operation
  //
  // Note that I would normally contain this in
  // a more robust handler, but since this is the
  // only module, it doesn't seem necessary where
  // a simple switch statement can handle our 
  // basic security
  switch( $op )
  {
    case 'list':
      include( "modules/$module/list.php" );
      break;

    case 'view':
      include( "modules/$module/view.php" );
      break;

    default:
      include( "modules/$module/list.php" );
      break;

  } // end switch $op

?>
