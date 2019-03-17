<?php
$host="localhost";
$user="root";
$password="";
$db="demo";

$error=''; 
if(isset($_POST['submit'])){
 if(empty($_POST['user']) || empty($_POST['pass'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
 
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 
 $conn = mysqli_connect("localhost", "root", "");
 
 $db = mysqli_select_db($conn, "demo");
 
 $query = mysqli_query($conn, "SELECT * FROM master_user WHERE password='$pass' AND username='$user'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
 header("Location:welcome.php"); 
 }
 else
 {
 $error = "Username of Password is Invalid";
 }
 mysqli_close($conn); 
 }
}
 
?>


<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body{
    margin: 0;
    padding: 0;
    background: url(pic1.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
    
}

.loginbox{
    
    background: rgba(206, 201, 201, 0.404);
    
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    
    padding: 70px 30px;
    margin: 30px;
}

.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}

.loginbox input[type="text"], input[type="password"]
{
    border: none;
    border: 1px solid white;
    border-radius: 15px;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
    cursor: pointer;
    background: #ffc107;
    color: #000;
}
.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color:black;
}

.loginbox a:hover
{
    color: #ffc107;
}
.loginButton

{
    text-align: center;
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}

        </style>
<body>
    <div class="loginbox">
    <img src="avatar.png" class="avatar">
    <form  method="post" style="text-align:center;">
        <h1>Login Here</h1>
        <form>
            <p>Username</p>
            <input type="text" name="user" id="user" placeholder="Enter Email id">
            <p>Password</p>
            <input type="password" name="pass"  id="pass" placeholder="Enter Password">
            <input type="submit" value="Login" name="submit">
            <a href="forgatePassword.html">forget your password?</a><br>
            <a href="signup.html">New Member ? signup now !</a>
        </form>
        
    </div>

</body>
</head>
<script>
    function showCard(){
    //create divone with style
    var divOne=document.createElement("div");
    divOne.setAttribute("class","card bg-primary text-white");
    //created divtwo with style 
    var divTwo=document.createElement("div");
    divTwo.setAttribute("class","card-body");
    var brdiv=document.createElement("br");
   //created edit icon using font-awesome and applied the style
    var I=document.createElement("i");
    I.setAttribute("class","fas fa-edit float-right");
    //appending all the divs to show in virtual dom
    divTwo.innerHTML=document.getElementById("comment").value;
    divOne.appendChild(divTwo);
    divTwo.appendChild(I);
    I.onclick=function() { prompt("Enter Answer"); }
    document.getElementById("posts").appendChild(divOne);
    //document.getElementById("posts").appendChild(brdiv);
    //empty the value of comment box after clicking the submit button
    document.getElementById("comment").value="";
}
    </script>
</html>