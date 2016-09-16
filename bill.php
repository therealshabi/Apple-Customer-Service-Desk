<!DOCTYPE html>
<?php
session_start();
$pri=$_SESSION['sum'];
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn,"project");

?>

<html>
<head>
<style>
h1
{
text-shadow: 1px 1px 2px red, 0 0 25px red, 0 0 5px blue;	
font-style: italic;
}
h3
{
text-shadow: 1px 1px 2px black, 0 0 25px red, 0 0 5px red;	
font-style: italic;
}
.button1 {
    background-color: white;
	font-size: 20px;
	border-radius:8px;
    color: black;
	text-align: center;
    border: 2px solid blue;
}

.button1:hover {
    background-color:#008CBA;
    color: white;
}
.button2 {
    background-color: white;
	font-size: 20px;
	border-radius:8px;
    color: black;
	text-align: center;
    border: 2px solid green;
}

.button2:hover {
    background-color:green;
    color: white;
}
body
{
	background-repeat:no-repeat;
}
.price
{
	color:red;
	font-size: 26px;
	text-shadow: 1px 1px 2px black, 0 0 25px red, 0 0 5px red;	
    font-style: italic;
}
</style>
<title>Invoice</title>
<script>
function ra()
{
	alert("Payment Done Successfully ! Here's Your Invoice !\n                     Do Visit Us again :)");
 var a= Math.floor(Math.random() * 100000000);
 document.getElementById('abc').innerHTML=a;
}
</script>
</head>
<body background="http://localhost\bill1.jpg" onload="ra()">
<h1> <pre><h1><center><font color="white">SALES INVOICE</center></h1></pre> </h1>
<font face="Monotype Corsiva" size=6><h3><pre>                     BILL NO: <span id='abc' name="bcd"></span></pre></h3></font>
<pre>                                                  <span class="price">You Paid Rs.<?php echo $pri ; ?></span></pre>

<?php
f1();
f2();
f3();
f4();
f5();
f6();
f7();
f8();
f9();
f10();
f11();
f12();
f13();
f14();
f15();
f16();

function f1()
{
	$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn,"project");
$que1="select quantity from temp_prod where prod_name='IPhone' AND model_name='4'";
if($res=$conn->query($que1))
{
	$row=$res->fetch_assoc();
	$q=$row['quantity'];
	$sql="call prod_fetch('IPhone','4',$q)";
if($res=$conn->query($sql))
{
while($row1=$res->fetch_assoc())
{	

echo "<table border='4' style='width:40%;border-collapse:collapse' align='center'>                                                                                                                                                                                                              
                             <tr><th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B>  Product Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Model Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Unique No.</B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Price </B></th></tr></font>";

echo "<tr><td align='center' style='padding:8px'><font color='red'><B>".$row1['prod_name']."</td><td align='center'><font color='red'><B>".$row1['model_name']."</td><td align='center'><font color='red'><B>".$row1['imei']."</td><td align='center'><font color='red'><B>".$row1['price']."</td></tr></font>";
echo "</table>";                                                                                 
}
}
}
}

function f2()
{
	$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn,"project");
$que2="select quantity from temp_prod where prod_name='IPhone' AND model_name='4s'";
if($res1=$conn->query($que2))
{
	$row=$res1->fetch_assoc();
	$q=$row['quantity'];
	$sql="call prod_fetch('IPhone','4s',$q)";
if($res1=$conn->query($sql))
{
while($row1=$res1->fetch_assoc())
{	

echo "<table border='4' style='width:40%;border-collapse:collapse' align='center'>                                                                                                                                                                                                              
                             <tr><th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B>  Product Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Model Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Unique No.</B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Price </B></th></tr></font>";

echo "<tr><td align='center' style='padding:8px'><font color='red'><B>".$row1['prod_name']."</td><td align='center'><font color='red'><B>".$row1['model_name']."</td><td align='center'><font color='red'><B>".$row1['imei']."</td><td align='center'><font color='red'><B>".$row1['price']."</td></tr></font>";
echo "</table>";                                                                                 
}
}
}
}


function f3()
{
	$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn,"project");
$que3="select quantity from temp_prod where prod_name='IPhone' AND model_name='3'";
if($res2=$conn->query($que3))
{
	$row=$res2->fetch_assoc();
	$q=$row['quantity'];
	$sql="call prod_fetch('IPhone','3',$q)";
if($res2=$conn->query($sql))
{
while($row1=$res2->fetch_assoc())
{	

echo "<table border='4' style='width:40%;border-collapse:collapse' align='center'>                                                                                                                                                                                                              
                             <tr><th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B>  Product Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Model Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Unique No.</B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Price </B></th></tr></font>";

echo "<tr><td align='center' style='padding:8px'><font color='red'><B>".$row1['prod_name']."</td><td align='center'><font color='red'><B>".$row1['model_name']."</td><td align='center'><font color='red'><B>".$row1['imei']."</td><td align='center'><font color='red'><B>".$row1['price']."</td></tr></font>";
echo "</table>";                                                                                 
}
}
}
}



