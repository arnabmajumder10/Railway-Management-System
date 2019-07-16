<?php
session_start();
if(!isset($_SESSION['sess_user'])){
?>

<?php
if(isset($_POST['submitlogin']))
{
  if(!empty($_POST['user']) && !empty($_POST['pass']))
  {
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $con=mysql_connect('localhost','root','') or die(mysql_error());
    mysql_select_db('ticket_booking') or die("cannot select DB");
    $query=mysql_query("SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");
    $numrows=mysql_num_rows($query);
    if($numrows!=0)
    {
    while($row=mysql_fetch_assoc($query))
    {
    $dbusername=$row['username'];
    $dbpassword=$row['password'];
    }
    if($user == $dbusername && $pass == $dbpassword)
    {
      if(isset($_POST['submitremember'])){
        setcookie("cook_user",$_POST["user"],time()+(3*60));
        setcookie("cook_pass",$_POST["pass"],time()+(3*60));
        session_start();
        $_SESSION['sess_user']=$user;
        header("Location: dashboard.php");
      }
      else{
        if(isset($_COOKIE["cook_user"]))
        {
        setcookie ("cook_user", "");
        }
        if(isset($_COOKIE["cook_pass"]))
        {
        setcookie ("cook_pass", "");
        }
        session_start();
        $_SESSION['sess_user']=$user;
        header("Location: dashboard.php");
      }
    }
  }
  else
  {
?>

  <div class="login-page">
    <div class="form">
      <form name="myForm" action="login.php" onSubmit="return validateForm(this)" method="post">
        <div class="imgcontainer">
          <img src="./img/avatar.png" alt="Avatar" class="avatar">
        </div>
        <input type="text" name="user" placeholder="username"/>
        <input type="password" name="pass" placeholder="password"/>
        <button input type="submit" name="submitlogin">LogIn</button>
        <p class="message">Not registered? <a href="register.php">Create an account</a></p>
        </br>
        <input type="checkbox" name="submitremember"/>
        <label style="font-size: 15px; color: #4CAF50;">Remember me</label>
      </form>
    </div>
  </div>

  <div id="myModal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
        <h3>Invalid</h3>
      </div>
      <div class="modal-body">
        <h3>Username</h3>
        <h3>or</h3>
      </div>
      <div class="modal-footer">
        <h3>Password</h3>
      </div>
    </div>
  </div>

  <script>
    var modal = document.getElementById('myModal');
    var span = document.getElementsByClassName("close")[0];
    modal.style.display = "block";
    span.onclick = function()
    {
        modal.style.display = "none";
        window.location = "login.php";
    }
    window.onclick = function(event)
    {
        if (event.target == modal) {
            modal.style.display = "none";
            window.location = "login.php";
        }
    }
  </script>

<?php
    }
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
  <title>Bangladesh Railway | Login</title>
    <style>
      .login-page
      {
        width: 360px;
        padding: 8% 0 0;
        margin: auto;
      }
      .form
      {
        position: relative;
        z-index: 1;
        background: #FFFFFF;
        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
      }
      .form input
      {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
      }
      .form button
      {
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #4CAF50;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
      }
      .form button:hover,.form button:active,.form button:focus
      {
        background: #43A047;
      }
      .form .message
      {
        margin: 15px 0 0;
        color: #b3b3b3;
        font-size: 12px;
      }
      .form .message a
      {
        color: #4CAF50;
        text-decoration: none;
      }
      .form .register-form
      {
        display: none;
      }
      .container
      {
        position: relative;
        z-index: 1;
        max-width: 300px;
        margin: 0 auto;
      }
      .container:before, .container:after
      {
        content: "";
        display: block;
        clear: both;
      }
      .container .info
      {
        margin: 50px auto;
        text-align: center;
      }
      .container .info h1
      {
        margin: 0 0 15px;
        padding: 0;
        font-size: 36px;
        font-weight: 300;
        color: #1a1a1a;
      }
      .container .info span
      {
        color: #4d4d4d;
        font-size: 12px;
      }
      .container .info span a
      {
        color: #000000;
        text-decoration: none;
      }
      .container .info span .fa
      {
        color: #EF3B3A;
      }
      body
      {
        background: #76b852;
        background: -webkit-linear-gradient(right, #76b852, #8DC26F);
        background: -moz-linear-gradient(right, #76b852, #8DC26F);
        background: -o-linear-gradient(right, #76b852, #8DC26F);
        background: linear-gradient(to left, #76b852, #8DC26F);
        font-family: "Roboto", sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }
      .modal
      {
          display: none;
          position: fixed;
          z-index: 1;
          padding-top: 100px;
          left: 0;
          top: 0;
          width: 100%;
          height: 100%;
          overflow: auto;
          background-color: rgb(0,0,0);
          background-color: rgba(0,0,0,0.4);
      }
      .modal-content
      {
          position: relative;
          background-color: #fefefe;
          margin: auto;
          padding: 0;
          border: 1px solid #888;
          width: 80%;
          box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
          -webkit-animation-name: animatetop;
          -webkit-animation-duration: 0.4s;
          animation-name: animatetop;
          animation-duration: 0.4s
      }
      @-webkit-keyframes animatetop
      {
          from {top:-300px; opacity:0}
          to {top:0; opacity:1}
      }
      @keyframes animatetop
      {
          from {top:-300px; opacity:0}
          to {top:0; opacity:1}
      }
      .close
      {
          color: white;
          float: right;
          font-size: 28px;
          font-weight: bold;
      }
      .close:hover,
      .close:focus
      {
          color: #000;
          text-decoration: none;
          cursor: pointer;
      }
      .modal-header
      {
          padding: 2px 16px;
          background-color: #5cb85c;
          color: white;
      }
      .modal-body
      {
          padding: 2px 16px;
          color: #5cb85c;
      }
      .modal-footer
      {
          padding: 2px 16px;
          background-color: #5cb85c;
          color: white;
      }
      .imgcontainer
      {
        text-align: center;
        margin: 24px 0 12px 0;
      }

      img.avatar
      {
        width: 40%;
        border-radius: 50%;
      }
    </style>

    <script type="text/javascript">
      function validateForm()
      {
        var x=document.forms["myForm"]["user"].value;
        if (x==null || x=="")
         {
          alert("Name must be filled out");
          document.myForm.user.focus();
          return false;
         }
        var y=document.forms["myForm"]["pass"].value;
        if (y==null || y=="")
        {
          alert("Password name must be filled out");
          document.myForm.pass.focus();
          return false;
        }
      }
    </script>

  </head>
  <body>

  <div class="login-page">
    <div class="form">
      <form name="myForm" action="login.php" onSubmit="return validateForm(this)" method="post">
        <div class="imgcontainer">
          <img src="./img/avatar.png" alt="Avatar" class="avatar">
        </div>
        <input type="text" name="user" placeholder="username" value="<?php if(isset($_COOKIE["cook_user"])) {echo $_COOKIE["cook_user"];} ?>"/>
        <input type="password" name="pass" placeholder="password" value="<?php if(isset($_COOKIE["cook_pass"])) {echo $_COOKIE["cook_pass"];}?>"/>
        <button type="submit" name="submitlogin">LogIn</button>
        <p class="message">Not registered? <a href="register.php">Create an account</a></p>
        </br>
        <input type="checkbox" name="submitremember" <?php if(isset($_COOKIE["cook_user"])) { ?> checked <?php }?>/>
        <label style="font-size: 15px; color: #4CAF50;">Remember me</label>
      </form>
    </div>
  </div>

  </body>
</html>

<?php
}
else{
  header("Location: dashboard.php");
}
?>
