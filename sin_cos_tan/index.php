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
    
        <title>PSI - WEEK 9 PHP</title>
        </head>
        <body class="animate__animated animate__fadeIn bg-light text-dark" id="top">
            
            <div class="container-fluid">
                <div class="row vh-100 justify-content-center">
                    <div class="col-lg-6 align-self-center text-left">
                        <h3 class="font-weight-light" id="headerTemp">Penghitung Ketinggian Pohon</h3>
                        <label class="text-secondary" for="headerTemp">Ketik salah satu jika ingin mengubahnya.</label> <a href="./" class="btn btn btn-primary rounded shadow">Refresh Data</a> <a href="../" class="btn btn btn-info rounded shadow">Halaman Utama</a>
                        <br><br>
                        <form action="../config/index.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="degrees-w-addon-1">Besar Sudut</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text shadow" id="degrees-w-addon-1">Deg</span>
                                            </div>
                                            <input type="number" class="form-control shadow" placeholder="Angka dalam Derajat" aria-label="degrees" aria-describedby="degrees-addon-1" name="input_degrees" required="required" value="<?php if(isset($_GET['data_degrees'])){echo $_GET['data_degrees'];}else {echo "0";}?>">
                                            <div class="input-group-append">
                                                <span class="input-group-text shadow" id="degrees-w-addon-1">°</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="talls-l-addon-1">Tinggi Pengamat</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text shadow" id="talls-l-addon-1">T</span>
                                            </div>
                                            <input type="number" class="form-control shadow" placeholder="Angka dalam CentiMeter" aria-label="talls" aria-describedby="talls-addon-1" name="input_talls" required="required" value="<?php if(isset($_GET['data_talls'])){echo $_GET['data_talls'];}else {echo "0";}?>">
                                            <div class="input-group-append">
                                                <span class="input-group-text shadow" id="talls-l-addon-1">m</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="distance-l-addon-1">Jarak Pengamat ke Pohon</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text shadow" id="distance-l-addon-1">D</span>
                                            </div>
                                            <input type="number" class="form-control shadow" placeholder="Angka dalam CentiMeter" aria-label="distance" aria-describedby="distance-addon-1" name="input_distance" required="required" value="<?php if(isset($_GET['data_distance'])){echo $_GET['data_distance'];}else {echo "0";}?>">
                                            <div class="input-group-append">
                                                <span class="input-group-text shadow" id="distance-l-addon-1">m</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row text-center">
                                <div class="col-lg text-center">
                                    <div class="form-group text-center">
                                        <button type="reset" class="text-center btn btn-danger shadow rounded d-block btn-block">RESET</button> 
                                    </div>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-lg text-center">
                                    <div class="form-group text-center">
                                        <button type="submit" class="text-center btn btn-primary shadow rounded d-block btn-block" name="submit_height_tree">HITUNG</button>  
                                    </div>
                                </div>
                            </div>
                            <br>
                        </form>
                                
                        <div class="row text-center">
                            <div class="col">
                                <h3>HASIL TINGGI POHON: </h3>
                                <h4>
                                <?php if(isset($_GET['data_final'])) {
                                    echo $_GET['data_final'];
                                    }
                                    else {
                                        echo "0";
                                    }
                                ?> m</sup>
                                </h4> 
                            </div>
                        </div>
                        <br>
                        <div class="row mb-5">
                            <div class="col">
                                <a href="../" class="btn btn-lg btn-info shadow rounded d-block">HOME</a>
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
                    
    
        <!-- Optional JavaScript; choose one of the two! -->
    
        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="../assets/vendor/jquery/jquery-3.6.0.min.js"></script>
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