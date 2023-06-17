<?=$this->extend("layout/Layout1");

 $this->section("content");
echo helper('form')
echo form_open('stadiony/smazat'); ?>



<input type="hidden" name="_method" value="DELETE"> 
<input type="submit" name="smazat" value ="delete">
<label for="smazat">Smazat</label>;
<?php
echo form_close();
$this->endSection();