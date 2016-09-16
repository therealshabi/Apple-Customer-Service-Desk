<?php
session_start();
error_reporting(0);
?>
<html> 
<head>
<style>
body {
	
    background-attachment: fixed;
	img-attachment:fixed;
}
h1
{
text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;	
}
.button3 {
    background-color: white;
	font-size: 20px;
	border-radius:4px;
	text-align: center;
    color: black;
    border: 2px solid black;
}

.button3:hover {
    background-color:black;
    color: white;
}
.button2 {
    background-color: white;
	font-size: 20px;
	border-radius:4px;
	text-align: center;
    color: black;
    border: 2px solid black;
    width:10%;
}

.button2:hover {
    background-color:black;
    color: white;
}
.spa
{
 text-shadow: 1px 1px 2px blue, 0 0 25px blue, 0 0 5px blue;    
 font-style: italic;
 font-size:30px;
}
</style>
<?php
$na="";
$na=$_SESSION["nam"];
?>
</head>
<body background="http://localhost/intermediate.jpg" onload="alert('SIGN-IN SUCCESSFUL')">                                                         
<h1><font face="Monotype Corsiva" color="White" size=9 align="center"><pre><span class="spa"><font color="black"> <?php echo "Welcome ".$na; ?></font></span>
                                WHICH SERVICE DO YOU WANT??</font></h1></pre>
<form><pre>
<pre><br><br><br><br>             <input type="button" onclick="location.href = 'http://localhost/FRAME 3.php';" class="button button2" value="Back">                                   <button type="button" onclick="location.href = 'http://localhost/product.php';" style="width:20%" class="button button2">APPLE ONLINE SHOPPING</button>                                     <button type="button" onclick="location.href = 'http://localhost/Frame 4.php';" class="button button3">APPLE CUSTOMER SERVICE</button></pre><br>

<pre>
<img src="http://localhost/Apple Macbook Pro.png">                <img src="http://localhost/IPad.jpg">                      <img src="http://localhost/IPhone 5.png">                  <img src="http://localhost/IPod classic.png">
</pre>
</form>
</body>
</html>

