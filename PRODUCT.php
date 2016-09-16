<?php
session_start();
$_SESSION['sum']=0;
?>
<html>
<head>
<title>Product</title>
<style>
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
.button2 {
    background-color: white;
	font-size: 20px;
	border-radius:8px;
	text-align: center;
    color: black;
    border: 2px solid black;
}

.button2:hover {
    background-color:green;
    color: white;
}
.button3 {
    background-color: white;
	font-size: 20px;
	border-radius:8px;
    color: black;
	text-align: center;
    border: 2px solid black;
}

.button3:hover {
    background-color:green;
    color: white;
}h1
{
 text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
}
</style>
<script type="text/javascript">
var sum=count=0;
function my()
{
document.getElementById('nex').disabled = true;
document.getElementById('nex').style.border="2px solid white";
document.getElementById('nex').style.backgroundColor="black";
document.getElementById('nex').value="DISABLED";
}
var price1,price2,price3,price4,price5,price6,price7,price8,price9,price10,price11,price12,price13,price14,price15,price16,sum=0;
var q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15,q16;
function my1(checkbox)
{
	if(checkbox.checked)
	{ 
		count++;
        document.getElementById('nex').disabled = false;
        document.getElementById('nex').style.backgroundColor="white";
        document.getElementById('nex').style.border="2px solid blue";
       document.getElementById('nex').style.color="solid black";
       document.getElementById('nex').onmouseenter=function()
       {
	   nex.style.backgroundColor="blue";
       };
      document.getElementById('nex').onmouseleave=function()
       {
	   nex.style.backgroundColor="white";
	   nex.style.border="2px solid blue";
       };
        document.getElementById('nex').value="Confirm The Price";

		//Starts
		if(document.getElementById("s1").checked)
		{	
		 q1=document.getElementById("q1").value;
		 price1=50500;
		 price1=price1*q1;
		 
		}
		else
		{
			price1=0;
		}
		if(document.getElementById("s2").checked)
		{
		 q2=document.getElementById("q2").value;
		 price2=57000;
		 price2=price2*q2;
		}
		else
		{
			price2=0;
		}
		if(document.getElementById("s3").checked)
		{
		 q3=document.getElementById("q3").value;
		 price3=66000;
		 price3=price3*q3;
		}
		else
		{
			price3=0;
		}
		if(document.getElementById("s4").checked)
		{
		 q4=document.getElementById("q4").value;
		 price4=60500;
		 price4=price4*q4;
		 
		}
		else
		{
			price4=0;
		}
		if(document.getElementById("s5").checked)
		{
		 q5=document.getElementById("q5").value;
		 price5=15000;
		 price5=price5*q5;
		}
		else
		{
			price5=0;
		}
		if(document.getElementById("s6").checked)
		{
		 q6=document.getElementById("q6").value;
		 price6=18000;
		 price6=price6*q6;
		 
		}
		else
		{
			price6=0;
		}
		if(document.getElementById("s7").checked)
		{
		 q7=document.getElementById("q7").value;
		 price7=22000;
		 price7=price7*q7;
		 
		}
		else
		{
			price7=0;
		}
		if(document.getElementById("s8").checked)
		{
		 q8=document.getElementById("q8").value;
		 price8=25000;
		 price8=price8*q8;
		 
		}
		else
		{
			price8=0;
		}
		if(document.getElementById("s9").checked)
		{
		 q9=document.getElementById("q9").value;
		 price9=32000;
		 price9=price9*q9;
		}
		else
		{
			price9=0;
		}
		if(document.getElementById("s10").checked)
		{
		 q10=document.getElementById("q10").value;
		 price10=36000;
		 price10=price10*q10;
		}
		else
		{
			price10=0;
		}
		if(document.getElementById("s11").checked)
		{
		 q11=document.getElementById("q11").value;
		 price11=39000;
		 price11=price11*q11;
		}
		else
		{
			price11=0;
		}
		if(document.getElementById("s12").checked)
		{
		q12=document.getElementById("q12").value;
		 price12=44000;
		 price12=price12*q12;
		}
		else
		{
			price12=0;
		}
		if(document.getElementById("s13").checked)
		{
		 q13=document.getElementById("q13").value;
		 price13=6000;
		 price13=price13*q13;
		}
		else
		{
			price13=0;
		}
		if(document.getElementById("s14").checked)
		{
		 q14=document.getElementById("q14").value;
		 price14=13000;
		 price14=price14*q14;
		}
		else
		{
			price14=0;
		}
		if(document.getElementById("s15").checked)
		{
		 q15=document.getElementById("q15").value;
		 price15=17500;
		 price15=price15*q15;
		}
		else
		{
			price15=0;
		}
		if(document.getElementById("s16").checked)
		{
		 q16=document.getElementById("q16").value;
		 price16=20500;
		 price16=price16*q16;
		}
		else
		{
			price16=0;
		}

  sum=price1+price2+price3+price4+price5+price6+price7+price8+price9+price10+price11+price12+price13+price14+price15+price16;
  document.getElementById("t2").value=sum;  	
}
else
{
	count--;

	if(!document.getElementById("s1").checked)
		{
		 price1=0;
		}
	if(!document.getElementById("s2").checked)
		{
		 price2=0;
		}
		if(!document.getElementById("s3").checked)
		{
		 price3=0;
		}
		if(!document.getElementById("s4").checked)
		{
		 price4=0;
		 
		}
		if(!document.getElementById("s5").checked)
		{
		 price5=0;
		 
		}
		if(!document.getElementById("s6").checked)
		{
		 price6=0;
		 
		}
		if(!document.getElementById("s7").checked)
		{
		 price7=0;
		 
		}
		if(!document.getElementById("s8").checked)
		{
		 price8=0;
		 
		}
		if(!document.getElementById("s9").checked)
		{
		 price9=0;
		 
		}
		if(!document.getElementById("s10").checked)
		{
		 price10=0;
		 
		}
		if(!document.getElementById("s11").checked)
		{
		 price11=0;
		 
		}
		
		if(!document.getElementById("s12").checked)
		{
		 price12=0;
		 
		}
		if(!document.getElementById("s13").checked)
		{
		 price13=0;
		 
		}
		if(!document.getElementById("s14").checked)
		{
		 price14=0;
		 
		}
		if(!document.getElementById("s15").checked)
		{
		 price15=0;
		 
		}
		if(!document.getElementById("s16").checked)
		{
		 price16=0;
		 
		}
		 sum=price1+price2+price3+price4+price5+price6+price7+price8+price9+price10+price11+price12+price13+price14+price15+price16;
		 document.getElementById("t2").value=sum;
		if(count==0)
	my();
}
}

