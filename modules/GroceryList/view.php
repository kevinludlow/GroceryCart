<?php

  // Start by getting the ListID
  $ListID = safe_get( 'ListID', 0 );

  // Get the details for the list
  $query = "SELECT * FROM "._DB_NAME."."._DB_PREFIX."_Item
            WHERE fk_ListID = '1'";
  $result = mysql_query( $query );
  $numrows = mysql_num_rows( $result );

  $layout['content'] .= "<h1>Items on List</h1>";
  $layout['content'] .= "<h2><a href=\""._PATH_WEB_ROOT."\">return to lists</a></h2>";

  // Build a simple display table
  $layout['content'] .= "<table class=\"tabular\">\n";
  $layout['content'] .= "<tr>\n";
  $layout['content'] .= "  <th style=\"width: 80px;\">Actions</th>\n";
  $layout['content'] .= "  <th>Item</th>\n";
  $layout['content'] .= "  <th>Added on</th>\n";
  $layout['content'] .= "  <th>Purchased</th>\n";
  $layout['content'] .= "  <th>Purchased on</th>\n";
  $layout['content'] .= "  <th class=\"add\"><a href=\""._PATH_WEB_ROOT."index.php?module=GroceryList&amp;op=add&amp;List=$ListID\">+</a></th>\n";
  $layout['content'] .= "</tr>\n";

  // Step over the lists
  for( $i = 0; $i < $numrows; $i++ )
  {
    // Get the record data
    $row = mysql_fetch_assoc( $result );

    // Set the ItemID
    $ItemID = $row['pk_ID'];

    $layout['content'] .= "<tr>\n";
    $layout['content'] .= "  <td><a href=\""._PATH_WEB_ROOT."index.php?module=GroceryList&amp;op=delete&amp;ListID=$ListID&amp;ItemID=$ItemID\">delete</a></td>\n";
    $layout['content'] .= "  <td>".$row['vc_Item']."</td>\n";
    $layout['content'] .= "  <td>".$row['dt_Added']."</td>\n";
    $layout['content'] .= "  <td>".$row['dt_Modified']."</td>\n";
    $layout['content'] .= "  <td>".$row['dt_Modified']."</td>\n";
    $layout['content'] .= "  <td>&nbsp;</td>\n";
    $layout['content'] .= "</tr>\n";
  }

  $layout['content'] .= "</table>\n\n";

?>
