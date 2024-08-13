<?php
    include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    
                        <?php 
                        require 'nav.php';
                        ?>
            <div class="row" style="margin: 30px;">
                    
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-control mx-auto col-4 border border-primary border-3 p-3"><br>
                    <h2 class="section-title text-center" >Login</h2>   
                    <label class="text-center">Enter username:</label>
                    <input type="text"  placeholder="Username..." name="username"><br>
                    <label class="text-center">Enter password:</label>
                        <input type="password"  placeholder="Password..." name="password"><br>
                        <button type="submit" class="btn btn-success w-25 text-center"  name="login">login</button>
                    </form>
            </div>
            <?php
            include 'dbconfig.php';
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                if(isset($_POST['login'])){
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    
                    if($username==NULL){
                        echo "<script>alert('Enter Username')</script>";
                    }
                    else if($password==NULL){
                        echo "<script>alert('Enter Password')</script>";
                    }
                    else{
                        $sql="SELECT * FROM users
                        where Username='$username' AND Password='$password' ";
                        $result=mysqli_query($conn,$sql);
                        $num=mysqli_num_rows($result);
                        if($num==1){
                            $_SESSION['username']=$username;
                            $_SESSION['loggedin']=true;
                        // $p = $_SERVER['PHP_SELF'];
                        echo "<script> location.replace('index.php'); </script>";
                        }
                        else{
                            echo "<script>alert('User not found, Please register')</script>";
                        }
                    }
                }
            }
        ?>

</body>
</html>