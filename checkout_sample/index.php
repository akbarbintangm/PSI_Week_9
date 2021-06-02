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
            
            <div class="container-fluid mt-5">
                <form action="../config/index.php" method="POST" enctype="multipart/form-data">
                    <div class="row mb-5">
                        <div class="col-lg-6 text-left">
                            <h3 class="font-weight-light" id="headerTemp">Halaman CheckOut</h3>
                            <label class="text-secondary" for="headerTemp">Isi semua input dengan benar.</label> <a href="./" class="btn btn btn-primary rounded shadow">Refresh Data</a> <a href="../" class="btn btn btn-info rounded shadow">Halaman Utama</a>
                            <br><br>
                            <div class="dropdown-divider"></div>
                            <h3 class="font-weight-light" id="headerTemp">Data Diri</h3>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="FirstName">Nama Depan</label>
                                        <input name="firstName" type="text" placeholder="Nama Depan" class="form-control shadow" id="FirstName" aria-describedby="FirstNameHelp" required="required" value="<?php if(isset($_GET['firstName'])) {echo $_GET['firstName'];}else {}?>">
                                        <small id="FirstNameHelp" class="form-text text-muted">Your first name will publicly generated.</small>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="SecondName">Nama Belakang</label>
                                        <input name="secondName" type="text" placeholder="Nama Belakang" class="form-control shadow" id="SecondName" aria-describedby="SecondNameHelp" required="required" value="<?php if(isset($_GET['secondName'])) {echo $_GET['secondName'];}else {}?>">
                                        <small id="SecondNameHelp" class="form-text text-muted">Your second name will publicly generated.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="username-addon-1">Username</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text shadow" id="username-addon-1">@</span>
                                            </div>
                                            <input type="text" class="form-control shadow" placeholder="Username" aria-label="username" aria-describedby="username-addon-1" name="userName" required="required" value="<?php if(isset($_GET['userName'])) {echo $_GET['userName'];}else {}?>">
                                        </div>
                                        <small id="username-addon-1" class="form-text text-muted">Your username will publicly generated.</small>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="phone-addon-1">Nomor HP</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text shadow" id="phone-addon-1">+62</span>
                                            </div>
                                            <input type="number" class="form-control shadow" placeholder="Nomor HP" aria-label="phone" aria-describedby="phone-addon-1" name="phoneNumber" required="required" value="<?php if(isset($_GET['phoneNumber'])) {echo $_GET['phoneNumber'];}else {}?>">
                                        </div>
                                        <small id="phone-addon-1" class="form-text text-muted">Your phone will publicly generated.</small>
                                    </div>
                                </div>
                            </div>       
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input placeholder="Email" name="emailUser" type="email" class="form-control shadow" id="email" aria-describedby="emailHelp" required="required" value="<?php if(isset($_GET['emailUser'])) {echo $_GET['emailUser'];}else {}?>">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="passWord">Password</label>
                                <input placeholder="Password" name="passwordUser" type="password" class="form-control shadow" id="passWord" aria-describedby="passwordHelp" required="required" value="<?php if(isset($_GET['passwordUser'])) {echo $_GET['passwordUser'];}else {}?>">
                                <small id="passwordHelp" class="form-text text-muted">Use the strong words for passwords.</small>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea placeholder="Alamat Rumah" name="addressUser" type="textarea" class="form-control shadow" id="address" aria-describedby="addressHelp" required="required" value="<?php if(isset($_GET['addressUser'])) {echo $_GET['addressUser'];}else {}?>"></textarea>
                                <small id="addressHelp" class="form-text text-muted">We'll never share your address with anyone else.</small>
                            </div>
                            
                            <div class="dropdown-divider"></div>
                            
                            <h3 class="font-weight-light" id="headerTemp">Info Rekening</h3>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pilih Rekening</label>
                                <div class="row">
                                    <div class="col">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="rekening1" name="rekeningInputChoice" required="required" value="" <?php if(isset($_GET['data_surface_cone'])) {echo $_GET['data_surface_cone'];}else {}?>>
                                            <label class="custom-control-label" for="rekening1">BCA</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="rekening2" name="rekeningInputChoice" value="" <?php if(isset($_GET['data_surface_cone'])) {echo $_GET['data_surface_cone'];}else {}?>>
                                            <label class="custom-control-label" for="rekening2">BRI</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="rekening3" name="rekeningInputChoice" value="" <?php if(isset($_GET['data_surface_cone'])) {echo $_GET['data_surface_cone'];}else {}?>>
                                            <label class="custom-control-label" for="rekening3">BNI</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="rekening4" name="rekeningInputChoice" value="" <?php if(isset($_GET['data_surface_cone'])) {echo $_GET['data_surface_cone'];}else {}?>>
                                            <label class="custom-control-label" for="rekening4">BANK JATIM</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rekening">Nomor Rekening</label>
                                <input placeholder="Rekening" name="rekeningUser" type="rekening" class="form-control shadow" id="rekening" aria-describedby="rekeningHelp" required="required" value="<?php if(isset($_GET['data_surface_cone'])) {echo $_GET['data_surface_cone'];}else {}?>">
                                <small id="rekeningHelp" class="form-text text-muted">We'll never share your rekening with anyone else.</small>
                            </div> 
                            
                            <div class="dropdown-divider"></div>
                            
                            <h3 class="font-weight-light" id="headerTemp">Daftar Belanja</h3>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox mt-1">
                                    <input type="checkbox" class="custom-control-input" id="inputGoodsChoice1" name="inputGoodsChoice">
                                    <label class="custom-control-label" for="inputGoodsChoice1"><img src="../assets/images/zt-a30600h-10m-image01_0.jpg" class="w-25 rounded shadow-sm"> ZOTAC RTX 3060 Twin Edge OC</label>
                                </div>
                            </div>
                            
                            <div class="dropdown-divider"></div>
                            
                            <h3 class="font-weight-light" id="headerTemp">Pilih Pengiriman dan Tambahan Layanan</h3>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="kurirInputChoice1" name="kurirInputChoice" value="<?php if(isset($_GET['data_surface_cone'])) {echo $_GET['data_surface_cone'];}else {}?>" required="required">
                                            <label class="custom-control-label" for="kurirInputChoice1">JNE</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="kurirInputChoice2" name="kurirInputChoice" value="<?php if(isset($_GET['data_surface_cone'])) {echo $_GET['data_surface_cone'];}else {}?>">
                                            <label class="custom-control-label" for="kurirInputChoice2">JNT</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="kurirInputChoice3" name="kurirInputChoice" value="<?php if(isset($_GET['data_surface_cone'])) {echo $_GET['data_surface_cone'];}else {}?>">
                                            <label class="custom-control-label" for="kurirInputChoice3">AnterAja</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="kurirInputChoice4" name="kurirInputChoice" value="<?php if(isset($_GET['data_surface_cone'])) {echo $_GET['data_surface_cone'];}else {}?>">
                                            <label class="custom-control-label" for="kurirInputChoice4">POS</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox mt-1">
                                    <input type="checkbox" class="custom-control-input" id="extraInputChoice1" name="extraInputChoice" value="Wajib Asuransi" required="required">
                                    <label class="custom-control-label" for="extraInputChoice1">Wajib Asuransi</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox mt-1">
                                    <input type="checkbox" class="custom-control-input" id="extraInputChoice2" name="extraInputChoice" value="Extra Bubble Warp">
                                    <label class="custom-control-label" for="extraInputChoice2">Extra Bubble Warp</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox mt-1">
                                    <input type="checkbox" class="custom-control-input" id="extraInputChoice3" name="extraInputChoice" value="Extra Packing Kayu">
                                    <label class="custom-control-label" for="extraInputChoice3">Extra Packing Kayu</label>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col text-right font-weight-bold">
                                        <p>Subtotal Rp. 15.000.000,-</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <a href="#checkout" class="scrollto js-scroll-trigger btn btn-lg d-block btn-block btn-dark text-light">Lanjut</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-2"></div>
                        
                        <div class="col-lg-4 text-left shadow rounded bg-success text-light">
                            <p class="font-weight-bold mt-3" id="checkout">Ringkasan Belanja</p>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm">
                                        <h5 class="font-weight-bold text-light">Total Belanja</h5>
                                    </div>
                                    <div class="col-sm">
                                        <h5 class="font-weight-bold text-warning text-right">Rp. 15.000.000</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm">
                                        <p>
                                            <h4 class="font-weight-bold">Total Tagihan</h4>
                                        </p>
                                    </div>
                                    <div class="col-sm text-right">
                                        <p>
                                            <h4 class="font-weight-bold text-warning text-right">Rp. 15.000.000</h4>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="customCheck1" onclick="clickCheckbox()">
                                            <label class="custom-control-label" for="customCheck1">Dengan mengaktifkan asuransi, Saya menyetujui syarat dan ketentuan yang berlaku.</label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <button id="submit_all" type="submit" name="submit_all" class="btn btn-lg btn-light text-dark shadow btn-block" disabled="disabled">GASKEUN BELI</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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