function f4()
{
	$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn,"project");
$que3="select quantity from temp_prod where prod_name='IPhone' AND model_name='3s'";
if($res3=$conn->query($que3))
{

	$row=$res3->fetch_assoc();
	$q=$row['quantity'];
	$sql="call prod_fetch('IPhone','3s',$q)";
if($res3=$conn->query($sql))
{
while($row1=$res3->fetch_assoc())
{	

echo "<table border='4' style='width:40%;border-collapse:collapse' align='center'>                                                                                                                                                                                                              
                             <tr><th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B>  Product Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Model Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Unique No.</B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Price </B></th></tr></font>";

echo "<tr><td align='center' style='padding:8px'><font color='red'><B>".$row1['prod_name']."</td><td align='center'><font color='red'><B>".$row1['model_name']."</td><td align='center'><font color='red'><B>".$row1['imei']."</td><td align='center'><font color='red'><B>".$row1['price']."</td></tr></font>";
echo "</table>";                                                                                  
}
}
}
}


function f5()
{
	$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn,"project");
$que4="select quantity from temp_prod where prod_name='IPad' AND model_name='Mini'";
if($res=$conn->query($que4))
{
	$row=$res->fetch_assoc();
	$q=$row['quantity'];
	$sql1="call prod_fetch('IPad','Mini',$q)";
if($res=$conn->query($sql1))
{
while($row1=$res->fetch_assoc())
{	

echo "<table border='4' style='width:40%;border-collapse:collapse' align='center'>                                                                                                                                                                                                              
                             <tr><th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B>  Product Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Model Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Unique No.</B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Price </B></th></tr></font>";

echo "<tr><td align='center' style='padding:8px'><font color='red'><B>".$row1['prod_name']."</td><td align='center'><font color='red'><B>".$row1['model_name']."</td><td align='center'><font color='red'><B>".$row1['imei']."</td><td align='center'><font color='red'><B>".$row1['price']."</td></tr></font>";
echo "</table>";                                                                                  
}
}
}
}


function f6()
{
	$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn,"project");
$que5="select quantity from temp_prod where prod_name='IPad' AND model_name='Wi-fi'";
if($res=$conn->query($que5))
{
	$row=$res->fetch_assoc();
	$q=$row['quantity'];
	$sql1="call prod_fetch('IPad','Wi-fi',$q)";
if($res=$conn->query($sql1))
{
while($row1=$res->fetch_assoc())
{	

echo "<table border='4' style='width:40%;border-collapse:collapse' align='center'>                                                                                                                                                                                                              
                             <tr><th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B>  Product Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Model Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Unique No.</B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Price </B></th></tr></font>";

echo "<tr><td align='center' style='padding:8px'><font color='red'><B>".$row1['prod_name']."</td><td align='center'><font color='red'><B>".$row1['model_name']."</td><td align='center'><font color='red'><B>".$row1['imei']."</td><td align='center'><font color='red'><B>".$row1['price']."</td></tr></font>";
echo "</table>";                                                                                  
}
}
}
}

function f7()
{
	$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn,"project");
$que6="select quantity from temp_prod where prod_name='IPad' AND model_name='3G'";
if($res=$conn->query($que6))
{
	$row=$res->fetch_assoc();
	$q=$row['quantity'];
	$sql1="call prod_fetch('IPad','3G',$q)";
if($res=$conn->query($sql1))
{
while($row1=$res->fetch_assoc())
{	

echo "<table border='4' style='width:40%;border-collapse:collapse' align='center'>                                                                                                                                                                                                              
                             <tr><th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B>  Product Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Model Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Unique No.</B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Price </B></th></tr></font>";

echo "<tr><td align='center' style='padding:8px'><font color='red'><B>".$row1['prod_name']."</td><td align='center'><font color='red'><B>".$row1['model_name']."</td><td align='center'><font color='red'><B>".$row1['imei']."</td><td align='center'><font color='red'><B>".$row1['price']."</td></tr></font>";
echo "</table>";                                                                                
}
}
}
}


function f8()
{
	$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn,"project");
