<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

<form action="admin.php" style="max-width:500px;margin:auto" method="POST">
  <h2> ADMİN PANEL GİRİŞ</h2>
 
  <div class="input-container">
    <i class="fa fa-envelope icon"></i><!-- İCONLAR CALISMIYOR -->
    <input class="input-field" type="text" placeholder="kullanici" name="user">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="sifre" name="psw">
  </div>
        <p>admin   / 123</p>
  <button type="submit" class="btn">ADMİN GİRİS</button>
</form>

</body>
</html>
<!-------------php------------------->
<?php
session_start();

if(isset($_POST["user"],$_POST["psw"]))
{
    if($_POST["user"]=="admin" && $_POST["psw"]=="123")
    {
        $_SESSION["user"] = $_POST["user"];
        header("location:sidebar.php");
    }
    else
        {
        echo"<script>alert('kullanici yanlis')</script>";
        }

    
}
?>