var para = 1;

//para ver cual botón mover con volver
var btn1 = 0;
var btn2 = 0;
var btn3 = 0;

$(document).ready(function(){ 

$('#nube1').css({backgroundPosition: 'center 0'});
$('#nube2').css({backgroundPosition: 'center 0'});

$('#carroceria').css({backgroundPosition: 'center 0'});
$('#rueda-delantera').css({backgroundPosition: 'center 0'});
$('#rueda-trasera').css({backgroundPosition: 'center 0'});

$('#nube1').css({left: '70%',marginLeft:"0px"});
$('#nube2').css({left: '3%',marginLeft:"0px"});

var aux = 0;
var aux2 = 0;

animarNube1(10);
animarNube2(3);
animar();

$('#boton1-index').click(function(){
  $("#boton2-index,#boton3-index").fadeOut('slow');
	$("#texto-boton1").delay(600).fadeIn('Slow');
	$("#texto-seleccion").fadeOut('slow');
	$("#boton-volver").fadeIn('slow');
	$("#boton1-index").animate({left:"10%",marginLeft:"0px"}, 1000);
	if(para == 1){
	seguir();
	}
	para = 0;
	btn1 = 1;
});

$('#boton2-index').click(function(){
	$("#boton1-index,#boton3-index").fadeOut('slow');
	$("#texto-boton2").delay(600).fadeIn('Slow');
	$("#texto-seleccion").fadeOut('slow');
	$("#boton-volver").fadeIn('slow');
	$("#boton2-index").animate({left:"-3%",marginLeft:"0px"}, 1000);
	if(para == 1){
	seguir();
	}
	para = 0;
	btn2 = 1;
});

$('#boton3-index').click(function(){
	$("#boton1-index,#boton2-index").fadeOut('slow');
	$("#texto-boton3").delay(600).fadeIn('Slow');
	$("#texto-seleccion").fadeOut('slow');
	$("#boton-volver").fadeIn('slow');
	$("#boton3-index").animate({left:"13%",marginLeft:"0px"}, 1000);
	if(para == 1){
	seguir();
	}
	para = 0;
	btn3 = 1;
});

$('#boton-volver').click(function(){
	
	if(btn1 == 1){
		$("#texto-boton1").fadeOut('Slow');
		$("#boton2-index,#boton3-index").delay(600).fadeIn('slow');
		$("#texto-seleccion").fadeIn('slow');
		$("#boton-volver").fadeOut('slow');
		$("#boton1-index").animate({left:"0%",marginLeft:"0px"}, 1000);
		btn1 = 0;
	}
	if(btn2 == 1){
		$("#texto-boton2").fadeOut('Slow');
		$("#boton1-index,#boton3-index").delay(600).fadeIn('slow');
		$("#texto-seleccion").fadeIn('slow');
		$("#boton-volver").fadeOut('slow');
		$("#boton2-index").animate({left:"29%",marginLeft:"0px"}, 1000);
		btn2 = 0;
	}
	if(btn3 == 1){
		$("#texto-boton3").fadeOut('Slow');
		$("#boton1-index,#boton2-index").delay(600).fadeIn('slow');
		$("#texto-seleccion").fadeIn('slow');
		$("#boton-volver").fadeOut('slow');
		$("#boton3-index").animate({left:"58%",marginLeft:"0px"}, 1000);
		btn3 = 0;
	}
	para = 1;
	//seguir();
});

$('#a-btn1').click(function(){
	$("#btn-flecha-abajoa, #btn-flecha-normala").toggle();
	$("#texto-info").slideToggle();
});
$('#a-btn2').click(function(){
	$("#btn-flecha-abajob, #btn-flecha-normalb").toggle();
	$("#texto-inscribete").slideToggle();
});
$('#a-btn3').click(function(){
	$("#btn-flecha-abajoc, #btn-flecha-normalc").toggle();
	$("#texto-galeria").slideToggle();
});
$('#a-btn-goleadores').click(function(){
	$("#btn-flecha-abajoc, #btn-flecha-normalc").toggle();
	$("#texto-goleadores").slideToggle();
});
$('#a-btn-sancionados').click(function(){
	$("#btn-flecha-abajod, #btn-flecha-normald").toggle();
	$("#tabla-sancionados,#tabla-sancionados-amarillo").slideToggle();
});
$('#a-btn-fotos').click(function(){
	$("#btn-flecha-abajoe, #btn-flecha-normale").toggle();
	$("#texto-galeria").slideToggle();
});

});

var num = 1;


function animarNube1(aux2){
	var tiempo;
	
	if(aux2 == 10){
		tiempo = 100000;
	}else{
		tiempo = 130000;
	}
	
	$("#nube1").animate({left:"-50%"}, tiempo);
	setTimeout("leaveNube1()",tiempo);
}

function animarNube2(aux){
	var tiempo;
	
	if(aux == 3){
		tiempo = 55000;
	}else{
		tiempo = 138000;
	}
	
	$("#nube2").animate({left:"-50%"}, tiempo, function() {$('#nube2').removeAttr('style');});
	setTimeout("leaveNube2()",tiempo);
}

function animar(){
	$('#camion').css({left: '-20%',marginLeft:"0px"});
	
	startHim();
	
	//$("#camion").animate({left:"75%",marginLeft:"0px"}, 23000).animate({left:"25%",marginLeft:"0px"}, 10000).animate({left:"100%",marginLeft:"0px"}, 12000);
	if(para == 1){
		$("#camion").animate({left:"41%",marginLeft:"0px"}, 23000);
	}else{
		$("#camion").animate({left:"100%",marginLeft:"0px"}, 45000);
		setTimeout("leaveScreen()",45000);
	}
	//setTimeout("leaveScreen()",45000);
	
}

function startHim(){
	num++;
	$("#carroceria").animate({top:"-=3px"},150).animate({top:"+=3px"},150);
	if(num<4){
		setTimeout("startHim()",300);
	} else {
		setTimeout("bounceHim()",300);
	}
	
	/*var angle = 0;
	setInterval(function(){
		  angle+=3;
		 $("#rueda-delantera,#rueda-trasera").rotate(angle);
	},50);*/
	
}
	
function bounceHim(){
	$("#carroceria").animate({top:"-=2px"},150).animate({top:"+=2px"},150);
	setTimeout("bounceHim()",300);
}

function seguir(){
	$("#camion").clearQueue();
	$("#camion").animate({left:"100%",marginLeft:"0px"}, 10000);
	
	setTimeout("leaveScreen()",10000);
}
	
function leaveScreen(){
	$("#camion").stop();
	$("#camion").clearQueue();
	$("#camion").css({left: "-20%",marginLeft:"0px"});
	setTimeout("animar()",1000);
}

function leaveNube1(){
	$("#nube1").stop();
	$("#nube1").clearQueue();
	$("#nube1").css({left: "130%",marginLeft:"0px"});
	setTimeout("animarNube1(100)",1000);
}

function leaveNube2(){
	$("#nube2").stop();
	$("#nube2").clearQueue();
	$("#nube2").css({left: "130%",marginLeft:"0px"});
	setTimeout("animarNube2(100)",1000);
}
