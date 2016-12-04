<html>

    <head>
        <title>Form Example</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="/js/login.js" /></script>
        <link rel="stylesheet" href="/css/login.css" />
    </head>

    <body>
        <!--      <form action = "/user/register" method = "post">
                 <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
              
              
              </form>-->

        <div class="login-page">
            <div class="form">
                <form action = "/user/register" method = "post" class="register-form">
                    <input type="text" placeholder="name"/>
                    <input type="password" placeholder="password"/>
                    <input type="text" placeholder="email address"/>
                    <button>create</button>
                    <p class="register">Already registered? <a href="#">Sign In</a></p>
                </form>
                <form action = "/user/login" method = "post" class="login-form">
                    <input type="text" placeholder="username"/>
                    <input type="password" placeholder="password"/>
                    <button>login</button>
                    <p class="login">Not registered? <a href="#">Create an account</a></p>
                </form>
            </div>
        </div>

    </body>
</html>