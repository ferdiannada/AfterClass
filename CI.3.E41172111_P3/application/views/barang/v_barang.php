<?php
echo $judul." : <br>";
?>

<?php
foreach($item as $row){
    echo $row->kdbarang ."<br>";
    echo $row->nama ."<br>";
    echo $row->deskripsi ."<br>";
    echo $row->stokbarang ."<br>";
    echo $row->hargabarang ."<br>";
}
?>