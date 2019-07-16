<?php
session_start();
if(!isset($_SESSION['sess_user'])){
	header("location: login.php");
}
else
{
  $con=mysql_connect('localhost','root','') or die(mysql_error());
  mysql_select_db('ticket_booking') or die("cannot select DB");

  if(!empty($_POST["password"]))
  {
    $query=mysql_query("SELECT * FROM login WHERE password='".$_POST["password"]."' AND username='".$_SESSION['sess_user']."'");
    $numrows=mysql_num_rows($query);
    if($numrows>0)
    {
      echo "<span class='status-available'>Password Matched.</span>";
    }
    else
    {
      echo "<span class='status-not-available'>Password Didn't Matched.</span>";
    }
  }
}
?>
