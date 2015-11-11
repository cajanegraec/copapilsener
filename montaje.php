<!-- Desarrollado por CajaNegra S.A. fecha: 23-octubre-2015 hora: 16:11 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Copa</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/estilos.css" rel="stylesheet">


  <link href="css/jcarousel.responsive.css" rel="stylesheet">


  <!-- keyboard widget css & script -->
  <link href="css/keyboard.css" rel="stylesheet">
  <!-- css for the preview keyset extension -->
  <link href="css/keyboard-previewkeyset.css" rel="stylesheet">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="fondoDos">
  <div id="qLoverlay"></div>
  <div class="container-fluid ">
    <div class="row">
      <div class="col-md-9">

        <div class="row"><!--FOTO grande-->
          <div id="fotoGrande" class="row center col-lg-12"> <!--Cambio por ser png-->
            <div id="fotoMarco" class="img-responsive center"> <!--Cambio por ser png-->
            </div> 
          </div>
        </div> <!--FOTO grande_end-->

        <div class="row"><!-- SLIDER-->
          <div class="fondoCar1">
            <div class="jcarousel-wrapper">
              <div class="jcarousel">
                <ul>



                  <?php 
                  $dir ="fotos/";
                  $cont=0;
                  $images_array = glob($dir.'*.jpg');
                  usort($images_array, create_function('$b,$a', 'return filemtime($a) - filemtime($b);'));
                  foreach ($images_array as $frame) {
                    $cont++;
                    $id_fotos= "id".$cont;
                  // if ($cont ==1){
                  //   echo "<div class='item active'><div class='col-lg-3 col-xs-3 col-md-3 col-sm-3 fotoEnana'><a class='mifoto'><img class='fotopequena img-responsive' src='".$frame."' />".$cont."</a></div></div>";

                  // } else {
                  //   echo "<div class='item'><div class='col-lg-3 col-xs-3 col-md-3 col-sm-3 fotoEnana'><a class='mifoto' ><img class='fotopequena img-responsive' src='".$frame."' />".$cont."</a></div></div>";

                  // }
                    echo "<li><img class='fotopequena img-responsive' src='".$frame."' alt='Image ".$cont."'></li>";
                  }
                  ?>
                </ul>
              </div>

              <a href="#" class="jcarousel-control-prev">
                <img src="recursos/botonIzq.png">
              </a>
              <a href="#" class="jcarousel-control-next">
                <img src="recursos/botonDere.png">
              </a>

              <!-- <p class="jcarousel-pagination"></p> -->
            </div>
          </div>




          

        </div>
      </div>
      <!-- <div class="col-md-2">

    </div> -->
    <div class="col-md-3 barravertical">
      <!--BOTON Enviar correo-->
      <button type="button" class="btn_enviar" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"></button>
      <!--Marcos-->
      <div class="carousel slide vertical" id="myCarousel2">
        <div class="carousel-inner miCarrusel2 ">

          <?php 
          $dir ="marcos/";
          $cont=0;
          $images_array = glob($dir.'*.png');
          foreach ($images_array as $frame) {
            $cont++;
            $id_fotos= "id".$cont;
            if ($cont ==1){
              echo "<div class='item active'><div class='framesLoad'><a class='mifoto'><img class='fotoPmarco img-responsive' src='".$frame."' /></a></div></div>";

            } else {
              echo "<div class='item'><div class='framesLoad'><a class='mifoto' ><img class='fotoPmarco img-responsive' src='".$frame."' /></a></div></div>";

            }
          }
          ?>

        </div>
        <a class="left carousel-control" href="#myCarousel2" data-slide="prev"><img src="recursos/botonabajo.png"></a>
        <a class="right carousel-control" href="#myCarousel2" data-slide="next"><img src="recursos/botonarriba.png"></a>
        <!-- original <a class="right carousel-control" href="#myCarousel2" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a> -->
      </div>

    </div> <!--Marcos_End-->
