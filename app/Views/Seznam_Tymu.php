
<?=$this->extend("layout/Layout1");


$this->section("content");
echo "<h1 class = 'text-center'>"."Seznam Týmů"."</h1>";
echo "<div class ='row row-cols-lg-3 row-cols-md-2 row-cols-xl-4 row-cols-sm-1 pt-5'>";

    foreach($Propojene_Data as $row){?>
<div class = "col">
    <div class = "card text-white bg-dark mb-3 mr-3 align-items-center">
        <div class = "card-body">
            <h5 class="card-title"><?php echo $row->nazev;?></h5>
            <h5 class="card-title"><?php echo $row->rok_zalozeni;?></h5>
            <h5 class="card-title"><?php echo $row->mesto;?></h5>
            
            <?php
            echo '<img src="'.base_url('assets/obrazky/'. $row->logo).'">';
            ?>
    
</div>
</div>
</div>

<?php
    }
    ?>
    <?php
$this->endSection();