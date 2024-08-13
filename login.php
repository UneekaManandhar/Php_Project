<?php
if(isset($_POST['uname'])&&isset($_POST['pass'])){
     
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email =validate($_POST['uname']);
    $pass =validate($_POST['pass']);

    if (empty($uname)){
        header("Location: form.php?error=Username is required");
        exit();
    }
    else if(empty($pass)){
        header("Location: form.php?error=Password is required");
        exit();
    }else{
        echo "Valid input";
    }
}else{
    header("Location: form.php");
    exit();
}
?>