<!-- <form role="form" method="post">
<div class="form-group">
<label for="correoDest">Email</label>
<input type="email" class="form-control" id="correoDest" placeholder="Email">
</div>
<button id="benvio" type="button" class="btn btn-default">Enviar</button>
</form>
-->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Danos tu correo electr&#243;nico para hacerte llegar la foto</h4>
      </div>
      <div class="modal-body">
        <form role="form" method="post">
          <div class="form-group">
            <label for="correoDest" class="control-label">Correo:</label>
            <div id='loadingmessage' style='display:none'>
              <img class="img-responsive" src='ajax-loader.gif'/>
            </div>
            <input type="email" class="form-control ui-keyboard-input ui-widget-content ui-corner-all" id="correoDest" aria-haspopup="true">
            <!-- <textarea id="correoDest" placeholder="Enter Text..."></textarea> -->
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button id="bcancelar" type="button" class="btn btn-default btn-lg" data-dismiss="modal">Cancelar</button>
        <button id="benvio" type="button" class="btn btn-primary btn-lg">Enviar Foto</button>
      </div>
    </div>
  </div>
</div>
<!--BOTON_END-->

</div>
</div>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/queryloader2.min.js" type="text/javascript"></script>
<script src="js/jquery.keyboard.js"></script>
<script src="js/jquery.jcarousel.js"></script>
<script src="js/jcarousel.responsive.js"></script>

<script type="text/javascript">
window.addEventListener('DOMContentLoaded', function() {
  "use strict";
  var ql = new QueryLoader2(document.querySelector("body"), {
    barColor: "#efefef",
    backgroundColor: "#F1D220",
    percentage: true,
    barHeight: 3,
    minimumTime: 2500,
    fadeOutTime: 3000
  });
});
$(document).ready(function () {
  $('.carousel').carousel('pause');


  marco=$(".fotoPmarco").first().attr("src");
  foto=$(".fotopequena").first().attr("src");
  $('#correoDest')
  .keyboard({
    display: {
      'accept': 'Aceptar:Aceptar (Shift-Enter)',
      'cancel': 'Cancelar:Cancelar (Esc)',
      'bksp': 'Borrar:Borrar (Shift-Enter)'
    },
    css : {
        // input & preview
        input          : 'ui-widget-content ui-corner-all',
        // keyboard container
        container      : 'ui-widget-content ui-widget ui-corner-all ui-helper-clearfix', 
        // default state
        buttonDefault  : 'ui-state-default ui-corner-all',
        // hovered button
        buttonHover    : 'ui-state-hover',
        // Action keys (e.g. Accept, Cancel, Tab, etc); this replaces
        // "actionClass" option
        buttonAction   : 'ui-state-active',
        // used when disabling the decimal button {dec} when a decimal exists
        // in the input area
        buttonDisabled : 'ui-state-disabled'
      },
      layout: 'custom',
      customLayout : {
    'normal': [
      '` 1 2 3 4 5 6 7 8 9 0 - = {bksp}',
      '{tab} q w e r t y u i o p @ _ \\',
      'a s d f g h j k l ; \' {enter}',
      '{shift} z x c v b n m , . / {shift}',
      '{cancel} {space} {accept} {extender}'
    ],
    'shift': [
      '~ ! @ # $ % ^ & * ( ) _ + {bksp}',
      '{tab} Q W E R T Y U I O P { } |',
      'A S D F G H J K L : " {enter}',
      '{shift} Z X C V B N M < > ? {shift}',
      '{accept} {space} {cancel} {extender}'
    ]
  },
      position     : {
    // optional - null (attach to input/textarea) or a jQuery object
    // (attach elsewhere)
    of : null,
    my : 'center bottom',
    at : 'center bottom',
    // used when "usePreview" is false
    // (centers keyboard at bottom of the input/textarea)
    at2: 'center bottom'
  },
  reposition   : true,
})
.addTyping({
    // if true, typing on real keyboard will not highlight keys on the keyboard
    showTyping : true,
    // prevent user typing WHILE using the typing simulator `.typeIn('foobar')`
    lockTypeIn : false,
    // change default simulated typing delay
    delay      : 250
  });
});

