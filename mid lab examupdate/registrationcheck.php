<?php
    session_start();
    if(!isset($_SESSION['abc'])){
        header('location: logincheck.html');
    }
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['bloodgroup']) && !empty($_POST['bloodgroup'])) {
            
            echo "<h3>Your Blood Group: " . htmlspecialchars($_POST['bloodgroup']) . "</h3>";
        } else {
            echo "<h3 >Please select a blood group!</h3>";
        }
    }
    ?>
    <html>
<head>
    <title>Login Page</title>
</head>
<body>
       
            Username: <input type="text" required name="username" value="" /> <br>
            Password: <input type="password" name="password" value="" /> <br>
            Degree :  <input type="checkbox" name="degree[]" value="SSC"> SSC
                      <input type="checkbox" name="degree[]" value="HSC"> HSC
                      <input type="checkbox" name="degree[]" value="BSc"> BSc
                      <input type="checkbox" name="degree[]" value="MSc"> MSc
                      <br><br>
            Gender :<input type="radio" name="gender" value="Male"> Male
                    <input type="radio" name="gender" value="Female"> Female
                    <input type="radio" name="gender" value="Other"> Other
                    <br><br>
            Blood Group:<select name="bloodgroup">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>
            <br><br>
            <input type="submit" name="submit" value="Submit" />
        </form>
</body>
</html>


<html>
<head>
    <title>HOME Page</title>
</head>
<body>
        <h1>Welcome Home!</h1>
        <a href='logout.php' > logout </a>
</body>
</html>