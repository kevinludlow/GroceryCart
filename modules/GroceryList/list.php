<?php

  // Start by getting all of the lists
  // for the active UserID
  $query = "SELECT * FROM "._DB_NAME."."._DB_PREFIX."_List
            WHERE fk_UserID = '1'";
  $result = mysql_query( $query );
  $numrows = mysql_num_rows( $result );

  $layout['content'] .= "<h1>Available Grocery Lists</h1>";

  // Build a simple display table
  $layout['content'] .= "<table class=\"tabular\">\n";
  $layout['content'] .= "<tr>\n";
  $layout['content'] .= "  <th>Name of List</th>\n";
  $layout['content'] .= "  <th>List Created</th>\n";
  $layout['content'] .= "  <th>List Last Modified</th>\n";
  $layout['content'] .= "</tr>\n";

  // Step over the lists
  for( $i = 0; $i < $numrows; $i++ )
  {
    // Get the record data
    $row = mysql_fetch_assoc( $result );

    // Set the ListID
    $ListID = $row['pk_ID'];

    $layout['content'] .= "<tr>\n";
    $layout['content'] .= "  <td><a href=\""._PATH_WEB_ROOT."index.php?module=GroceryList&amp;op=view&amp;ListID=$ListID\">".$row['vc_Name']."</a></td>\n";
    $layout['content'] .= "  <td>".$row['dt_Created']."</td>\n";
    $layout['content'] .= "  <td>".$row['dt_Modified']."</td>\n";
    $layout['content'] .= "</tr>\n";
  }

  $layout['content'] .= "</table>\n\n";

?>
