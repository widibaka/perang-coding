<!doctype html>
<html lang="id" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sebuah platform untuk menghilangkan rasa jenuh">
  <meta name="author" content="Widibaka">
  <title>Perang Coding PHP Ver.<?php echo perang_coding_version ?></title>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css"/>

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/260/260185.png">
  <meta name="theme-color" content="#7952b3">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <style>
    /* .widibaka START */
    .form-control {
      color: rgb(199, 199, 199);
      background-color: rgb(68, 68, 68);
      text-shadow: none;
    }

    .form-control:focus {
      color: rgb(199, 199, 199);
      background-color: #333;
      text-shadow: none;
    }

    .btn-flat{
      border-radius: 0;
    }

    /* .widibaka END */

    /*
     * Globals
     */


    /* Custom default button */
    .btn-secondary,
    .btn-secondary:hover,
    .btn-secondary:focus {
      color: #333;
      text-shadow: none;
      /* Prevent inheritance from `body` */
    }




    /*
     * Base structure
     */

    body {
      text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
      box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
    }

    .cover-container {
      max-width: 42em;
    }


    /*
     * Header
     */

    .nav-masthead .nav-link {
      padding: .25rem 0;
      font-weight: 700;
      color: rgba(255, 255, 255, .5);
      background-color: transparent;
      border-bottom: .25rem solid transparent;
    }

    .nav-masthead .nav-link:hover,
    .nav-masthead .nav-link:focus {
      border-bottom-color: rgba(255, 255, 255, .25);
    }

    .nav-masthead .nav-link+.nav-link {
      margin-left: 1rem;
    }

    .nav-masthead .active {
      color: #fff;
      border-bottom-color: #fff;
    }

    /* 
    .widibaka
    */
    .nav-link {
      color: #fff;
    }

    .nav-link:hover {
      color: rgb(202, 202, 202);
    }

    /* custom scrollbar */
    /* width */
    ::-webkit-scrollbar {
      width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      background: #555;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #f1f1f1;
    }
    .CodeMirror-scrollbar-filler{
    background: #555;
    }
    .CodeMirror{
      border-top: 0;
      border-bottom: 0;
    }

    .max-height-489px{
      height: 489px;
      overflow-y: scroll;
    }

    .btn{
      border-color: #333;
    }




  </style>
</head>


<body class="d-flex h-100 text-center text-white bg-dark" style="height: 100%!important;">
  
  <div class="d-flex w-100 h-100 p-3 flex-column">
    <header class="cover-container mb-auto mx-auto">
      <div>
        <h3 class="float-md-start mb-0 me-5">Pe/Co</h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
          <a class="nav-link" href="#" onclick="open_soal();">Jelajahi Soal</a>
          <a class="nav-link active" href="#">Highscore</a>
          <a class="nav-link" onclick="localStorage.clear(); confirm('Anda Yakin?');" href="./logout">LogOut: [ <?php echo $this->session->userdata('name') ?> ]</a>
        </nav>
      </div>
    </header>

    <main class="w-100 row">

      <div class="row mb-5" id="keterangan" style="display: none;">
        <div class="col-md-12 mx-auto d-flex justify-content-center" style="max-width: 1500px;">
          <?php 
            $width_tiap_soal = round(1 / $jumlah_soal * 100);
            $jumlah_yang_benar = 0;
          ?>
          <?php for ($i = 0; $i < $jumlah_soal; $i++): ?>
            <?php $nomor_soal = $i+1?>
            <?php if ( $this->Model->apa_jawaban_benar($i+1) ): $jumlah_yang_benar++; ?>
              <a href="<?= base_url() . '?soal=' . $nomor_soal ?>" class="btn btn-success m-0 text-white" style="width: <?php echo $width_tiap_soal ?>%;">Soal <?php echo $nomor_soal ?></a>
            <?php elseif( $this->Model->apa_sudah_dijawab( $nomor_soal ) ): ?>
              <a href="<?= base_url() . '?soal=' . $nomor_soal ?>" class="btn btn-danger m-0 text-white" style="width: <?php echo $width_tiap_soal ?>%;">Soal <?php echo $nomor_soal ?></a>
            <?php else: ?>
              <a href="<?= base_url() . '?soal=' . $nomor_soal ?>" class="btn btn-secondary m-0 text-white" style="width: <?php echo $width_tiap_soal ?>%;">Soal <?php echo $nomor_soal ?></a>
            <?php endif ?>
          <?php endfor; ?>

        </div>
      </div>

      <div class="col-md-12">
          <p class="lead"> Score Anda: <?php echo $jumlah_yang_benar ?>/<?php echo $jumlah_soal ?> </p>
      </div>


      <div class="row d-flex justify-content-center">
        
        <div class="col-md-6" style="max-width: 750px;">

          <table id="example" class="table text-light" style=" border: solid black 1px; width:100%">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Score</th>
								<th>Soal Terjawab</th>
								<th>Per Tanggal</th>
							</tr>
						</thead>
						<tbody>
              <?php foreach ($highscores as $key => $row): ?>
                <tr>
                  <td style="padding-top: 10px; padding-bottom: 10px;"><?php echo $key ?></td>
                  <td style="padding-top: 10px; padding-bottom: 10px;"><?php echo count($row) ?></td>
                  <td style="padding-top: 10px; padding-bottom: 10px;"><?php foreach ($row as $key => $value): ?>
                    [<?php echo $value['nomor_soal'] ?>]
                  <?php endforeach ?></td>
                  <td style="padding-top: 10px; padding-bottom: 10px;"><?php echo (isset($row[0]['timestamp'])) ? $row[0]['timestamp'] : 'n/a' ?></td>
                </tr>
              <?php endforeach ?>
						</tbody>
					</table>

        </div>
      </div>
      
    </main>

    <footer class="mt-auto text-white-50">
      <p>Source Code: <a target="_blank" href="https://github.com/widibaka/perang-coding" class="text-white">@widibaka/perang-coding</a></p>
    </footer>
  </div>

  

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.7/dist/sweetalert2.all.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>


