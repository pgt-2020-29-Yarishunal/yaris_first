<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
            

     
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" 
      href="mbcsmb6jm3.css" 
      type="text/css" />

      <script type="text/javascript" src="mbjsmb6jm3.js"></script>
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>FORM DOSEN
      </h1>

<!-- Navigation menus created with the free version of Easy CSS Menu downloaded from www.easycssmenu.com
     You are free to use this menu code for personal, non-commercial use only. Any other use is a serious violation of copyright laws.
     You are required to retain this comment block in your website code in an unchanged fashion.
     The above limitations do not apply on menus created with the paid version of the software. -->
      
<!-- Menus will work without this javascript file. It is used only for extra
     effects, improved usability, compatibility with very old web browsers
     and support for touch screen devices. -->
<form>
 <div class="form-group">
    <label for="exampleInputEmail1">Angka1</label>
    <input type="text" class="form-control" name="angkaa1" placeholder="Masukkan Angka 1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Angka2</label>
    <input type="text" class="form-control" name="angkaa2" placeholder="Masukkan Angka 2">
  </div>
  <button type="submit" name="submit" value="submit" class="btn btn-primary">Masukkan</button>
</form>
      
<form method="post" action='<?php echo base_url();?>index.php/welcome/validasi_dosen1'>
    <?php
    if($this->uri->segment(2) == "inserted_dosen"){
    echo "Data Dimasukkan";
    }
    ?>
 <div class="form-group">
    <label for="exampleInputEmail1">Angka1</label>
    <input type="text" class="form-control" name="angka1" value ="<?php 
                            if (isset($_GET['submit'])){
                              $berat = $_GET['angkaa1'];
                          echo $berat;
                          }
                          ?>" placeholder="Masukkan Angka 1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Angka2</label>
    <input type="text" class="form-control" name="angka2" value="<?php if (isset($_GET['submit'])){
                              $berat = $_GET['angkaa2'];
                          echo $berat;
}
?>" placeholder="Masukkan Angka 2">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Hasil</label>
    <input type="text" class="form-control" name="hasil" value="<?php 
                            if (isset($_GET['submit'])){
                              $berat = $_GET['angkaa1'];
                              $tinggi = $_GET['angkaa2'];
                              $hasil = $berat + $tinggi;
                          echo $hasil;
                          }
                          ?>" placeholder="Hasil Penjumlahan">
  </div>
     <div class="form-group">
    <label for="exampleInputPassword1">Keterangan</label>
    <input type="text" class="form-control" name="ket" value="<?php 
                            if (isset($_GET['submit'])){
                              $berat = $_GET['angkaa1'];
                              $tinggi = $_GET['angkaa2'];
                              $hasil = $berat + $tinggi;
                          if($hasil > -1 && $hasil < 10){
                              echo "A";
                          }
                                if($hasil > 9 && $hasil < 20){
                              echo "B";
                          }
                                if($hasil > 19 && $hasil < 30){
                              echo "C";
                          }
                                if($hasil < 0){
                              echo "D";
                          }
                          }
                          ?>" placeholder="Keterangan">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      <a href="<?php echo base_url();?>index.php/welcome/index"><button class="btn btn-primary" >Kembali Ke tabel</button></a> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
       
  </body>
</html>