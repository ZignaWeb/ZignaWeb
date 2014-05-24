<footer id="foot">
	<nav class="left">
    <a href="#" class="clientlogin">Client Login</a>
    <ol>
        <li><a href="#">Nuestos servicios</a>
            <ol>
                <li><a href="#">Dise&ntilde;o</a></li>
                <li><a href="#">Sitios web</a></li>
                <li><a href="#">Aplicaciones</a></li>
                <li><a href="#">Hosting</a></li>
            </ol>    
        </li>
    
        <li><a href="#">Portfolio</a>
           <ol>
                <li><a href="#">Dise&ntilde;o</a></li>
                <li><a href="#">Web </a></li>
                <li><a href="#">Apps </a></li>
            </ol>    
        </li>
        <li><a href="#">Paquetes</a>
           <ol>
                <li><a href="#">Ofertas dise&ntilde;o</a></li>
                <li><a href="#">Ofertas web </a></li>
                <li><a href="#">Ofertas apps </a></li>
                <li><a href="#">Planes de hosting</a></li>
            </ol>    
        </li> 
        <li><a href="#">Consultas</a>
            <ol>
                <li><a href="#">Generales</a></li>
                <li><a href="#">Dise&ntilde;o</a></li>
                <li><a href="#">Web</a></li>
                <li><a href="#">Apps</a></li>
                <li><a href="#">Hosting</a></li>
            </ol>    
        </li> 
    </ol>
    </nav>
    
    <div class="right">
        <img class="logo" src="http://www.zigna.com.ar/r/img/isologoInv.png" alt="Zigna"/>
        <ol>
            <li>facebook.com/ZignaDesign</li>
            <li>twitter.com/ZignaDesign</li>
            <li>skype.com/ZignaDesign</li>
        </ol>
    </div>
</footer>

<script type="text/javascript">
	// canvas variables
	var id = "myCanvas";
	var nCols  = 40;
	var interval = false;
	var fH, fP, height, width;
	
	$(document).ready(function(e) {		
		getVars();	
		drawZignaBack (id,width,height+10,nCols);	
		$("footer#foot").css({"top":"100%","width":"90%","margin-top":"-30px","position":"fixed"}); 
		$("body").css({"padding-bottom":fH});
		
		$("footer#foot").hover(
			function (){
				if ($(window).scrollTop()+$(window).height()<fP) {
					$(this).animate({"margin-top":-$("footer#foot").height()});
				}
			},
			function (){
				if ($(window).scrollTop()+$(window).height()<fP) {
					$(this).animate({"margin-top":"-30px"});
				}
			},
			"slow"
		);
		
		// slideSecciones ();
		var timeout = null;
		$(window).resize(function(e){
			if (timeout!=null) {
				clearTimeout(timeout);
				timeout = null;
			}
				timeout = setTimeout(function(){
				getVars ();
				drawZignaBack (id,width,height+10,nCols);
			},500);
		});	
		
		$(window).scroll(function(e){
			var sT = $(this).scrollTop()+$(window).height();
			
			if (sT>fP) {
				$("footer#foot").css({"position":"relative","margin-top":"30px"}); 
				$("body").css({"padding-bottom":0});
			}else{
				$("footer#foot").css({"top":"100%","width":"90%","margin-top":"-30px","position":"fixed"}); 
				$("body").css({"padding-bottom":fH});
			}
		});
	});
	
</script>