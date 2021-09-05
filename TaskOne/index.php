<?php
//  define("size",50);
//  echo('size');

 $numOfUnits=30;
 if (($numOfUnits<51) && ($numOfUnits>0)) {
    $priceOfUnits=3.50;
    $bill=$numOfUnits * $priceOfUnits;
    echo("Bill of Electricity is ".$bill." Pound");
 }
 elseif(($numOfUnits>51) && ($numOfUnits<150)){
    $priceOfUnits=4.00;
    $bill=$numOfUnits * $priceOfUnits;
    echo("Bill of Electricity is ".$bill." Pound");
 }
 elseif($numOfUnits>150){
    $priceOfUnits=6.50;
    $bill=$numOfUnits * $priceOfUnits;
    echo("Bill of Electricity is ".$bill." Pound");
 }
 else{
     echo('Please Enter Corrrect Number Of Units');
 }
?>





