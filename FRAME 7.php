<html>
<head>
<title>Apple IPhone</title>
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
$imei=$_POST['Name'];
if($imei!="")
{

$que="select name,iphone_model,purchase_date from iphone where imei_no='$imei'";
$res=$conn->query($que);
$row=$res->fetch_assoc();
$err="";

if($res->num_rows>0)
{

$name1=$row['name'];
$imodel=$row['iphone_model'];
$da=$row['purchase_date'];
}
else{
$err= "<font color='red'>ERROR! INVALID IMEI NUMBER</font>";
}
}


$conn->close();
?>



</head>
<body background="http://localhost/Background.gif">
<img src="http://localhost/IPhone.png" align="left"><BR><pre><h1><font face="Monotype Corsiva" color="White" size=9>                APPLE IPHONE</pre></h1>

<h2><pre><centre><font face="Comic Sans MS" color="White" size=4>                   PLEASE ENTER YOUR IMEI NUMBER: - <img src= "http://localhost/Question Mark.png" title="
The International Mobile Equipment Identity or IMEI is a number, usually unique, to identify GSM, WCDMA, and iDEN mobile phones.These are instructions to find your iPhone's IMEI number.
Steps :s
1.Tap to open Phone from your Springboard. 
2.Press to select Keypad from the tabs at the bottom  
of the screen then input *#06#. 
3.Your IMEI number will be displayed on the screen."> </center></pre></h1>
<form action="FRAME 7.php" method="post"> <pre>                        <input type="text" name="Name"> <input type="submit" value="Show Details"><span class="error">  <?php echo $err; ?></span></pre>

</form><br>
<?php
echo "<table align='center' style='text-align:center'><tr><th><font color='white' face='Bookman Old Style'><h2><b>CUSTOMER NAME     </b></h2></font></th><th></th><th></th><th><font color='white' face='Bookman Old Style'><h2><b>DEVICE</b></h2></font></th><th></th><th><th></th></th><th><font color='white' face='Bookman Old Style'><h2><b>DATE OF PURCHASE</b></h2></font></th></tr>";
echo "<tr><td>"."<font color='white' size='4'>".$name1."</font>"."</td><td>"."</td><td>"."</td><td>"."<font color='white' size='4'> ".$imodel."</font>"."</td><td>"."</td><td>"."</td><td>"."</td><td>"."<font color='white' size='4'>".$da."</font>"."</td></tr>";
echo "</table>";
?></pre>
<form><pre>
                                                                        <TEXTAREA rows="17" cols="50">
        SPECIFICATIONS
																		
2G Network-GSM 850 / 900 / 1800 / 1900
SIM-Mini-SIM
Announced-2007, January. Released 2007, June
Status-Discontinued
BODY-Dimensions-115 x 61 x 11.6 mm (4.53 x 2.40 x 0.46 in)
Weight-135 g (4.76 oz)
DISPLAY Type-TFT capacitive touchscreen, 16M colors
Size-320 x 480 pixels, 3.5 inches (~165 ppi pixel density)
Multitouch-Yes \n Protection-Corning Gorilla Glass, oleophobic coating
SOUND Alert types-Vibration, proprietary ringtones; Loudspeaker-Yes
3.5mm jack-Yes; MEMORY Card slot-No
Internal-4/8/16 GB
DATA GPRS-Yes; EDGE-Yes
WLAN-Wi-Fi 802.11b/g 
Bluetooth-Yes, v2.0, headset support only
USB-Yes, v2.0
CAMERA-Primary 2 MP, 1600x1200 pixels
Video-No; Secondary-No
FEATURES: OS-iOS, upgradable to iOS 3.1.3
CPU-412 MHz ARM 11
GPU-PowerVR MBX
Sensors -Accelerometer, proximity
Messaging-SMS (threaded view), Email
Browser-HTML (Safari)
Radio-No; GPS-No; Java-No 
</TEXTAREA>
<input type="button" name ="back" value="Back" style="width:100px;height:30px" onclick="location.href = 'http://localhost/FRAME%204.php';" class="button button3">                                                                                                                                <input type="button" name ="Next" value="Next" style="width:100px;height:30px" onclick="location.href = 'http://localhost/FRAME%209.php';" class="button button2">
</pre>
</form>

</body>
</html>