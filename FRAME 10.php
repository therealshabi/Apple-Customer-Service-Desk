<?php
session_start();
?>

<HTML>
<head>

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

mysqli_select_db($conn,"project");

$final=$_SESSION["total"];
$ref=$_POST["referenceid"];

if(isset($_POST["referenceid"]))
{
$qre="update complaint set complaint_no=$ref where complaint_no='' ";
$ure="update comp_hard_prob set complaint_no=$ref where complaint_no='' ";
$vre="update comp_soft_prob set complaint_no=$ref where complaint_no='' ";
}

if($conn->query($qre) && $conn->query($ure) && $conn->query($vre))
{
header("Location:FRAME 11.html");
}
/*if($conn->query($ure))
{
header("Location:FRAME 11.html");
}

if($conn->query($vre))
{
header("Location:FRAME 11.html");
}*/








$conn->close();
?>







<script type="text/javascript">
function ra()
{
 var a= Math.floor(Math.random() * 100000000);
 document.getElementById("rid").value=a;
// document.getElementById('btn').disabled = true;
}
</script>
</head>
<BODY background="http://localhost/Apple complaint.jpg" onload="ra()">
<h1 style="font-size:300%"> <pre> <b> <i>     			<u>SUCCESS!!</u> </i> </b> </pre> </h1>
<form method="post" action ="FRAME 10.php">
<h2 style="font-size:250%"> <pre>    		    Your Bill has been generated !! </pre> </h2> <b><pre><font size=5 face="Arial">                                                              Your REFERENCE ID is: </b>   <input type="text" name="referenceid" style="width:200px;height:35px" id="rid">   
                         <br><pre>                                THE FINAL COST IS:   <input type="text" name="estimatedcost" style="width:200px;height:35px" value="<?php echo $final ?>">
</pre><pre style="font-size:150%">                  Your Apple Device Will Be Ready Within 7 Days*  </b> </pre>
<pre>               									   <input type="submit" style="width:100px;height:35px" value="Proceed">
</form>                   
                   <u>*TERMS AND CONDITIONS</u>
        	   1. Bring bill while collecting device.
        	   2. Look for IMEI number & check if it same.
        	   3. We are not responsible if your device is not
        	      collected within 7 days of bill generation.
</pre>
</BODY>
</HTML>