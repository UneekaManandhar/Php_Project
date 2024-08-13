<?php
    include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Register</title>
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
<div class="row" style="margin: 30px;">
                    
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-control mx-auto col-4 border border-primary border-3 p-3"><br>
                        <h2 class="section-title">Create an account</h2>    
                        <label>Full Name:</label>
                        <input type="text" placeholder="Full Name..." name="fullname"><br>
                        <label>UserName:</label>
                        <input type="text" placeholder="Username..." name="username"><br>
                        <label>Email:</label>
                        <input type="text" placeholder="Email address..." name="email"><br>
                        <label>Password:</label>
                        <input type="password" placeholder="Password..." name="password"><br>
                        <label>Re-Password:</label>
                        <input type="password" placeholder="Repassword..." name="repassword"><br>
                        <button type="submit" class="btn btn-success" name="register">Register</button>
                    </form>
            </div>
<?php
include 'dbconfig.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['register'])){
        $username=$_POST['username'];
        $fullname=$_POST['fullname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $repassword=$_POST['repassword'];

        if($username==NULL){
            echo "<script>alert('Enter Username')</script>";
            header('location:index.php');

        }
        else if($fullname==NULL){
            echo "<script>alert('Enter your name')</script>";
            header('location:index.php');

        }
        else if($email==NULL){
            echo "<script>alert('Enter your email')</script>";
            header('location:index.php');

        }
        else if($password==NULL){
            echo "<script>alert('Enter your password')</script>";
            header('location:index.php');

        }
        else if($repassword==NULL){
            echo "<script>alert('Enter your re-password')</script>";
            header('location:index.php');

        }
        else if($password!=$repassword){
            echo "<script>alert('Passwords does not match, Try Again')</script>";
            header('location:index.php');
        }

        else{
            $sql="INSERT INTO users(FullName,Username,Email,`Password`)
        values('$fullname','$username','$email','$password')
        ";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "<script>alert('Account Created, Please Login In')</script>";
            header('location:index.php');
        }
        else{
            echo "<script>alert('Error, Please Register Again')</script>";
            header('location:index.php');
        }
        }

    }
}
?>
</body>
</html>