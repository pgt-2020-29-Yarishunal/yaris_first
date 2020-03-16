<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>TABEL ARITMATIKA</h1>
<table class="table" border="2">
  <thead class="thead-dark">
    <tr>
        <th scope="col">Nomor</th>
      <th scope="col">Angka1</th>
      <th scope="col">Angka2</th>
        <th scope="col">Hasil</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
      <?php
      if($ambil->num_rows() > 0){
      foreach($ambil->result() as $row)
      {
         ?> 
          <tr>
              <td><?php echo $row->id; ?></td>
               <td><?php echo $row->angka_pertama; ?></td>
       <td><?php echo $row->angka_kedua; ?></td>
       <td><?php echo $row->hasil; ?></td>
       <td><?php echo $row->teks; ?></td>
              </tr>
      <?php
      }
      }
      else{
          ?>
      <?php
      }
      ?>
      
  </tbody>
</table>
      <a href="<?php echo base_url();?>index.php/welcome/validasi_dosen"><button class="btn btn-primary" >Tambah</button></a> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script>
      
      </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>