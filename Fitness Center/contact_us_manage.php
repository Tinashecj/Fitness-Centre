<html lang = "en">
    <head>
        <title>contact_us_manage</title>
    </head>
    <body>
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $name = trim($_POST['name']);
                $email = trim($_POST['email']);
                $phone = trim($_POST['phone']);
                $message = trim($_POST['message']);
            }
            echo $name;
            echo $email;
            echo $phone;
            echo $message;
        ?>
    </body>
</html>