$(window).load(function () {
  //alert("ready"+marco.attr("src")+foto);
  $("#fotoMarco").css("background-image","url("+marco+"),url("+foto+")");
});
// funcion recibir click
//   obtener la img o src de la img
//   buscar id fotoGrande 
//   poner la img dentro de fotoGrande
// $(".fotopequena").click(function() {
//   var src= $(this).attr("src");
//   var grande = $("#fotoGrande");
//   $("#fotoGrande img").remove();
//   grande.append("<img class='img-responsive' src='"+src+"'>");
// });
$(".fotopequena").click(function() {
  //alert("foto");
  var src= $(this).attr("src");
  foto=src;
  var contenedorDelFondo = $("#fotoMarco");
  //$("#fotoMarco").remove();
  //contenedorDelFondo.append("<img class='img-responsive' src='"+src+"'>");
  //if ($('#fotoMarco').css('background-image') != 'none') {
    contenedorDelFondo.css("background-image","url("+marco+"),url("+foto+")");
  //}
  

});

//dar click en el marco y que cambie el background-image del div fotoMarco
//funcion recibir click
//obtener la img o src de la img
// buscar id fotoMarco
// poner src de imagen en url del background-image
//    background-image: url(http://www.clipartsfree.net/vector/small/1311338212_Clipart_Free.png), url(http://upload.wikimedia.org/wikipedia/commons/1/1f/Green_star_41-108-41.svg);
$(".fotoPmarco").click(function() {
  //alert("marco");
  var src= $(this).attr("src");
  marco=src
  var contenedorDelFondo = $("#fotoMarco");
  //$("#fotoMarco").remove();
  //contenedorDelFondo.append("<img class='img-responsive' src='"+src+"'>");
  if ($('#fotoMarco').css('background-image') != 'none') {
    contenedorDelFondo.css("background-image","url("+marco+"),url("+foto+")");
  }
});


$("#regresarini").click(function () {
  window.location.href='index.php';
});

$("#benvio").click(function () {
  bg=$("#fotoMarco").css("background-image");
  bgArray=bg.split(",");
  bg1 = bgArray[0].replace('url(','').replace(')','').replace(/\s/g, '');
  bg2 = bgArray[1].replace('url(','').replace(')','').replace(/\s/g, '');
  $('#loadingmessage').show();
  $('#correoDest').hide();
  $('#bcancelar').hide();
  $('#benvio').hide();
  


  var parametros={
    correo: $("#correoDest").val(),
    imgmarco: bg1,
    //imgfoto:$("#fotoGrande img").attr("src")
    imgfoto: bg2
  }
  //alert("Parametros:"+parametros);
  $.ajax({
    url:'enviarmail.php',
    type:'POST',
    async:true,
    data:parametros,
    dataType:"json",
    success: function(respuesta) {
      if (respuesta==1) {
        //alert("Enviado");
        //$( ".modal-body" ).empty();
        //$( ".modal-footer" ).empty();
        //$( ".modal-body" ).append("<h4>Su correo fue enviado</h4>");
        //$( ".modal-footer" ).append("<button type='button' class='btn btn-default regresarini' data-dismiss='modal'>Cerrar</button>");
        console.log("ok");
        $('#correoDest').hide();
        window.location.href='campeon.php';

      }
      else{
        //alert("errorrespuesta");        
        $( ".modal-body" ).empty();
        $( ".modal-footer" ).empty();
        $( ".modal-body" ).append("<h4>Error al enviar el correo. Tratar de nuevo</h4>");
        $( ".modal-footer" ).append("<button type='button' class='btn btn-default regresarini' data-dismiss='modal'>Cerrar</button>");
      }
    },
    error: function (error) {
      //alert("Error");
      //$( ".modal-body" ).empty();
      //$( ".modal-footer" ).empty();
      //$( ".modal-body" ).append("<h4>Error wtf?</h4>");
      //$( ".modal-footer" ).append("<button type='button' id='regresarini' class='btn btn-default' data-dismiss='modal'>Cerrar</button>");
      // window.location.href='campeon.php';
      $( ".modal-body" ).empty();
      $( ".modal-footer" ).empty();
      $( ".modal-body" ).append("<h4>Error al enviar el correo. Tratar de nuevo</h4>");
      $( ".modal-footer" ).append("<button type='button' class='btn btn-default regresarini' data-dismiss='modal'>Cerrar</button>");
      setTimeout(function(){ window.location.href='index.php'; }, 3000);

    }

  });
});
</script>




</body>
</html>