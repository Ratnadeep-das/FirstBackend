
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style rel="stylesheet" type="text/css" href="style.css"></style>
</head>
<body>
    <h1 style = "color:red">
        <?php if(isset($_GET['error'])){
            echo $_GET['error'];
        }?>
    </h1>

    <h1 style = "color:green">
            <?php
            if(isset($_GET['message'])){
                echo $_GET['message'];
            }  
            ?>
    </h1>
    <form action = "loginSuccess.php" method="POST">
        <label>Email</label>
        <input type = "text" name = "email" placeholder="email" />
 
        <br>
        <label>Password</label>
        <input type = "text" name = "password" placeholder="password"/> 
        <br>
        <input type = "submit" value = "Submit" name = "submit"/>
        </form>
</body>
</html>