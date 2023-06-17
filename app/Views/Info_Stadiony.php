
<?=$this->extend("layout/Layout1");
echo helper('form')?>
<?=$this->section("content");
echo "<h1 class = 'text-center pt-2'>"."Info o Stadionech a Úprava"."</h1>";

$table = new \CodeIgniter\View\Table();

echo "<div class='row row-cols-6 pt-4 align-items-center'>";

$table->setHeading('ID','Název Stadionu','Kapacita','Rok Otevření','Mazání', 'Editace');
foreach($data as $radek){

    $data = array('class' => 'btn btn-success');

    $editButton = anchor('stadiony/editovat/'.$radek->idstadion, 'EDIT', $data);

    $add = [
        'class' => 'btn btn-warning ',
        'type' => 'submit',
        'value' => 'ODEBRAT'
    ];

    $deleteButton = form_open('stadiony/smazat').form_input($add).form_hidden("idstadion",$radek -> idstadion).form_hidden("_method","DELETE").form_close();
    $pole = array($radek->idstadion,$radek -> nazev_stadionu, $radek -> kapacita,$radek->rok_otevreni,$deleteButton,$editButton,);
    $table->addRow($pole);


}

$template = array(
    'table_open' => '<table class="table table-bordered text-center bg-dark text-white">', 
    'thead_open' => '<thead>',
    'thead_close' => '</thead>',
    'heading_row_start' => '<tr>',
    'heading_row_end' => '</tr>',
    'heading_cell_start' => '<th>',
    'heading_cell_end' => '</th>',
    'tbody_open' => '<tbody>',
    'tbody_close' => '</tbody>',
    'row_start' => '<tr>',
    'row_end' => '</tr>',
    'cell_start' => '<td>',
    'cell_end' => '</td>',
    'row_alt_start' => '<tr>',
    'row_alt_end' => '</tr>',
    'cell_alt_start' => '<td>',
    'cell_alt_end' => '</td>',
    'table_close' => '</table>'
);

$table->setTemplate($template);
echo $table->generate();
?><div class = "col col-12 mt-4 align-items-center"> <div class = "card mb-3"> <?php echo anchor('stadiony/pridat', 'Přidat Stadion', ['class' => 'btn btn-dark  g-4 p-4 ']); echo "</div>";
echo $pager->links(); 
echo "</div>";
$this->endSection();?>