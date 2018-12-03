<?php echo $judul;?>
<?php echo anchor ('angkot/input','INPUT ANGKOT DISINI');?>
<hr>
<table border="1">
    <tr><th>no_angkot</th><th>jurusan_angkot</th><th>nm_rute</th><th>warna_angkot</th><th></th></tr>
<?php
foreach ($angkot as $a){
    echo "<tr>
        <td>$a->no_angkot</td>
        <td>$a->jurusan_angkot</td>
        <td>$a->nm_rute</td>
        <td>$a->warna_angkot</td>
        <td>".anchor('angkot/edit/'.$a->id_angkot,'EDIT'),"</td>
        <td>".anchor('angkot/edit/'.$a->id_angkot,'DELETE'),"</td>
    </tr>";
        
}
?>
</table>