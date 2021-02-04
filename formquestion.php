<html>
<head>
    <title>form php</title>
    <style>
  #form{
      margin-left:50px;
  }
  .margin{
      margin-left:50px;
  }
  </style>
</head>
<body>
    <form method="POST" action="form.php" id="form">
        Name<input type="text" name="name" class="margin"placeholder="ENTER NAME" required><br>
        E-Mail<input type="email" name="email" class="margin" placeholder="ENTER VALID EMAIL" required><br>
        Contact<input type="text" name="number" class="margin" placeholder="ENTER PHONE NUMBER" minlength="10" maxlength="10" required><br>
     
        Course<input type="text" name="course"class="margin"  placeholder="ENTER THE COURSE" required><br>
        Interests<select name="interest" class="margin">
            <option value="Reading">READING</option>
            <option value="singing">SINGING</option>
            <option value="coding">CODING</option>
            <option value="writing">WRITING</option>
            <option value="dancing">DANCING</option>
</select><br>

        City<select name="city" class="margin">
            <option value="dehradun">DEHRADUN</option>
            <option value="">MUMBAI</option>
            <option value="dehradun">DELHI</option>
            <option value="dehradun">HYDERABAD</option>
</select><br><br>
        <input type="submit" name="submit" class="margin" value="SUBMIT">
    </form>

    <?php
    if (isset($_POST['submit'])) { ?>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>City</th>
            <th>Course</th>
            <th>Interests</th>
        </tr>
        <tr>
            <td><?php echo $_POST['name']?>
            </td>
            <td><?php echo $_POST['email']?>
            </td>
            <td><?php echo $_POST['number']?>
            </td>
            <td><?php echo $_POST['city']?>
            </td>
            <td><?php echo $_POST['course']?>
            </td>
            <td><?php echo $_POST['interests']?>
            </td>
            </tr>
    </table>
    <?php } ?>

</body>

</html>
