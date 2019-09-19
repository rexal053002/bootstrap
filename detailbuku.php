<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/assets/css/bootstrap.min.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Masukan Referensi Buku yang Anda Beli</div>
                    <div class="card-body">

                <form action="outputbuku.php" method="post">
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
                           <select class="form-control" name="jns[]">
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
                <?php 
                    if(isset($_POST['proses'])){
                        $judul = $_POST['kb'];
                        $kode = $_POST['kb'];
                        $peng = $_POST['pg'];
                        $jenis = $_POST['jns'];
                        $harga = $_POST['hb'];
                    }
                ?>

                </div>
            </div>
        </div>
    </div>

      <script src="/assets/js/jquery.min.js"></script>
      <script src="/assets/js/bootstrap.bundle.js"></script>
      <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>