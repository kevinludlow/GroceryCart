<?php

  ///
  /// @file    config.php
  ///
  /// @brief   This file contains all of the configuration information necessary for
  ///          controlling all parts of the sample CMS.
  ///
  /// @details Even though this is just sample code, I wanted to include the general
  ///          Doxygen and PHPDoc syntax that I would typically use for creating
  ///          configuration files.
  ///
  ///          All configuration variables should be thoroughly documented so that
  ///          changes to the application can be easily managed and customizable.
  ///

  ///
  /// @brief   The fully qualified project HTTP URL (Apache - Port 80)
  ///          Note that this is useful for redirection handling
  ///
               define( '_PATH_WEB', 'http://www.kevinludlow.com/projects/SuperCheapSigns/' );

  ///
  /// @brief   The base web path that Apache should look for.
  ///          Note that this is useful for any Apache MOD-ReWriting that
  ///          we might want to do 
  ///
  ///          If this is set to an empty string, the relative path will be used
  ///          If using MOD_REWRITE, the root '/' should at least be used
  ///          to ensure assets are loaded properly (images, js, etc)

               define( '_PATH_WEB_ROOT', '/projects/SuperCheapSigns/' );

  ///
  /// @brief   Allow the developer to change the skins of the application on the
  ///          fly.  The variable can take any string and the string should 
  ///          match the name of the theme subdirectory created.
  ///
               define( '_THEME_NAME', 'SuperCheapSigns' );

?>
