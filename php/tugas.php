<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Form sederhana</title>
  </head>
  <body>
    <h2>Form sederhana php</h2>
    <form action="tugas.php" method="post">
      <fieldset>
      <legend>Data yang dipilih akan ditampilkan</legend>
        <p>
          <label>Nama: </label>
          <input type="text" name="nama"/>
        </p>
        <p>
          <label>tanggal lahir :</label>
          <input type="date" name="tanggal"/>
        </p>
        <p>
            <label>pekerjaan:</label>
            <select name="pekerjaan">
                <option value="Karyawan pabrik">Karyawan Pabrik (Rp.5.000.000)</option>
                <option value="guru">guru (Rp.4.500.000)</option>
                <option value="ojol">ojol (Rp.4.200.000)</option>
                <option value="pedagang">pedagang (Rp.4.000.000)</option>
            </select>
        </p>
        <p>
          <input type="submit" name="submit" value="daftar"/>
        </p>
      </fieldset>
    </form>
    <?php
     echo 'Selamat Datang ' . $_POST['nama'] . '<br>';
     $tgl_lahir = $_POST['tanggal'];
     $lahir = new DateTime($tgl_lahir);
     $hari_ini = new DateTime();

     $diff = $hari_ini->diff($lahir);
     echo "Umur: ". $diff->y ." Tahun" . '<br>';
     echo "pekerjaan anda " . $_POST['pekerjaan'] . '<br>';

     $Gaji = $_POST['pekerjaan'];
     if ($Gaji == "Karyawan pabrik"){
       echo "Rp.5.000.000";
     } elseif ($Gaji == "guru") {
       echo "Rp.4.500.000";
     }elseif ($Gaji == "ojol") {
         echo "Rp.4.200.000";
     }else {
       echo "Rp.4.000.000";
     }
     ?>
  </body>
</html>
