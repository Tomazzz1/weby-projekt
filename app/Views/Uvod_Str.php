<?=$this->extend("layout/Layout1");

$this->section("content");
echo "<h1 class = 'text-center pt-2'>"."Úvodní Stránka"."</h1>";
echo "<div class ='row row-cols-3 row-cols-md-1 row-cols-sm-1 row-cols-xl-3 row-cols-lg-1 g-4 p-4'>"
   
    ?>
<div class = "col">
    <div class = "card text-white bg-dark mb-3" style="text-decoration: none;">
        <div class = "card-body">
            <a href = "seznam-tymu" class="text-white" target='' style="text-decoration:none;">
                <h5 class = "card-title text-center">Seznam týmů</p>
</a>
            
</div>
</div>
</div>
<div class = "col">
    <div class = "card text-white bg-dark mb-3">
        <div class = "card-body">
        <a href = "pozice-hracu" class="text-white" target='' style="text-decoration:none;">
                <h5 class = "card-title text-center">Pozice Hráčů</p>
</a>
            
</div>
</div>
</div>
<div class = "col">
    <div class = "card text-white bg-dark mb-3">
        <div class = "card-body">
        <a href = "stadiony" class="text-white" target='' style="text-decoration:none;">
                <h5 class = "card-title text-center">Stadiony</p>
</a>
            
</div>
</div>
</div>
    <?php
$this->endSection();
