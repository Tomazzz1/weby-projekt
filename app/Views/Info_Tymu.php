<?php

$this->extend("layout/Layout1");

$this->section("content");
echo "<div class='container-fluid col-6'>";
echo "<h1 class = 'text-center'>"."Info o Týmu"."</h1>";
echo "<div class ='row row-cols-lg-3 row-cols-md-2 row-cols-xl-3 row-cols-sm-2 row-cols-xs-2 text-center pt-5'>";

foreach($Informace as $row) {
    echo "<div class='col col-xl-4 text-center mb-3 pt-2 mt-2'>
    <div class='card text-white bg-dark align-items-center  mb-3' >
    <div class='card-body'>";
    "<h5 class='card-text'>" .anchor('info-tymu/' .$Informace->idtymy, $Informace->nazev)."</h5>"
    
    echo "</div>";
     echo "</div>";
    echo"</div>";
    }
    echo "</div>";
    
    echo "</div>";
    $this->endSection();?>

