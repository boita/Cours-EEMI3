/************************************************************
** AJAX qui déclenche le traitement serveur
** et récupère les données sous forme de flux Json
************************************************************/
$(document).ready(function() {
	$('#lancer').click(function() {
		$.ajax({
			// URL du traitement Ajax
			url:'ajax/controller.php',
			// Type de requête
			type : 'post',
			// Parametres envoyés
			/*data : { 
				param1 : 20 
			},*/
			// Traitement en cas de succès
			success: function(data) {
				//console.log(data);
				console.log(JSON.parse(data));
				afficher( JSON.parse(data) );
			},
			// Traitement en cas d'erreur
			error: function(jqXHR, textStatus, errorThrown) {
				// Une erreur s'est produite lors de la requete
				console.log("Erreur execution requete AJAX !");
			}
		});
	});
});

/************************************************************
** Génère le contenu dans la vue en récupérant les données 
** du flux Json
************************************************************/
function afficher(flux) {
	// Initialisation des variables
	nb_photos = 0;
	contenu = "";

	// Fabrication du contenu
	contenu += "<ul class='slider_annonces'>";
	$.each(flux, function(key,mandat) {
		contenu += "<li>";
		contenu += "<ul>";
		contenu += 		"<li>Titre : "+mandat.titre+"</li>"+
						"<li>Descr = "+mandat.descr+"</li>"+
						"<li>Tarif : "+mandat.tarif+"</li>";
		contenu += 		"<ul class='slider_photos'>";
		$.each(mandat.photos, function(key2,photo) {
			nb_photos++;
			contenu +=  	"<li class='photos'><img src='http://ns366377.ovh.net/~giraud/immo/photos/Z"
								+photo.src+"' /></li>";
		});
		contenu += 		"</ul>";
		contenu += "</ul>";
		contenu += "</li>";
	});
	contenu += "</ul>";
	// Fin de fabrication du contenu

	// Affichage dans la vue
	$(affichage).html(contenu);

	// Récupérer le délai dans le cookie
	delai = getCookie("delai");

	// Lancement du slider des annonces
	$('.slider_annonces').bxSlider({
		auto		: true,
		controls	: false,
		pause		: delai*1000,
		pager		: false
	});

	// Lancement du slider des photos
	$('.slider_photos').bxSlider({
		mode		: 'fade',
		auto		: true,
		//infiniteLoop: false,
		controls	: false,
		slideWidth	: 700,
		pause		: 1000,
		speed 		: 1000,
		pager		: false
	});

	console.log("Nb annonces = " + flux.length);
	console.log("Nb photos = " + nb_photos);
	console.log("Délai = " + delai + " secondes");
	console.log("Les sliders sont démarrés");
}