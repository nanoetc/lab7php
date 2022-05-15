<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP dasar</title>
  </head>
  <body>
    <h2>Form input</h2>
    <form method="post">
      <label> Nama : </label>
      <input type="text" name="nama">
      <input type="submit" value="Kirim">
    </form>
    <?php
    echo 'Selamat Datang ' . $_POST['nama']; ?>
  </body>
</html>
