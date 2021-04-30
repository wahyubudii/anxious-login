<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Anxious | Admin Login</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/shared/style.css" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/images/icons/icon.png" />
</head>

<body>
    <div class="authentication-theme auth-style_1">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-7 col-sm-9 col-11 mx-auto">
                <div class="grid">
                    <div class="grid-body">
                        <div class="container" style="padding-bottom: 2rem; width: 50%;">
                            <a href="#" style="font-weight: 700; color: black; font-size: 24px; justify-content: center;">
                                <img class="logo-mini" src="assets/images/icons/icon.png" style="height: 25px; width: px;" alt=""> Anxious
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-lg-7 col-md-8 col-sm-9 col-12 mx-auto form-wrapper">
                                <form action="https://anxious-admin.herokuapp.com/" method="POST">
                                    <div class="form-group input-rounded">
                                        <input name="name" type="text" class="form-control" placeholder="Username" />
                                    </div>
                                    <div class="form-group input-rounded">
                                        <input name="password" type="password" class="form-control" placeholder="Password" />
                                    </div>
                                    <div class="form-inline">
                                        <div class="checkbox">
                                            <label><input type="checkbox" class="form-check-input" />Remember me <i class="input-frame"></i>
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block"> Login </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="auth_footer">
            <p class="text-muted text-center">© Anxious Inc 2021</p>
        </div>
    </div>
</body>

</html>