$que7="select quantity from temp_prod where prod_name='IPad' AND model_name='Air'";
if($res=$conn->query($que7))
{
	$row=$res->fetch_assoc();
	$q=$row['quantity'];
	$sql1="call prod_fetch('IPad','Air',$q)";
if($res=$conn->query($sql1))
{
while($row1=$res->fetch_assoc())
{	

echo "<table border='4' style='width:40%;border-collapse:collapse' align='center'>                                                                                                                                                                                                              
                             <tr><th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B>  Product Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Model Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Unique No.</B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Price </B></th></tr></font>";

echo "<tr><td align='center' style='padding:8px'><font color='red'><B>".$row1['prod_name']."</td><td align='center'><font color='red'><B>".$row1['model_name']."</td><td align='center'><font color='red'><B>".$row1['imei']."</td><td align='center'><font color='red'><B>".$row1['price']."</td></tr></font>";
echo "</table>";                                                                                  
}
}
}
}


function f9()
{
	$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn,"project");
$que8="select quantity from temp_prod where prod_name='Macbook' AND model_name='Imac'";
if($res=$conn->query($que8))
{
	$row=$res->fetch_assoc();
	$q=$row['quantity'];
	$sql="call prod_fetch('Macbook','Imac',$q)";
if($res=$conn->query($sql))
{
while($row1=$res->fetch_assoc())
{	

echo "<table border='4' style='width:40%;border-collapse:collapse' align='center'>                                                                                                                                                                                                              
                             <tr><th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B>  Product Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Model Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Unique No.</B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Price </B></th></tr></font>";

echo "<tr><td align='center' style='padding:8px'><font color='red'><B>".$row1['prod_name']."</td><td align='center'><font color='red'><B>".$row1['model_name']."</td><td align='center'><font color='red'><B>".$row1['imei']."</td><td align='center'><font color='red'><B>".$row1['price']."</td></tr></font>";
echo "</table>";                                                                                  
}
}
}
}


function f10()
{
	$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn,"project");
$que9="select quantity from temp_prod where prod_name='Macbook' AND model_name='pro'";
if($res=$conn->query($que9))
{
	$row=$res->fetch_assoc();
	$q=$row['quantity'];
	$sql="call prod_fetch('Macbook','pro',$q)";
if($res=$conn->query($sql))
{
while($row1=$res->fetch_assoc())
{	

echo "<table border='4' style='width:40%;border-collapse:collapse' align='center'>                                                                                                                                                                                                              
                             <tr><th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B>  Product Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Model Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Unique No.</B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Price </B></th></tr></font>";

echo "<tr><td align='center' style='padding:8px'><font color='red'><B>".$row1['prod_name']."</td><td align='center'><font color='red'><B>".$row1['model_name']."</td><td align='center'><font color='red'><B>".$row1['imei']."</td><td align='center'><font color='red'><B>".$row1['price']."</td></tr></font>";
echo "</table>";                                                                                  
}
}
}
}

function f11()
{
	$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn,"project");
$que10="select quantity from temp_prod where prod_name='Macbook' AND model_name='Air'";
if($res=$conn->query($que10))
{
	$row=$res->fetch_assoc();
	$q=$row['quantity'];
	$sql="call prod_fetch('Macbook','Air',$q)";
if($res=$conn->query($sql))
{
while($row1=$res->fetch_assoc())
{	

echo "<table border='4' style='width:40%;border-collapse:collapse' align='center'>                                                                                                                                                                                                              
                             <tr><th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B>  Product Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Model Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Unique No.</B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Price </B></th></tr></font>";

echo "<tr><td align='center' style='padding:8px'><font color='red'><B>".$row1['prod_name']."</td><td align='center'><font color='red'><B>".$row1['model_name']."</td><td align='center'><font color='red'><B>".$row1['imei']."</td><td align='center'><font color='red'><B>".$row1['price']."</td></tr></font>";
echo "</table>";                                                                                  
}
}
}
}


function f12()
{
	$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn,"project");
$que11="select quantity from temp_prod where prod_name='Macbook' AND model_name='Mini'";
if($res=$conn->query($que11))
{
	$row=$res->fetch_assoc();
	$q=$row['quantity'];
	$sql="call prod_fetch('Macbook','Mini',$q)";
if($res=$conn->query($sql))
{
while($row1=$res->fetch_assoc())
{	

echo "<table border='4' style='width:40%;border-collapse:collapse' align='center'>                                                                                                                                                                                                              
                             <tr><th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B>  Product Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Model Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Unique No.</B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Price </B></th></tr></font>";

echo "<tr><td align='center' style='padding:8px'><font color='red'><B>".$row1['prod_name']."</td><td align='center'><font color='red'><B>".$row1['model_name']."</td><td align='center'><font color='red'><B>".$row1['imei']."</td><td align='center'><font color='red'><B>".$row1['price']."</td></tr></font>";
echo "</table>";                                                                                  
}
}
}
}


