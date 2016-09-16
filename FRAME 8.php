<html>
<head>
<title>Apple IPod</title>
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
$udid=$_POST['Name'];
if($udid!="")
{

$que="select name,ipod_type,purchase_date from ipod where udid_no='$udid'";
$res=$conn->query($que);
$row=$res->fetch_assoc();
$err="";

if($res->num_rows>0)
{

$name1=$row['name'];
$imodel=$row['ipod_type'];
$da=$row['purchase_date'];
}
else{
$err= "<font color='red' size='5'>ERROR! INVALID IMEI NUMBER</font>";
}
}


$conn->close();
?>




</head>
<body background="http://localhost/Background.gif">
<img src="http://localhost/IPod.png" align="left"><BR><pre><h1><font face="Monotype Corsiva" color="White" size=9>                APPLE IPOD</pre></h1>

<h2><pre><centre><font face="Comic Sans MS" color="White" size=4>                   PLEASE ENTER YOUR UDID NUMBER: - <img src= "http://localhost/Question Mark.png" title="Unique Device Identifier (UDID) is the series of numbers and letters used by Apple and developers to uniquely identify your IPod device. Follow these instructions to retrieve your UDID number for IPod device.
STEPS : 
1.Plug in the iPod to your computer.
2.Open iTunes.
3.Select IPod in left navigation panel. 
4.Click on Serial Number next to an image of IPod and it will reveal the UDID.
5.Press CTRL+C on your keyboard to copy the number."> </center></pre></h1>
<form action="FRAME 8.php" method="post"> <pre>                                                   <input type="text" name="Name"> <input type="submit" value="Show Details"><span class="error">  <?php echo $err; ?></span></pre>


</form><br>    
<?php
echo "<table align='center' style='text-align:center'><tr><th><font color='white' face='Bookman Old Style'><h2><b>CUSTOMER NAME     </b></h2></font></th><th></th><th></th><th><font color='white' face='Bookman Old Style'><h2><b>DEVICE</b></h2></font></th><th></th><th><th></th></th><th><font color='white' face='Bookman Old Style'><h2><b>DATE OF PURCHASE</b></h2></font></th></tr>";
echo "<tr><td>"."<font color='white' size='4'>".$name1."</font>"."</td><td>"."</td><td>"."</td><td>"."<font color='white' size='4'> ".$imodel."</font>"."</td><td>"."</td><td>"."</td><td>"."</td><td>"."<font color='white' size='4'>".$da."</font>"."</td></tr>";
echo "</table>";
?>

</pre>
<form><pre>
                                                                        <TEXTAREA rows="17" cols="50">
       SPECIFICATIONS

Length-3.3 inches
Width-0.98 inches
Thickness-0.33 inches
Weight-0.05 pounds
Color-White
DISPLAY: Touchscreen type-None
Multitouch-No
CONNECTIVITY : Wi-Fi-No
Bluetooth-No 
STORAGE Internal size-512 GB, 1 GB
External storage-No
SOFTWARE : 
Notable services supported-iTunes
Audio codecs supported-WAV, AAC, MP3, .AA (audible)
PORTS : Headphone jack-3.5mm
Data connection(s)-USB plug
BATTERY : Quoted audio time-12 hr
Removable-No	   																		
</TEXTAREA>
<input type="button" name ="back" value="Back" style="width:100px;height:30px" onclick="location.href = 'http://localhost/FRAME%204.php';" class="button button3">                                                                                                                                <input type="button" name ="Next" value="Next" style="width:100px;height:30px" onclick="location.href = 'http://localhost/FRAME%209.php';" class="button button2">                                
</pre>
</form>

</body>
</html>