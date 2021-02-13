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
        Interests<br>
            Reading<input type="checkbox" class="margin" name="interest 1" value="Reading">
            Singing<input type="checkbox" class="margin" name="interest 1" value="singing">
            Writing<input type="checkbox" class="margin" name="interest 1" value="writing">
            Coding<input type="checkbox" class="margin"  name="interest 1" value="coding">
            Dancing<input type="checkbox" class="margin" name="interest 1" value="dancing">
</select><br><br>

        City<select name="city" class="margin">
            <option value="dehradun">DEHRADUN</option>
            <option value="mumbai">MUMBAI</option>
            <option value="delhi">DELHI</option>
            <option value="hyderabad">HYDERABAD</option>
</select><br><br>
        <input type="submit" name="submit" class="margin" value="SUBMIT">
    </form>

    <?php
    if (isset($_POST['submit'])) { ?>
    <table>
        <tr>
            <th style="color: blue">Name</th>
            <th style="color: blue">Email</th>
            <th style="color: blue">Contact</th>
            <th style="color: blue">City</th>
            <th style="color: blue">Course</th>
            <th style="color: blue">Interests</th>
        </tr>
        <tr>
            <td style="color: crimson"><?php echo $_POST['name']?>
            </td>
            <td style="color: crimson"><?php echo $_POST['email']?>
            </td>
            <td style="color: crimson"><?php echo $_POST['number']?>
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
