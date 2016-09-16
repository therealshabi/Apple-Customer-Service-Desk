<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
<title>Shopping Cart</title>
<style>
body
{
	background-attachment: fixed;
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
.p
{
	color:black;
	text-indent: 850px;
}	
.ff
{
text-shadow: 1px 1px 2px black, 0 0 25px red, 0 0 5px blue;	
font-style: italic;
}
.tt
{
	background-color:#008CBA;
}
</style>
<?php
$price=0;
$price=$_SESSION['sum'];

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

$sql="select * from temp_prod";
$res=$conn->query($sql);

?>

<script>
function cash()
{
	var a=confirm("Are You Sure You Want To Opt For Cash On Delivery ?");
	if(a)
	{
		location.href = "http://localhost/bill.php";
		return true;
	}
	return false;
}

function card()
{
	var a=confirm("Are you Sure you want to Pay through Card ?");
	if(a)
	{
		var b=prompt("Enter your card no.");
		if(b.length==9 && b && !isNaN(b))
		{
			var c=prompt("Enter your Bank Name");
			if(c!="")
			{
				var d= alert("Your Transaction Is Successful");
				location.href = "http://localhost/bill.php";
				return true;
			}
			else
			{
               alert("Please Enter Valid Bank Name! Transaction Aborted !");
			}
		}
		else
		{
		  if(b.length<9 || b.length>9 || isNaN(b))
		 {
             alert("Enter a valid card no.! Transaction Aborted !");
		 }
	    }
	}
	return false;
}

function net()
{
    var a = confirm("Do You Want To Pay Through Online Gateway ?"); 
    if(a)
    {
       var b=prompt("Enter Your Bank Name");
       if(b!="")
       {
       	var c=confirm("Confirm Payment");
       	if(c)
       	{
       	var d= alert("Your Transaction Is Successful");
		location.href = "http://localhost/bill.php";
		return true;
        }
       }
       else
       {
       	alert("Please Enter Valid Bank Name! Transaction Aborted !");
       }
    }
    return false;
}

</script>

</head>
<body background="http://localhost/c.jpg"><img src="http://localhost/shopping cart.png" height="250" width="250" align="left"><pre><h1><font color="Red" face="Monotype Corsiva" size=8><center><U>        SHOPPING  CART</U></center></font> </h1></pre><BR>
<div class="tt"><span><BR> <pre> <br><Br><font color="Black" size=6><b>                You have to Pay Rs. <?php echo $price ; ?></b></font></pre></span><br><?php
while($row=$res->fetch_assoc())
{	
echo "<table border='4' style='width:40%;border-collapse:collapse' align='center'>                                                                                                                                                                                                              
                             <tr><th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B>  Product Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Model Name </B></th>
                             <th><font color='white' size=5 style='text-shadow: 1px 1px 2px blue, 0 0 25px red, 0 0 5px blue;	
font-style: italic;'><B> Quantity </B></th></tr></font>";
echo "<tr><td align='center' style='padding:8px'><font color='black'><B>".$row['prod_name']."</td><td align='center'><font color='black'><B>".$row['model_name']."</td><td align='center'><font color='black'><B>".$row['quantity']."</td></tr></font>";
echo "</table>";                                                                                  
}
?>
<form><pre>                                                

                                                                    
                                                                             <font size=6 class="ff"><U>Mode Of Payment</U></font>


                                                                    <input type="radio" name="move" value="Cash" onClick="return cash()"><font color="Red" face="verdana" size=5   font-weight: bold>CASH ON DELIVERY</font><br>
                                                                    <input type="radio" name="move" value="CARD" onClick="return card()"><font color="Red" face="verdana" size=5   font-weight: bold>CREDIT/DEBIT CARD</font><br>
                                                                    <input type="radio" name="move" value="INTERNET" onClick="return net()"><font color="Red" face="verdana" size=5   font-weight: bold>NET BANKING</font><br>
                                                                                                                </form>
                                                                                         
</pre>
</div>											                
<pre>


<input type="button" name="back" class="button button1" onclick="location.href = 'http://localhost/product.php';" style="width:100px;height:30px" value="Back">                                                                                                                                                            </pre>
</body>
</html>
