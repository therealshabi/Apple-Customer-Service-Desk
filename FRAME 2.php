<?php
session_start();
error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
<html>
<head>
<title>Sign IN</title>
<style>
body
{
background-color:black;	
}
.button{
    background-color: Green;
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    font-size: 20px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
    cursor: pointer;
}
.button1 {
    background-color: white;
	font-size: 20px;
	border-radius:8px;
    color: black;
	text-align: center;
    border: 2px solid black;
}

.button1:hover {
    background-color:#008CBA;
    color: white;
}
.button3 {
    background-color: white;
	font-size: 20px;
	border-radius:8px;
	text-align: center;
    color: black;
    border: 2px solid black;
}

.button3:hover {
    background-color:#f44336;
    color: white;
}
.button2 {
    background-color: white;
	font-size: 20px;
	border-radius:8px;
	text-align: center;
    color: black;
    border: 2px solid black;
}

.button2:hover {
    background-color:#4CAF50;
    color: white;
}

.n
{
	background-color:white;
	border-radius:6px;
	border:solid black;
}
.n1
{
	background-color:white;
	border-radius:6px;
	border:solid black;
}
input[type=password]:focus
{
	background-color:#6495ED;
}
input[type=text]:focus
{
	background-color:#6495ED;
}
.error
{
	color:red;
}

</style>
<script type="text\javascript">
function cl()
{
	document.getElementById("us").value="";
	document.getElementById("pw").value="";
}
function fun1()
{
	var a=(document.getElementById("us").innerHTML=="");
	if(!a)
	{
	window.open("http://localhost/FRAME%204.php");
	return true;
	}
	else
	{
		alert("Name Required");
		return false;
	}
   
 }
</script>

<?php
//Open Database
mysqli_select_db($conn,"project");
/*$username = $_POST['username'];
$password = $_POST['pwd'];*/
$user=$userErr=$pwd=$pwdErr="";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
     $userErr = "Enter a valid userame";
     }
	 else{
		 $user=$_POST["username"];
	 }
    if (empty($_POST["pwd"])) {
     $pwdErr = "Enter a valid password";
     }
    else
	{
		$pwd=$_POST["pwd"];
	}

	if($userErr=="" && $pwdErr==""){
    $qu="select '$user' from apple_details";
	$res=$conn->query($qu);
	if($res->num_rows==0)
		$userErr="Username does not exists!";
	else
	{
      $sql = "select name,password from apple_details where username='$user'";
      $result = $conn->query($sql);
	  $row = $result->fetch_assoc();
	  $_SESSION["nam"]=$row['name'];
	  if($pwd!=$row["password"])
	  {
      $pwdErr="Invalid Password!";
      }
      elseif($result)
      {
      	header("Location:intermediate.php");
      }
    }
    }
	} 	
$conn->close();
?>

</head>
<body background="http://localhost\apple complaint.jpg">
<h1><font size=10 face="Monotype Corsiva"><strong><center> SIGN IN </center></strong></font></h1><hr width=900>
<font size=6 face="Comic Sans MS"><pre><BR><form method="post" action ="FRAME 2.php">
               Username               :             <input type="text" name="username" style="width:250px;height:30px" class="n" id="us"/><span class="error"> * <?php echo $userErr;?></span><br><br>
               Password               :             <input type="password" name="pwd" style="width:250px;height:30px" class="n1" id="pw"/><span class="error"> * <?php echo $pwdErr;?></span><br>
   <br><br><br> <br>                     <input type="submit" size=10 name ="signup" value="Sign In" style="width:130px;height:45px" class="button button1">       <input type="reset" size=10 name ="reset1" value="Clear Fields" style="width:150px;height:45px" class="button button2" onClick="cl()">       <input type="button" size=10 name ="back" value="Go Back" style="width:130px;height:45px" onClick="location.href = 'http://localhost/FRAME%203.php';" class="button button3">		 
</form></pre>
</body>
</html>