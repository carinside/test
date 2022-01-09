<?
// IP Address of the guest
$ip = $_SERVER['REMOTE_ADDR'];    
//echo "<b>IP Address= $ip</b><br />"; 
$your_key = 'e43b02bf489a94d127c99ecf9e6d230ce338b87cc65edfbc91f9cd4725420c42';
$url = "http://api.ipinfodb.com/v3/ip-city/?key=$your_key&ip=$ip&format=json";
 
$data = json_decode(file_get_contents($url));




 
?>
 
<style type="text/css"> 
<!--

.boxmediaset {
     height: 80px;
  line-height: 80px;
  width:80px;
  text-align: center;
  border: 1px solid #000;
  background-color:#713BA3;
  border-radius:5px;
  float:left;
  margin:5px;
  padding:5px;
  font-size:12px;
  font-weight: 600;
}

.boxmediaset a:link, .boxmediaset a:visited {
    color: white;
    text-decoration: none;
    font-weight: bold;
    
}

.boxmediaset a:hover {
    color: #57F63B;
    text-decoration: none;
    font-weight: bold;
    
}


.boxrai {
     height: 80px;
  line-height: 80px;
  width:80px;
  text-align: center;
  border: 1px solid #000;
  background-color:#009FF9;
  border-radius:5px;
  float:left;
  margin:5px;
  padding:5px;
  font-size:12px;
  font-weight: 600;
}

.boxrai a:link, .boxrai a:visited {
    color: white;
    text-decoration: none;
    font-weight: bold;
    
}

.boxrai a:hover {
    color: #57F63B;
    text-decoration: none;
    font-weight: bold;
    
}

.boxdiscovery {
     height: 80px;
  line-height: 80px;
  width:80px;
  text-align: center;
  border: 1px solid #000;
  background-color:#C20D38;
  border-radius:5px;
  float:left;
  margin:5px;
  padding:5px;
  font-size:12px;
  font-weight: 500;
}

.boxdiscovery a:link, .boxdiscovery a:visited {
    color: white;
    text-decoration: none;
    font-weight: bold;
    
}

.boxdiscovery a:hover {
    color: #57F63B;
    text-decoration: none;
    font-weight: bold;
    
}

.boxsky {
     height: 80px;
  line-height: 80px;
  width:80px;
  text-align: center;
  border: 1px solid #000;
  background-color:#FF8E42;
  border-radius:5px;
  float:left;
  margin:5px;
  padding:5px;
  font-size:14px;
  font-weight: 600;
}

.boxsky a:link, .boxsky a:visited {
    color: white;
    text-decoration: none;
    font-weight: bold;
    
}

.boxsky a:hover {
    color: #57F63B;
    text-decoration: none;
    font-weight: bold;
    
}


