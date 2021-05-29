<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="./assets/vendor/bootstrap/dist/css/bootstrap.min.css">
        
        <!-- Library -->
        <link rel="stylesheet" href="./assets/vendor/animate/animate.min.css">
        <link rel="stylesheet" href="./assets/vendor/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="./assets/vendor/waves/dist/waves.min.css">
        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="./lib/css/main.min.css">
    
        <title>Hello, world!</title>
        </head>
        <body class="animate__animated animate__fadeIn bg-light text-dark" id="top">
            
            <div class="container-fluid">
                <div class="row vh-100 mb-0 mt-0 justify-content-center">
                    <div class="col-lg-6 align-self-center">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true"><h2 class="font-weight-light">Login</h2></a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="signup-tab" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false"><h2 class="font-weight-light">Daftar</h2></a>
                            </li>
                        </ul>
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active pt-1" id="login" role="tabpanel" aria-labelledby="login-tab">
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control shadow" id="exampleInputEmail1" aria-describedby="emailHelp" required="required">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control shadow" id="exampleInputPassword1" aria-describedby="passwordHelp" required="required">
                                        <small id="passwordHelp" class="form-text text-muted">Use the strong words for passwords.</small>
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" class="text-right btn btn-info shadow" name="exampleLogin1">Login</button>                            
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade pt-1" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Name</label>
                                        <input type="text" class="form-control shadow" id="exampleInputName1" aria-describedby="nameHelp" required="required">
                                        <small id="nameHelp" class="form-text text-muted">Your name will publicly generated.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control shadow" id="exampleInputEmail1" aria-describedby="emailHelp" required="required">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control shadow" id="exampleInputPassword1" aria-describedby="passwordHelp" required="required">
                                        <small id="passwordHelp" class="form-text text-muted">Use the strong words for passwords.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword2">RePassword</label>
                                        <input type="password" class="form-control shadow" id="exampleInputPassword2" aria-describedby="repasswordHelp" required="required">
                                        <small id="repasswordHelp" class="form-text text-muted">Use the same passwords for passwords.</small>
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required="required">
                                        <label class="form-check-label" for="exampleCheck1">Saya telah mematuhi peraturan</label>
                                    </div> 
                                    <div class="form-group text-right">
                                        <button type="button" class="text-right btn btn-secondary shadow">Batal</button>
                                        <button type="submit" class="text-right btn btn-info shadow" name="exampleLogin1">Daftar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    
    
        <!-- Optional JavaScript; choose one of the two! -->
    
        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="./assets/vendor/jquery/jquery-3.6.0.slim.min.js"></script>
        <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- Library -->
        <script src="./assets/vendor/waves/dist/waves.min.js"></script>
        <script src="./assets/vendor/jquery-easing/jquery.easing.min.js"></script>
        
        <!-- Custom -->
        <script src="./lib/js/main.min.js"></script>
    
    </body>
</html>