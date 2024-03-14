<?php
    require_once('database.php');
    $data=tampildata("barang");
    // $data=show_catatan();
    $nomor=0;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Daftar Notes</title>
  </head>
  <body>

    <div class ="container">
    <h1>List Notes</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Kategori</th>
      <th scope="col">Merk</th>
      <th scope="col">Jumlah </th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $note) : ?> 
    <?php $nomor++; ?>   
    <tr>
      <th scope="row"><?php echo "$nomor"; ?></th>
      <td><?php echo "$note[kode_barang]";?></td>
      <td><?php echo "$note[nama_barang]";?></td>
      <td><?php echo "$note[kategori]";?></td>
      <td><?php echo "$note[merk]";?></td>
      <td><?php echo "$note[jumlah]";?></td>
      <td><?php echo "<a href='edit.php?id=$note[id]'><button class='btn btn-warning'>Edit</button></a> <a href='javascript:hapusData(".$note['id'].")'><button class='btn btn-danger'>Hapus</button></a>"; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>









    <script language="JavaScript" type="text/javascript">
      function hapusData(id){
        if (confirm("Apakah anda yakin akan menghapus data ini?")){
          window.location.href = 'delete.php?id=' + id;
        }
      }
    </script>


  </body>
</html>