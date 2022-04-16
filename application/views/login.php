<!doctype html>
<html lang="id" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sebuah platform untuk menghilangkan rasa jenuh">
  <meta name="author" content="Widibaka">
  <title>Perang Coding PHP Ver.<?php echo perang_coding_version ?></title>



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



  </style>
</head>


<body class="d-flex h-100 text-center text-white bg-dark" style="height: 100%!important;">
  
  <div class="d-flex w-100 h-100 p-3 flex-column">
    <header class="cover-container mb-auto mx-auto">
      <!-- <div>
        <h3 class="float-md-start mb-0 me-5">Cover</h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="#">Features</a>
          <a class="nav-link" href="#">Contact</a>
        </nav>
      </div> -->
    </header>

    <main class="w-100 row d-flex justify-content-center">
      <div class="col-md-6" style="max-width: 750px;">
        <p class="lead">
        <h1 class="text-white">Perang Coding</h1>
        <div class="row" style="width: 99%;">
          <a href="<?php echo $auth_url ?>" class="btn btn-lg btn-flat btn-outline-info w-100 mt-3">
            <img style="width: 28px; margin-right: 10px;" src="https://cdn.cdnlogo.com/logos/g/35/google-icon.svg">
            Login dengan Google
          </a>
        </div>
        </p>
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

<script>
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
</script>
</html>

