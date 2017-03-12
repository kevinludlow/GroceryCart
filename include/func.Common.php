<?php

  // Since this is constructed in a basic CMS 
  // design we'd want to allow for multiple 
  // modules even though there is only a single
  // module available for this sample code
  //
  //
  // This method can be used to handle one module
  // or any number of them

  function get_module()
  {
    // Get the requested module from the URL
    // with some basic error checking
    if( isset( $_GET['module'] ) )
      $module = $_GET['module'];
    else
      $module = "Home";

    // Return the module
    return $module;

  } // end of function get_module()

?>
