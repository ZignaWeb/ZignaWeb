<header>
		<?
			$host = "http://".$_SERVER["HTTP_HOST"];
			$page = $_SERVER["REQUEST_URI"];
			$curUrl = "$host$page";
			if (!isset($lang)) {$lang="es";}
			function changeLang ($cual) {
				global $host;
				global $curUrl;
				$patron[0]="#(zigna.com.ar\/[a-z]{2}\/)#";
				$replace[0]="zigna.com.ar/$cual/";
				return preg_replace($patron,$replace,$curUrl);
			}
		?>
    <nav id="mainMenu">    
        <ol>
        	<li class="logo">
            	<h1><a href="http://www.zigna.com.ar/<?=$lang?>/"><img  src="http://www.zigna.com.ar/r/img/logo.png" alt="Zigna" width="43" height="43" /></a></h1>
            </li>
            <li><span><a href="http://www.zigna.com.ar/<?=$lang?>/design/">Dise&ntilde;o</a></span>
               <ol>
                    <li><a href="http://www.zigna.com.ar/<?=$lang?>/design/services/">Servicios</a></li>
                    <li><a href="http://www.zigna.com.ar/<?=$lang?>/design/portfolio/">Portfolio</a></li>
                    <li><a href="http://www.zigna.com.ar/<?=$lang?>/design/deals/">Paquetes</a></li>
                    <li><a href="http://www.zigna.com.ar/<?=$lang?>/design/quote/">Consultas</a></li>
                </ol>    
            </li>
            <li><span><a href="http://www.zigna.com.ar/<?=$lang?>/web/">Web</a></span>
               <ol>
                    <li><a href="http://www.zigna.com.ar/<?=$lang?>/web/services/">Servicios</a></li>
                    <li><a href="http://www.zigna.com.ar/<?=$lang?>/web/portfolio/">Portfolio</a></li>
                    <li><a href="http://www.zigna.com.ar/<?=$lang?>/web/deals/">Paquetes</a></li>
                    <li><a href="http://www.zigna.com.ar/<?=$lang?>/web/hosting/">Hosting</a></li>
                    <li><a href="http://www.zigna.com.ar/<?=$lang?>/design/quote/">Consultas</a></li>
                </ol>    
            </li>
            <li><span><a href="http://www.zigna.com.ar/<?=$lang?>/apps/">Apps</a></span>
               <ol>
                    <li><a href="http://www.zigna.com.ar/<?=$lang?>/apps/services/">Servicios</a></li>
                    <li><a href="http://www.zigna.com.ar/<?=$lang?>/apps/portfolio/">Portfolio</a></li>
                    <li><a href="http://www.zigna.com.ar/<?=$lang?>/apps/quote/">Consultas</a></li>
                </ol>    
            </li> 
            <li><a href="http://www.zigna.com.ar/<?=$lang?>/quote/">Contacto</a></li>
            <li class="idiomas"><span><a href="#">ES</a></span>
                <ol>
                    <li><a href="<?=changeLang("es")?>">Español</a></li>
                    <li><a href="<?=changeLang("en")?>">English</a></li>
                </ol>    
            </li> 
        </ol>
    </nav>
</header>