<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="formEmail" action="" method="POST">
        <input name="email" type="email" placeholder="Email">
        <input type="submit">
    </form>
    <form  id="formWithEmail" action="">
    <?php
        if($_POST['email'] != ''){
            echo "<input name='name' type=text' placeholder='Name'>
            <input name='secondName' type='text' placeholder='SecondName'>
            <input name='password' type='password' placeholder='Password'>
            <input name='email' type='email' placeholder='Email' value='$_POST[email]'>";
        }
    ?> 
    </form>
</body>
</html>

