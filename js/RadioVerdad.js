window.addEventListener ("load",alCargarDocumento);

//funciones
function alCargarDocumento(){
	botonRef = document.getElementsByClassName('ref');
	botonRef[0].classList.add('active');
	for(var i=0; i<botonRef.length;i++){
		botonRef[i].addEventListener('click',function(){
			for(var i=0; i<botonRef.length;i++){
				botonRef[i].classList.remove('active');
			}
			this.classList.add('active');
		});
 
 	}
					
	cuerpo=document.getElementById("cuerpo");
	avance=0;
	contador=0;
	nSecciones=document.getElementsByClassName('secciones');
	cuerpo.addEventListener("wheel",function(evento){
		
		if(evento.deltaY==100 && contador<nSecciones.length-1){
			avance+=657;
			contador++;
			window.scrollTo(0, avance);
			for(var i=0; i<botonRef.length;i++){
				botonRef[i].classList.remove('active');
			}
			botonRef[contador].classList.add('active');
			
			//window.location.assign("#sec3");
			//alert(evento.deltaY + "para abajo "+avance);
			
			//alert(nSecciones.length+ " cont"+ contador);
		}
		else if(evento.deltaY==-100 && contador>0){
			avance-=657;
			contador--;
			window.scrollTo(0, avance);
			for(var i=0; i<botonRef.length;i++){
				botonRef[i].classList.remove('active');
			}
			botonRef[contador].classList.add('active');
			
			//window.location.assign("#sec1");
			//alert(evento.deltaY + " para arriba "+avance);
			//alert(" contador "+ contador);
			//alert(window.location.href);
		}
		//alert(evento.deltaY);
		
	});

}