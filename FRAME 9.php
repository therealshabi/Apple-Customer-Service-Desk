<?php
session_start();
?>

<HTML>
<HEAD>
<title>Complaint Form</title>
<style>
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
input[type=text]:focus
{
	background-color:#6495ED;
}

.error
{
	color:red;
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

$device=$imei=$name="";
//Open Database
mysqli_select_db($conn,"project");

$nameErr=$deviceErr=$imeiErr=$modErr="";
$name=$device=$imei=$mod="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
   $nameErr = "Name is required"; }
	 else {
		 $name = test_input($_POST["name"]);
	 }
   
   if (empty($_POST["device"])) {
      $deviceErr = "Device is required";
    } else {
      $device = test_input($_POST["device"]);
    }

if (empty($_POST["modelno"])) {
      $modErr = "Model No. is required";
    } else {
      $mod = test_input($_POST["modelno"]);
    }
	
    if (empty($_POST["imeino"])) {
      $imeiErr = "Imei is required";
    } else {
        if (strlen($_POST["imeino"])<6) {
     $imeiErr = "Imei No too short...";}
    else if (strlen($_POST["imeino"])>7) {
     $imeiErr = "Imei No too long...";}
     else {
     $imei = test_input($_POST["imeino"]);
    }
   }  
}
  
function test_input($data) 
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}  
  
