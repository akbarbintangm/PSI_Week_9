<?php
    // Temperature
    class viewDataTemperature {
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
        // Set Data Radian
        public function setDataRadian($Degrees) {
            $this->formulaRadian = $Degrees * (M_PI/180);
            return $this->formulaRadian;
        }
        // Get Data Radian
        public function getDataRadian() {
            return $this->formulaRadian;
        }
        
        // Set Data Sin
        public function setDataSin($Radian) {
            $this->formulaSin = sin($Radian);
            return $this->formulaSin;
        }
        // Get Data Sin
        public function getDataSin() {
            return $this->formulaSin;
        }
        
        // Set Data Cos
        public function setDataCos($Radian) {
            $this->formulaCos = cos($Radian);
            return $this->formulaCos;
        }
        // Get Data Cos
        public function getDataCos() {
            return $this->formulaCos;
        }
        
        // Set Data Tan
        public function setDataTan($Radian) {
            $this->formulaTan = tan($Radian);
            return $this->formulaTan;
        }
        // Get Data Tan
        public function getDataTan() {
            return $this->formulaTan;
        }
    }

    $objDataTrigonometry = new viewTrigonometry();   
    
    if( isset($_POST['submit_height_tree'])) {
        $inputDegrees = $_POST["input_degrees"];
        $inputTalls = $_POST["input_talls"];
        $inputDistance = $_POST["input_distance"];
        
        $objDataTrigonometry->setDataRadian($inputDegrees);
        $objDataTrigonometry->setDataSin($objDataTrigonometry->getDataRadian());
        $objDataTrigonometry->setDataCos($objDataTrigonometry->getDataRadian());
        $objDataTrigonometry->setDataTan($objDataTrigonometry->getDataRadian());
        
        $tanx = $objDataTrigonometry->getDataTan();
        $dataFinal = $inputDistance / $tanx;
        
        header("Location: ../sin_cos_tan/index.php?data_final=".$dataFinal."&data_radian=".$objDataTrigonometry->getDataRadian()."&data_sin=".$objDataTrigonometry->getDataSin()."&data_cos=".$objDataTrigonometry->getDataCos()."&data_tan=".$objDataTrigonometry->getDataTan()."&data_degrees=".$inputDegrees."&data_talls=".$inputTalls."&data_distance=".$inputDistance."");
        
    }
    
    // Checkout Forms
    class formsCheckout {
        function __construct() {
        
        }
        
        // Fetch Data setFirstName
        public function setFirstName($firstName) {
            $this->firstName = $firstName;
        }
        // Fetch Data setSecondName
        public function setSecondName($secondName) {
            $this->secondName = $secondName;
        }
        // Fetch Data setUserName
        public function setUserName($userName) {
            $this->userName = $userName;
        }
        // Fetch Data setPhoneNumber
        public function setPhoneNumber($phoneNumber) {
            $this->phoneNumber = $phoneNumber;
        }
        // Fetch Data setEmailUser
        public function setEmailUser($emailUser) {
            $this->emailUser = $emailUser;
        }
        // Fetch Data setPasswordUser
        public function setPasswordUser($passwordUser) {
            $this->passwordUser = $passwordUser;
        }
        // Fetch Data setAddressUser
        public function setAddressUser($addressUser) {
            $this->addressUser = $addressUser;
        }
        // Fetch Data setRekeningInputChoice
        public function setRekeningInputChoice($rekeningInputChoice) {
            $this->rekeningInputChoice = $rekeningInputChoice;
        }
        // Fetch Data setRekeningUser
        public function setRekeningUser($rekeningUser) {
            $this->rekeningUser = $rekeningUser;
        }
        // Fetch Data setInputGoodsChoice
        public function setInputGoodsChoice($inputGoodsChoice) {
            $this->inputGoodsChoice = $inputGoodsChoice;
        }
        // Fetch Data setKurirInputChoice
        public function setKurirInputChoice($kurirInputChoice) {
            $this->kurirInputChoice = $kurirInputChoice;
        }
        // Fetch Data setExtraInputChoice
        public function setExtraInputChoice($extraInputChoice) {
            $this->extraInputChoice = $extraInputChoice;
        }
        
        // Get Data from setFirstName
        public function getFirstName() {
            return $this->firstName;
        }
        // Get Data from setSecondName
        public function getSecondName() {
            return $this->secondName;
        }
        // Get Data from setUserName
        public function getUserName() {
            return $this->userName;
        }
        // Get Data from setPhoneNumber
        public function getPhoneNumber() {
            return $this->phoneNumber;
        }
        // Get Data from setEmailUser
        public function getEmailUser() {
            return $this->emailUser;
        }
        // Get Data from setPasswordUser
        public function getPasswordUser() {
            return $this->passwordUser;
        }
        // Get Data from setAddressUser
        public function getAddressUser() {
            return $this->addressUser;
        }
        // Get Data from setRekeningInputChoice
        public function getRekeningInputChoice() {
            return $this->rekeningInputChoice;
        }
        // Get Data from setRekeningUser
        public function getRekeningUser() {
            return $this->rekeningUser;
        }
        // Get Data from setInputGoodsChoice
        public function getInputGoodsChoice() {
            return $this->inputGoodsChoice;
        }
        // Get Data from setKurirInputChoice
        public function getKurirInputChoice() {
            return $this->kurirInputChoice;
        }
        // Get Data from setExtraInputChoice
        public function getExtraInputChoice() {
            return $this->extraInputChoice;
        }
        
    }

    $objFetchDataForms = new formsCheckout();   
    
    if( isset($_POST['submit_all'])) {
        // Variables
        $firstName = $_POST["firstName"];
        $secondName = $_POST["secondName"];
        $userName = $_POST["userName"];
        $phoneNumber = $_POST["phoneNumber"];
        $emailUser = $_POST["emailUser"];
        $passwordUser = $_POST["passwordUser"];
        $addressUser = $_POST["addressUser"];
        $rekeningInputChoice = $_POST["rekeningInputChoice"];
        $rekeningUser = $_POST["rekeningUser"];
        $inputGoodsChoice = $_POST["inputGoodsChoice"];
        $kurirInputChoice = $_POST["kurirInputChoice"];
        $extraInputChoice = $_POST["extraInputChoice"];
        
        // Logic
        foreach($extraInputChoice as $checkboxExtraInputChoice){
            $extraMultiCheckbox .= $checkboxExtraInputChoice . ', ';
        }
        $extraMultiCheckbox = substr($extraMultiCheckbox, 0, -2);
        
        // Logic 2
        foreach($inputGoodsChoice as $checkboxInputGoodsChoice){
            $goodsMultiCheckbox .= $checkboxInputGoodsChoice . ', ';
        }
        $goodsMultiCheckbox = substr($goodsMultiCheckbox, 0, -2);
        
        // Input Data
        $objFetchDataForms->setFirstName($firstName);
        $objFetchDataForms->setSecondName($secondName);
        $objFetchDataForms->setUserName($userName);
        $objFetchDataForms->setPhoneNumber($phoneNumber);
        $objFetchDataForms->setEmailUser($emailUser);
        $objFetchDataForms->setPasswordUser($passwordUser);
        $objFetchDataForms->setAddressUser($addressUser);
        $objFetchDataForms->setRekeningInputChoice($rekeningInputChoice);
        $objFetchDataForms->setRekeningUser($rekeningUser);
        $objFetchDataForms->setInputGoodsChoice($goodsMultiCheckbox);
        $objFetchDataForms->setKurirInputChoice($kurirInputChoice);
        $objFetchDataForms->setExtraInputChoice($extraMultiCheckbox);
        
        /* Get Data
        $objFetchDataForms->getFirstName();
        $objFetchDataForms->getSecondName();
        $objFetchDataForms->getUserName();
        $objFetchDataForms->getPhoneNumber();
        $objFetchDataForms->getEmailUser();
        $objFetchDataForms->getPasswordUser();
        $objFetchDataForms->getAddressUser();
        $objFetchDataForms->getRekeningInputChoice();
        $objFetchDataForms->getRekeningUser();
        $objFetchDataForms->getInputGoodsChoice();
        $objFetchDataForms->getKurirInputChoice();
        $objFetchDataForms->getExtraInputChoice1(); */
        
        header("Location: ../checkout_sample/index.php?display_forms=d-none&display_print=d-block&&firstName=".$objFetchDataForms->getFirstName()."&secondName=".$objFetchDataForms->getSecondName()."&UserName=".$objFetchDataForms->getUserName()."&PhoneNumber=".$objFetchDataForms->getPhoneNumber()."&emailUser=".$objFetchDataForms->getEmailUser()."&passwordUser=".$objFetchDataForms->getPasswordUser()."&addressUser=".$objFetchDataForms->getAddressUser()."&rekeningInputChoice=".$objFetchDataForms->getRekeningInputChoice()."&rekeningUser=".$objFetchDataForms->getRekeningUser()."&inputGoodsChoice=".$objFetchDataForms->getInputGoodsChoice()."&kurirInputChoice=".$objFetchDataForms->getKurirInputChoice()."&extraInputChoice=".$objFetchDataForms->getExtraInputChoice()."
        ");
        
    }
?>