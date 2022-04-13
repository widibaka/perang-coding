<!doctype html>
<html lang="id" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sebuah platform untuk menghilangkan rasa jenuh">
  <meta name="author" content="Widibaka">
  <title>Perang Coding PHP Ver.0.0.1</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">



  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">

  <!--.widibaka Code Editor START-->
  <link rel="stylesheet" href="codemirror/lib/codemirror.css">
  <link rel="stylesheet" href="codemirror/addon/fold/foldgutter.css">
  <link rel="stylesheet" href="codemirror/addon/dialog/dialog.css">
  <link rel="stylesheet" href="codemirror/theme/monokai.css">
  <script src="codemirror/lib/codemirror.js"></script>
  <script src="codemirror/addon/search/searchcursor.js"></script>
  <script src="codemirror/addon/search/search.js"></script>
  <script src="codemirror/addon/dialog/dialog.js"></script>
  <script src="codemirror/addon/edit/matchbrackets.js"></script>
  <script src="codemirror/addon/edit/closebrackets.js"></script>
  <script src="codemirror/addon/comment/comment.js"></script>
  <script src="codemirror/addon/wrap/hardwrap.js"></script>
  <script src="codemirror/addon/fold/foldcode.js"></script>
  <script src="codemirror/addon/fold/brace-fold.js"></script>
  <script src="codemirror/mode/javascript/javascript.js"></script>
  <script src="codemirror/keymap/sublime.js"></script>
  <script src="codemirror/mode/clike/clike.js"></script>
  <script src="codemirror/mode/php/php.js"></script>
  <style>
    .CodeMirror {
      border-top: 1px solid #eee;
      border-bottom: 1px solid #eee;
      line-height: 1.3;
      height: 500px
    }

    .CodeMirror-linenumbers {
      padding: 0 8px;
    }
  </style>
  <!--//.widibaka END-->

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
      <div>
        <h3 class="float-md-start mb-0 me-5">Cover</h3>
        <nav class="nav nav-masthead justify-content-center float-md-end">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="#">Features</a>
          <a class="nav-link" href="#">Contact</a>
        </nav>
      </div>
    </header>

    <main class="w-100 row d-flex justify-content-center">
      <div class="col-md-6" style="max-width: 750px;">
        <p class="lead">
        <article class="btn-flat text-start form-control" id="CodeEditor"></article>
        <button onclick="submit_code();" type="button" class="btn btn-lg btn-flat btn-outline-success w-100 mt-3">Run Code</button>
        </p>
      </div>
      <div class="col-md-6" style="max-width: 750px;">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="instruksi-tab" data-bs-toggle="tab" data-bs-target="#instruksi" type="button"
              role="tab" aria-controls="instruksi" aria-selected="true">Instruksi</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="output-tab" data-bs-toggle="tab" data-bs-target="#output" type="button"
              role="tab" aria-controls="output" aria-selected="false">Output</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="hotkeys-tab" data-bs-toggle="tab" data-bs-target="#hotkeys" type="button"
              role="tab" aria-controls="hotkeys" aria-selected="false">Hotkeys</button>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active max-height-489px" id="instruksi" role="tabpanel" aria-labelledby="instruksi-tab">
            <h1 id="judul_soal"></h1>
            <p class="lead h3" id="instruksi_text">Sebentar ...</p>

            <!-- <p><code>if($x){ //a }</code>.</p> -->



            <p class="lead">
              <!-- <a href="#" class="btn btn-lg btn-flat btn-secondary fw-bold border-white bg-white">Learn more</a> -->
            </p>
          </div>
          <div class="tab-pane max-height-489px" id="output" role="tabpanel" aria-labelledby="profile-tab">
            <!-- Jangan lupa simpan text di localstorage -->
            <p class="lead">
              <div id="hasil_response"></div>
            </p>
          </div>
          <div class="tab-pane text-start max-height-489px row ps-5" id="hotkeys" role="tabpanel" aria-labelledby="profile-tab">
                Shift-Tab :<i>indentLess,</i><br>
                Shift-Ctrl-K :<i>deleteLine,</i><br>
                Alt-Q :<i>wrapLines,</i><br>
                Ctrl-T :<i>transposeChars,</i><br>
                Alt-Left :<i>goSubwordLeft,</i><br>
                Alt-Right :<i>goSubwordRight,</i><br>
                Ctrl-Up :<i>scrollLineUp,</i><br>
                Ctrl-Down :<i>scrollLineDown,</i><br>
                Ctrl-L :<i>selectLine,</i><br>
                Shift-Ctrl-L :<i>splitSelectionByLine,</i><br>
                Esc :<i>singleSelectionTop,</i><br>
                Ctrl-Enter :<i>insertLineAfter,</i><br>
                Shift-Ctrl-Enter :<i>insertLineBefore,</i><br>
                Ctrl-D :<i>selectNextOccurrence,</i><br>
                Shift-Ctrl-Space :<i>selectScope,</i><br>
                Shift-Ctrl-M :<i>selectBetweenBrackets,</i><br>
                Ctrl-M :<i>goToBracket,</i><br>
                Shift-Ctrl-Up :<i>swapLineUp,</i><br>
                Shift-Ctrl-Down :<i>swapLineDown,</i><br>
                Ctrl-/ :<i>toggleCommentIndented,</i><br>
                Ctrl-J :<i>joinLines,</i><br>
                Shift-Ctrl-D :<i>duplicateLine,</i><br>
                F9 :<i>sortLines,</i><br>
                Shift-F9 :<i>reverseSortLines,</i><br>
                Ctrl-F9 :<i>sortLinesInsensitive,</i><br>
                Shift-Ctrl-F9 :<i>reverseSortLinesInsensitive,</i><br>
                F2 :<i>nextBookmark,</i><br>
                Shift-F2 :<i>prevBookmark,</i><br>
                Ctrl-F2 :<i>toggleBookmark,</i><br>
                Shift-Ctrl-F2 :<i>clearBookmarks,</i><br>
                Alt-F2 :<i>selectBookmarks,</i><br>
                Backspace :<i>smartBackspace,</i><br>
                Ctrl-K Ctrl-D :<i>skipAndSelectNextOccurrence,</i><br>
                Ctrl-K Ctrl-K :<i>delLineRight,</i><br>
                Ctrl-K Ctrl-U :<i>upcaseAtCursor,</i><br>
                Ctrl-K Ctrl-L :<i>downcaseAtCursor,</i><br>
                Ctrl-K Ctrl-Space :<i>setSublimeMark,</i><br>
                Ctrl-K Ctrl-A :<i>selectToSublimeMark,</i><br>
                Ctrl-K Ctrl-W :<i>deleteToSublimeMark,</i><br>
                Ctrl-K Ctrl-X :<i>swapWithSublimeMark,</i><br>
                Ctrl-K Ctrl-Y :<i>sublimeYank,</i><br>
                Ctrl-K Ctrl-C :<i>showInCenter,</i><br>
                Ctrl-K Ctrl-G :<i>clearBookmarks,</i><br>
                Ctrl-K Ctrl-Backspace :<i>delLineLeft,</i><br>
                Ctrl-K Ctrl-1 :<i>foldAll,</i><br>
                Ctrl-K Ctrl-0 :<i>unfoldAll,</i><br>
                Ctrl-K Ctrl-J :<i>unfoldAll,</i><br>
                Ctrl-Alt-Up :<i>addCursorToPrevLine,</i><br>
                Ctrl-Alt-Down :<i>addCursorToNextLine,</i><br>
                Ctrl-F3 :<i>findUnder,</i><br>
                Shift-Ctrl-F3 :<i>findUnderPrevious,</i><br>
                Shift-Ctrl-[ :<i>fold,</i><br>
                Shift-Ctrl-] :<i>unfold,</i><br>
                Ctrl-H :<i>replace,</i><br>
            
          </div>
        </div>

        <div class="row" id="wadah_tombol_kembali_berikutnya">
          
        </div>
      </div>
      
    </main>

    <footer class="mt-auto text-white-50">
      <!-- <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a
          href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p> -->
    </footer>
  </div>

  

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.7/dist/sweetalert2.all.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>


<script>

  function findGetParameter(parameterName) {
      var result = 1,
          tmp = [];
      var items = location.search.substr(1).split("&");
      for (var index = 0; index < items.length; index++) {
          tmp = items[index].split("=");
          if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
      }
      return result;
  }

  var nomor_soal = findGetParameter('soal'); 

  if ( nomor_soal > 1 ) {
    $('#wadah_tombol_kembali_berikutnya').append(`<a onclick="$.LoadingOverlay('show');" href="./?soal=${parseInt(nomor_soal)-1}" class="col-6 btn btn-lg btn-flat btn-danger w-50 mt-3" id="sebelumnya">Sebelumnya</a>`);
  }

  // buat const Toast
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })

  
  
  //awali localstorage dengan string kosong
  if ( localStorage.getItem("terjawab") == undefined ) {
    localStorage.setItem("terjawab", "");
  }

  var soal = '';
  var jawaban = '';
  var instruksi = '';

  function readTextFile(file)
  {
      var rawFile = new XMLHttpRequest();
      rawFile.open("GET", file, false);
      rawFile.onreadystatechange = function ()
      {
          if(rawFile.readyState === 4)
          {
              if(rawFile.status === 200 || rawFile.status == 0)
              {
                  soal = rawFile.responseText;
              }
          }
      }
      rawFile.send(null);
  }

  function readTextFileJawaban(file)
  {
      var rawFile = new XMLHttpRequest();
      rawFile.open("GET", file, false);
      rawFile.onreadystatechange = function ()
      {
          if(rawFile.readyState === 4)
          {
              if(rawFile.status === 200 || rawFile.status == 0)
              {
                jawaban = rawFile.responseText;
              }
          }
      }
      rawFile.send(null);
  }

  function readTextFileInstruksi(file)
  {
      var rawFile = new XMLHttpRequest();
      rawFile.open("GET", file, false);
      rawFile.onreadystatechange = function ()
      {
          if(rawFile.readyState === 4)
          {
              if(rawFile.status === 200 || rawFile.status == 0)
              {
                instruksi = rawFile.responseText;
              }
          }
      }
      rawFile.send(null);
  }

  readTextFile('soal'+ nomor_soal + '/soal.php');
  readTextFileJawaban('soal'+nomor_soal+'/jawaban.php');
  readTextFileInstruksi('soal'+nomor_soal+'/instruksi.php');

  $('#instruksi_text').html(instruksi);
  $('#judul_soal').html('Soal '+nomor_soal);
  

  var editor = CodeMirror(document.body.getElementsByTagName("article")[0], {
    value: soal,
    lineNumbers: true,
    mode: {
      name: 'php',
      startOpen: true
    },
    keyMap: "sublime",
    autoCloseBrackets: true,
    matchBrackets: true,
    showCursorWhenSelecting: true,
    theme: "monokai",
    tabSize: 2
  });

  // editor.options.value;

  function langsung_salah(hasil_new) {
    if ( hasil_new == undefined || hasil_new == '' ) {
      hasil_new = '<b>Error: the function is not returning any value!</b>';
    }
    hasil_new = hasil_new.split('<p>Filename:')[0];
    $('#hasil_response').html('<h1 class="text-danger">Salah!</h1>'+hasil_new);

    if ( hasil_new.includes('Terdeteksi upaya peretasan') ) {
      $('#hasil_response').html('<h1 class="text-danger">Awas!</h1>'+hasil_new);
    }

    $('#CodeEditor').addClass('is-invalid').removeClass('is-valid');
    $('#output-tab').tab('show');

    // Swal.fire(
    //   'Jawaban Anda masih salah!',
    //   '',
    //   'error'
    // );

    Toast.fire({
      icon: 'error',
      title: 'Jawaban Anda masih salah!'
    });

    $('#CodeEditor').addClass('is-invalid').removeClass('is-valid');
    
    $('#output-tab').tab('show');
  }

  function munculkan_tombol_berikutnya(){
    // munculkan tombol "berikutnya"
    if ( $('#wadah_tombol_kembali_berikutnya').find('#berikutnya').length == 0 ) {
      $('#wadah_tombol_kembali_berikutnya').append(`<a onclick="$.LoadingOverlay('show');" href="./?soal=${parseInt(nomor_soal)+1}" class="col-6 btn btn-lg btn-flat btn-primary w-50 mt-3" id="berikutnya" style="display: block;">Berikutnya</a>`);
    }
    // setTimeout( ()=>{
    //   $('#berikutnya').show(300);
    // }, 1000 );
  }

  function submit_code() {
    $.ajax({
      url: '<?php echo base_url() . 'welcome/submit' ?>',
      method: 'POST',
      data: {
        code: editor.getValue(),
        nomor_soal: nomor_soal,
      },

      success: function (response) {
        try{
          JSON.parse(response);
        }catch(x){
          setTimeout(()=>{
            langsung_salah(response);
            return;
          },500);
        }
        
        // response = response.replace(/D:\\xampp_BARU\\htdocs\\perang-coding\\submit.php(5) : eval()'d code/g, ''); //<-- ngilangin submit.php nya susah bgt!
        setTimeout(() => {
          response = JSON.parse(response);

          if ( response.hasil != null ) {
            response.hasil = response.hasil.toString();
          }

          if( response.hasil == undefined || response.hasil != jawaban ){
            if ( response.hasil != undefined ) {
              response.hasil = response.hasil.replace(/script>/g, 'dilarang>')
              langsung_salah('Jawabannya bukan '+response.hasil);
            }else{
              langsung_salah();
            }
            return;
          }
          if (response.hasil == jawaban) {
            // Swal.fire(
            //   'Good job!',
            //   '',
            //   'success'
            // );

            Toast.fire({
              icon: 'success',
              title: 'Good job!'
            });

            // simpan kode ke localstorage
            localStorage.setItem(
              "soal"+nomor_soal, 
              editor.getValue()
            );

            // simpan localstorage
            localStorage.setItem(
              "terjawab", 
              localStorage.getItem("terjawab")+"#"+nomor_soal
            );

            $('#CodeEditor').addClass('is-valid').removeClass('is-invalid');
            $('#hasil_response').html( '<h1 class="text-success">Betul! Jawabannya adalah <b>' + response.hasil + '</b></h1>');
            $('#output-tab').tab('show');

            if ( response.soal_berlanjut == true ) {
              munculkan_tombol_berikutnya();
            }
          }

        }, 500);
      },
      fail: function(xhr, textStatus, errorThrown){
         alert('request failed'+errorThrown);
      }
    });
  }

  $(document).ajaxStart(function(){
      $.LoadingOverlay("show", {
        background: "rgba(0, 0, 0, 0.5)",
        image: '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" style="margin-right:-2px;display:block;background-repeat-y:initial;background-repeat-x:initial;animation-play-state:paused" ><g transform="translate(50 50)" style="transform:matrix(1, 0, 0, 1, 50, 50);animation-play-state:paused; background-color:rgb(241, 242, 243)" ><g transform="matrix(1,0,0,1,0,0)" style="transform:matrix(1, 0, 0, 1, 0, 0);animation-play-state:paused" ><path d="M29.491524206117255 -5.5 L37.491524206117255 -5.5 L37.491524206117255 5.5 L29.491524206117255 5.5 A30 30 0 0 1 24.742744050198738 16.964569457146712 L24.742744050198738 16.964569457146712 L30.399598299691117 22.621423706639092 L22.621423706639096 30.399598299691114 L16.964569457146716 24.742744050198734 A30 30 0 0 1 5.5 29.491524206117255 L5.5 29.491524206117255 L5.5 37.491524206117255 L-5.499999999999997 37.491524206117255 L-5.499999999999997 29.491524206117255 A30 30 0 0 1 -16.964569457146705 24.742744050198738 L-16.964569457146705 24.742744050198738 L-22.621423706639085 30.399598299691117 L-30.399598299691117 22.621423706639092 L-24.742744050198738 16.964569457146712 A30 30 0 0 1 -29.491524206117255 5.500000000000009 L-29.491524206117255 5.500000000000009 L-37.491524206117255 5.50000000000001 L-37.491524206117255 -5.500000000000001 L-29.491524206117255 -5.500000000000002 A30 30 0 0 1 -24.742744050198738 -16.964569457146705 L-24.742744050198738 -16.964569457146705 L-30.399598299691117 -22.621423706639085 L-22.621423706639092 -30.399598299691117 L-16.964569457146712 -24.742744050198738 A30 30 0 0 1 -5.500000000000011 -29.491524206117255 L-5.500000000000011 -29.491524206117255 L-5.500000000000012 -37.491524206117255 L5.499999999999998 -37.491524206117255 L5.5 -29.491524206117255 A30 30 0 0 1 16.964569457146702 -24.74274405019874 L16.964569457146702 -24.74274405019874 L22.62142370663908 -30.39959829969112 L30.399598299691117 -22.6214237066391 L24.742744050198738 -16.964569457146716 A30 30 0 0 1 29.491524206117255 -5.500000000000013 M0 -20A20 20 0 1 0 0 20 A20 20 0 1 0 0 -20" fill="#93dbe9" style="animation-play-state:paused" ></path></g></g><!-- generated by https://loading.io/ --></svg>',
        imageColor: "#fff", 
      });
  });
  $(document).ajaxStop(function(){
      $.LoadingOverlay("hide");
  });



  if ( localStorage.getItem("terjawab").includes('#'+nomor_soal) ) {
    munculkan_tombol_berikutnya();
  }

  if ( localStorage.getItem("soal"+nomor_soal) != null ) {
    editor.setValue(
      localStorage.getItem("soal"+nomor_soal)
    );
  }

  editor.on("keyup", function(cm, event) {
      // simpan kode ke localstorage
      localStorage.setItem(
        "soal"+nomor_soal, 
        editor.getValue()
      );
  });

  setTimeout(()=>{
    if ( jawaban == '' && soal == '' && instruksi == '' ) {
      Swal.fire(
        'Selamat!',
        'Anda sudah menyelesaikan semua soal.',
        'success'
      );
      $('main').remove();
    }
  },1);
</script>

</html>
