
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv=" ">
    <meta name=" ">
    <title>Class Assignment9</title>

</head>
<body>
    <h1>Exception Handling</h1>
    
 <?php
   if(!file_exists("test.txt")) {
      die("File not found");
   }else {
      $file = fopen("test.txt","r");
      print "Opend file sucessfully";
   }
  
?>
 
}
</body>
</html>