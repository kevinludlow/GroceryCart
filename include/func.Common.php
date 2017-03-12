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


  // Create a function for getting variables safely.
  // Essentially we're just error checking any
  // GET requests and allowing a method to handle
  // a default any time the variable is NOT set
  // in the URI
  function safe_get( $request, $default = NULL )
  {
    if( isset( $_GET[$request] ) )
      $$request = $_GET[$request];
    else
      $$request = $default;

    return $$request;

  } // end of function safe_get()

?>
