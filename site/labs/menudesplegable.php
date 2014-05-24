<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Zigna web</title>
<meta name="description" content="">
<script src="../r/js/jquery.js"></script>
<script src="../r/js/modernizr.js"></script>
<style>
a { color:inherit}
header { 
	border-bottom:#23BBE8 solid 1px; height:43px; line-height:43px; font-size:1em;
	position:fixed; top:0; left:0; right:0;
}
header h1 { width:43px; height:43px; float:left; margin-right:40px}
nav ol ,nav li { display:inline} 

nav li { cursor:pointer;}
	nav > ol > li:hover { 
		color:#23BBE8; width:auto;
	}
	nav > ol > li:hover > ol > li {display:inline-block;}
	
	nav > ol > li > ol > li { display:none;}
	
	header nav > ol > li { margin-right:20px; }
	header nav > ol > li > ol > li { display:none; margin-left:10px}
	header nav > ol > li:hover > ol > li a {color:#000;}
	header nav > ol > li:hover > ol > li:hover a { color:#23BBE8}
	header nav > ol:hover > li:not(:hover) a { color:#CCC;}
	
	header nav > ol > li:not(.idiomas) { margin-right:20px; }
	header nav > ol > li:not(.idiomas) > ol {}
	header nav > ol:hover > li:not(:hover) a { color:#CCC}
	
	footer nav > ol > li:hover > ol > {color:#FFF;}
	footer nav > ol > li > ol > li > a {font-size:1em;}
	footer nav > ol > li > ol > li > a:before {content:"● "; color:#09C;}
	footer nav > ol > li:hover > ol > li:hover { color:#FFF;}
	footer nav > ol:hover > li:not(:hover) a { color: #09C;}
	
	.activo { display:inline-block}
	.idiomas{ float:right}
</style>
</head>

<body id="index">
<header> 
    <nav>
        <ol>
            <li><span><a href="#">Dise&ntilde;o</a></span>
               <ol>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Paquetes</a></li>
                    <li><a href="#">Consultas</a></li>
                </ol>    
            </li>
            <li><span><a href="#">Web</a></span>
               <ol>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Paquetes</a></li>
                    <li><a href="#">Consultas</a></li>
                </ol>    
            </li>
            <li><span><a href="#">Apps</a></span>
               <ol>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Consultas</a></li>
                </ol>    
            </li> 
            <li><span><a href="#">Hosting</a></span>
                <ol>
                    <li><a href="#">Planes</a></li>
                    <li><a href="#">Consultas</a></li>
                </ol>    
            </li> 
            <li><a href="#">Quienes somos</a></li>
            <li><a href="#">Contacto</a></li>
            <li class="idiomas"> 
                <ol>
                   <li class="activo"><a href="#">ES</a></li>
                   <li><a href="#">EN</a></li>
                </ol>    
            </li>
        </ol>
    </nav>
</header>
</body>
</html>
