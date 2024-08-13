<?php
if(session_status()===PHP_SESSION_NONE){
    ini_set('session.cookie_lifetime','31536000');
    session_start();
}
include 'dbconfig.php';
if(!$_SESSION['loggedin']){
    header('location:index.php');
}
else{
    $un = $_SESSION['username'];
    $account = "SELECT * FROM users WHERE Username='$un'";
    $res = mysqli_query($conn, $account);
    $num = mysqli_num_rows($res);
    if($num!=1){
        header('location:index.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Online Bike Rental Service</title>
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
<div id="site-content">
            <main class="main-content">
                <div class="container">
                    <div class="page">
                        <h1 style=font-weight:800>Your Information</h1>
                        <?php
                        $info = mysqli_fetch_assoc($res);
                        echo "<table>
                        <tr>
                        <th>Name:</h2></th>
                        <td>".$info['FullName']."</td>
                        </tr>
                        <tr>
                        <th>Username:</h2></th>
                        <td>".$info['Username']."</td>
                        </tr>
                        <th>Email:</h2></th>
                        <td>".$info['Email']."</td>
                        </tr>
                        </table>
                        ";
                        ?>

                    </div>
                </div> <!-- .container -->
                <a href="index.php">Go Back</a>
            </main> <!-- .main-content -->
        </div>

</body>
</html>