
var tabImages=[];
var position = 0;

function precharger () {
		var img ;
		
		img = new Image () ;
		img.src = "../cover/banner1.jpg" ; /*ajouter un image*/
		tabImages.push ( img ); /*ajouter img dans le tableau tabImages*/
		img = new Image () ;
		img.src = "../cover/banner2.jpg" ; /*ajouter un image*/
		tabImages.push ( img ) ; /*ajouter img dans le tableau tabImages*/
		img = new Image ();
		img.src = "../cover/banner3.jpg";
		tabImages.push ( img );
		img = new Image ();
		img.src = "../cover/banner5.jpg";
		tabImages.push ( img );
}
window.onload=precharger;

function defiler () {
		var compt = 5;

		position = ( position + 1) % compt ;/*changer la position*/
		document.image.src = tabImages[position].src ;/*change l'image*/
}

setInterval("defiler()",4);