if($imei!="")
{
if($device=="Ipad")
{
 $sql="select w.warranty from ipad_warranty w join ipad i using(purchase_date) where i.imei_no='$imei' && w.warranty >= curdate()";
 $res=$conn->query($sql);
 if($res->num_rows>0)
 {
 	$_SESSION["total"] =0;
 }
 else
 {
	$_SESSION["total"] =$_POST["ptotal"];
 }

 $que="select imei_no from ipad where imei_no=$imei AND ipad_type='$mod'";
 if(!$conn->query($que))
 {
	 $imeiErr="IMEI NO. IS INVALID! ";
	 $imei="";
 }
 else
 {
$qwe="insert into complaint(lodge_date,model_id) values (curdate(),$imei)";
$conn->query($qwe);

if(isset($_POST['software1']))
{
$qwer="insert into comp_soft_prob(software_problems) values ('Software Log')";
$conn->query($qwer);
}

if(isset($_POST['software2']))
{
$qwer="insert into comp_soft_prob(software_problems) values ('Application Related')";
$conn->query($qwer);
}

if(isset($_POST['software3']))
{
$qwer="insert into comp_soft_prob(software_problems) values ('Unresponsive')";
$conn->query($qwer);
}

if(isset($_POST['software4']))
{
$qwer="insert into comp_soft_prob(software_problems) values ('Updation Of Softwares')";
$conn->query($qwer);
}

if(isset($_POST['software5']))
{
$software=$_POST['Software'];
$qwer="insert into comp_soft_prob(software_problems) values ('$software')";
$conn->query($qwer);
}

if(isset($_POST['hardware1']))
{
$qwer="insert into comp_hard_prob(hardware_problems) values ('Display Problem')";
$conn->query($qwer);
}

if(isset($_POST['hardware2']))
{
$qwer="insert into comp_hard_prob(hardware_problems) values ('Body Problem')";
$conn->query($qwer);
}

if(isset($_POST['hardware3']))
{
$qwer="insert into comp_hard_prob(hardware_problems) values ('Battery Problem')";
$conn->query($qwer);
}

if(isset($_POST['hardware4']))
{
$qwer="insert into comp_hard_prob(hardware_problems) values ('Mother Board')";
$conn->query($qwer);
}

if(isset($_POST['hardware5']))
{
$hardware=$_POST['Hardware'];
$qwer="insert into comp_hard_prob(hardware_problems) values ('$hardware')";
$conn->query($qwer);
}
 }
}
 
if($device=="Iphone")
{
 $sql="select w.warranty from iphone_warranty w join iphone i using(purchase_date) where i.imei_no='$imei' && w.warranty >= curdate()";
 $res=$conn->query($sql);
 if($res->num_rows>0)
 {
 	$_SESSION["total"] =0;
 }
 else
 {
	$_SESSION["total"] =$_POST["ptotal"];
 }

 $que="select imei_no from iphone where imei_no=$imei AND iphone_model='$mod'";
 if($conn->query($que))
 {
	 $imeiErr="IMEI NO. IS INVALID! ";
	 $imei="";
 }
 else
 {
	 $qwe="insert into complaint(lodge_date,model_id) values (curdate(),$imei)";
$conn->query($qwe);

if(isset($_POST['software1']))
{
$qwer="insert into comp_soft_prob(software_problems) values ('Software Log')";
$conn->query($qwer);
}

if(isset($_POST['software2']))
{
$qwer="insert into comp_soft_prob(software_problems) values ('Application Related')";
$conn->query($qwer);
}

if(isset($_POST['software3']))
{
$qwer="insert into comp_soft_prob(software_problems) values ('Unresponsive')";
$conn->query($qwer);
}

if(isset($_POST['software4']))
{
$qwer="insert into comp_soft_prob(software_problems) values ('Updation Of Softwares')";
$conn->query($qwer);
}

if(isset($_POST['software5']))
{
$software=$_POST['Software'];
$qwer="insert into comp_soft_prob(software_problems) values ('$software')";
$conn->query($qwer);
}

if(isset($_POST['hardware1']))
{
$qwer="insert into comp_hard_prob(hardware_problems) values ('Display Problem')";
$conn->query($qwer);
}

if(isset($_POST['hardware2']))
{
$qwer="insert into comp_hard_prob(hardware_problems) values ('Body Problem')";
$conn->query($qwer);
}

if(isset($_POST['hardware3']))
{
$qwer="insert into comp_hard_prob(hardware_problems) values ('Battery Problem')";
$conn->query($qwer);
}

if(isset($_POST['hardware4']))
{
$qwer="insert into comp_hard_prob(hardware_problems) values ('Mother Board')";
$conn->query($qwer);
}

if(isset($_POST['hardware5']))
{
$hardware=$_POST['Hardware'];
$qwer="insert into comp_hard_prob(hardware_problems) values ('$hardware')";
$conn->query($qwer);
}
 }
}if($device=='Macbook')
{
 $sql="select w.warranty from mac_warranty w join macbook i using(purchase_date) where i.mac_address='$imei' && w.warranty >= curdate()";
 $res=$conn->query($sql);
 if($res->num_rows>0)
 {
 	$_SESSION["total"] =0;
 }
 else
 {
	$_SESSION["total"] =$_POST["ptotal"];
 }

 $que="select imei_no from macbook where mac_address=$imei AND mackbook_type=$mod";
 if(!$conn->query($que))
 {
	 $imeiErr="IMEI NO. IS INVALID! ";
	 $imei="";
 }
 else
 {
	 $qwe="insert into complaint(lodge_date,model_id) values (curdate(),$imei)";
     $conn->query($qwe);

if(isset($_POST['software1']))
{
$qwer="insert into comp_soft_prob(software_problems) values ('Software Log')";
$conn->query($qwer);
}

if(isset($_POST['software2']))
{
$qwer="insert into comp_soft_prob(software_problems) values ('Application Related')";
$conn->query($qwer);
}

if(isset($_POST['software3']))
{
$qwer="insert into comp_soft_prob(software_problems) values ('Unresponsive')";
$conn->query($qwer);
}

if(isset($_POST['software4']))
{
$qwer="insert into comp_soft_prob(software_problems) values ('Updation Of Softwares')";
$conn->query($qwer);
}

if(isset($_POST['software5']))
{
$software=$_POST['Software'];
$qwer="insert into comp_soft_prob(software_problems) values ('$software')";
$conn->query($qwer);
}

if(isset($_POST['hardware1']))
{
$qwer="insert into comp_hard_prob(hardware_problems) values ('Display Problem')";
$conn->query($qwer);
}

if(isset($_POST['hardware2']))
{
$qwer="insert into comp_hard_prob(hardware_problems) values ('Body Problem')";
$conn->query($qwer);
}

if(isset($_POST['hardware3']))
{
$qwer="insert into comp_hard_prob(hardware_problems) values ('Battery Problem')";
$conn->query($qwer);
}

if(isset($_POST['hardware4']))
{
$qwer="insert into comp_hard_prob(hardware_problems) values ('Mother Board')";
$conn->query($qwer);
}

if(isset($_POST['hardware5']))
{
$hardware=$_POST['Hardware'];
$qwer="insert into comp_hard_prob(hardware_problems) values ('$hardware')";
$conn->query($qwer);
}
 }
}
if($device=='IPod')
{
 $sql="select w.warranty from ipod_warranty w join ipod i using(purchase_date) where i.udid_no='$imei' && w.warranty >= curdate()";
 $res=$conn->query($sql);
 if($res->num_rows>0)
 {
 	$_SESSION["total"] =0;
 }
 else
 {
	$_SESSION["total"] =$_POST["ptotal"];
 }

 $que="select imei_no from ipod where udid_no=$imei AND ipod_type=$mod";
 if(!$conn->query($que))
 {
	 $imeiErr="IMEI NO. IS INVALID! ";
	 $imei="";
 }
 else
 {
	 $qwe="insert into complaint(lodge_date,model_id) values (curdate(),$imei)";
$conn->query($qwe);

if(isset($_POST['software1']))
{
$qwer="insert into comp_soft_prob(software_problems) values ('Software Log')";
$conn->query($qwer);
}

if(isset($_POST['software2']))
{
$qwer="insert into comp_soft_prob(software_problems) values ('Application Related')";
$conn->query($qwer);
}

if(isset($_POST['software3']))
{
$qwer="insert into comp_soft_prob(software_problems) values ('Unresponsive')";
$conn->query($qwer);
}

if(isset($_POST['software4']))
{
$qwer="insert into comp_soft_prob(software_problems) values ('Updation Of Softwares')";
$conn->query($qwer);
}

if(isset($_POST['software5']))
{
$software=$_POST['Software'];
$qwer="insert into comp_soft_prob(software_problems) values ('$software')";
$conn->query($qwer);
}

if(isset($_POST['hardware1']))
{
$qwer="insert into comp_hard_prob(hardware_problems) values ('Display Problem')";
$conn->query($qwer);
}

if(isset($_POST['hardware2']))
{
$qwer="insert into comp_hard_prob(hardware_problems) values ('Body Problem')";
$conn->query($qwer);
}

if(isset($_POST['hardware3']))
{
$qwer="insert into comp_hard_prob(hardware_problems) values ('Battery Problem')";
$conn->query($qwer);
}

if(isset($_POST['hardware4']))
{
$qwer="insert into comp_hard_prob(hardware_problems) values ('Mother Board')";
$conn->query($qwer);
}

if(isset($_POST['hardware5']))
{
$hardware=$_POST['Hardware'];
$qwer="insert into comp_hard_prob(hardware_problems) values ('$hardware')";
$conn->query($qwer);
}
 }
}
}


