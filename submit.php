<?php 

try {
  $data['hasil'] = eval($_POST['code']);
  $data['soal_berlanjut'] = (
    file_exists( 'soal'.$_POST['nomor_soal'].'/soal.php' )
    AND file_exists( 'soal'.$_POST['nomor_soal'].'/jawaban.php')
    AND file_exists( 'soal'.$_POST['nomor_soal'].'/instruksi.php' )
  );
  if ( $data['hasil'] ) {
    echo json_encode($data);
  }
}
//catch exception
catch(Exception $e) {
  echo $e->getMessage();
  die();
}

