<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BADAN AKSESIBILITAS TELEKOMUNIKASI DAN INFORMATIKA</title>
    <link rel="icon" href="images/title.png" type="image/png">
    <link rel="stylesheet" href="css/style_login.css" />
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
</head>

<body>
    <div class="login_form_container">
        <div class="login_form">
            <h2 class="glowIcon">Login</h2>
            <form action="proses_login.php" method="post">
                <div class="input_group">
                    <i class="fa fa-user"></i>
                    <input class="input_text" type="text" name="username" placeholder="Username" required=""><br>
                </div>
                <div class="input_group">
                    <i class="fa fa-unlock-alt"></i>
                    <input class="input_text" type="password" name="password" placeholder="Password" required="">
                </div>
                <div class="button_group" id="login_button">
                    <input type="submit" value="Login">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