/*if(isset($_POST['ptotal']))
{$_SESSION["total"] =$_POST["ptotal"];
}
else{
$_SESSION["total"]="";
}*/


$conn->close();
?> 

</style>
<script type="text/javascript">
var sum=count=0;
var price1,price2,price3,price4,price5,price6,price7,price8,price9,price10,sum=0;

var status="<?php echo $stat ?> ";

function my1(checkbox)
{
	if(checkbox.checked)
	{ 
		count++;
		if(document.getElementById("s1").checked)
		{
                   
		 price1=200;
		 
		}
		else
		{
			price1=0;
		}
		if(document.getElementById("s2").checked)
		{
		 price2=300;
		}
		else
		{
			price2=0;
		}
		if(document.getElementById("s3").checked)
		{
		 price3=400;
		}
		else
		{
			price3=0;
		}
		if(document.getElementById("s4").checked)
		{
		 price4=500;
		 
		}
		else
		{
			price4=0;
		}
		if(document.getElementById("s5").checked)
		{
		 price5=600;
		 
		}
		else
		{
			price5=0;
		}
		if(document.getElementById("s6").checked)
		{
		 price6=700;
		 
		}
		else
		{
			price6=0;
		}
		if(document.getElementById("s7").checked)
		{
		 price7=800;
		 
		}
		else
		{
			price7=0;
		}
		if(document.getElementById("s8").checked)
		{
		 price8=900;
		 
		}
		else
		{
			price8=0;
		}
		if(document.getElementById("s9").checked)
		{
		 price9=1000;
		 
		}
		else
		{
			price9=0;
		}
		if(document.getElementById("s10").checked)
		{
		 price10=1000;
		 
		}
		else
		{
			price10=0;
		}

  sum=price1+price2+price3+price4+price5+price6+price7+price8+price9+price10;
  document.getElementById("ab").value=sum;  	
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
		sum=price1+price2+price3+price4+price5+price6+price7+price8+price9+price10;

                if(status=="Yes")
                {sum=0;
                 }
                document.getElementById("ab").value=sum;
}
}


