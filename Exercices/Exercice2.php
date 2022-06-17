<?php
//creer une foction qui retourne la conversion d'une date fr en date us ou inversement
function conversionDate($date, $type){
    if($type == 'us'){
        $date_us = date('Y-m-d', strtotime($date));
        return $date_us;
    }
    else{
        $date_fr = date('d/m/Y', strtotime($date));
        return $date_fr;
    }
 
}
echo $date = '2020-01-01';
echo '<br>';
echo conversionDate($date, 'fr');
echo '<p> la date en français est : ' . conversionDate($date, 'fr') . '</p>';
echo '<p> la date en anglais est : ' . conversionDate($date, 'us') . '</p>';
?>