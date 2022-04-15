<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tanon - Autofill Form</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <h5>F-1.02 - Formulir Pendaftaran Peristiwa Kependudukan</h5>
    <h5>F-1.03 - Formulir Pendaftaran Perpindahan Kependudukan</h5>
    <h5>F-1.04 - Surat Pernyataan Tidak Memiliki Dokumen Kependudukan</h5>
    <h5>F-1.06 - Surat Pernyataan Perubahan Elemen Data Kependudukan</h5>
    <br>
    <table>
      <thead>
        <th>No.</th>
        <th>Nama</th>
        <th>NIK</th>
        <th>102</th>
        <th>103</th>
        <th>104</th>
        <th>106</th>
      </thead>
      <tbody id="demo">
      <?php
        $url = __DIR__.'/db/penduduk.json';
        $imageUrl = __DIR__.'/db/images/';
        $content=file_get_contents($url);
        $content=utf8_encode($content);
        $result=json_decode($content, true);
        $no=1;

        foreach ($result as $value) {
          echo '<tr>
            <td>'.$no++.'</td>
            <td>'.$value['NAMA_LGKP'].'</td>
            <td>'.$value['NIK'].'</td>
            <td>
              <form method="POST" action="f102">
                <input name="nama_lgkp" value="'.$value['NAMA_LGKP'].'" type="hidden"/>
                <input name="nik" value="'.$value['NIK'].'" type="hidden"/>
                <input name="no_kk" value="'.$value['NO_KK'].'" type="hidden"/>
                <button class="btn solid">Surat 1.02</button>
              </form>
            </td>
            <td>
              <form method="POST" action="f103">
                <input name="nama_lgkp" value="'.$value['NAMA_LGKP'].'" type="hidden"/>
                <input name="nik" value="'.$value['NIK'].'" type="hidden"/>
                <input name="no_kk" value="'.$value['NO_KK'].'" type="hidden"/>
                <button class="btn solid">Surat 1.03</button>
              </form>
            </td>
            <td>
              <form method="POST" action="f104">
                <input name="nama_lgkp" value="'.$value['NAMA_LGKP'].'" type="hidden"/>
                <input name="nik" value="'.$value['NIK'].'" type="hidden"/>
                <input name="no_kk" value="'.$value['NO_KK'].'" type="hidden"/>
                <button class="btn solid">Surat 1.04</button>
              </form>
            </td>
            <td>
              <form method="POST" action="f106">
                <input name="nama_lgkp" value="'.$value['NAMA_LGKP'].'" type="hidden"/>
                <input name="nik" value="'.$value['NIK'].'" type="hidden"/>
                <input name="no_kk" value="'.$value['NO_KK'].'" type="hidden"/>
                <button class="btn solid">Surat 1.06</button>
              </form>
            </td>
          </tr>';
        }
      ?>
      </tbody>
    </table>
  </div>
  

  <script src="js/bootstrap.min.js"></script>
</body>

</html>

<style>

*{
  padding: 0;
  margin: 0;
}

.container{
  font-family: arial, sans-serif;
  margin:5%;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  color
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

img{
  padding:10px;
}

tr:nth-child(even) {
background-color: #dddddd;
}

.btn {
  width: 100px;
  background-color: #007FD0;
  border: none;
  outline: none;
  height: 30px;
  border-radius: 30px;
  color: #fff;
  font-weight: 600;
  margin: 10px 0;
  cursor: pointer;
}

</style>