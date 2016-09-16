<html>
<head>
<title>Apple IPad</title>
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
 $que="select name,ipad_type,purchase_date from ipad where imei_no='$udid'";
 $res=$conn->query($que);
 $row=$res->fetch_assoc();
 $err="";


 if($res->num_rows>0)
 {

 $name1=$row['name'];
 $imodel=$row['ipad_type'];
 $da=$row['purchase_date'];
 }
 else{
 $err= "ERROR! INVALID UDID NUMBER";
 }
}
$conn->close();
?>


</head>
<title>Apple IPad</title>
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
</head>
<body background="http://localhost/Background.gif">
<img src="http://localhost/Ipad.jpg" align="left" width="210" height="280" ><BR><pre><h1><font face="Monotype Corsiva" color="White" size=9>                                  THE IPADS</pre></h1>

<h2><pre><centre><font face="Comic Sans MS" color="White" size=4>                                   PLEASE ENTER YOUR UDID NUMBER: - <img src= "http://localhost/Question Mark.png" class="i" title="Unique Device Identifier (UDID) is the series of numbers and letters  used by Apple and developers to uniquely identify your IPad device.   Follow these instructions to retrieve your UDID number for iPhone or iPad device. 
STEPS : 
1.Plug in the iPhone or iPad to your computer.  
2.Open iTunes.  
3.Select a phone in left navigation panel.  
4.Click on Serial Number next to an image of a phone and it will reveal the UDID.  
5.Press CTRL+C on your keyboard to copy the number."> </center></pre></h1>
<form action="FRAME 5.php" method="post"> <pre>                                     <input type="text" name="Name"> <button type="submit">Show Details</button><span class="error">  <?php echo $err; ?></span></pre>

</form>    <?php 
echo "<table align='center' style='text-align:center'><tr><th><font color='white' face='Bookman Old Style'><h2><b>CUSTOMER NAME       </b></h2></font></th><th></th><th></th><th><font color='white' face='Bookman Old Style'><h2><b>DEVICE</b></h2></font></th><th></th><th><th></th></th><th><font color='white' face='Bookman Old Style'><h2><b>DATE OF PURCHASE</b></h2></font></th></tr>";
echo "<tr><td>"."<font color='white' size='4'>".$name1."</font>"."</td><td>"."</td><td>"."</td><td>"."<font color='white' size='4'> ".$imodel."</font>"."</td><td>"."</td><td>"."</td><td>"."</td><td>"."<font color='white' size='4'>".$da."</font>"."</td></tr>";
echo "</table>";
?>
</pre>
<form><pre>
                                                                        <TEXTAREA rows="17" cols="50">
     SPECIFICATIONS
	 
Height-9.5 inches
Width-7.31 inches
Thickness-0.37 inches
Weight-1.44 pounds
Color-Silver / Black, Silver / White
Speakers-Mono
DISPLAY
Screen size (diagonal)-9.7 inches
Technology-IPS LCD
Resolution (X)-2048 px
Resolution (Y)-1536 px; PPI-264
Touchscreen type-Capacitive
Multitouch-Yes
SOFTWARE
Operating system-iOS; Launch OS version-6
Media streaming-AirPlay
PROCESSOR
CPU brand-Apple
CPU model-A6X
Clock speed-1.4 GHz; Cores-2
MEMORY
RAM size-1 GB
STORAGE
Internal size-64 GB, 128 GB, 32 GB, 16 GB
CONNECTIVITY: Wi-Fi-Yes
Wi-Fi support-802.11n, 802.11g, 802.11b, 802.11a 
frequencies-5GHz, 2.4GHz
Bluetooth-Yes
Bluetooth version-4.0
FRONT CAMERA: Effective pixels-1.2 megapixels
Video resolution-720p
Video framerate-30
REAR CAMERA
Effective pixels-5 megapixels
Focus type-Autofocus
Video resolution-1080p
Video framerate-30
PORTS: Video out-Yes
Headphone-3.5mm
Data connections-Lightning
SENSORS: Sensors-Ambient Light, Gyroscope, Accelerometer
BATTERY: Capacity-42.5 Wh; Removable-No
Quoted use time-10 hr	 
</TEXTAREA>
<input type="button" name ="back" value="Back" style="width:100px;height:30px" onclick="location.href = 'http://localhost/FRAME%204.php';" class="button button3">                                                                                                                                <input type="button" name ="Next" value="Next" style="width:100px;height:30px" onclick="location.href = 'http://localhost/FRAME%209.php';" class="button button2">
</pre>
</form>

</body>
</html>