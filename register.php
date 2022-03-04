<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    />
</head>

<body>
    <div class="container">
     
            <?php
            if (isset($_GET['error'])) {
             ?> 
             <p class = "error"> <?php echo $_GET['error'] ?></p>
             <?php
            }

            ?>
        


        <form method="POST" action="signup.php">
            <label>Email</label>
            <input type="text" name="email" placeholder="email" />
            <br>
            <label>Name</label>
            <input type="text" name="name" placeholder="name" />
            <br>
            <label>Password</label>
            <input type="text" name="password" placeholder="password" />
            <br>
            <label>Confirm Password</label>
            <input type="text" name="confirmPassword" placeholder="confirmPassword" />
            <br>
            <input type="submit" value="Submit" name="signup" />
        </form>
    </div>


</body>

</html>