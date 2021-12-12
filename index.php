
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>Kirim Email</title>
  </head>
  <body>
    <div class="container pt-2">
        <div class="alert bg-secondary text-white text-center"><h2>SMTP EMAIL</h2></div>
        <div class="row">
            <div class="col-sm-12">
            <div class="alert bg-dark text-white">
            <form method="post" action="send.php" enctype="multipart/form-data">
                <label for="exampleInputEmail1" class="form-label">Email Tujuan</label>
                <input type="email" required="true" name="email_penerima" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                <label class="form-label">Subjek</label>
                <input type="text" required="true" name="subjek" class="form-control">

                <label for="exampleFormControlTextarea1" class="form-label">Isi Pesan</label>
                <textarea class="form-control" required="true" name="pesan" id="exampleFormControlTextarea1"  rows="7"></textarea>
                <label class="form-label">Lampiran</label>
                <input type="file" name="attachment" multiple="multiple" class="form-control">

                <br>
                <button type="submit" class="btn" style="background:white;"><b>KIRIM</b></button>
            </form>
            </div>
            </div>
        </div>

    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
</html>