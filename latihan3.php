<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Book Store </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/assets/css/bootstrap.min.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="container">
         <div class="col-md-12">
             <div class="card">
             <div class="card-header"><center><h3>Assalaam Book Store</h3></center>
             <div class="card-body">

             <form action="" method="post">
                 <div class="form-group">
                           <label for="">Nama</label>
                           <input type="text" name="nama" class="form-control">
                    </div>
                <div class="form-group">
                           <label for="">Alamat</label>
                           <input type="text" name="almt">
                    </div>
                <div class="form-group">
                           <label for="">Jenis Kelamin</label>
                        <div class="radio">
                           <label><input type="radio" name="kl" >Laki-laki</label>
                        </div>
                        <div class="radio">
                           <label><input type="radio" name="kl" >Perempuan</label>
                        </div>  
                <div class="form-group">
                           <label for="">Tanggal Pembelian</label>
                           <input type="date" name="tglb" class="form-control">
                    </div>
                <div class="form-group">
                           <label for="">Jumlah Buku</label>
                           <input type="number" name="jb" class="form-control">
                    </div>
                <div class="form-group">
                <button type="button" class="btn btn-primary" data-toggle="modal" name="simpan" data-target=".bd-example-modal-xl">simpan</button>
                       <button type="reset" name="reset" class="btn btn-warning">Reset</button>
                    </div>    
             </form>
             
            
                </div>   
            </div>
        </div>  
      </div>  
</div>
    </div>
</div>
                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                   <div class="modal-dialog modal-xl">
                     <div class="modal-content">
                         
                     <div class="container">
                         <div class="col-md-12">
                            <div class="card">
                            <div class="card-header">Masukan Referensi Buku yang Anda Beli
                            <div class="card-body">

                <?php 
                 if(isset($_POST['simpan'])){
                     $nama = $_POST['nama'];
                     $alamat = $_POST['almt'];
                     $jk = $_POST['kl'];
                     $tgl = $_POST['tglb'];
                     if(isset($_POST['jb'])){text
                        $juml = $_POST['jb'];
                        for($a = 1;$a <= $juml;$a++) {
                    ?>

            <div class="card-body">
                <form action="outputbuku.php" method="post">
                 
                 <input type="hidden" name="nama" value="<?= $nama; ?>">
                 <input type="hidden" name="almt" value="<?= $alamat; ?>">
                 <input type="hidden" name="kl" value="<?= $jk; ?>">
                 <input type="hidden" name="tglb" value="<?= $tgl; ?>">
                 <input type="hidden" name="jb" value="<?= $jumlah; ?>">
                </form>
            </div>            

                <form action="" method="post">
                <div class="form-group">
                           <label for="">Judul</label>
                           <input type="text" name="jdl[]" class="form-control">
                    </div>
                <div class="form-group">
                           <label for="">Kode Buku</label>
                           <input type="number" name="kb[]">
                    </div>
                <div class="form-group">
                           <label for="">Pengarang</label>
                           <input type="text" name="pg[]">
                    </div>
                <div class="form-group">
                           <label for="selhoror">Jenis Buku</label>
                           <select class="form-control" id="selhoror" name="jns[]">
                                <option>Horor</option>
                                <option>Fiksi</option>
                                <option>Novel</option>
                                <option>Komik</option>
                                <option>Cergam</option>
                            </select>
                    </div>
                <div class="form-group">
                           <label for="">Harga Buku</label>
                           <input type="number" name="hb[]" class="form-control">
                    </div>
                <div class="form-group">
                       <button type="submit" name="proses" class="btn btn-primary">Proses</button>
                       <button type="reset" name="reset" class="btn btn-warning">Reset</button>
                    </div>    
                </form>  

                     

                              </div>
                            </div>
                        </div>
                    </div>
                       
                </div>
            </div>
        </div>
     

      <script src="/assets/js/jquery.min.js"></script>
      <script src="/assets/js/bootstrap.bundle.js"></script>
      <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>