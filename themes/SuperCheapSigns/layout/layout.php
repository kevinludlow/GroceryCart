<?php

  ///
  /// @file    layout.php
  ///
  /// @brief   This file contains the main layout necessary for the project
  ///          We'll handle all of the formatting within the project so that
  ///          the source displays cleanly (without any minimizing)
  ///

  echo "<!DOCTYPE html>\n\n";

  echo "<html lang=\"en\" id=\"SuperCheapSigns\">\n\n";

  echo "<head>\n";
  echo "  <title>Grocery List - Sample Code</title>\n";
  echo "  <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />\n";
  echo "  <link rel=\"StyleSheet\" href=\""._PATH_WEB_ROOT."themes/". _THEME_NAME ."/style/style.css\" type=\"text/css\" media=\"screen\" title=\"Default\" />\n";
  echo "</head>\n\n";

  echo "<body>\n\n";

  echo "<!--open the container-->\n";
  echo "<div id=\"container\">\n\n";

  echo "  <!--begin content module-->\n";
  echo "  <%CONTENT%>\n\n";
  echo "  <!--end content module-->\n\n";

  echo "</div>\n";
  echo "<!--close the container-->\n\n";

  echo "</body>\n\n";

  echo "</html>\n\n";


?>
