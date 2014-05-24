// page variables
var fH, fP;
function getVars () {
	fH = $("footer#foot").height()+50;
	fP = $("footer#foot").offset().top+30;
	height = $(".showtime header").height();;
	width = $(window).width();;
	return fH, fP, height, width;
}
function drawZignaBack (id,width,height,nCols) {
  var canvas = document.getElementById(id);
  var context = canvas.getContext('2d');
  var canvasH = height;
  var canvasW = width;
  canvas.height=height;
  canvas.width=width;
  // rango de color (implemented)
  var rS = 194, rE = 230;
  var gS = 186, gE = 226;
  var bS = 175, bE = 223;
  // color base, porcentage de cambio (not implemented)
  
  FillZigna(canvasW,canvasH,nCols,"rnd"); // rnd for random
  
  int = setInterval(function(){
	  for (n=0;n<5;n++) {
	  	zW = Math.ceil(canvasW/nCols);
		zXr= zW*Math.round(Math.random()*nCols);
		nR = Math.ceil(canvasH/zW);
		zYr= zW*Math.round(Math.random()*nR);
		drawZigna(zXr,zYr,zW/4,"rnd",Math.round(Math.random()*1));
	  }
  },20);
  
  function FillZigna (ancho,alto,nCol,zColor) {
	context.clearRect ( 0 , 0 , ancho , alto );
	zW = Math.ceil(ancho/nCol);
	nR = Math.ceil(alto/zW);
	for (j=0; j<nR; j++) {
		for (i=0;i<nCol; i++) {
		  drawZigna(zW*i , j*zW , zW/4 , zColor,Math.round(Math.random()*1));  
		}
	}
  }
  
}