<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>

<script>

  function open_soal(){
    $('#keterangan').slideToggle(500);
  };
  $('#keterangan').find('a').on('click', function(e){
    e.preventDefault();
    $('#keterangan').slideToggle(500);
    show_loader();
    let redirect = $(this).attr('href');
    setTimeout(function(){
      location.href = redirect;
    }, 1000);
  })
  function open_highscore(){
    setTimeout(() => {
      window.location.href = '<?php echo base_url() ?>highscore';
    },1000);
  };
  



  function show_loader() {
    $.LoadingOverlay("show", {
        background: "rgba(0, 0, 0, 0.5)",
        image: '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" style="margin-right:-2px;display:block;background-repeat-y:initial;background-repeat-x:initial;animation-play-state:paused" ><g transform="translate(50 50)" style="transform:matrix(1, 0, 0, 1, 50, 50);animation-play-state:paused; background-color:rgb(241, 242, 243)" ><g transform="matrix(1,0,0,1,0,0)" style="transform:matrix(1, 0, 0, 1, 0, 0);animation-play-state:paused" ><path d="M29.491524206117255 -5.5 L37.491524206117255 -5.5 L37.491524206117255 5.5 L29.491524206117255 5.5 A30 30 0 0 1 24.742744050198738 16.964569457146712 L24.742744050198738 16.964569457146712 L30.399598299691117 22.621423706639092 L22.621423706639096 30.399598299691114 L16.964569457146716 24.742744050198734 A30 30 0 0 1 5.5 29.491524206117255 L5.5 29.491524206117255 L5.5 37.491524206117255 L-5.499999999999997 37.491524206117255 L-5.499999999999997 29.491524206117255 A30 30 0 0 1 -16.964569457146705 24.742744050198738 L-16.964569457146705 24.742744050198738 L-22.621423706639085 30.399598299691117 L-30.399598299691117 22.621423706639092 L-24.742744050198738 16.964569457146712 A30 30 0 0 1 -29.491524206117255 5.500000000000009 L-29.491524206117255 5.500000000000009 L-37.491524206117255 5.50000000000001 L-37.491524206117255 -5.500000000000001 L-29.491524206117255 -5.500000000000002 A30 30 0 0 1 -24.742744050198738 -16.964569457146705 L-24.742744050198738 -16.964569457146705 L-30.399598299691117 -22.621423706639085 L-22.621423706639092 -30.399598299691117 L-16.964569457146712 -24.742744050198738 A30 30 0 0 1 -5.500000000000011 -29.491524206117255 L-5.500000000000011 -29.491524206117255 L-5.500000000000012 -37.491524206117255 L5.499999999999998 -37.491524206117255 L5.5 -29.491524206117255 A30 30 0 0 1 16.964569457146702 -24.74274405019874 L16.964569457146702 -24.74274405019874 L22.62142370663908 -30.39959829969112 L30.399598299691117 -22.6214237066391 L24.742744050198738 -16.964569457146716 A30 30 0 0 1 29.491524206117255 -5.500000000000013 M0 -20A20 20 0 1 0 0 20 A20 20 0 1 0 0 -20" fill="#93dbe9" style="animation-play-state:paused" ></path></g></g><!-- generated by https://loading.io/ --></svg>',
        imageColor: "#fff", 
      });
  }
  $(document).ajaxStart(function(){
      show_loader();
  });
  $(document).ajaxStop(function(){
      $.LoadingOverlay("hide");
  });


  $('.nav-link').click(function () {
    $('.nav-link').removeClass('active');
    $(this).addClass('active');
  });


  $('#berikutnya').click(function (e) {
    e.preventDefault();
    setTimeout(()=>{
      window.location.href = $('#berikutnya').attr('href');
    }, 600);
  });
  $('#sebelumnya').click(function (e) {
    e.preventDefault();
    setTimeout(()=>{
      window.location.href = $('#sebelumnya').attr('href');
    }, 600);
  });



  

  // showing alert
  <?php $alert = $this->session->flashdata("msg") ?>
    <?php if ( !empty($alert) ): ?>
      <?php $alert = explode("#", $alert) ?>
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 5000
      });
      setTimeout(function() {
        Toast.fire({
          icon: "<?php echo $alert[0] ?>",
          title: "<?php echo $alert[1] ?>"
        });
      }, 1000);
  <?php endif ?>

  $('table').DataTable();
</script>

</html>

