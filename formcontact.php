<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Feedback:</h3>
    <form action="cont.php" method="POST">
        <label for="name">Name:</label>
         <input type="text" id="name" name="name" placeholder="your name" class="box"><br><br>

         <label for="number">Number:</label>
         <input type="text" id="number" name="number" placeholder="your number" class="box"><br><br>

         <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="your email" class="box"><br><br>

         <label for="message">Message:</label>
         <textarea id="message" name="message" placeholder="your message" class="box"></textarea><br><br>

            <input type="submit" value="send message" class="btn">
        </form>
</body>
</html>