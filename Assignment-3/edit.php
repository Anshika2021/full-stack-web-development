<?php
include('config.php');
?>

<?php
$id=$_GET['id'];
$sql = "SELECT * FROM `user` WHERE `id`=$id";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
$username = $row['username'];
$email = $row['email'];
$gender= $row['gender'];
$city = $row['city'];
?>
<?php
if(isset($_POST['update'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];

    $sql = "UPDATE `user` SET username='$username', email='$email', gender='$gender', city='$city' WHERE id='$id'";
    if(mysqli_query($conn, $sql)){
        header("Location:details.php");
    }
    else{
        echo "Updation failed..";
    }
}
?>
<html>
    <head>
        <title>HTML Forms</title>
    </head>
<body>
<form method="POST" action="edit.php?id=<?php echo "$id"?>">
    USERNAME <input type="text" name="username" value=<?php echo "$username" ?> placeholder="Type Your Username" required><br>
    E-MAIL <input type="email" name="email" value=<?php echo "$email" ?> placeholder="Type Your E-mail" required><br>
    GENDER Male<input type="radio" name="gender" value="male" <?php if($gender=="male"){echo "checked";}?>>
    Female<input type="radio" name="gender" value="female" <?php if($gender=="female"){echo "checked";}?>><br>
    City <select name="city">
        <option value="Dehradun" <?php if($city=="Dehradun"){echo "selected";}?>>Dehradun</option>
        <option value="Delhi"<?php if($city=="Delhi"){echo "selected";}?>>DELHI</option>
        <option value="Jaipur"<?php if($city=="Jaipur"){echo "selected";}?>>JAIPUR</option>
        <option value="Almora"<?php if($city=="Almora"){echo "selected";}?>>ALMORA</option>
        <option value="Banglore"<?php if($city=="Banglore"){echo "selected";}?>>BANGLORE</option>
        <option value="Lucknow"<?php if($city=="Lucknow"){echo "selected";}?>>LUCKNOW</option>
        <option value="Mumbai"<?php if($city=="Mumbai"){echo "selected";}?>>MUMBAI</option>
        <option value="Hyderabad"<?php if($city=="Hyderabad"){echo "selected";}?>>HYDERABAD</option>
        <option value="Agra"<?php if($city=="Agra"){echo "selected";}?>>Agra</option>



    </select><br>
    <input type="submit" name="update" value="Update">
</form>
</body>
</html>
