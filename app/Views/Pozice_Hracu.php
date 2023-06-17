<?=$this->extend("layout/Layout1");?>

<?=$this->section("content");
echo "<h1 class = 'text-center pt-2'>"."Pozice Hráčů"."</h1>";
echo "<div class ='row row-cols-lg-2 row-cols-md-2 row-cols-xl-2 row-cols-sm-2 row-cols-xs-1 text-center pt-5'>";
foreach($data as $Pozice) {
    echo "<div class='col pt-5 text-center'>
    <div class='card bg-dark mb-3 mr-3 align-center' style='text-decoration:none;'>
    <div class='card-body'>
    <h5 class='card-title'>" .anchor('hraci/' .$Pozice->idpozice, $Pozice->pozice)."</h5>
    </div>
    </div>";
    echo"</div>";
}
    echo "</div>";
    $this->endSection();?>

