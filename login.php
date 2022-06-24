 <?php

require 'dbConnection.php';

# Clean Function to sanitize the data
function Clean($input)
{
    return stripslashes(strip_tags(trim($input)));
}

# Server Side Code . . . 
if ($_SERVER['REQUEST_METHOD'] == "POST") {


    $password = Clean($_POST['password']);
    $email    = Clean($_POST['email']);


    # Validate ...... 
    $errors = [];

# validate email 
    if (empty($email)) {
        $errors['email'] = "Field Required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['Email'] = "Invalid Email";
    }


    # validate password 
    if (empty($password)) {
        $errors['password'] = "Field Required";
    } elseif (strlen($password) < 6) {
        $errors['Password'] = "Length Must be >= 6 chars";
    }
     if (count($errors) > 0) {
         foreach ($errors as $key => $value) {
             echo '* ' . $key . ' : ' . $value . '<br>';
        }
    } else {

        $password = md5($password);

        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $op = mysqli_query($con, $sql);

        if (mysqli_num_rows($op) == 1) {
            $row = mysqli_fetch_assoc($op);

            $_SESSION['userData'] = $row;

            header("location: index.php");
        } else {
            echo '* Invalid Email or Password';
        }
    }
}

// require 'closeConnection.php';

?>
 <!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="styl2.css">  
    <!-- <link rel="stylesheet" type="text/css" href="styl2.css">    -->
</head>    
<body>  
        <!-- <div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <nav>
                </ul>
            </div> -->
    <h2>Login Page</h2><br>    
    <div class="login">    
    <form id="login" method="get" action="login.php">    
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" name="Uname" id="Uname" placeholder="Username">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="Pass" id="Pass" placeholder="Password">    
        <br><br>    
        <li><a href="index.php">log in</a></li>   
        <br><br>    
        <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <br><br>
        <!-- <div>
                <ul>
                    <li><a href="index.php">Home</a></li>
                
                </ul>
            </div>    -->
       
         <!-- <a href="index.php">login</a>     -->
    </form>     
</div>    
</body>    
</html>