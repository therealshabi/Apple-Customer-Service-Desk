<html>
<head>
<title>Apple Macbook</title>
<style>
.button3 {
    background-color: white;
  font-size: 20px;
  border-radius:4px;
  text-align: center;
    color: black;
    border: 2px solid green;
}

.button3:hover {
    background-color:green;
    color: white;
}
.button2 {
    background-color: white;
  font-size: 20px;
  border-radius:4px;
  text-align: center;
    color: black;
    border: 2px solid blue;
}

.button2:hover {
    background-color:blue;
    color: white;
}
.error
{
  color:red;
  font-size:25px;
  text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;
}
</style>

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
$mac=$_POST['Name'];
if($mac!="")
{
 $que="select name,mackbook_type,purchase_date from macbook where mac_address='$mac'";
 $res=$conn->query($que);
 $row=$res->fetch_assoc();
 $err=$name1=$imodel=$da="";


 if($res->num_rows>0)
 {

 $name1=$row['name'];
 $imodel=$row['mackbook_type'];
 $da=$row['purchase_date'];
 }
 else{
 $err= "ERROR! INVALID MAC ADDRESS";
 }
}
$conn->close();
?>


</head>
<body background="http://localhost/Background.gif">
<img src="http://localhost/Macbook.png" align="left"><BR><pre><h1><font face="Monotype Corsiva" color="White" size=9>                APPLE MACBOOK</pre></h1>

<h2><pre><centre><font face="Comic Sans MS" color="White" size=4>                   PLEASE ENTER YOUR MAC ADDRESS: - <img src= "http://localhost/Question Mark.png" title="Click the Apple menu at the top left of the screen;  Click 'About This Mac'; Click the 'More Info...' button (this will launch 'System Profiler'); Click the 'Network' line item in the left column; In the right panel, under the 'Ethernet' section, you will see the Ethernet MAC address listed,  or in the right panel, under the 'airport' section, you will find the Airport MAC address."> </center></pre></h1>
<form action="FRAME 6.php" method="post"> <pre>                                                           <input type="text" name="Name"> <button type="submit">Show Details</button><span class="error">  <?php echo $err; ?></span></pre>

</form>  <?php
echo "<table align='center' style='text-align:center'><tr><th><font color='white' face='Bookman Old Style'><h2><b>CUSTOMER NAME     </b></h2></font></th><th></th><th></th><th><font color='white' face='Bookman Old Style'><h2><b>DEVICE</b></h2></font></th><th></th><th><th></th></th><th><font color='white' face='Bookman Old Style'><h2><b>DATE OF PURCHASE</b></h2></font></th></tr>";
echo "<tr><td>"."<font color='white' size='4'>".$name1."</font>"."</td><td>"."</td><td>"."</td><td>"."<font color='white' size='4'> ".$imodel."</font>"."</td><td>"."</td><td>"."</td><td>"."</td><td>"."<font color='white' size='4'>".$da."</font>"."</td></tr>";
echo "</table>";
?>
</pre>
<form><pre>
                                                                        <TEXTAREA rows="17" cols="50" id="nam">
    SPECIFICATIONS 

Operating system-Mac OS X
Screen size (diagonal)-27 inches
CPU brand-Intel
Graphics type-Switchable
Integrated GPU model-HD Graphics 4000
Base Discrete GPU brand-Nvidia
Base discrete GPU model-GeForce GTX 660M
Base RAM size-8 GB
Base storage capacity-1 TB
Wi-Fi-Yes</TEXTAREA>
<input type="button" name ="back" value="Back" style="width:100px;height:30px" onclick="location.href = 'http://localhost/FRAME%204.php';" class="button button3">                                                                                                                                <input type="button" name ="Next" value="Next" style="width:100px;height:30px" onclick="location.href = 'http://localhost/FRAME%209.php';" class="button button2">
</pre>
</form>
</body>
</html>