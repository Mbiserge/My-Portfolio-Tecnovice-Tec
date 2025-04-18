<!DOCTYPE html>
<html>
    <head>
    <body>

    <?php
    //defind variables and set up and empty values
    $fullname=  $email =$gender= $comment= $number= $age = "";
    if ($_service["REQUEST_METHOD"] == "POST") {
        $fullname =test_input($_POST["name"]);
        $email=test_input($_POST["email"]);
        $number = test_input($_POST["number"]);
        $comment= test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
        $age = test_input($_POST["age"]);
    } 
    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    ?>
    <h2>Form Validation </h2>
    <form method="post" action="= <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
    full name= <input type="text" name="name">
    <br> <br>
    email: <input type="text" name="email">
    <br> <br>
    number (optional) : <input type="text" name="number">
    <br> <br>
    age: <input type="text" name="age">
    <br> <br>
    comment: <textarea name="comment"rows="10" cols="10"></textarea>
    <br> <br>
    gender:
    <input type="radio" name="gender" value="female">female
    <input type="radio" name="gender" value="male">male
    <br> <br>
    <input type="submit" name="click here"value="click here">

 </form>

 <?php
 echo "<h2> your input:</h2>";
 echo $fullname;
 echo "<br>";
 echo $email;
 echo "<br>";
 echo $age;
 echo "<br>";
echo $number;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
    </body>
    </html>