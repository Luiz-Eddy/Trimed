function recovery(){
	var login = document.getElementById("logar");
	var recuperar = document.getElementById("recuperars");
  	login.classList.add("oculta");
  	recuperar.classList.add("exibe");
}
function login(){
	var login = document.getElementById("logar");
	var recuperar = document.getElementById("recuperars");
  	recuperar.classList.remove("exibe");
  	login.classList.remove("oculta");
}
function efeito(){
	var bet = document.getElementById("beta");
	var form = document.getElementById("form");
	var camp = document.getElementById("campo");
	var sugeridos = document.getElementById("sugeridos");
	bet.classList.remove("oc");
	form.classList.add("formloc");
	camp.classList.add("aumenta");
	sugeridos.classList.add("sugeridosloc");
}

function desfazer(){
	var bet = document.getElementById("beta");
	var form = document.getElementById("form");
	var camp = document.getElementById("campo");
	var sugeridos = document.getElementById("sugeridos");
	sugeridos.classList.remove("sugeridosloc");
	camp.classList.remove("aumenta");
	form.classList.remove("formloc");
	bet.classList.add("oc");
}
var x;
function menu(x){
var inicial = document.getElementById("pg");
var remedio = document.getElementById("rem");
var farmacias = document.getElementById("farm");
var analises = document.getElementById("ana");
var cadastro = document.getElementById("cad");
var login = document.getElementById("login");
var pefil = document.getElementById("perfil");

	if (x == 1) {
		inicial.classList.add("active");
		remedio.classList.remove("active");
		farmacias.classList.remove("active");
		cadastro.classList.remove("active");
		login.classList.remove("active");
		analises.classList.remove("active");
		perfil.classList.remove("active");
	}else if(x == 2){
		inicial.classList.remove("active");
		remedio.classList.add("active");
		farmacias.classList.remove("active");
		cadastro.classList.remove("active");
		login.classList.remove("active");
		analises.classList.remove("active");
		perfil.classList.remove("active");
	}else if(x == 3){
		inicial.classList.remove("active");
		remedio.classList.remove("active");
		farmacias.classList.add("active");
		cadastro.classList.remove("active");
		login.classList.remove("active");
		analises.classList.remove("active");
		perfil.classList.remove("active");
	}else if(x == 4){
		inicial.classList.remove("active");
		remedio.classList.remove("active");
		farmacias.classList.remove("active");
		cadastro.classList.remove("active");
		login.classList.remove("active");
		analises.classList.add("active");
		perfil.classList.remove("active");
	}else if(x == 5){
		inicial.classList.remove("active");
		remedio.classList.remove("active");
		farmacias.classList.remove("active");
		cadastro.classList.add("active");
		login.classList.remove("active");
		analises.classList.remove("active");
		perfil.classList.remove("active");
	}else if(x == 6){
		inicial.classList.remove("active");
		remedio.classList.remove("active");
		farmacias.classList.remove("active");
		cadastro.classList.remove("active");
		login.classList.add("active");
		analises.classList.remove("active");
		perfil.classList.remove("active");
	}else if(x == 7){
		inicial.classList.remove("active");
		remedio.classList.remove("active");
		farmacias.classList.remove("active");
		cadastro.classList.remove("active");
		login.classList.remove("active");
		analises.classList.remove("active");
		perfil.classList.add("active");
	}
}