<?php
    class viewDataTemperature {
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
        
?>