</script>
<?php
//error_reporting(0);

$mac_imac=3;
$mac_pro=4;
$mac_air=2;
$mac_mini=3;
$i3=3;
$i3s=3;
$i4=2;
$i4s=2;
$ipad_3g=2;
$ipad_wifi=2;
$ipad_mini=3;
$ipad_air=2;
$ipod_shuf=4;
$ipod_nano=2;
$ipod_class=2;
$ipod_touch=3;

if(isset($_POST['t1']))
$_SESSION['sum']=$_POST['t1'];
else
{
	$_SESSION['sum']=0;
}

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

$sql="drop table if exists temp_prod";
$conn->query($sql);

$sql="Create table temp_prod(prod_name varchar(30), model_name varchar(30), quantity int, primary key(prod_name,model_name))";
$conn->query($sql);

if(isset($_POST['select1']))
{
	$que="select Apple_product,model_name from product where Apple_product='Macbook' AND model_name='IMac'";
    if($conn->query($que))
    {
    	if(isset($_POST["coun"]))
    	{
    	 $a=$_POST["coun"];	
	     $sql="Insert into temp_prod value ('Macbook','Imac','$a')";
	     $mac_imac=$mac_imac-$a;
	     $conn->query($sql);
	    }
	    else
	    {
	      $sql="Insert into temp_prod value ('Macbook','Imac','1')";
	      $mac_imac=$mac_imac-1;
	      $conn->query($sql);	
	    }
    }
    else
    {
    	echo "SORRY ! Product Out Of Stock";
    }
}
if(isset($_POST['select2']))
{
	$que="select Apple_product,model_name from product where Apple_product='Macbook' AND model_name='Pro'";
    if($conn->query($que))
    {
	if(isset($_POST["coun1"]))
    	{
    	 $b=$_POST["coun1"];	
	     $sql="Insert into temp_prod value ('Macbook','Pro','$b')";
	     $mac_pro=$mac_pro-$b;
	     $conn->query($sql);
	    }
	    else
	    {
	      $sql="Insert into temp_prod value ('Macbook','Pro','1')";
	      $mac_pro=$mac_pro-1;
	      $conn->query($sql);	
	    }
	}
    else
    {
    	echo "SORRY ! Product Out Of Stock";
    }
}
if(isset($_POST['select3']))
{
	$que="select Apple_product,model_name from product where Apple_product='Macbook' AND model_name='Air'";
    if($conn->query($que))
    {
    	 if(isset($_POST["coun2"]))
    	{
    	 $c=$_POST["coun2"];	
	     $sql="Insert into temp_prod value ('Macbook','Air','$c')";
	     $mac_air=$mac_air-$c;
	     $conn->query($sql);
	    }
	    else
	    {
	      $sql="Insert into temp_prod value ('Macbook','Air','1')";
	      $mac_air=$mac_air-1;
	      $conn->query($sql);	
	    }	
	}
    else
    {
    	echo "SORRY ! Product Out Of Stock";
    }
}
if(isset($_POST['select4']))
{
	$que="select Apple_product,model_name from product where Apple_product='Macbook' AND model_name='Mini'";
    if($conn->query($que))
    {
	if(isset($_POST["coun3"]))
    	{
    	 $d=$_POST["coun3"];	
	     $sql="Insert into temp_prod value ('Macbook','Mini','$d')";
	     $mac_mini=$mac_mini-$d;
	     $conn->query($sql);
	    }
	    else
	    {
	      $sql="Insert into temp_prod value ('Macbook','Mini','1')";
	      $mac_mini=$mac_mini-1;
	      $conn->query($sql);	
	    }
	}
    else
    {
    	echo "SORRY ! Product Out Of Stock";
    }
}
if(isset($_POST['select5']))
{
	$que="select Apple_product,model_name from product where Apple_product='IPhone' AND model_name='3'";
    if($conn->query($que))
    {
	if(isset($_POST["coun4"]))
    	{
    	 $e=$_POST["coun4"];	
	     $sql="Insert into temp_prod value ('IPhone','3','$e')";
	     $i3=$i3-$e;
	     $conn->query($sql);
	    }
	    else
	    {
	      $sql="Insert into temp_prod value ('IPhone','3','1')";
	      $i3=$i3-1;
	      $conn->query($sql);	
	    }
	}
    else
    {
    	echo "SORRY ! Product Out Of Stock";
    }
}
if(isset($_POST['select6']))
{
	$que="select Apple_product,model_name from product where Apple_product='IPhone' AND model_name='3s'";
    if($conn->query($que))
    {
	if(isset($_POST["coun5"]))
    	{
    	 $f=$_POST["coun5"];	
	     $sql="Insert into temp_prod value ('IPhone','3s','$f')";
	     $i3s=$i3s-$f;
	     $conn->query($sql);
	    }
	    else
	    {
	      $sql="Insert into temp_prod value ('IPhone','3s','1')";
	      $i3s=$i3s-1;
	      $conn->query($sql);	
	    }
	}
    else
    {
    	echo "SORRY ! Product Out Of Stock";
    }
}
if(isset($_POST['select7']))
{
	$que="select Apple_product,model_name from product where Apple_product='IPhone' AND model_name='4'";
    if($conn->query($que))
    {
	if(isset($_POST["coun6"]))
    	{
    	 $g=$_POST["coun6"];	
	     $sql="Insert into temp_prod value ('IPhone','4','$g')";
	     $i4=$i4-$g;
	     $conn->query($sql);
	    }
	    else
	    {
	      $sql="Insert into temp_prod value ('IPhone','4','1')";
	      $i4=$i4-1;
	      $conn->query($sql);	
	    }
	}
    else
    {
    	echo "SORRY ! Product Out Of Stock";
    }
}
if(isset($_POST['select8']))
{
	$que="select Apple_product,model_name from product where Apple_product='IPhone' AND model_name='4s'";
    if($conn->query($que))
    {
	if(isset($_POST["coun7"]))
    	{
    	 $h=$_POST["coun7"];	
	     $sql="Insert into temp_prod value ('IPhone','4s','$h')";
	     $i4s=$i4s-$h;
	     $conn->query($sql);
	    }
	    else
	    {
	      $sql="Insert into temp_prod value ('IPhone','4s','1')";
	      $i4s=$i4s-1;
	      $conn->query($sql);	
	    }
	}
    else
    {
    	echo "SORRY ! Product Out Of Stock";
    }
}
if(isset($_POST['select9']))
{
	$que="select Apple_product,model_name from product where Apple_product='IPad' AND model_name='3G'";
    if($conn->query($que))
    {
	if(isset($_POST["coun8"]))
    	{
    	 $i=$_POST["coun8"];	
	     $sql="Insert into temp_prod value ('IPad','3G','$i')";
	     $ipad_3g=$ipad_3g-$i;
	     $conn->query($sql);
	    }
	    else
	    {
	      $sql="Insert into temp_prod value ('IPad','3G','1')";
	      $ipad_3g=$ipad_3g-1;
	      $conn->query($sql);	
	    }
	}
    else
    {
    	echo "SORRY ! Product Out Of Stock";
    }
}
if(isset($_POST['select10']))
{
	$que="select Apple_product,model_name from product where Apple_product='IPad' AND model_name='Wi-Fi'";
    if($conn->query($que))
    {
	if(isset($_POST["coun9"]))
    	{
    	 $j=$_POST["coun9"];	
	     $sql="Insert into temp_prod value ('IPad','Wi-fi','$j')";
	     $ipad_wifi=$ipad_wifi-$j;
	     $conn->query($sql);
	    }
	    else
	    {
	      $sql="Insert into temp_prod value ('IPad','Wi-fi','1')";
	      $ipad_wifi=$ipad_wifi-1;
	      $conn->query($sql);	
	    }
	}
    else
    {
    	echo "SORRY ! Product Out Of Stock";
    }
}
if(isset($_POST['select11']))
{
	$que="select Apple_product,model_name from product where Apple_product='IPad' AND model_name='Mini'";
	if($conn->query($que))
    {
	if(isset($_POST["coun10"]))
    	{
    	 $k=$_POST["coun10"];	
	     $sql="Insert into temp_prod value ('IPad','Mini','$k')";
	     $ipad_mini=$ipad_mini-$k;
	     $conn->query($sql);
	    }
	    else
	    {
	      $sql="Insert into temp_prod value ('IPad','Mini','1')";
          $ipad_mini=$ipad_mini-1;
          $conn->query($sql);	
	    }
	}
    else
    {
    	echo "SORRY ! Product Out Of Stock";
    }
}
if(isset($_POST['select12']))
{
	$que="select Apple_product,model_name from product where Apple_product='IPad' AND model_name='Air'";
    if($conn->query($que))
    {
	if(isset($_POST["coun11"]))
    	{
    	 $l=$_POST["coun11"];	
	     $sql="Insert into temp_prod value ('IPad','Air','$l')";
	     $ipad_air=$ipad_air-$l;
	     $conn->query($sql);
	    }
	    else
	    {
	      $sql="Insert into temp_prod value ('IPad','Air','1')";
	      $ipad_air=$ipad_air-1;
	      $conn->query($sql);	
	    }
	}
    else
    {
    	echo "SORRY ! Product Out Of Stock";
    }
}
if(isset($_POST['select13']))
{
	$que="select Apple_product,model_name from product where Apple_product='IPod' AND model_name='Shuffle'";
    if($conn->query($que))
    {
	if(isset($_POST["coun12"]))
    	{
    	 $m=$_POST["coun12"];	
	     $sql="Insert into temp_prod value ('IPod','Shuffle','$m')";
	     $ipod_shuf=$ipod_shuf-$m;
	     $conn->query($sql);
	    }
	    else
	    {
	      $sql="Insert into temp_prod value ('IPod','Shuffle','1')";
	      $ipod_shuf=$ipod_shuf-1;
	      $conn->query($sql);	
	    }
	}
    else
    {
    	echo "SORRY ! Product Out Of Stock";
    }
}
if(isset($_POST['select14']))
{
	$que="select Apple_product,model_name from product where Apple_product='IPod' AND model_name='Nano'";
    if($conn->query($que))
    {
	if(isset($_POST["coun13"]))
    	{
    	 $n=$_POST["coun13"];	
	     $sql="Insert into temp_prod value ('IPod','Nano','$n')";
	     $ipod_nano=$ipod_nano-$n;
	     $conn->query($sql);$ipod_shuf=$ipod_shuf-1;
	    }
	    else
	    {
	      $sql="Insert into temp_prod value ('IPod','Nano','1')";
	      $ipod_nano=$ipod_nano-1;
	      $conn->query($sql);	
	    }
	}
    else
    {
    	echo "SORRY ! Product Out Of Stock";
    }
}
if(isset($_POST['select15']))
{
	$que="select Apple_product,model_name from product where Apple_product='IPod' AND model_name='Classic'";
    if($conn->query($que))
    {
	if(isset($_POST["coun14"]))
    	{
    	 $o=$_POST["coun14"];	
	     $sql="Insert into temp_prod value ('IPod','Classic','$o')";
	     $ipod_class=$ipod_class-$o;
	     $conn->query($sql);
	    }
	    else
	    {
	      $sql="Insert into temp_prod value ('IPod','Classic','1')";
	      $ipod_class=$ipod_class-1;
	      $conn->query($sql);	
	    }
	}
    else
    {
    	echo "SORRY ! Product Out Of Stock";
    }
}
if(isset($_POST['select16']))
{
	$que="select Apple_product,model_name from product where Apple_product='IPod' AND model_name='Touch'";
    if($conn->query($que))
    {
	if(isset($_POST["coun15"]))
    	{
    	 $p=$_POST["coun15"];	
	     $sql="Insert into temp_prod value ('IPod','Touch','$p')";
	     $ipod_touch=$ipod_touch-$p;
	     $conn->query($sql);
	    }
	    else
	    {
	      $sql="Insert into temp_prod value ('IPod','Touch','1')";
	      $ipod_touch=$ipod_touch-1;
	      $conn->query($sql);	
	    }
	}
    else
    {
    	echo "SORRY ! Product Out Of Stock";
    }
}

