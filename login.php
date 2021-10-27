<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body {
            background-image: url('assets/images/login_bg.jpg');
        }
        .login-container{
            margin-top: 5%;
            margin-bottom: 5%;
        }
        .login-form-1{
            padding: 5%;
            background: white;
            box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
        }
        .login-form-1 h3{
            text-align: center;
            color: #333;
        }
        .login-form-2{
            padding: 5%;
            background: #0062cc;
            box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
        }
        .login-form-2 h3{
            text-align: center;
            color: #fff;
        }
        .login-container form{
            padding: 10%;
        }
        .btnSubmit
        {
            width: 50%;
            border-radius: 1rem;
            padding: 1.5%;
            border: none;
            cursor: pointer;
        }
        .login-form-1 .btnSubmit{
            font-weight: 600;
            color: #fff;
            background-color: #0062cc;
        }
        .login-form-2 .btnSubmit{
            font-weight: 600;
            color: #0062cc;
            background-color: #fff;
        }
        .login-form-2 .ForgetPwd{
            color: #fff;
            font-weight: 600;
            text-decoration: none;
        }
        .login-form-1 .ForgetPwd{
            color: #0062cc;
            font-weight: 600;
            text-decoration: none;
        }
    </style>

</head>
<body>
<div class="tab">
		<button class="btn" onclick="location.href='./home.php'">Home</button>
	
</div>
        <div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Login</h3>
                    <form action="validation.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="user" placeholder="Your Email *" autocomplete="off" value="" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Your Password *" autocomplete="off" value="" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login">
                        </div>
                        <div class="form-group">
                            <p class="ForgetPwd">Forget Password?</p>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Register</h3>
                    <form action="registration.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="user" placeholder="Your Email *" autocomplete="off" value="" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Your Password *" autocomplete="off" value="" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Register" >
                        </div>
                        <div class="form-group">

                            <p class="ForgetPwd">By signing up, you agree to our Terms of service</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
 
</body>
</html>