<?php
  $nama_lgkp = $_POST['nama_lgkp'];
  $nik = $_POST['nik'];
  $no_kk = $_POST['no_kk'];

  $surat = __DIR__.'/f102.rtf';
  $document = file_get_contents($surat);

  $document = str_replace("varNama", $nama_lgkp, $document);
  $document = str_replace("varNik", $nik, $document);
  $document = str_replace("varKK", $no_kk, $document);

  header("Content-type: application/msword");
  header("Content-disposition: inline; filename=102 - $nama_lgkp.doc");
  header("Content-length: ".strlen($document));
  echo $document;
?>