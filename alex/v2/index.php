<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Notícias - Alex Viana 15000</title>
<link rel="stylesheet" href="../css/style.css" />
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "9566e847-5655-4ab1-8dbc-0e15f5a5bada"}); </script>
 <link href="../css/jquery.tweet.css" rel="stylesheet"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  <script src="../js/jquery.tweet.js" charset="utf-8"></script>
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
  #noticias {
	position:absolute;
	left:12px;
	top:80px;
	width:614px;
	height:484px;
	z-index:1;
}
    #jasanelogo {
	position: fixed;
	right:0px;
	bottom:-0px;
	width:100%;
	height:75px;
	z-index:5;
	background-image: url(img/jasanelogo.png);
	background-repeat:no-repeat;
	background-position:right;
}
table {
	background:#fff;
	width:500px;
	height:auto;
	-moz-border-radius:12px;
	-webkit-border-radius:12x;
	border-radius:12px;
	padding:4px 4px 4px 8px;	
}
a:link {
	color: #00843B;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #00843B;
}
a:hover {
	text-decoration: none;
	color:  #00843B;
}
a:active {
	text-decoration: none;
	color: #00843B;
}
  </style>
  <script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "9566e847-5655-4ab1-8dbc-0e15f5a5bada"}); </script>

</head>

<body>
<!--   MENU  -->
<div id="inicioimg"><a href="../index.php"><img src="../img/inicio.png" width="50" height="31" alt="Inicio" /></a></div>
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
<div id="noticias" align="center">
<span class='st_facebook_hcount' displayText='Facebook'></span>
<span class='st_twitter_hcount' displayText='Tweet'></span>
<h3>Notícias</h3>
<?
include('conexao/conexao.php');
$p = $_GET["p"];
if(isset($p)) {
$p = $p;
} else {
$p = 1;
}
$qnt = 5;
$inicio = ($p*$qnt) - $qnt;
$sql_select = "SELECT * FROM noticias ORDER BY id DESC LIMIT $inicio, $qnt";

$sql_query = mysql_query($sql_select);
while($array = mysql_fetch_array($sql_query)) {
	?>
<table >
<tr>
<th scope="col" align="center"><a href="noticias/noticia.php?id=<?=$array['id']?>"><img src="noticias/noticia_img/<?=$array['foto']?>" width="150px" height="auto" /></a></th>
<th scope="col"><a href="noticias/noticia.php?id=<?=$array['id']?>"> <?=$array['titulo']?>
<?
$new =  explode(' ',$array['noticia']);	
for($i = 0;$i < 20 ;$i++) 
{
	echo " ".$new[$i];
};
echo " ... Leia Mais.";
?>


</a> </th>

</tr> 
</table>
<br />
<?
}

$sql_select_all = "SELECT * FROM noticias";
$sql_query_all = mysql_query($sql_select_all);
$total_registros = mysql_num_rows($sql_query_all);
$pags = ceil($total_registros/$qnt);
$max_links = 5;
echo "<a href='index.php?acao=noticias_paginas&p=1' target='_self'>Primeira Página</a>";
echo "&nbsp;|&nbsp;";
for($i = $p-$max_links; $i <= $p-1; $i++) {
if($i <=0) {
} else {
echo "<a href='index.php?acao=noticias_paginas&p=".$i."' target='_self'>".$i."</a> ";
}
}
echo $p." ";
for($i = $p+1; $i <= $p+$max_links; $i++) {
if($i > $pags)
{
}
else
{
echo "<a href='index.php?acao=noticias_paginas&p=".$i."' target='_self'>".$i."</a> ";
}
}
echo "|&nbsp;";
echo "<a href='index.php?acao=noticias_paginas&p=".$pags."' target='_self'>Ultima Página</a> ";
?>
<br />
</div>
<div id="jasanelogo"></div>

</body>
</html>