function clear()
{
  sum=0;
  document.getElementById("a").value="";
  document.getElementById("b").value="";
  document.getElementById("c").value="";
  document.getElementById("d").value="";
  var inputElements = document.getElementsByClassName('messageCheckbox');
       for(var i=0; inputElements[i]; ++i)
         {
           inputElements[i].checked=false;
         }
 document.getElementById("ab").value=sum;
}  


</script>


<TITLE> Complaint Form </TITLE>
</HEAD>
<BODY background="http://localhost/Apple complaint.jpg">
<form  method="POST" action="FRAME 9.php">
<h1><font size=10 face="Monotype Corsiva"><strong><center> COMPLAINT FORM </center></strong></font></h1>
<hr>
<h2> <pre><font size=5 face="Comic Sans MS">     	                          Name        	     <input type="text" id="a" class="n" name="name" style="width:250px;height:30px"><span class="error"> * <?php echo $nameErr;?></span> 
                                  Device                    <input type="text" id="b" name="device" class="n1" style="width:250px;height:30px"><span class="error"> * <?php echo $deviceErr; ?></span>
                                  Model No.                <input type="text" id="c" name="modelno" class="n2" style="width:250px;height:30px"><span class="error"> *<?php echo $modErr;?></span>  
                                  IMEI No.                 <input type="text" id="d" name="imeino" class="n3" style="width:250px;height:30px"><span class="error"> * <?php echo $imeiErr;?></span>      
                               
</pre> </h2>
<h2> <pre> <b><font size=5 face="Comic Sans MS"> 	                 	            PROBLEMS PERTAINING IN DEVICE </b> </pre> </h2>
<h3> <pre>   		       SOFTWARE RELATED                           HARDWARE RELATED </pre> </h3>
<pre>                             <input type="checkbox" class="messageCheckbox" onchange="my1 (this)" id="s1" name="software1"> Software Log   	 			  <input type="checkbox" class="messageCheckbox" onchange="my1 (this)" id="s6" name="hardware1"> Display Problem
                             <input type="checkbox" class="messageCheckbox" onchange="my1 (this)" id="s2" name="software2"> Applications Related       	          <input type="checkbox" class="messageCheckbox" onchange="my1 (this)" id="s7" name="hardware2"> Body Problem
                             <input type="checkbox" class="messageCheckbox" onchange="my1 (this)" id="s3" name="software3"> Unresponsive              		  <input type="checkbox" class="messageCheckbox" onchange="my1 (this)" id="s8" name="hardware3"> Battery Problem
                             <input type="checkbox" class="messageCheckbox" onchange="my1 (this)" id="s4" name="software4"> Updation of Softwares     		  <input type="checkbox" class="messageCheckbox" onchange="my1 (this)" id="s9" name="hardware4"> MotherBoard
                             <input type="checkbox" class="messageCheckbox" onchange="my1 (this)" id="s5" name="software5"> Please specify if any other 		  <input type="checkbox" class="messageCheckbox" onchange="my1 (this)" id="s10" name="hardware5"> Please specify if any other

     			       <textarea name="Software" id="s" rows="10" cols="30"></textarea>                      <textarea name="hardware" id="h" rows="10" cols="30"></textarea>

 <input type="reset" name ="reset" value="Clear Fields" onclick="clear()">	  		 PRICE: <input type="text" name="ptotal" id="ab">		   <input type="submit" value="Submit Complaint"><span class="error">  <?php echo $err; ?></span>                                 <input type="button" value="Proceed" onclick="location.href='http://localhost/FRAME 10.php';">
</pre>
</form>
</BODY>
</HTML>








