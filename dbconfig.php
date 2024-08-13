<?php
$conn = new mysqli("localhost", "root", "", "handmadebyyunee");
if ($conn->connect_error) {
    die($conn->connect_error);
}
