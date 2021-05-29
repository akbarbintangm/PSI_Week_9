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
                                                <br>
                        <div class="row">
                            <div class="col">
                                <table class="table table-striped text-left">
                                    <thead class="bg-dark text-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Fahrenheit</th>
                                            <th scope="col">Reamur</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php
                                            $objTableViewtemp->tableViewTemp();
                                        ?>
                                    </tbody>
                                </table>
                            </div>  
                        </div>
                        
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