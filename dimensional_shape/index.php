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
                        <h3 class="font-weight-light" id="headerTemp">Penghitung Luas Dimensi</h3>
                        <label class="text-secondary" for="headerTemp">Ketik salah satu jika ingin mengubahnya.</label> <a href="./" class="btn btn btn-primary rounded shadow">Refresh Data</a> <a href="../" class="btn btn btn-info rounded shadow">Halaman Utama</a>
                        <br><br>
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link <?php if(isset($_GET['blockbar-tab'])){echo $_GET['blockbar-tab'];}else {}?>" id="blockbar-tab" data-toggle="pill" href="#blockbar" role="tab" aria-controls="blockbar" aria-selected="true"><h3 class="font-weight-light">Balok</h3></a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link <?php if(isset($_GET['cubic-tab'])){echo $_GET['cubic-tab'];}else {}?>" id="cubic-tab" data-toggle="pill" href="#cubic" role="tab" aria-controls="cubic" aria-selected="false"><h3 class="font-weight-light">Kubus</h3></a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link <?php if(isset($_GET['tube-tab'])){echo $_GET['tube-tab'];}else {}?>" id="tube-tab" data-toggle="pill" href="#tube" role="tab" aria-controls="tube" aria-selected="false"><h3 class="font-weight-light">Tabung</h3></a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link <?php if(isset($_GET['cone-tab'])){echo $_GET['cone-tab'];}else {}?>" id="cone-tab" data-toggle="pill" href="#cone" role="tab" aria-controls="cone" aria-selected="false"><h3 class="font-weight-light">Kerucut</h3></a>
                            </li>
                        </ul>
                        
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade <?php if(isset($_GET['blockbar-panel'])){echo $_GET['blockbar-panel']; echo " ",$_GET['blockbar-tab'];}else {}?> pt-1" id="blockbar" role="tabpanel" aria-labelledby="blockbar-tab">
                                <form action="../config/index.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="blockbar-w-addon-1">Panjang</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text shadow" id="blockbar-w-addon-1">W</span>
                                                    </div>
                                                    <input type="number" class="form-control shadow" placeholder="Angka dalam CentiMeter" aria-label="blockbar" aria-describedby="blockbar-addon-1" name="input_width_blockbar" required="required" value="<?php if(isset($_GET['width_blockbar'])){echo $_GET['width_blockbar'];}else {echo "0";}?>">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text shadow" id="blockbar-w-addon-1">cm</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="blockbar-l-addon-1">Lebar</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text shadow" id="blockbar-l-addon-1">L</span>
                                                    </div>
                                                    <input type="number" class="form-control shadow" placeholder="Angka dalam CentiMeter" aria-label="blockbar" aria-describedby="blockbar-addon-1" name="input_length_blockbar" required="required" value="<?php if(isset($_GET['length_blockbar'])){echo $_GET['length_blockbar'];}else {echo "0";}?>">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text shadow" id="blockbar-l-addon-1">cm</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="blockbar-h-addon-1">Tinggi</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text shadow" id="blockbar-h-addon-1">H</span>
                                                    </div>
                                                    <input type="number" class="form-control shadow disabled" placeholder="Angka dalam CentiMeter" aria-label="blockbar" aria-describedby="blockbar-addon-1" name="input_height_blockbar" required="required" value="<?php if(isset($_GET['height_blockbar'])){echo $_GET['height_blockbar'];}else {echo "0";}?>">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text shadow" id="blockbar-h-addon-1">cm</span>
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
                                                <button type="submit" class="text-center btn btn-primary shadow rounded d-block btn-block" name="submit_blockbar_large">HITUNG</button>  
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </form>
                                
                                <div class="row text-center">
                                    <div class="col">
                                        <h3>HASIL: </h3>
                                        <h4>
                                        <?php if(isset($_GET['data_blockbar'])) {
                                            echo $_GET['data_blockbar'];
                                            }
                                            else {
                                                echo "0";
                                            }
                                        ?> cm<sup>2</sup>
                                        </h4> 
                                    </div>
                                </div>
                                <br>
                                <div class="row mb-5">
                                    <div class="col">
                                        <a href="../" class="btn btn-lg btn-info shadow rounded d-block btn-block">HOME</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade <?php if(isset($_GET['cubic-panel'])){echo $_GET['cubic-panel']; echo " ",$_GET['cubic-tab'];}else {}?> pt-1" id="cubic" role="tabpanel" aria-labelledby="cubic-tab">
                                <form action="../config/index.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="cubic-s-addon-1">Sisi</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text shadow" id="cubic-s-addon-1">S</span>
                                                    </div>
                                                    <input type="number" class="form-control shadow" placeholder="Angka dalam CentiMeter" aria-label="cubic" aria-describedby="cubic-addon-1" name="input_side_cubic" required="required" value="<?php if(isset($_GET['side_cubic'])){echo $_GET['side_cubic'];}else {echo "0";}?>">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text shadow" id="cubic-s-addon-1">cm</span>
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
                                                <button type="submit" class="text-center btn btn-primary shadow rounded d-block btn-block" name="submit_cubic_large">HITUNG</button>  
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </form>
                                
                                <div class="row text-center">
                                    <div class="col">
                                        <h3>HASIL LUAS: </h3>
                                        <h4>
                                        <?php if(isset($_GET['data_cubic'])) {
                                            echo $_GET['data_cubic'];
                                            }
                                            else {
                                                echo "0";
                                            }
                                        ?> cm<sup>2</sup>
                                        </h4>
                                    </div>
                                </div>
                                
                                <br>
                                <div class="row mb-5">
                                    <div class="col">
                                        <a href="../" class="btn btn-lg btn-info shadow rounded d-block btn-block">HOME</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade <?php if(isset($_GET['tube-panel'])){echo $_GET['tube-panel']; echo " ",$_GET['tube-tab'];}else {}?> pt-1" id="tube" role="tabpanel" aria-labelledby="cubic-tab">
                                <form action="../config/index.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="tube-internode-addon-1">Jari-jari</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text shadow" id="tube-internode-addon-1">In</span>
                                                    </div>
                                                    <input type="number" class="form-control shadow" placeholder="Angka dalam CentiMeter" aria-label="tube" aria-describedby="tube-addon-1" name="input_internode_tube" required="required" value="<?php if(isset($_GET['internode_tube'])){echo $_GET['internode_tube'];}else {echo "0";}?>">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text shadow" id="tube-internode-addon-1">cm</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="tube-s-addon-1">Tinggi Tabung</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text shadow" id="tube-s-addon-1">H</span>
                                                    </div>
                                                    <input type="number" class="form-control shadow" placeholder="Angka dalam CentiMeter" aria-label="tube" aria-describedby="tube-addon-1" name="input_height_tube" required="required" value="<?php if(isset($_GET['height_tube'])){echo $_GET['height_tube'];}else {echo "0";}?>">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text shadow" id="tube-s-addon-1">cm</span>
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
                                                <button type="submit" class="text-center btn btn-primary shadow rounded d-block btn-block" name="submit_tube_large">HITUNG</button>  
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </form>
                                
                                <div class="row text-center">
                                    <div class="col">
                                        <h3>HASIL ALAS B/A: </h3>
                                        <h4>
                                        <?php if(isset($_GET['data_base_tube'])) {
                                            echo $_GET['data_base_tube'];
                                            }
                                            else {
                                                echo "0";
                                            }
                                        ?> cm<sup>2</sup>
                                        </h4>
                                    </div>
                                    <div class="col">
                                        <h3>HASIL SELIMUT: </h3>
                                        <h4>
                                        <?php if(isset($_GET['data_side_tube'])) {
                                            echo $_GET['data_side_tube'];
                                            }
                                            else {
                                                echo "0";
                                            }
                                        ?> cm<sup>2</sup>
                                        </h4>
                                    </div>
                                    <div class="col">
                                        <h3>HASIL PERMUKAAN: </h3>
                                        <h4>
                                        <?php if(isset($_GET['data_tube'])) {
                                            echo $_GET['data_tube'];
                                            }
                                            else {
                                                echo "0";
                                            }
                                        ?> cm<sup>2</sup>
                                        </h4>
                                    </div>
                                </div>
                                
                                <br>
                                <div class="row mb-5">
                                    <div class="col">
                                        <a href="../" class="btn btn-lg btn-info shadow rounded d-block btn-block">HOME</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane fade <?php if(isset($_GET['cone-panel'])){echo $_GET['cone-panel']; echo " ",$_GET['cone-tab'];}else {}?> pt-1" id="cone" role="tabpanel" aria-labelledby="cone-tab">
                                <form action="../config/index.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="cone-internode-addon-1">Jari-jari</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text shadow" id="cone-internode-addon-1">In</span>
                                                    </div>
                                                    <input type="number" class="form-control shadow" placeholder="Angka dalam CentiMeter" aria-label="cone" aria-describedby="cone-addon-1" name="input_internode_cone" required="required" value="<?php if(isset($_GET['internode_cone'])){echo $_GET['internode_cone'];}else {echo "0";}?>">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text shadow" id="cone-internode-addon-1">cm</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="cone-s-addon-1">Sisi</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text shadow" id="cone-s-addon-1">S</span>
                                                    </div>
                                                    <input type="number" class="form-control shadow" placeholder="Angka dalam CentiMeter" aria-label="cone" aria-describedby="cone-addon-1" name="input_side_cone" required="required" value="<?php if(isset($_GET['side_cone'])){echo $_GET['side_cone'];}else {echo "0";}?>">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text shadow" id="cone-s-addon-1">cm</span>
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
                                                <button type="submit" class="text-center btn btn-primary shadow rounded d-block btn-block" name="submit_cone_large">HITUNG</button>  
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </form>
                                
                                <div class="row text-center">
                                <div class="col">
                                        <h3>HASIL ALAS (La): </h3>
                                        <h4>
                                        <?php if(isset($_GET['data_base_cone'])) {
                                            echo $_GET['data_base_cone'];
                                            }
                                            else {
                                                echo "0";
                                            }
                                        ?> cm<sup>2</sup>
                                        </h4>
                                    </div>
                                    <div class="col">
                                        <h3>HASIL SELIMUT (Ls): </h3>
                                        <h4>
                                        <?php if(isset($_GET['data_side_cone'])) {
                                            echo $_GET['data_side_cone'];
                                            }
                                            else {
                                                echo "0";
                                            }
                                        ?> cm<sup>2</sup>
                                        </h4>
                                    </div>
                                    <div class="col">
                                        <h3>PERMUKAAN (L): </h3>
                                        <h4>
                                        <?php if(isset($_GET['data_surface_cone'])) {
                                            echo $_GET['data_surface_cone'];
                                            }
                                            else {
                                                echo "0";
                                            }
                                        ?> cm<sup>2</sup>
                                        </h4>
                                    </div>
                                    <!--
                                    <div class="col">
                                        <h3>HASIL VOLUME: </h3>
                                        <h4>
                                        <?php /* if(isset($_GET['data_cone'])) {
                                            echo $_GET['data_cone'];
                                            }
                                            else {
                                                echo "0";
                                            } */
                                        ?> cm<sup>2</sup>
                                        </h4>
                                    </div> -->
                                </div>
                                <br>
                                <div class="row mb-5">
                                    <div class="col">
                                        <a href="../" class="btn btn-lg btn-info shadow rounded d-block btn-block">HOME</a>
                                    </div>
                                </div>
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