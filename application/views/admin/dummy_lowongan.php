<table border="1">
  <thead>
    <tr>
      <th>Posisi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($loker_baru as $lo):?>
    <tr>
      <td><?=$lo['posisi'];?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>

</table>
