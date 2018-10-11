<html>
<head>
	<title>Change by Bijay Das</title>
<style>
table, th, td {
	border:1px solid green;
}
</style>
</head>

<?php

 if(!empty($_POST['submit'])){


   $num=$_REQUEST['factorial'];
   $fac=1;
   $i=$num;

  /* for($i=$num;$i>=1;$i--){

	   $fac=$fac*$i;

   }*/

   do{

	   $fac=$fac*$i;
    $i--; }
	while($i>=1);

 }


 ?>
<body>
<form method="post" action="" align="center">
<label style="font-size:19px; font-style:italic;"><b>Please Enter A Factorial Number</b></label></br>
<input type="text" name="factorial" id="fac" style="margin-top:5px;"/></br>
<button type="submit" value="Submit" name="submit" onclick="return validFac();" style="background-color:green; color:white; width:170px;
margin-top:5px;
">Submit</button>
</form>

<table align="center" >
<tr>
<th style="width:150px;">Factorial of <?php if(!empty($_POST['submit'])){ echo $num;} ?> is</th>
<th style="width:100px;"><?php if(!empty($_POST['submit'])){ echo $fac;} ?></th>
</tr>
</table>
</body>



<script type="text/javascript">

//validtion for null or negative value
function validFac(){

  var factorial=document.getElementById("fac").value;

  if(factorial<1){


	   alert("please enter value 1 or greater");

	   return false;
   }


}

</script>
</html>
