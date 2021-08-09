<?php
    // $query = $db->prepare("SELECT * FROM students WHERE role_id = ".$role_id." ");
   $query = require_once ("dbConfig.php");
    $query->execute();
    foreach($query as $q)
    {
      echo '<form action="" method="post">               
             <table>
              <tr><th>ROLE</th>
                  <th>PERMISSIONS<br><input type="checkbox" class="chk_boxes"></th>  
              </tr>
              <tr><td><input type="text" value="'.$q['role_name'].'" name="role_name" required></td>
                  <td>';
                      $permid_array = $q['perm_id'];                                          
                      foreach(explode(',', $permid_array) as $n)
                      {
                        if ($n == 1 || $n == 2 || $n == 3 || $n == 4 || $n == 5 || || $n == 6) { $set_checked = "checked";}
                        else {$set_checked = ""; }

                        echo '
                        <input type="checkbox" class="chk_boxes1" name="perm[]" value="1" '.$set_checked.' > My Account<br> 
                        <input type="checkbox" class="chk_boxes1" name="perm[]" value="2" '.$set_checked.' > Edit Account<br>
                        <input type="checkbox" class="chk_boxes1" name="perm[]" value="3" '.$set_checked.' > Change Password<br>
                        <input type="checkbox" class="chk_boxes1" name="perm[]" value="4" '.$set_checked.' > List of users<br>
                        <input type="checkbox" class="chk_boxes1" name="perm[]" value="5" '.$set_checked.' > Define roles<br>
                        <input type="checkbox" class="chk_boxes1" name="perm[]" value="6" '.$set_checked.' > Assign roles<br>';
                      }
                   echo '</td></tr>
             </table>
             <div><input type="submit" name="submit" value="create role"></div>
            </form>';
    }
  ?>