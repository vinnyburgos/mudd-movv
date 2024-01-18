function getBtns() {
    formulario = document.getElementById("formularioTopo");
    interesse = document.getElementById("interesse");
    marina = document.getElementById("btnMarina");
    conviva = document.getElementById("btnConviva");
    living = document.getElementById("btnLiving141");
    camboinhas  = document.getElementById("btnCamboinhas");
    scenarium  = document.getElementById("btnScenarium");
    attrium  = document.getElementById("btnAttrium");
    edge  = document.getElementById("btnEdge");
    marina.addEventListener("mousemove", function(){
        interesse.value = "Marina";
    });
    conviva.addEventListener("mousemove", function(){
        interesse.value = "Conviva";
    });
    living.addEventListener("mousemove", function(){
        interesse.value = "141Living";
    });
    camboinhas.addEventListener("mousemove", function(){
        interesse.value = "Trópico";
    });
    scenarium.addEventListener("mousemove", function(){
        interesse.value = "Scenarium";
    });
    attrium.addEventListener("mousemove", function(){
        interesse.value = "Attrium";
    });
    edge.addEventListener("mousemove", function(){
        interesse.value = "The Edge - Soter";
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