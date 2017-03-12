<?php

//############################################################################/
//##                                                                        ##/
//##  Super Cheap Signs (Sample Grocery List)                               ##/
//##  (c) 2017 Kevin Ludlow                                                 ##/
//##                                                                        ##/
//##  Designed as sample code for a hiring process                          ##/
//##                                                                        ##/
//##  This software can be used for any purpose.                            ##/
//##                                                                        ##/
//############################################################################/

  // Start the output buffering
  ob_start();

  // Include configuration file
  include_once( "config/config.php" );

  // Set the level of error reporting and either
  // turn on or off the displaying of errors
  error_reporting( E_ERROR );
  ini_set( 'display_errors', '1' );

  // Include any common functions
  include_once( "include/func.Common.php" );

  // Start (or continue) the session using the SESSION name
  // from the configuration file
  session_name( _SESSION_NAME );
  session_start();

  // Load the requested module
  $module = get_module();

  // Create an array of the modules available for security
  // control purposes.  Pretty simple technique to limit a user
  $modules = array( 'GroceryList' );

  // If the requested module is NOT in the modules
  // array, default to the Home module
  if( ! in_array( $module, $modules ) )
  {
    // TODO - a basic redirect
  }

  // Load the module data
  include( "modules/$module/index.php" );

  // Load the appropriate theme file
  include( "themes/". _THEME_NAME ."/layout/layout.php" );

  // Begin handling all of the post processing
  // Start by getting the buffer and flushing it
  $buffer = ob_get_contents();
  ob_end_clean();

  // Modify the contents of various pieces
  $buffer = str_replace( '<%CONTENT%>', $layout['content'], $buffer );

  // Finally output assembled contents to the screen
  echo $buffer;

?>
