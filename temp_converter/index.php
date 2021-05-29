<?php
    require_once "../config/index.php";
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../assets/vendor/bootstrap/dist/css/bootstrap.min.css">
        
        <!-- Library -->
        <link rel="stylesheet" href="../assets/vendor/animate/animate.min.css">
        <link rel="stylesheet" href="../assets/vendor/waves/dist/waves.min.css">
        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="../lib/css/main.min.css">
    
        <title>Temperature Converter - PSI - WEEK 9 PHP</title>
        </head>
        <body class="animate__animated animate__fadeIn bg-light text-dark" id="top">
            
            <div class="container-fluid">
                <div class="row vh-100 justify-content-center">
                    <div class="col-lg-6 align-self-center text-left">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="celcius-tab" data-toggle="tab" href="#celcius" role="tab" aria-controls="celcius" aria-selected="true"><h3 class="font-weight-light">Celcius</h3></a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="fahrenheit-tab" data-toggle="tab" href="#fahrenheit" role="tab" aria-controls="fahrenheit" aria-selected="false"><h3 class="font-weight-light">Fahrenheit</h3></a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="kelvin-tab" data-toggle="tab" href="#kelvin" role="tab" aria-controls="kelvin" aria-selected="false"><h3 class="font-weight-light">Kelvin</h3></a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="rankine-tab" data-toggle="tab" href="#rankine" role="tab" aria-controls="rankine" aria-selected="false"><h3 class="font-weight-light">Rankine</h3></a>
                            </li>
                        </ul>
                        <br>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active pt-1" id="celcius" role="tabpanel" aria-labelledby="celcius-tab">
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label for="celcius-addon-1">Celcius</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text shadow" id="celcius-addon-1">°C</span>
                                            </div>
                                            <input type="number" class="form-control shadow" placeholder="Celcius" aria-label="Celcius" aria-describedby="celcius-addon-1" required="required">
                                            <div class="input-group-append">
                                                <button type="submit" class="input-group-text btn btn-primary shadow" name="btn_celcius_convert" aria-describedby="celcius-addon-1">HITUNG</button>  
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="fahrenheit-addon-1">Fahrenheit</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text shadow" id="fahrenheit-addon-1">°F</span>
                                                    </div>
                                                    <input type="number" class="form-control shadow disabled" placeholder="Fahrenheit" aria-label="Fahrenheit" aria-describedby="fahrenheit-addon-1" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="kelvin-addon-1">Kelvin</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text shadow" id="kelvin-addon-1">°K</span>
                                                    </div>
                                                    <input type="number" class="form-control shadow disabled" placeholder="Kelvin" aria-label="Kelvin" aria-describedby="kelvin-addon-1" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="rankine-addon-1">Rankine</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text shadow" id="rankine-addon-1">°R</span>
                                                    </div>
                                                    <input type="number" class="form-control shadow disabled" placeholder="Rankine" aria-label="Rankine" aria-describedby="rankine-addon-1" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <Br>
                                    <div class="row">
                                        <div class="col-lg">
                                            <button type="reset" class="btn btn-lg btn-info shadow rounded d-block text-right">RESET</button>  
                                        </div>  
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <!-- Fahrenheit -->
                        
                    </div>
                </div>
            </div>
                    
    
        <!-- Optional JavaScript; choose one of the two! -->
    
        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="../assets/vendor/jquery/jquery-3.6.0.slim.min.js"></script>
        <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- Library -->
        <script src="../assets/vendor/waves/dist/waves.min.js"></script>
        <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
        
        <!-- Custom -->
        <script src="../lib/js/main.min.js"></script>
        
        <!-- PHP Properties 
            NAMA    : AKBAR BINTANG MAHENDRA
            NPM     : 13.2019.1.00812
            JURUSAN : SISTEM INFORMASI / PAGI
            MATKUL  : PEMROGRAMAN SISTEM INFORMASI / P
            WEEK 9 - PHP, 4 PROJECT
        -->
    </body>
</html>