
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv=" ">
    <meta name=" ">
    <title>Class Assignment9</title>

</head>
<body>
    <h1>Sanitize Validate</h1>
    
//Sanitizing will remove any illegal character from the data
<?php
    if (isset($_POST['email'])) {
        echo filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        echo "<br/><br/>";
    }
 
    if (isset($_POST['homepage'])) {
        echo filter_var($_POST['homepage'], FILTER_SANITIZE_URL);
        echo "<br/><br/>";
    }
?>
 
<form name="form1" method="post" action="form-sanitize.php">
    Email Address: <br/>
    <input type="text" name="email" value="<?php echo $_POST['email']; ?>" size="50"/> <br/><br/>
    Home Page: <br/>
    <input type="text" name="homepage" value="<?php echo $_POST['homepage']; ?>" size="50" /> <br/>
    <br/>
    <input type="submit" />
</form>

//VALIDATING

<?php
    if (isset($_POST['email'])) {
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "$email is a valid email address.<br/><br/>"; 
        } else {
            echo "$email is <strong>NOT</strong> a valid email address.<br/><br/>";
        }
    }
 
    if (isset($_POST['homepage'])) {
        $homepage = filter_var($_POST['homepage'], FILTER_SANITIZE_URL);
        if (filter_var($homepage, FILTER_VALIDATE_URL)) {
            echo "$homepage is a valid URL.<br/><br/>";
        } else {
            echo "$homepage is <strong>NOT</strong> a valid URL.<br/><br/>";
        }
    }
?>
 
<form name="form1" method="post" action="form-validate.php">
Email Address: <br/>
<input type="text" name="email" value="<?php echo $_POST['email']; ?>" size="50"/> <br/><br/>
Home Page: <br/>
<input type="text" name="homepage" value="<?php echo $_POST['homepage']; ?>" size="50" /> <br/>
<br/>
<input type="submit" />
</form>


 
}
</body>
</html>