<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data Siswa</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body>
<div class="container pt-3">
            <div class="row">
                <div class="col-md-8">
                    <center style="font-family: candara;">
                        <h1>Detail Data Calon Siswa</h1>
                            <h2>SMK TARUNA BHAKTI</h2>
                    </center>
                    <hr>
                        <h3 class="text-center" style="font-family: candara;">{{ $calonsiswa->nama }}</h3>

            <div class="form-group">
                <label for="noppdb">Nomor PPDB : {{ $calonsiswa->noppdb }}</label>
            </div>

            <div class="form-group">
                <label for="nama">Nama Calon Siswa : {{ $calonsiswa->nama }}</label>
            </div>

            <div class="form-group">
                <label for="asal_sekolah">Asal Sekolah : {{ $calonsiswa->asal_sekolah }}</label>
            </div>

            <div class="from-group">
                <label for="pilihan1" style="font-family: Arial, Helvetica, sans-serif; font-size: 20px;">Pilihan Jurusan 1 : {{ $calonsiswa->pilihan1 }} </label>
            </div>
            <br>
            <div class="from-group">
                <label for="pilihan2" style="font-family: Arial, Helvetica, sans-serif; font-size: 20px;">Pilihan Jurusan 2 : {{ $calonsiswa->pilihan2 }}</label>
            </div>
            <br>
            <div class="form-group">
                <label for="alamat">Alamat : {{ $calonsiswa->alamat }}</label>
            </div>
            
            <div class="form-group">
                <label for="nohp">Nomor Handphone : {{ $calonsiswa->nohp }}</label>
            </div>  
            </div>
        </div>
    </div>

    <a class="btn btn-danger" href="/cpdb" style="margin-left: 500px;">Kembali</a>
</body>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>