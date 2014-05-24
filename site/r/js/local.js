// page variables
function getVars () {
	fH = $("footer#foot").height()+50;
	fP = $("footer#foot").offset().top+30;
	height = $(".Gotproyect header").height();
	width = $(window).width();
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
  var rc = 200;
  var gc = 200;
  var bc = 200;
  var alpham = 10; alphaM = 40;
  // color base, porcentage de cambio (not implemented)
  
  FillZigna(canvasW,canvasH,nCols,"rnd"); // rnd for random
  
  if (interval==true){
	  int = setInterval(function(){
		  for (n=0;n<5;n++) {
			zW = Math.ceil(canvasW/nCols);
			zXr= zW*Math.round(Math.random()*nCols);
			nR = Math.ceil(canvasH/zW);
			zYr= zW*Math.round(Math.random()*nR);
			drawZignaLines(zXr,zYr,zW/4,"rnd",Math.round(Math.random()*1));
		  }
	  },20);
  }
  
  function FillZigna (ancho,alto,nCol,zColor) {
	context.clearRect ( 0 , 0 , ancho , alto );
	zW = Math.ceil(ancho/nCol);
	nR = Math.ceil(alto/zW);
	for (j=0; j<nR; j++) {
		for (i=0;i<nCol; i++) {
		  drawZignaLines(zW*i , j*zW , zW/4 , zColor,Math.round(Math.random()*1));  
		}
	}
  }
  
  
  function drawZignaFill (x,y,size,colores,rotation) {
	  context.clearRect ( x , y , size*4 , size*4 );
	  alpha = "0."+(alpham+Math.ceil(Math.random()*(alphaM-alpham)));
	  color = "rgba("+rc+","+gc+","+bc+","+alpha+")";
	  
	  context.fillStyle = color;
	  context.lineWidth = 1;
	  context.strokeStyle = color;
	  
	  if (rotation==0) {
		// top left semicircle
		//  context.arc(x, y, radius, startAngle, endAngle, counterClockwise);
		context.beginPath();
		context.arc(x, y, size, Math.PI*0, Math.PI*0.5, false);
		context.lineTo(x,y+size);
		context.lineTo(x,y);
		context.closePath();
		context.fill();
		
		// bottom right semicircle
		//  context.arc(x, y, radius, startAngle, endAngle, counterClockwise);
		context.beginPath();
		context.arc(x+size*4, y+size*4, size, Math.PI*1, Math.PI*1.5, false);
		context.lineTo(x+size*4,y+size*4);
		context.closePath();
		context.fill();
		
		// linea diagonal
		context.beginPath();
		context.lineTo(x+size*4-size,y);
		context.lineTo(x+size*4,y);
		context.lineTo(x+size*4,y+size);
		context.lineTo(x+size,y+size*4);
		context.lineTo(x,y+size*4);
		context.lineTo(x,y+size*4-size);
		context.closePath();
		context.fill();
		}else{
		// top left semicircle
		//  context.arc(x, y, radius, startAngle, endAngle, counterClockwise);
		context.beginPath();
		context.arc(x, y+size*4, size, Math.PI*0, Math.PI*1.5, true);
		context.lineTo(x,y+size*4);
		context.closePath();
		context.fill();
		
		context.beginPath();
		context.arc(x+size*4, y, size, Math.PI*1, Math.PI*0.5, true);
		context.lineTo(x+size*4,y);
		context.closePath();
		context.fill();
		
		context.beginPath();
		context.lineTo(x,y);
		context.lineTo(x+size,y);
		context.lineTo(x+size*4,y+size*3);
		context.lineTo(x+size*4,y+size*4);
		context.lineTo(x+size*3,y+size*4);
		context.lineTo(x,y+size);
		context.closePath();
		context.fill();
	  }
	  
  }
  
  function drawZignaLines (x,y,size,colores,rotation) {
	  context.clearRect ( x , y , size*4 , size*4 );
	  alpha = "0."+(alpham+Math.ceil(Math.random()*alphaM));
	  color = "rgba("+rc+","+gc+","+bc+","+alpha+")";
	  
	  context.fillStyle = color;
	  context.lineWidth = 1;
	  context.strokeStyle = color;
	  
	  if (rotation==0) {
		context.beginPath();
		context.arc(x, y, size, Math.PI*0, Math.PI*0.5, false);
		context.stroke();
		
		context.beginPath();
		context.arc(x+size*4, y+size*4, size, Math.PI*1, Math.PI*1.5, false);
		context.stroke();
		
		context.beginPath();
		context.lineTo(x+size*4,y+size);
		context.lineTo(x+size,y+size*4);
		context.closePath(); context.stroke();context.beginPath(); // *
		context.lineTo(x,y+size*4-size);
		context.lineTo(x+size*4-size,y); context.closePath(); context.stroke(); // *
		}else{
		context.beginPath();
		context.arc(x, y+size*4, size, Math.PI*0, Math.PI*1.5, true);
		context.stroke()
		
		context.beginPath();
		context.arc(x+size*4, y, size, Math.PI*1, Math.PI*0.5, true);
		context.stroke();
		
		context.beginPath();
		context.lineTo(x+size,y);
		context.lineTo(x+size*4,y+size*3);
		context.closePath(); context.stroke();context.beginPath();
		context.lineTo(x+size*3,y+size*4);
		context.lineTo(x,y+size);
		context.closePath();
		context.stroke();
	  }
	  
  }
  
}

