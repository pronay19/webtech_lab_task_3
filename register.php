<html>
<body>

<?php
$name = $email = $birth = $gender = $degree = $bloodgroup = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $birth = test_input($_POST["birth"]);
  $degree = test_input($_POST["degree"]);
  $gender = test_input($_POST["gender"]);
  $bloodgroup = test_input($_POST["bloodgroup"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Registration Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name <input type="text" name="name"><br>
    E-mail <input type="text" name="email"><br>
    Date of Birth <input type="date" name="birth"><br>
    Gender <input type="radio" name="gender" value="male">Male
       <input type="radio" name="gender" value="female">Female
       <input type="radio" name="gender" value="other">Other<br>

    Degree <input type="checkbox" name="degree" value="SSC">SSC
           <input type="checkbox" name="degree" value="HSC">HSC
           <input type="checkbox" name="degree" value="Bsc">Bsc
           <input type="checkbox" name="degree" value="Msc">Msc<br>


       Blood Group 
        <select name="bloodgroup">
       	<option value="A+">A+</option>
       	<option value="A-">A-</option>
       	<option value="AB+">AB+</option>
       	<option value="AB-">AB-</option>
       	<option value="B+">B+</option>
       	<option value="B-">B-</option>
       	<option value="O+">O+</option>
       	<option value="O-">O-</option>
       	
       </select> <br>
      <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Information:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $birth;
echo "<br>";
echo $gender;
echo "<br>";
echo $degree;
echo "<br>";
echo $bloodgroup;
?>

</body>
</html>