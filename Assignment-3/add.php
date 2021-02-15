<?php
include('config.php');
?>

<?php
if(isset($_POST['submit'])){
 $username= $_POST['username'];
 $email=$_POST['email'];
 $gender=$_POST['gender'];
 $city=$_POST['city'];
 
 $sql="INSERT INTO `user` ( `username`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city')";
 mysqli_query($conn, $sql);
}
else{
    echo "Please click submit button to submit....";

}
?>



<html>
    <head>
        <title>HTML Forms</title>
    </head>
<body>
<form method="POST" action="add.php">
    USERNAME <input type="text" name="username" placeholder="Type Your Username" required><br>
    E-MAIL <input type="email" name="email" placeholder="Type Your E-mail" required><br>
    GENDER Male<input type="radio" name="gender" value="male" checked>
    Female<input type="radio" name="gender" value="female" checked><br>
    Select City <select name="city">
        <option value="Dehradun">Dehradun</option>
        <option value="Delhi">Delhi</option>
        <option value="Jaipur">Jaipur</option>
        <option value="Almora">Almora</option>
        <option value="Banglore">Banglore</option>
        <option value="Lucknow">Lucknow</option>
        <option value="Mumbai">Mumbai</option>
        <option value="Hyderabad">Hyderabad</option>
        <option value="Agra">Agra</option>
    </select><br>
    <input type="submit" name="submit" value="Submit here">
</form>
</body>
</html>