mysqli_close($conn);

?>
</head>
<body background="http://localhost/prod.png"  onload="my()"><PRE>
<h1> <font face= "Monotype Corsiva" color="White" size=7> <center>PLease Select Which Apple Device You Want to Buy</center></font></h1>
<font face = "Comic Sans MS" size= 5 color="White">
<font face = "Comic Sans MS" size= 6 color="White"><form method="post" action="product.php">        MACBOOK   QTY</font>         <font face = "Comic Sans MS" size= 6 color="White">IPHONE   QTY</font>                    <font face = "Comic Sans MS" size= 6 color="White">IPADS    QTY</font>              <font face = "Comic Sans MS" size= 6 color="White">IPODS     QTY</font><BR>          
         <input type="checkbox" name="select1" value="Apple iMac" onchange="my1(this)" class="chk" id="s1"/>Apple imac          <input type='number' name='coun' id = 'q1'style='width:3%' min='1' max='<?php echo $mac_imac ?>'value='1'>            <input type="checkbox" name="select5" value="Iphone 3" onchange="my1(this)" id="s5"/>Iphone 3       <input type='number' id = 'q5' name='coun4' style='width:3%' min='1' max='<?php echo $i3 ?>' value='1'>                      <input type="checkbox" name="select9" value="Ipad 3G" onchange="my1(this)" id="s9"/>Ipad 3G        <input type='number' id = 'q9' name='coun8' style='width:3%' min='1' max='<?php echo $ipad_3g ?>' value='1'>             <input type="checkbox" name="select13" value="Ipod Shuffle" onchange="my1(this)" id="s13"/>Ipod Shuffle   <input type='number' name='coun12' id = 'q13' style='width:3%' min='1' max='<?php echo $ipod_shuf ?>' value='1'><BR>
         <input type="checkbox" name="select2" value="Macbook Pro" onchange="my1(this)" id="s2"/>Macbook Pro       <input type='number' name='coun1' id = 'q2' style='width:3%' min='1' max='<?php echo $mac_pro ?>' value='1'>            <input type="checkbox" name="select6" value="Iphone 3s"onchange="my1(this)" id="s6"/>Iphone 3s     <input type='number' id = 'q6' name='coun5' style='width:3%' min='1' max='<?php echo $i3s ?>' value='1'>                      <input type="checkbox" name="select10" value="Ipad Wi-Fi" onchange="my1(this)" id="s10"/>Ipad Wi-Fi    <input type='number' id = 'q10' name='coun9' style='width:3%' min='1' max='<?php echo $ipad_wifi ?>' value='1'>             <input type="checkbox" name="select14" value="Ipod Nano" onchange="my1(this)" id="s14"/>Ipod Nano       <input type='number' name='coun13' style='width:3%' id = 'q14' min='1' max='<?php echo $ipod_nano ?>' value='1'><BR>
         <input type="checkbox" name="select3" value="Macbook Air" onchange="my1(this)" id="s3"/>Macbook Air       <input type='number' name='coun2' id = 'q3' style='width:3%' min='1' max='<?php echo $mac_air ?>' value='1'>            <input type="checkbox" name="select7" value="Iphone 4" onchange="my1(this)" id="s7"/>Iphone 4       <input type='number' name='coun6' id = 'q7' style='width:3%' min='1' max='<?php echo $i4 ?>' value='1'>                     <input type="checkbox" name="select11" value="Ipad Mini" onchange="my1(this)" id="s11"/>Ipad Mini       <input type='number' name='coun10' id = 'q11' style='width:3%' min='1' max='<?php echo $ipad_mini ?>' value='1'>              <input type="checkbox" name="select15" value="Ipod Classic" onchange="my1(this)" id="s15"/>Ipod Classic   <input type='number' name='coun14' style='width:3%' id = 'q15' min='1' max='<?php echo $ipod_class ?>' value='1'><BR>
         <input type="checkbox" name="select4" value="Macbook Mini" onchange="my1(this)" id="s4"/>Macbook Mini     <input type='number' name='coun3' id = 'q4' style='width:3%' min='1' max='<?php echo $mac_mini ?>' value='1'>            <input type="checkbox" name="select8" value="Iphone 4s" onchange="my1(this)" id="s8"/>Iphone 4s      <input type='number' name='coun7' id = 'q8' style='width:3%' min='1' max='<?php echo $i4s ?>' value='1'>                     <input type="checkbox" name="select12" value="Ipad Air" onchange="my1(this)" id="s12"/>IPad Air        <input type='number' name='coun11' id = 'q12' style='width:3%' min='1' max='<?php echo $ipad_air ?>' value='1'>              <input type="checkbox" name="select16" value="Ipod Touch" onchange="my1(this)" id="s16"/>Ipod Touch     <input type='number' name='coun15' style='width:3%' id = 'q16' min='1' max='<?php echo $ipod_touch ?>' value='1'><BR>
<BR><BR><input type="button" size=10 name ="back" value="Back" style="width:100px" class="button button1">                                  <input type="submit" size=10 name ="next1" value="Confirm the Price" id ="nex"  style="width:180px" class="button button2">                       <input type="text" name="t1" id="t2">                                           <input type="button" value="MOVE to CART" id="nex1" onclick="location.href = 'http://localhost/cart.php';" class="button button3">                                                                                                                                   
</font>
</PRE></form>
</body>
</html>