function f13()
{
	$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn,"project");
$que12="select quantity from temp_prod where prod_name='IPod' AND model_name='Shuffle'";
if($res=$conn->query($que12))
{
	$row=$res->fetch_assoc();
	$q=$row['quantity'];
	$sql="call prod_fetch('IPods','Shuffle',$q)";
if($res=$conn->query($sql))
{
while($row1=$res->fetch_assoc())
{	

echo "<table border='4' style='width:40%;border-collapse:collapse' align='center'>                                                                                                                                                                                                              
                             <tr><th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B>  Product Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Model Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Unique No.</B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Price </B></th></tr></font>";

echo "<tr><td align='center' style='padding:8px'><font color='red'><B>".$row1['prod_name']."</td><td align='center'><font color='red'><B>".$row1['model_name']."</td><td align='center'><font color='red'><B>".$row1['imei']."</td><td align='center'><font color='red'><B>".$row1['price']."</td></tr></font>";
echo "</table>";
}
}
}
}

function f14()
{
	$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn,"project");
$que13="select quantity from temp_prod where prod_name='IPod' AND model_name='Nano'";
if($res=$conn->query($que13))
{
	$row=$res->fetch_assoc();
	$q=$row['quantity'];
	$sql="call prod_fetch('IPods','Nano',$q)";
if($res=$conn->query($sql))
{
while($row1=$res->fetch_assoc())
{	

echo "<table border='4' style='width:40%;border-collapse:collapse' align='center'>                                                                                                                                                                                                              
                             <tr><th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B>  Product Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Model Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Unique No.</B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Price </B></th></tr></font>";

echo "<tr><td align='center' style='padding:8px'><font color='red'><B>".$row1['prod_name']."</td><td align='center'><font color='red'><B>".$row1['model_name']."</td><td align='center'><font color='red'><B>".$row1['imei']."</td><td align='center'><font color='red'><B>".$row1['price']."</td></tr></font>";
echo "</table>";                                                                                  
}
}
}
}


function f15()
{
	$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn,"project");
$que14="select quantity from temp_prod where prod_name='IPod' AND model_name='Classic'";
if($res=$conn->query($que14))
{
	$row=$res->fetch_assoc();
	$q=$row['quantity'];
	$sql="call prod_fetch('IPods','Classic',$q)";
if($res=$conn->query($sql))
{
while($row1=$res->fetch_assoc())
{	

echo "<table border='4' style='width:40%;border-collapse:collapse' align='center'>                                                                                                                                                                                                              
                             <tr><th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B>  Product Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Model Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Unique No.</B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Price </B></th></tr></font>";

echo "<tr><td align='center' style='padding:8px'><font color='red'><B>".$row1['prod_name']."</td><td align='center'><font color='red'><B>".$row1['model_name']."</td><td align='center'><font color='red'><B>".$row1['imei']."</td><td align='center'><font color='red'><B>".$row1['price']."</td></tr></font>";
echo "</table>";                                                                                  
}
}
}
}


function f16()
{
	$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn,"project");
$que15="select quantity from temp_prod where prod_name='IPod' AND model_name='Touch'";
if($res=$conn->query($que15))
{
	$row=$res->fetch_assoc();
	$q=$row['quantity'];
	$sql="call prod_fetch('IPods','Touch',$q)";
if($res=$conn->query($sql))
{
while($row1=$res->fetch_assoc())
{	

echo "<table border='4' style='width:40%;border-collapse:collapse' align='center'>                                                                                                                                                                                                              
                             <tr><th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B>  Product Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Model Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Unique No.</B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Price </B></th></tr></font>";

echo "<tr><td align='center' style='padding:8px'><font color='red'><B>".$row1['prod_name']."</td><td align='center'><font color='red'><B>".$row1['model_name']."</td><td align='center'><font color='red'><B>".$row1['imei']."</td><td align='center'><font color='red'><B>".$row1['price']."</td></tr></font>";
echo "</table>";                                                                                  
}
}
}
}


?>


<br><br><br><br><br>
<pre><input type="button" name="back" class="button button1" onclick="location.href = 'http://localhost/cart.php';" style="width:100px;height:30px" value="Back">                                                                                                                                                            <input type="button" name="next" class="button button2" onclick="location.href = 'http://localhost/FRAME 11.html';" style="width:100px;height:30px" value="Proceed"></pre> 							  


</body>

</html>
