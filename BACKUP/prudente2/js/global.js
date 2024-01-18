function getBtns() {
    formulario = document.getElementById("formularioTopo");
    interesse = document.getElementById("interesse");
    ornato = document.getElementById("btnOrnato");
    nurban = document.getElementById("btnNurban");
    blanc = document.getElementById("btnBlanc");
    alma  = document.getElementById("btnAlma");
    gloria  = document.getElementById("btnGloria");
    tie  = document.getElementById("btnTie");
    all  = document.getElementById("btnAll");
    vistaIpanema  = document.getElementById("btnVista");
    ornato.addEventListener("mousemove", function(){
        interesse.value = "Ornato";
    });
    nurban.addEventListener("mousemove", function(){
        interesse.value = "Nurban";
    });
    blanc.addEventListener("mousemove", function(){
        interesse.value = "Blanc 260";
    });
    alma.addEventListener("mousemove", function(){
        interesse.value = "Alma";
    });
    gloria.addEventListener("mousemove", function(){
        interesse.value = "Glória Residencial";
    });
    tie.addEventListener("mousemove", function(){
        interesse.value = "Tiê Residencial";
    });
    all.addEventListener("mousemove", function(){
        interesse.value = "All Jardim Oceânico";
    });
    vistaIpanema.addEventListener("mousemove", function(){
        interesse.value = "Vista Ipanema";
    });
};

/* Máscaras ER */
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
};
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
};
function mtel(v){
    v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
    return v;
};
function id( el ){
	return document.getElementById( el );
};

window.onload = function() {
    id('telefone').onkeyup = function(){
		mascara( this, mtel );
	}
    getBtns();
};