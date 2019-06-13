<h1>Data Siswa</h1><hr>
<a href="<?php echo base_url("index.php/ExportPendaftar_C/export"); ?>">Export ke Excel</a><br><br>
<table border="1" cellpadding="8">
<tr>
  <th>No</th>
  <th>Nama</th>
  <th>Email</th>
  <th>Image</th>
</tr>
<?php
if( ! empty($pelamar)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
  foreach($pelamar as $data){ // Lakukan looping pada variabel siswa dari controller
    echo "<tr>";
    echo "<td>".$data->id."</td>";
    echo "<td>".$data->name."</td>";
    echo "<td>".$data->email."</td>";
    echo "<td>".$data->image."</td>";
    echo "</tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
</table>
