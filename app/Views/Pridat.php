<?=$this->extend("layout/layout1");

 $this->section("content");
echo helper('form');
echo form_open('stadiony/vytvorit'); ?>
<label for = "nazev_stadionu">Název</label>
<input type = "text" name= "nazev_stadionu" value ="" class="bg-dark text-white">
<label for = "kapacita">Kapacita</label>
<input type = "text" name = "kapacita" value = "" class="bg-dark text-white">
<label for = "rok_otevreni">Rok Otevření</label>
<input type = "text" name = "rok_otevreni" value = "" class="bg-dark text-white">



<input type="submit" name="potvrdit" value ="Přidat" class ="btn btn-dark text-white text-decoration-none">

<?php
echo form_close();
$this->endSection();