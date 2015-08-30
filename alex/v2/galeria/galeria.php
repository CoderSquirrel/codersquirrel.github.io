<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Galeria - Alex Viana 15000</title>
<link rel="stylesheet" href="../css/style.css" />
<link rel="stylesheet" href="../css/lightbox.css" type="text/css" media="screen" />
<link href="../css/jquery.tweet.css" rel="stylesheet"/>

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "9566e847-5655-4ab1-8dbc-0e15f5a5bada"}); </script>
<script src="../js/jquery-1.7.2.min.js"></script>
<script src="../js/jquery.tweet.js" charset="utf-8"></script>
<script src="../js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="../js/jquery.smooth-scroll.min.js"></script>
<script src="../js/lightbox.js"></script>


  <script type="text/javascript">
    function randomString(length) {
      var chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz'.split('');
      var str = '';
      for (var i = 0; i < length; i++) {
        str += chars[Math.floor(Math.random() * chars.length)];
      }
      return str;
    }
    var rnd = randomString(8);

    jQuery(function($) {
      $(".rnd").replaceWith(rnd);


      $(".demo .code").hide().each(function(i,e){
        $(e).before($('').
                      click(function(ev) {
                        $(e).slideToggle();
                        $(this).hide();
                        ev.preventDefault();
                      }));

      }).each(function(i, e){ eval($(e).text()); });
    });
	
	jQuery(document).ready(function($) {
      $('a').smoothScroll({
        speed: 1000,
        easing: 'easeInOutCubic'
      });

      $('.showOlderChanges').on('click', function(e){
        $('.changelog .old').slideDown('slow');
        $(this).fadeOut();
        e.preventDefault();
      })
  });

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2196019-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
	
	
	
  </script>
  <style type="text/css">
  body {
	background-color: #CCC;
	background-image: url(../img/fundo.jpg);
}
  #menubar {
	position:fixed;
	left:-1px;
	top:-1px;
	width:100%;
	height:46px;
	background-image:url(../img/bgmenu.gif);
	z-index:2;
}
  #galeria {
	position:absolute;
	left:16px;
	top:68px;
	width:637px;
	height:535px;
	z-index:1;
}
  #jasanelogo {
	position: fixed;
	right:0px;
	bottom:-0px;
	width:100%;
	height:75px;
	z-index:5;
	background-image: url(../img/jasanelogo.png);
	background-repeat:no-repeat;
	background-position:right;
}
  </style>
</head>

<body>
<!--   MENU  -->
<div id="inicioimg"><a href="../index.php"><img src="../img/inicio.png" width="50" height="31" alt="Inicio"  /></a></div>
<div id="menubar"></div>
<div id="menu">
<ul id="menu">
<li><a href="../minhahistoria/">Minha História</a></li>
<li><a href="../diretrizes/">Diretrizes</a></li>
<li><a href="../noticias/">Notícias</a></li>
<li><a href="../videos/">Videos</a></li>
<li><a href="../agenda/">Agenda</a></li>
<li><a href="../falecomigo/">Fale Comigo</a></li>
<li><a href="../eusou1500/">Eu Sou 15000</a></li>
<li><a href="../galeria/">Galeria</a></li>
</ul>
</div>
<div id="RS">
<a href="http://www.facebook.com/Alex.Viana.15"><img src="../img/icon_fb.png" width="32" height="32" alt="Facebook" /></a>
<a href="http://www.twitter.com/Alex_Viana15"><img src="../img/icon_tw.png" width="32" height="32" alt="Twitter" /></a>
<a href="http://www.youtube.com/user/AlexViana15000"><img src="../img/icon_yt.png" width="32" height="32" alt="YouTube" /></a>
</div>

<!--   GALERIAS  -->
<div id="galeria" align="center"lass="imageRow">
<span class='st_facebook_hcount' displayText='Facebook' ></span>
<span class='st_twitter_hcount' displayText='Tweet'></span>
<br />
<div class="set">
<div class="single">

<?
include('../conexao/conexao.php');
$id = $_GET['id'];
$count = 1;
$sql = mysql_query("select * from galeria where id=$id") or die('Erro na consulta 1!');
$row= mysql_fetch_array($sql);
$foto = explode(' ',$row['fotos']);
$result = count($foto);
for($i = 0;$i < $result-1;$i++) 
{
echo" <a href='img/".$row['titulo_album']."/".$foto[$i]."' rel='lightbox[plants]' width='500px' height='auto' title='Alex Viana 15000 - Lnaçamento da Candidatura'><img src='img/".$row['titulo_album']."/".$foto[$i]."' width='130px' height='auto'  alt='Plants: image 1 0f".$result." thumb' /></a>";
echo " ";
} 

?>
</div>
</div>

</div>
<!--   AREA A DIREITA  -->
<div id="foto"><img src="../img/foto.png" width="308" height="330" alt="Alex Viana 1500" longdesc="http://alexviana15000.com.br" /></div>
<div id="logo"><img src="../img/logo.png" width="623" height="230" alt="Alex" /></div>
<div id="twitter" align="center"class="demo">
  <h3>Últimos Tweets</h3>
<pre class="code">
      jQuery(function($){
        $(".tweet").tweet({
          join_text: "auto",
          username: "alex_viana15",
          avatar_size: 28,
          count: 3,
          auto_join_text_default: "",
          auto_join_text_ed: "",
          auto_join_text_ing: "",
          auto_join_text_reply: "",
          auto_join_text_url: "",
          loading_text: "loading tweets..."
        });
      });
    </pre>
    <div class='tweet query'></div>
</div>

<div id="jasanelogo"></div>


</body>
</html>