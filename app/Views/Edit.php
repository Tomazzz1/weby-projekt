<?=$this->extend("layout/layout1");
echo helper('form');
 $this->section("content");

echo form_open('stadiony/aktualizovat'); 
echo form_hidden("_method","PUT");
echo form_hidden("idstadion",$seznam-> idstadion);
echo form_hidden("nazev_stadionu",$seznam-> nazev_stadionu);
echo form_hidden("kapacita",$seznam-> kapacita);
echo form_hidden("rok_otevreni",$seznam-> rok_otevreni);
echo"<div class='row row-cols-6 pt-4 align-items-center'>";
$add = [
    'for' => ''
];


echo form_label("Název Stadionu","",$add);
$add = [
    'class' => 'd-flex flex-row align-items-center mb-4 col-6 align-items-center mb-4',
    'type' => 'text',
    'required' => 'required',
    'name' => 'nazev_stadionu',
    'value' => $seznam -> nazev_stadionu,
];
echo form_input($add);
echo form_label("Kapacita","",$add);
$add = [
    'class' => 'd-flex flex-row align-items-center mb-4 col-6 align-items-center mb-4',
    'type' => 'text',
    'required' => 'required',
    'name' => 'kapacita',
    'value' => $seznam -> kapacita,
];
echo form_input($add);
echo form_label("Rok Otevření","",$add);
$add = [
    'class' => 'd-flex flex-row align-items-center mb-4 col-6 align-items-center mb-4',
    'type' => 'text',
    'required' => 'required',
    'name' => 'rok_otevreni',
    'value' => $seznam -> rok_otevreni,
];

echo form_input($add);

$add = [
    'class' => 'btn btn-dark d-flex flex-row align-items-center mb-4',
    'type' => 'submit',
    'value' => 'Editovat'
];
echo form_input($add);
echo form_close();
echo"</div>
</div>
</div>
</div>
</div>
</div>
</div>";

$this->endSection();?>