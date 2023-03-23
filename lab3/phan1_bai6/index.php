<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>form</title>
</head>
<body>
<form action="process_form.php" method="post">
    <div>
      <label for="firstname">First name:</label>
      <input type="text" id="firstname" name="firstname" minlength="2" maxlength="30" required>
    </div>
    <div>
      <label for="lastname">Last name:</label>
      <input type="text" id="lastname" name="lastname" minlength="2" maxlength="30" required>
    </div>
    <div>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" minlength="2" maxlength="30" required>
    </div>
    <div>
      <label for="birthday">Birthday:</label>
      <select id="birthday" name="birthday">
        <?php
        for ($i = 1; $i <= 31; $i++) {
          echo "<option value=\"$i\">$i</option>";
        }
        ?>
      </select>
      <select id="birthmonth" name="birthmonth">
        <option value="January">January</option>
        <option value="February">February</option>
        <option value="March">March</option>
        <option value="April">April</option>
        <option value="May">May</option>
        <option value="June">June</option>
        <option value="July">July</option>
        <option value="August">August</option>
        <option value="September">September</option>
        <option value="October">October</option>
        <option value="November">November</option>
        <option value="December">December</option>
      </select>
      <select id="birthyear" name="birthyear">
        <?php
        $current_year = date("Y");
        for ($i = $current_year - 100; $i <= $current_year; $i++) {
          echo "<option value=\"$i\">$i</option>";
        }
        ?>
      </select>
    </div>
    <div>
      <label>Gender:</label>
      <label for="male">Male</label>
      <input type="radio" id="male" name="gender" value="male">
      <label for="female">Female</label>
      <input type="radio" id="female" name="gender" value="female">
      <label for="other">Other</label>
      <input type="radio" id="other" name="gender" value="other">
    </div>
    <div>
      <label for="country">Country:</label>
      <select id="country" name="country">
        <option value="Vietnam">Vietnam</option>
        <option value="Australia">Australia</option>
        <option value="United States">United States</option>
        <option value="India">India</option>
        <option value="Other">Other</option>
      </select>
    </div>
    <div>
      <label for="about">About:</label>
      <textarea id="about" name="about" rows="5" cols="50" maxlength="10000"></textarea>
    </div>
    <div>
      <input type="submit" value="Submit">
      <input type="reset" value="Reset">
    </div>
  </form>
</body>
</html>


  