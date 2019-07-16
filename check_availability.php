<?php
  $con=mysql_connect('localhost','root','') or die(mysql_error());
  mysql_select_db('ticket_booking') or die("cannot select DB");

  if(!empty($_POST["username"]))
  {
    $result = mysql_query("SELECT count(*) FROM login WHERE username='".$_POST["username"]."'");
    $row = mysql_fetch_row($result);
    $user_count = $row[0];
    if($user_count>0)
    {
      echo "<span class='status-not-available'>Username Not Available.</span>";
    }
    else
    {
      echo "<span class='status-available'>Username Available.</span>";
    }
  }
?>