a.block { display:block;padding:0px; border:0px solid #666; text-decoration: none}
a.block:hover, a.block:focus, a.block:active { background-color: }


.logo
{
width:80;
height:80; 
border: 1;
border: 1px solid #242424;
margin: 4;
padding:4;
border-radius:5px;

}

.logo:hover
{
width:77;
height:77; 
border: 3px solid green;
margin: 4;
padding:4;
border-radius:5px;

}



.logo2
{
width:110;
height:100; 
border: 1;
border: 1px solid #242424;
margin: 5;
padding:0;
border-radius:5px;

}

.logo3
{
width:80;
height:80; 
border: 1;
border: 1px solid #242424;
margin: 5;
padding:0;
border-radius:5px;

}


.contenitore
{
    background-color: #fff;
}

.etichetta
{
    background-color: #052340;
    font-size: 14pt;
    text-align: center;
    text-decoration: none;
font-family: Arial,;
color: #fff;
max-width:200;
border: 1px solid #242424;
padding:5;
margin:5;

}

.etichettamediaset
{
    background-color: #052340;
    font-size: 14pt;
    text-align: center;
    text-decoration: none;
font-family: Arial,;
color: #fff;
width:200;
float:left;
border: 1px solid #242424;
padding:5;
margin:5;

}

.ondemand
{
    background-color: #242424;
    font-size: 12pt;
    text-align: center;
    text-decoration: none;
font-family: Arial,;
color: #fff;
max-width:350;
border: 1px solid #242424;



padding:5;
margin:5;

}


.vpn
{
background-color: #eee;
    font-size: 12pt;
    padding: 10px;
    font-family: arial;
vertical-align: middle;
line-height: 20px

}

.descrizione
{


width: auto;
height: auto;
line-height: 35px;
vertical-align: middle;
border: 1;
border: 1px solid #242424;
margin: 4;
padding:4;
background-color: #1D313A;
color: #fff;
font-family: verdana;


}
.ip
{
width: 300px;
height: 35px;
line-height: 35px;
vertical-align: middle;
border: 1;
border: 1px solid #242424;
margin: 4;
padding:4;
background-color: #1D313A;
color: #fff;
font-family: verdana;


}


a:link    {text-decoration: none; color: red;}
a:visited {text-decoration: none; color: red;}
a:hover   {color: #57F63B;}


.alert {line-height: 25px; padding: 10px;background-color: #242424;color: #ffffff;opacity: 1;transition: opacity 0.1s;margin-bottom: 5px;font-family: Arial;}
.closebtn {padding:5px;margin-left: 15px;color: red;font-weight: bold;float: right;font-size: 16px;line-height: 10px;cursor: pointer;transition: 0.5s;
border: 2px solid;
padding-right: 3px;
padding-left: 3px;
border-radius: 5px;
}

-->
</style>

<center>
<div class="ip">

<?
echo "Sei collegato da: "; 

echo $guest_ip = ucwords(strtolower($data->cityName.', '.$data->countryName));
?>
</center>

</div>


<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
  
    
    <meta charset="utf-8" />
    
    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Diretta ottimizzata: VPN Italia</title>
    
    <!-- Mobile viewport optimized: j.mp/bplateviewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- JavaScript -->
    <script src="https://easysite.one/MenuNordVPN/jquery-1.7.1.min.js"></script>
    
    <script>
    $(document).ready(function(){   
    
		//When btn is clicked
		$(".btn-responsive-menu").click(function() {
			$("#mainmenu").toggleClass("show");
		
		});
    
    });
    </script>

    <!-- Style -->
    <link href="https://easysite.one/MenuNordVPN/style.css" rel="stylesheet" />
    <link href="https://easysite.one/MenuNordVPN/responsive.css" rel="stylesheet" />
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
 
</head>
<body>
<div id="wrapper">

    <header id="header">
    
        <h1 id="site-title"><a href="#">Diretta Tv Italiana </a></h1>
        
        <div class="btn-responsive-menu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </div>
        
    </header> <!-- #header -->
    
    <div id="mainmenu">
	 	<ul>
        
            <li><a href="https://www.open-live.org/it/nord-vpn-naviga-dallestero-come-se-fossi-in-italia-e-sblocca-contenuti-geo-bloccati/">Come funziona</a></li>
            <li><a href="https://go.nordvpn.net/aff_c?offer_id=15&aff_id=52092&url_id=902">Ottieni NordVPN</a></li>
            	
        </ul> 
	</div> <!-- #mainmenu -->
    
    
    
    

	<div id="main">
    
 




	</div> <!-- #main -->


       
        
<div class="vpn">
    <b>REQUISITI PER LA VISIONE</b>: <br>
    1. Essere in Italia o aver acquistato <strong><a rel="noreferrer noopener" href="https://go.nordvpn.net/aff_c?offer_id=15&amp;aff_id=52092&amp;url_id=902" target="_blank">NordVPN</a></strong> e averlo impostato su un server italiano.
    
    
 
   <br> 2. Consigliabile disattivare eventuali adblock sul proprio browers
   <br> <br>
   <p> - Problemi con i portali italiani? Prova il Servizio svizzero di<strong> <a rel="noreferrer noopener" href="https://telegra.ph/Teleboy-Tv-il-servizio-svizzero-per-guardare-la-TV-italiana-01-05" target="_blank">Teleboy</a></strong> per guardare la <strong>TV </strong></p>
</div> 


    
    
   

    
    
    

    <br>
<!--  <div class="alert">
  <span class="closebtn">X</span>  
   
    <h1>NOVITA'</h1>
    
    
    Prova una Lista m3u: contiene tutti i canali in chiaro (Rai, Mediaset ecc),  le TV Regionali, le TV Musicali e le Radio. 
    <br>
    Puoi usarla su qualsiasi dispositivo, comprese le Smart Tv !!! 
    <a rel="noreferrer noopener" href="https://www.easysite.one/top-live-lista-m3u-per-guardare-senza-limiti-la-tv-in-streaming/" target="_blank">Prova Subito</a>
    </div> -->
   
    <br> 
    

    <div class="contenitore" > 
    
    <div class="etichetta" > 

Network Multi Canale
</div>   


<a href="https://pluto.tv/it/live-tv/pluto-tv-sci-fi-it" title="Pluto Tv"target="_blank">
<img border="0" class="logo2"src="https://easysite.one/img/Playlist/PlutoTv.png" /></a>


<a href="https://www.teleboy.ch/it/player/live/339/rsila1hd?tab=live&playersize=small" title="Teleboy: Necessita di una connessione dalla Svizzera"target="_blank">
<img border="0" class="logo2"src="https://easysite.one/img/teleboy.png" /></a>

   

 
    
    
    <br><br>
<div class="etichetta" > 

Canali RAI
</div> 

<div class="ondemand" > 
 <p>  Rivedi un programma , Clicca <strong><a rel="noreferrer noopener" href="https://www.raiplay.it/guidatv?channel=rai-1" target="_blank">On Demand</a></strong></p>

</div>

<div class="boxrai">
  <a href="https://www.raiplay.it/iframe/dirette/rainews24" class="block"  target="_blank">RAI NEWS</a> 
</div>

<div class="boxrai">
  <a href="https://www.raiplay.it/iframe/dirette/rai1" class="block"  target="_blank">RAI 1</a> 
</div>

<div class="boxrai">
  <a href="https://www.raiplay.it/iframe/dirette/rai2" class="block"  target="_blank">RAI 2</a> 
</div>

<div class="boxrai">
  <a href="https://www.raiplay.it/iframe/dirette/rai3" class="block"  target="_blank">RAI 3</a> 
</div>

<div class="boxrai">
  <a href="https://www.raiplay.it/iframe/dirette/rai4" class="block"  target="_blank">RAI 4</a> 
</div>

<div class="boxrai">
  <a href="https://www.raiplay.it/iframe/dirette/rai5" class="block"  target="_blank">RAI 5</a> 
</div>

<div class="boxrai">
  <a href="https://www.raiplay.it/iframe/dirette/raimovie" class="block"  target="_blank">RAI MOVIE</a> 
</div>

<div class="boxrai">
  <a href="https://www.raiplay.it/iframe/dirette/raipremium" class="block"  target="_blank">RAIPREMIUM</a> 
</div>

<div class="boxrai">
  <a href="https://www.raiplay.it/iframe/dirette/raigulp" class="block"  target="_blank">RAI GULP</a> 
</div>

<div class="boxrai">
  <a href="https://www.raiplay.it/iframe/dirette/raiyoyo" class="block"  target="_blank">RAI YOYO</a> 
</div>

<div class="boxrai">
  <a href="https://www.raiplay.it/iframe/dirette/raistoria" class="block"  target="_blank">RAI STORIA</a> 
</div>

<div class="boxrai">
  <a href="https://www.raiplay.it/iframe/dirette/raiscuola" class="block"  target="_blank">RAI SCUOLA</a> 
</div>

<div class="boxrai">
  <a href="https://www.raiplay.it/iframe/dirette/raisport" class="block"  target="_blank">RAI SPORT</a> 
</div>



<div style="clear:both;"></div>

<!--

<a href="https://www.raiplay.it/iframe/dirette/rainews24" target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/RaiNews.png" /></a>



<a href="https://www.raiplay.it/iframe/dirette/rai1"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Rai1.png" /></a>



<a href="https://www.raiplay.it/iframe/dirette/rai2"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Rai2.png" /></a>

<a href="https://www.raiplay.it/iframe/dirette/rai3"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Rai3.png" /></a>

<a href="https://www.raiplay.it/iframe/dirette/rai3"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Rai3.png" /></a>

<a href="https://www.raiplay.it/iframe/dirette/rai4"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Rai4.png" /></a>

<a href="https://www.raiplay.it/iframe/dirette/rai5"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Rai5.png" /></a>

<a href="https://www.raiplay.it/iframe/dirette/raimovie">
<img border="0" class="logo"src="https://www.easysite.one/img/RaiMovie.png" /></a>

<a href="https://www.raiplay.it/iframe/dirette/raipremium"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/RaiPremium.png" /></a>

<a href="https://www.raiplay.it/iframe/dirette/raigulp"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/RaiGulp.png" /></a>

<a href="https://www.raiplay.it/iframe/dirette/raiyoyo"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/RaiYoyo.png" /></a>

<a href="https://www.raiplay.it/iframe/dirette/raisport"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/RaiSport.png" /></a>

<a href="https://www.raiplay.it/iframe/dirette/raistoria"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/RaiStoria.png" /></a> -->


</div>



<div style="clear:both;"></div>

 

<p><br>

<div class="etichettamediaset" > 

Canali MEDIASET
</div>   <i>Richiesta registrazione </i>



<p><br>
<div class="ondemand" > 
 <p>  Rivedi un programma , Clicca <strong><a rel="noreferrer noopener" href="https://www.mediasetplay.mediaset.it/guidatv" target="_blank">On Demand</a></strong></p>

</div>
 <div class="boxmediaset">
  <a href="https://www.grandefratello.mediaset.it/diretta-e-collegamenti/?canale=B7" class="block"  target="_blank">GF VIP (1)</a> </span>
</div>

 <div class="boxmediaset">
  <a href="https://www.grandefratello.mediaset.it/diretta-e-collegamenti/?canale=B8"  class="block" target="_blank">GF VIP (2)</a> </span>
</div>
    
    <div class="boxmediaset">
  <a href="https://www.mediasetplay.mediaset.it/diretta/video_cKF"  class="block" target="_blank">TGCOM</a> </span>
</div>

    <div class="boxmediaset">
  <a href="https://www.mediasetplay.mediaset.it/diretta/italia1_cI1" class="block" target="_blank">ITALIA 1</a> 
</div>

 <div class="boxmediaset">
  <a href="https://www.mediasetplay.mediaset.it/diretta/italia2_cI2" class="block"  target="_blank">ITALIA 2</a> 
</div>

<div class="boxmediaset">
  <a href="https://www.mediasetplay.mediaset.it/diretta/rete4_cR4" class="block"  target="_blank">RETE 4</a> 
</div>

<div class="boxmediaset">
  <a href="https://www.mediasetplay.mediaset.it/diretta/canale5_cC5" class="block"  target="_blank">CANALE 5</a> 
</div>

<div class="boxmediaset">
  <a href="https://www.mediasetplay.mediaset.it/diretta/topcrime_cLT" class="block"  target="_blank">TOPCRIME</a> 
</div>

<div class="boxmediaset">
  <a href="https://www.mediasetplay.mediaset.it/diretta/iris_cKI" class="block"  target="_blank">IRIS</a> 
</div>

<div class="boxmediaset">
  <a href="https://www.mediasetplay.mediaset.it/diretta/la5_cKA" class="block"  target="_blank">LA 5</a> 
</div>

<div class="boxmediaset">
 <a href="https://www.mediasetplay.mediaset.it/diretta/mediasetextra_cKQ" class="block"  target="_blank">M. EXTRA</a> 
</div>

<div class="boxmediaset">
 <a href="https://www.mediasetplay.mediaset.it/diretta/20mediaset_cLB" class="block"  target="_blank">20 MEDIASET</a> 
</div>

<div class="boxmediaset">
  <a href="https://www.mediasetplay.mediaset.it/diretta/cine34_cB6" class="block"  target="_blank">CINE 34</a> 
</div>

<div class="boxmediaset">
 <a href="https://www.mediasetplay.mediaset.it/diretta/focus_cFU" class="block"  target="_blank">FOCUS</a>
</div>

<div class="boxmediaset">
 <a href="https://www.mediasetplay.mediaset.it/diretta/kids_cKB" class="block"  target="_blank">BOING</a> 
</div>


<div class="boxmediaset">
  <a href="https://www.mediasetplay.mediaset.it/diretta/kids_cLA" class="block"  target="_blank">CARTOONITO</a> 
</div>

<div style="clear:both;"></div>

 
 

<!--
 <a href="https://www.grandefratello.mediaset.it/diretta-e-collegamenti/?canale=B7" title= "Regia 1" target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Gf.png" /></a>

<a href="https://www.grandefratello.mediaset.it/diretta-e-collegamenti/?canale=B8" title= "Regia 2"  target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Gf.png" /></a>

<a href="https://www.mediasetplay.mediaset.it/diretta/video_cKF" title= "TGCOM"  target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Tgcom24.png" /></a>

<a href="https://www.mediasetplay.mediaset.it/diretta/italia1_cI1"title= "ITALIA 1" target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Italia1.png" /></a>

<a href="https://www.mediasetplay.mediaset.it/diretta/italia2_cI2"title= "ITALIA 2" target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Italia2.png" /></a>

<a href="https://www.mediasetplay.mediaset.it/diretta/rete4_cR4"title= "RETE 4" target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Rete4.png" /></a>

<a href="https://www.mediasetplay.mediaset.it/diretta/canale5_cC5"title= "CANALE 5" target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Canale5.png" /></a>

<a href="https://www.mediasetplay.mediaset.it/diretta/topcrime_cLT"title= "TOPCRIME" target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Topcrime.png" /></a>

<a href="https://www.mediasetplay.mediaset.it/diretta/iris_cKI"title= "IRIS" target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Iris.png" /></a>

<a href="https://www.mediasetplay.mediaset.it/diretta/la5_cKA"title= "LA 5" target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/La5.png" /></a>

<a href="https://www.mediasetplay.mediaset.it/diretta/mediasetextra_cKQ" title= "MEDIASET EXTRA" target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/MediasetExtra.png" /></a>

<a href="https://www.mediasetplay.mediaset.it/diretta/20mediaset_cLB"title= "20 MEDIASET" target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/20.png" /></a>

<a href="https://www.mediasetplay.mediaset.it/diretta/cine34_cB6"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Cine34.png" /></a>

<a href="https://www.mediasetplay.mediaset.it/diretta/focus_cFU" title= "FOCUS" target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Focus.png" /></a>

<a href="https://www.mediasetplay.mediaset.it/diretta/kids_cKB"title= "BOING" target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Boing.png" /></a>

<a href="https://www.mediasetplay.mediaset.it/diretta/kids_cLA">
<img border="0" class="logo"src="https://www.easysite.one/img/Cartoonito.png" title= "CARTTONITO" target="_blank"/></a> -->




<p><br>
    
    


<div class="etichetta" > 

Canali DISCOVERY
</div>  

<div class="ondemand" > 
 <p>  Rivedi un programma , Clicca <strong><a rel="noreferrer noopener" href="https://www.discoveryplus.com/it/browse?network=tutti" target="_blank">On Demand</a></strong></p>

</div>

<div class="boxdiscovery">
  <a href="https://www.discoveryplus.com/it/channel/nove?pc=311" class="block"  target="_blank">NOVE</a> 
</div>

<div class="boxdiscovery">
  <a href="https://dmax.it/live-streaming-dmax" class="block"  target="_blank">DMAX</a> 
</div>




<div class="boxdiscovery">
  <a href="https://realtime.it/novita/live-streaming-real-time" class="block"  target="_blank">REALTIME</a> 
</div>





<div class="boxdiscovery">
  <a href="https://www.discoveryplus.com/it/channel/giallo" class="block"  target="_blank">GIALLO</a> 
</div>


<div class="boxdiscovery">
  <a href="https://www.discoveryplus.com/it/channel/motor-trend?pc=315" class="block"  target="_blank">Motortrend</a> 
</div>

<div class="boxdiscovery">
  <a href="https://www.discoveryplus.com/it/channel/food-network?pc=319" class="block"  target="_blank">FoodNetwork</a> 
</div>

<div class="boxdiscovery">
  <a href="https://www.discoveryplus.com/it/channel/hgtv?pc=322" class="block"  target="_blank">HGTV</a> 
</div>

<div class="boxdiscovery">
  <a href="https://www.discoveryplus.com/it/channel/k2?pc=313" class="block"  target="_blank">K2</a> 
</div>

<div class="boxdiscovery">
  <a href="https://www.discoveryplus.com/it/channel/frisbee?pc=314" class="block"  target="_blank">FRISBEE</a> 
</div>

<div style="clear:both;"></div>

<!--

<a href="https://www.discoveryplus.com/it/channel/nove?pc=311"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Nove.png" /></a>

<a href="https://dmax.it/live-streaming-dmax"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Dmax.png" /></a>

<a href="https://realtime.it/novita/live-streaming-real-time"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Realtime.png" /></a>

<a href="https://www.discoveryplus.com/it/channel/giallo"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Giallo.png" /></a>

<a href="https://www.discoveryplus.com/it/channel/motor-trend?pc=315"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/MotorTrend.png" /></a>

<a href="https://www.discoveryplus.com/it/channel/food-network?pc=319"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/FoodNetwork.png" /></a>

<a href="https://www.discoveryplus.com/it/channel/hgtv?pc=322"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Hgtv.png" /></a>

<a href="https://www.discoveryplus.com/it/channel/k2?pc=313"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/K2.png" /></a>

<a href="https://www.discoveryplus.com/it/channel/frisbee?pc=314"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Frisbee.png" /></a> -->






<!--
<div class="etichetta" > 

SAMSUG TV
</div>  
   <a href="https://easysite.one/z/Player/SamsugTv/A3Series.php" target="_blank" rel="noopener noreferrer">
<img border="0" class="logo"src="https://www.easysite.one/img/A3Series.png" /></a>




<a href="https://easysite.one/z/Player/SamsugTv/BizzarroMovies.php"target="_blank">
<img border="0" class="logo"src="httpS://easysite.one/img/BizzarroMovies.png" /></a>


<a href="https://easysite.one/z/Player/SamsugTv/CinemaSegreto.php "target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/CinemaSegreto.png" /></a>

<a href="https://easysite.one/z/Player/SamsugTv/Cg.php"target="_blank">
<img border="0" class="logo"src="https://easysite.one/img/CgEntertainment.png" /></a>


<a href="https://easysite.one/z/Player/SamsugTv/DarkMatter.php"target="_blank">
<img border="0" class="logo"src="https://easysite.one/img/DarkMatterTv.png" /></a>

<a href="https://easysite.one/z/Player/SamsugTv/RakutenAction.php/"target="_blank">
<img border="0" class="logo"src="https://easysite.one/img/RakutenAction.png" /></a>

<a href="https://easysite.one/z/Player/SamsugTv/RakutenDoc.php/"target="_blank">
<img border="0" class="logo"src="https://easysite.one/img/RakutenDocumentaries.png" /></a>



<a href="https://easysite.one/z/Player/SamsugTv/RakutenDrama.php/"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/RakutenDrama.png" /></a>

<a href="https://easysite.one/z/Player/SamsugTv/RakutenFamily.php/"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/RakutenFamily.png" /></a>


<a href="https://easysite.one/z/Player/SamsugTv/RakutenSpotlight.php"target="_blank">
<img border="0" class="logo"src="https://easysite.one/img/RakutenSpotlight.png" /></a>

<a href="https://easysite.one/z/Player/SamsugTv/Shorts.php"target="_blank">
<img border="0" class="logo"src="https://easysite.one/img/Shorts.png" /></a>


<a href="https://easysite.one/z/Player/SamsugTv/SofyTv.php/"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Sofy.png" /></a>


<a href="https://easysite.one/z/Player/SamsugTv/BrindiamoChannel.php/"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/BrindiamoChannel.png" /></a>


<a href="https://easysite.one/z/Player/SamsugTv/FashionTv.php"target="_blank">
<img border="0" class="logo"src="https://easysite.one/img/FashionTv.png" /></a>


<a href="https://easysite.one/z/Player/SamsugTv/CanaleEuropa.php/"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/CanaleEuropa.png" /></a>


<a href="https://easysite.one/z/Player/SamsugTv/MuseumTv.php"target="_blank">
<img border="0" class="logo"src="http://easysite.one/img/MuseumTv.jpeg" /></a>

<a href="https://easysite.one/z/Player/SamsugTv/MyZenTv.php/"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/MyZenTv.png" /></a>


<a href="https://easysite.one/z/Player/SamsugTv/FailArmy.php/"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/FailArmy.png" /></a>


<a href="https://easysite.one/z/Player/SamsugTv/HumanityDoc.php/"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/HumanityDoc.png" /></a>



<a href="https://easysite.one/z/Player/SamsugTv/PeopleAreAwesome.php/"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/PeopleAreAwesome.png" /></a>



<a href="https://easysite.one/z/Player/SamsugTv/ItalianFishingTv.php"target="_blank">
<img border="0" class="logo"src="https://easysite.one/img/ItaliaFishingTv.png" /></a>


<a href="https://easysite.one/z/Player/SamsugTv/FuelTv.php/"target="_blank">
<img border="0" class="logo"src="https://easysite.one/img/FuelTv.jpeg" /></a>

<a href="https://easysite.one/z/Player/SamsugTv/MmaTv.php/"target="_blank">
<img border="0" class="logo"src="https://easysite.one/img/MmaTv.jpeg" /></a>


<a href="https://easysite.one/z/Player/SamsugTv/Motor1.php/"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Motor1.png" /></a>


<a href="https://easysite.one/z/Player/SamsugTv/MySurfTv.php/"target="_blank">
<img border="0" class="logo"src="https://easysite.one/img/MySurfTv.png" /></a>


<a href="https://easysite.one/z/Player/SamsugTv/SportOutdoor.php/"target="_blank">
<img border="0" class="logo"src="https://easysite.one/img/SportOutdoorTv.png" /></a>


<a href="https://easysite.one/z/Player/SamsugTv/TheBoatShow.php/"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/TheBoatShow.png" /></a>


<a href="https://easysite.one/z/Player/SamsugTv/AmuseAnimation.php/"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/AmuseAnimation.png" /></a>


<a href="https://easysite.one/z/Player/SamsugTv/DuckTv.php/"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/DuckTv.png" /></a>


<a href="https://easysite.one/z/Player/SamsugTv/MondoTvKids.php/"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/MondoTvKids.png" /></a>


<a href="https://easysite.one/z/Player/SamsugTv/PlanetJunior.php/"target="_blank">
<img border="0" class="logo"src="https://easysite.one/img/PlanetJuniorTv.jpeg" /></a>


<a href="https://easysite.one/z/Player/SamsugTv/Teletubbies.php/"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Teletubbies.png" /></a>


<a href="https://easysite.one/z/Player/SamsugTv/YamatoAnimation.php/"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/YamatoAnimation.png" /></a>

<a href="https://easysite.one/z/Player/Nickelodeon.php/"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Nickelodeon.png" /></a>

<p><br> -->



<p><br>


<div class="etichetta" > 

Canali SKY dtt
</div>  

<div class="boxsky">
  <a href="https://video.sky.it/diretta/tg24" class="block"  target="_blank">SKY TG 24</a> 
</div>


<div class="boxsky">
  <a href="https://tv8.it/streaming.html" class="block"  target="_blank">TV 8</a> 
</div>


<div class="boxsky">
  <a href="https://www.cielotv.it/streaming.html" class="block"  target="_blank">CIELO</a> 
</div>

<div style="clear:both;"></div>

<br><br>
<div class="etichetta" > 

Altri CANALI
</div>  



<a href="https://tg.la7.it/dirette-tv"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/La7.png" /></a>

<a href="https://www.la7.it/live-la7d"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/La7d.png" /></a>

<a href="https://www.paramountnetwork.it/diretta-tv/duizzp/spike"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Spike.png" /></a>

<a href="https://www.paramountnetwork.it/diretta-tv/wp5pr2"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/ParamountChannel.png" /></a>

<a href="https://webtools-09bd1346f7a44cc9ac230cc1cb22ca4f.msvdn.net/embed/EnTK3KeeN1Eg?autoplay=true&T=1627378058"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/Byoblu.png" /></a>





<p><br>

<div class="etichetta" > 

Canali SPORTIVI
</div>  

<a href="https://bikechannel.it/"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/BikeTv.png" /></a>

<a href="https://www.raiplay.it/iframe/dirette/raisport"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/RaiSport.png" /></a>

<a href="https://sportitalia.com"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/SportitaliaHD.png" /></a>

<a href="https://sportitalia.com/silive24-hd/"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/SportitaliaLive24.png" /></a>

<a href="https://sportitalia.com/si-solocalcio-hd/"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/SportitaliaSoloCalcio.png" /></a>

<a href="https://sportitalia.com/si-motori-hd/"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/SportitaliaMotori.png" /></a>


<a href="https://www.youtube.com/watch?v=TJDc7BbqLMU"target="_blank">
<img border="0" class="logo"src="https://easysite.one/img/TopCalcio24.png" /></a>

<a href="https://www.telerent.net/diretta/diretta-telerent-7gold/"target="_blank">
<img border="0" class="logo"src="https://easysite.one/img/7Gold.jpg" /></a>

<a href="https://www.supertennis.tv/live-streaming"target="_blank">
<img border="0" class="logo"src="https://easysite.one/img/Supertennis.png" /></a>

<a href="https://platform.wim.tv/embed/?live=28e22c22-49db-40f3-8c37-8cbb0ff44556&autostart=true"target="_blank">
<img border="0" class="logo"src="https://easysite.one/img/MsMotor.png" /></a>

<br><br>
<div class="etichetta" > 

Canali RSI (Tv Svizzera)
</div>  

<a href="https://tp.srgssr.ch/p/rsi/portal-detail?urn=urn:rsi:video:livestream_La1&autoplay=true"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/RsiLa1.png" /></a>

<a href="https://tp.srgssr.ch/p/rsi/portal-detail?urn=urn:rsi:video:livestream_La2&autoplay=true"target="_blank">
<img border="0" class="logo"src="https://www.easysite.one/img/RsiLa2.png" /></a>



 <br><br>
 
<div class="etichetta" > 

TV REGIONALI
</div>  


<a href="https://pocktv.pwastore.com/tv-regionali/abruzzo-tv-streaming"target="_blank">
<img border="0" Title="ABRUZZO | TV in diretta streaming" class="logo3"src="https://easysite.one/img/Regionali/Bandiere/Abruzzo.png" /></a>

<a href="https://pocktv.pwastore.com/tv-regionali/basilicata-tv-in-streaming"target="_blank">
<img border="0" Title="BASILICATA | TV in diretta streaming" class="logo3"src="https://easysite.one/img/Regionali/Bandiere/Basilicata.png" /></a>

<a href="https://pocktv.pwastore.com/tv-regionali/calabria-tv-in-streaming"target="_blank">
<img border="0" Title="CALABRIA | TV in diretta streaming" class="logo3"src="https://easysite.one/img/Regionali/Bandiere/Calabria.png" /></a>

<a href="https://pocktv.pwastore.com/tv-regionali/campania-tv-in-streaming"target="_blank">
<img border="0" Title="CAMPANIA | TV in diretta streaming" class="logo3"src="https://easysite.one/img/Regionali/Bandiere/Campania.png" /></a>

<a href="https://pocktv.pwastore.com/tv-regionali/emilia-tv-in-streaming"target="_blank">
<img border="0" Title="EMILIA | TV in diretta streaming" class="logo3"src="https://easysite.one/img/Regionali/Bandiere/Emilia.png" /></a>

<a href="https://pocktv.pwastore.com/tv-regionali/friuli-tv-in-streaming"target="_blank">
<img border="0" Title="FRIULI | TV in diretta streaming" class="logo3"src="https://easysite.one/img/Regionali/Bandiere/Friuli.png" /></a>

<a href="https://pocktv.pwastore.com/tv-regionali/lazio-tv-in-streaming"target="_blank">
<img border="0" Title="LAZIO | TV in diretta streaming" class="logo3"src="https://easysite.one/img/Regionali/Bandiere/Lazio.png" /></a>

<a href="https://pocktv.pwastore.com/tv-regionali/liguria-tv-in-streaming"target="_blank">
<img border="0" Title="LIGURIA | TV in diretta streaming" class="logo3"src="https://easysite.one/img/Regionali/Bandiere/Liguria.png" /></a>

<a href=""target="_blank">
<img border="0" Title="LOMBARDIA | TV in diretta streaming" class="logo3"src="https://easysite.one/img/Regionali/Bandiere/Lombardia.png" /></a>

<a href="https://pocktv.pwastore.com/tv-regionali/marche-tv-in-streaming"target="_blank">
<img border="0" Title="MARCHE | TV in diretta streaming" class="logo3"src="https://easysite.one/img/Regionali/Bandiere/Marche.png" /></a>

<a href="https://pocktv.pwastore.com/tv-regionali/molise-tv-in-streaming"target="_blank">
<img border="0" Title="MOLISE | TV in diretta streaming" class="logo3"src="https://easysite.one/img/Regionali/Bandiere/Molise.png" /></a>

<a href="https://pocktv.pwastore.com/tv-regionali/piemonte-tv-in-streaming"target="_blank">
<img border="0" Title="PIEMONTE | TV in diretta streaming" class="logo3"src="https://easysite.one/img/Regionali/Bandiere/Piemonte.png" /></a>

<a href="https://pocktv.pwastore.com/tv-regionali/puglia-tv-in-streaming"target="_blank">
<img border="0" Title="PUGLIA | TV in diretta streaming" class="logo3"src="https://easysite.one/img/Regionali/Bandiere/Puglia.png" /></a>

<a href="https://pocktv.pwastore.com/tv-regionali/sardegna-tv-in-streaming"target="_blank">
<img border="0" Title="SARDEGNA | TV in diretta streaming" class="logo3"src="https://easysite.one/img/Regionali/Bandiere/Sardegna.png" /></a>

<a href="https://pocktv.pwastore.com/tv-regionali/sicilia-tv-in-streaming"target="_blank">
<img border="0" Title="SICILIA | TV in diretta streaming" class="logo3"src="https://easysite.one/img/Regionali/Bandiere/Sicilia.png" /></a>

<a href="https://pocktv.pwastore.com/tv-regionali/toscana-tv-in-streaming"target="_blank">
<img border="0" Title="TOSCANA | TV in diretta streaming" class="logo3"src="https://easysite.one/img/Regionali/Bandiere/Toscana.png" /></a>

<a href="https://pocktv.pwastore.com/tv-regionali/trentino-tv-in-streaming"target="_blank">
<img border="0" Title="TRENTINO | TV in diretta streaming" class="logo3"src="https://easysite.one/img/Regionali/Bandiere/Trentino.png" /></a>

<a href="https://pocktv.pwastore.com/tv-regionali/umbria-tv-in-streaming"target="_blank">
<img border="0" Title="UMBRIA | TV in diretta streaming" class="logo3"src="https://easysite.one/img/Regionali/Bandiere/Umbria.png" /></a>

<a href="https://pocktv.pwastore.com/tv-regionali/veneto-tv-in-streaming"target="_blank">
<img border="0" Title="VENETO | TV in diretta streaming" class="logo3"src="https://easysite.one/img/Regionali/Bandiere/Veneto.png" /></a>


<br><br>
<div class="etichetta" > 

Canali MUSICALI





        	




</div> <!-- #wrapper -->
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,4059724,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4059724&101" alt="statistiche sito" border="0"></a></noscript>
<!-- Histats.com  END  -->

  <!-- Go to www.addthis.com/dashboard to customize your tools --> 
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6093c6be873e8d43"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools --> 
    
    <script>
var close = document.getElementsByClassName("closebtn");
var i;
for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 400);
    }
}
</script>
</body>
</html>


