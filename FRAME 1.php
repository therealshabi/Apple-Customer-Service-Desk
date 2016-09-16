<html>
<head>
<title>SIGN UP</title>
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
input[type=text]:focus
{
	background-color:#6495ED;
}
input[type=email]:focus
{
	background-color:#6495ED;
}
input[type=password]:focus
{
	background-color:#6495ED;
}
.n
{
	background-color:#white;
	border-radius:6px;
	border:solid black;
}
.n1
{
	background-color:#white;
	border-radius:6px;
	border:solid black;
}
.n2
{
	background-color:#white;
	border-radius:6px;
	border:solid black;
}
.n3
{
	background-color:#white;
	border-radius:6px;
	border:solid black;
}
.n4
{
	background-color:#white;
	border-radius:6px;
	border:solid black;
}
.n5
{
	background-color:#white;
	border-radius:6px;
	border:solid black;
}

.error
{
	color:red;
}
</style>
<script type="text\javascript">
function clear()
{
  document.getElementById("a").innerHTML="";
  document.getElementById("b").innerHTML="";
  document.getElementById("c").innerHTML="";
  document.getElementById("d").innerHTML="";
  document.getElementById("e").innerHTML="";
  document.getElementById("f").innerHTML="";
}
</script>

<?php
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
//Open Database
mysqli_select_db($conn,"project");
/*$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['pwd'];
$email = $_POST['email'];*/

$nameErr = $emailErr = $pass1Err = $passErr = $userErr = $check="";
$name = $email = $pass = $pass1 = $website = $user = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
   }
   
   
   if (empty($_POST["username"])) {
     $userErr = "Username is required";
   } else {
	 if (strlen($_POST["username"])<5) {
     $userErr = "Userame too short...should atleast contain 6 characters";
   } else {
     $user = test_input($_POST["username"]);
   }
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }
     

   if (empty($_POST["pwd"])) {
     $passErr = "Password is Required";
   } else {
      if (strlen($_POST["pwd"])<5) {
     $passErr = "Password too short...should atleast contain 6 characters";
   } else   
     $pass = test_input($_POST["pwd"]);
   }

   if (empty($_POST["pwd1"])) {
     $pass1Err = "Retype the Password";
   } else {
     $pass1 = test_input($_POST["pwd1"]);
   }
   if($pass!=$pass1)
   {
	   $pass1Err="Your Password Does not match! ";
   }
   if (empty($_POST["s1"])) {
     $check = "Please agree to Terms & Conditions";
   } 
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

if($nameErr =="" && $emailErr == "" && $pass1Err =="" && $passErr =="" && $userErr =="" && $check == "")
{
	if($name!="")
	{
$sql = "INSERT INTO apple_details VALUES ('$name','$email','$user','$pass')";
if($conn->query($sql))
{
  header("Location:Frame 2.php");
}

/*if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/
	}
}
$conn->close();
//echo "Connected successfully";
?>
</head>
<body background ="http://localhost\apple complaint.jpg" link="blue">
<h1><font size=10 face="Comic Sans MS"><strong><center> Create an Account </center></strong></font></h1><hr width=900>
<font size=6 face="Comic Sans MS"><pre><form method="post" action="frame 1.php"><p title="mandatory fields">
         Name                             :             <input type="text" name="name"  style="width:185px;height:30px" class="n" id="a"><span class="error"> * <?php echo $nameErr;?></span><br>
         Choose your Username             :             <input type="text" name="username" style="width:185px;height:30px" class="n1" id="b"><span class="error"> * <?php echo $userErr;?></span><br>
         Create a Password                :             <input type="password" name="pwd" style="width:185px;height:30px" class="n2" id="c"><span class="error"> * <?php echo $passErr;?></span><br>
         Confirm your Password            :             <input type="password" name="pwd1" style="width:185px;height:30px" class="n3" id="d"><span class="error"> * <?php echo $pass1Err;?></span><br>
         Currently using Apple Device     :             <input type="text" name="device" style="width:185px;height:30px" class="n4" id="e"><br>
	 E-Mail Address                   :             <input type="email" name="email" style="width:185px;height:30px" class="n5" id="f"><span class="error"> * <?php echo $emailErr;?></span><br></p>
	                   <input type="checkbox" name="s1" value="check"/>I agree to the Apple <U><a href = "http://localhost/TERMS.html">Terms of Service</a></U> <span class="error"> * <?php echo $check;?></span>
		<br>                             <input type="submit"  name ="signup" value="SignUp" style="width:130px;height:45px" class="button button1" onClick="return val()">     <input type="reset" size=10 name ="reset" value="Clear Fields" style="width:155px;height:45px" class="button button2" onclick="clear()">     <input type="button" size=10 name ="back" value="Go Back" style="width:140px;height:45px" onclick="location.href = 'http://localhost/FRAME%203.php';" class="button button3">		 
</pre></form>

</body>
</html>