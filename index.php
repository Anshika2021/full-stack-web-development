<!DOCTYPE html>
<html>
<head>
	<title>PHP FIRST PROGRAM</title>
</head>
<body>
	 <form method="post " action="index.php">
		Variable 1<input type="text" name="var1">
		Variable 2<input type="text" name="var2">
		<input type="submit" name="submit" >
	</form>
</body> 
</html>
<?php
	//$var1=10;
	//$var2=20;
    //$sum=$_GET['var1']+$_GET['var2'];
        //$sum=$_GET['$var1']+$_GET['$var2'];
       if(isset($_POST['submit'])){
           if(empty($_POST['var1']) || empty($_POST['var2'])){
           echo "NO Input Provided...First enter values";
       }
    //    error resolved of non numeric value by applying this if(empty($_POST['var1']) || empty($_POST['var2']))
       
    else
       {
		$sum=$_POST['var1']+ $_POST['var2'];
		echo "Sum of Two Variables is $sum";
		//echo 'Hello World in PHP!<br>';
    }
}
	else
	{
		echo "No input";
	}
	
 ?>
 
