<?php
                        if(isset($_SESSION['loggedin'])){
                            if(!$_SESSION['loggedin']){
                                echo "<a href='login.php' class='login-button'>Login</a>
                                <span>|</span>
                            <a href='register.php' class='regis-button'>Register</a>";
                            }
                            else{
                                echo "<a href='myaccount.php'>My Account(".$_SESSION['username'].")</a>
                                <a href='logout.php'>|Logout <small></small></a>";
                                // echo $_SESSION['username'];
                            }
                        }
                        else{
                            echo "<a href='login.php' class='login-button'>Login</a>
                            <span>|</span>
                            <a href='register.php' class='regis-button'>Register</a>";
                        }

                        ?>