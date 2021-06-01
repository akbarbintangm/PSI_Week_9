<?php
    // Temperature
    class viewDataTemperature {
        function __construct() {
        
        }
        // Convert Data
        public function tableViewTemp() {
            $nomer = 0;
            $interval = 14;
            $fahrenheit = array("20","22","24","26","28","30","32","34","36","38","40","42","44","46","48");
        
            for($nomer=0;$nomer<=$interval;$nomer++) {
                echo '<tr>';
                $data_awal =  $fahrenheit[$nomer];
                $hasil =  (($fahrenheit[$nomer]-32) * 0.44444);
                
                echo '<td>',$nomer+1,'</td>';
                echo '<td>',$data_awal," °F </td>";
                echo '<td>',$hasil," °Ré </td>";
                echo '</tr>';
            }
        }
    }
    
    $objTableViewtemp = new viewDataTemperature();
    
    // Dimensional
    class viewLargeDimensional {
        // Set Data Block Bar
        public function setDataBlockBar($WidthBlockBar,$LengthBlockBar,$HeightBlockBar) {
            $this->formulaBlockBar = ((2*$WidthBlockBar*$LengthBlockBar) + (2*$WidthBlockBar*$HeightBlockBar) + (2*$LengthBlockBar*$HeightBlockBar));
            return $this->formulaBlockBar;
        }
        // Get Data Block Bar
        public function getDataBlockBar() {
            return $this->formulaBlockBar;
        }
        
        // Set Data Cubic
        public function setDataCubic($SideCubic) {
            $this->formulaCubic = (6*$SideCubic*$SideCubic);
            return $this->formulaCubic;
        }
        // Get Data Cubic
        public function getDataCubic() {
            return $this->formulaCubic;
        }
        
        // Set Data Large Base Tube
        public function setDataLargeBaseTube($InternodeTube) {
            $this->LargeBaseTube = (3.14 * $InternodeTube * $InternodeTube);
            return $this->LargeBaseTube;
        }
        // Set Data Large Side Tube
        public function setDataLargeSideTube($InternodeTube, $HeightTube) {
            $this->LargeSideTube = (2 * (3.14 * $InternodeTube * $HeightTube));
            return $this->LargeSideTube;
        }
        // Set Data Large Tube
        public function setDataTube($InternodeTube, $HeightTube) {
            $this->formulaTube = (2 * ((3.14 * $InternodeTube) * ($InternodeTube + $HeightTube)));
            return $this->formulaTube;
        }
        // Set Data Tube
        public function getDataLargeBaseTube() {
            return $this->LargeBaseTube;
        }
        // Set Data Tube
        public function getDataLargeSideTube() {
            return $this->LargeSideTube;
        }
        // Get Data Tube
        public function getDataTube() {
            return $this->formulaTube;
        }
        
        // Set Data Cone [Large Base]
        public function setDataConeLargeBase($InternodeCone) {
            $this->LargeBaseCone = (3.14 * $InternodeCone * $InternodeCone);
            return $this->LargeBaseCone;
        }
        // Set Data Cone [Large Side]
        public function setDataConeLargeSide($InternodeCone,$SideCone) {
            $this->LargeSideCone = (3.14 * $InternodeCone * $SideCone);
            return $this->LargeSideCone;
        }
        // Set Data Cone [Large Line]
        public function setDataConeLargeLine($InternodeCone,$SideCone) {
            $this->LargeLineCone = ((3.14 * $InternodeCone * $InternodeCone) + (3.14 * $InternodeCone * $SideCone));
            return $this->LargeSurfaceCone;
        }
        // Set Data Cone [Large Surface]
        public function setDataConeLargeSurface($InternodeCone,$SideCone) {
            $this->LargeSurfaceCone = ((3.14 * $InternodeCone * $InternodeCone) + (3.14 * $InternodeCone * $SideCone));
            return $this->LargeSurfaceCone;
        }
        // Set Data Cone [Large Volume]
        /* public function setDataCone($LargeBaseCone,$LargeSideCone) {
            $this->formulaConeFinal = ($LargeBaseCone+$LargeSideCone);
            return $this->formulaConeFinal;
        } */
        
        // Get Data Cone
        public function getDataConeBase() {
            return $this->LargeBaseCone;
        }
        public function getDataConeSide() {
            return $this->LargeSideCone;
        }
        public function getDataConeLine() {
            return $this->LargeLineCone;
        }
        public function getDataConeSurface() {
            return $this->LargeSurfaceCone;
        }
        /*public function getDataCone() {
            return $this->formulaConeFinal;
        }*/
    }
    
    $objViewLargeDimensional = new viewLargeDimensional();
    
    // Submit Blockbar
    if( isset($_POST['submit_blockbar_large'])) {
        $WidthBar = $_POST["input_width_blockbar"];
        $LengthBar = $_POST["input_length_blockbar"];
        $HeightBar = $_POST["input_height_blockbar"];
        $objViewLargeDimensional->setDataBlockBar($WidthBar, $LengthBar, $HeightBar);
        header("Location: ../dimensional_shape/index.php?blockbar-tab=active&blockbar-panel=show&width_blockbar=".$WidthBar."&length_blockbar=".$LengthBar."&height_blockbar=".$HeightBar."&data_blockbar=".$objViewLargeDimensional->getDataBlockBar()."");
    }
    
    // Submit Cubic
    if( isset($_POST['submit_cubic_large'])) {
        $SideCubic = $_POST["input_side_cubic"];
        $objViewLargeDimensional->setDataCubic($SideCubic);
        header("Location: ../dimensional_shape/index.php?cubic-tab=active&cubic-panel=show&side_cubic=".$SideCubic."&data_cubic=".$objViewLargeDimensional->getDataCubic()."");
    }
    
    // Submit Tube
    if( isset($_POST['submit_tube_large'])) {
        $InternodeTube = $_POST["input_internode_tube"];
        $HeightTube = $_POST["input_height_tube"];
        
        $objViewLargeDimensional->setDataLargeBaseTube($InternodeTube);
        $objViewLargeDimensional->setDataLargeSideTube($InternodeTube, $HeightTube);
        $objViewLargeDimensional->setDataTube($InternodeTube, $HeightTube);
        
        header("Location: ../dimensional_shape/index.php?tube-tab=active&tube-panel=show&internode_tube=".$InternodeTube."&height_tube=".$HeightTube."&data_base_tube=".$objViewLargeDimensional->getDataLargeBaseTube()."&data_side_tube=".$objViewLargeDimensional->getDataLargeSideTube()."&data_tube=".$objViewLargeDimensional->getDataTube()."");
    }
    
    // Submit Cone
    if( isset($_POST['submit_cone_large'])) {
        $SideCone = $_POST["input_side_cone"];
        $InternodeCone = $_POST["input_internode_cone"];
        
        $objViewLargeDimensional->setDataConeLargeBase($InternodeCone);
        $objViewLargeDimensional->setDataConeLargeSide($InternodeCone,$SideCone);
        $objViewLargeDimensional->setDataConeLargeSurface($InternodeCone,$SideCone);
        //$objViewLargeDimensional->setDataCone($objViewLargeDimensional->getDataConeBase(),$objViewLargeDimensional->getDataConeSide());
        //&data_cone=".$objViewLargeDimensional->getDataCone()." (URL)
        header("Location: ../dimensional_shape/index.php?cone-tab=active&cone-panel=show&side_cone=".$SideCone."&internode_cone=".$InternodeCone."&data_base_cone=".$objViewLargeDimensional->getDataConeBase()."&data_side_cone=".$objViewLargeDimensional->getDataConeSide()."&data_surface_cone=".$objViewLargeDimensional->getDataConeSurface()."");

    }
    
    // Sin Cos Tan
    class viewTrigonometry {
        function __construct() {
        
        }
        // Set Data Trigonometry
        public function setDataTrigonometry($InternodeTube, $HeightTube) {
            $this->formulaCos = (2 * ((3.14 * $InternodeTube) * ($InternodeTube + $HeightTube)));
            return $this->formulaCos;
        }
        // Get Data Trigonometry
        public function getDataTrigonometry() {
            return $this->formulaCos;
        }
    }

    $objDataTrigonometry = new viewTrigonometry();   
    
    if( isset($_POST['submit_height_tree'])) {
        $SideCone = $_POST["input_side_cone"];
        $InternodeCone = $_POST["input_internode_cone"];
        
        $objViewLargeDimensional->setDataConeLargeBase($InternodeCone);
        $objViewLargeDimensional->setDataConeLargeSide($InternodeCone,$SideCone);
        $objViewLargeDimensional->setDataConeLargeSurface($InternodeCone,$SideCone);
        //$objViewLargeDimensional->setDataCone($objViewLargeDimensional->getDataConeBase(),$objViewLargeDimensional->getDataConeSide());
        //&data_cone=".$objViewLargeDimensional->getDataCone()." (URL)
        header("Location: ../dimensional_shape/index.php?cone-tab=active&cone-panel=show&side_cone=".$SideCone."&internode_cone=".$InternodeCone."&data_base_cone=".$objViewLargeDimensional->getDataConeBase()."&data_side_cone=".$objViewLargeDimensional->getDataConeSide()."&data_surface_cone=".$objViewLargeDimensional->getDataConeSurface()."");

    }
    
    // Checkout Forms
    class formsCheckout {
        function __construct() {
        
        }
        // Fetch & Output Data
        public function fetchDataForms() {
            
        }
    }

    $objFetchDataForms = new formsCheckout();   
?>