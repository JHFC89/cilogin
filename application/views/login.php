<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <?php echo validation_errors(); ?>
    <?php echo form_open('login/form_validation'); ?> <!-- send the form data to and load login/form_validation and then login/validation -->
        <h1>Login</h1>
        <h5>Username</h5>
        <input type="text" name="username" value="<?php echo set_value('username'); ?>"/>

        <h5>Password</h5>
        <input type="password" name="password"/><br>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>