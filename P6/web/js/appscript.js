//alert will disappear after few milliseconds
$(document).ready(function(){
    setTimeout(function() {
        $('.alert').fadeOut('slow');
    }, 2000);
});

/*
This is to add and remove fields dynamically in add page
 */
$(function(){
    // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
    var $container = $('div#oc_prepbundle_trick_picture');

    var $videocontainer = $('div#oc_prepbundle_trick_video');

    // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
    var index = $container.find(':input').length;
    var index2 = $videocontainer.find(':input').length;

    // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
    $('#add_picture').on('click', function(e) {

        addPicture($container);

        e.preventDefault(); // évite qu'un # apparaisse dans l'URL
        return false;
    });

    $('#add_video').on('click', function(e) {

        addVideo($videocontainer);

        e.preventDefault($videocontainer);

        return false;
    });

    // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
    if (index === 0) {
        addPicture($container);

    } else {
        // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles
        $container.children('div').each(function() {
            addDeleteLink($(this));
        });
    }
    if (index2 === 0) {
        addVideo($videocontainer);

    } else {

        $videocontainer.children('div').each(function () {
            addDeleteLink($(this));
        });
    }

    // La fonction qui ajoute un formulaire CategoryType
    function addPicture($container) {
        var template = $container.attr('data-prototype')
            .replace(/__name__label__/g,  + (index++))
        ;
        var $prototype = $(template);

        addDeleteLink($prototype);
        $container.append($prototype);
        index++;
    }

    function addVideo($videocontainer) {
        // Dans le contenu de l'attribut « data-prototype », on remplace :
        // - le texte "__name__label__" qu'il contient par le label du champ
        // - le texte "__name__" qu'il contient par le numéro du champ
        var template = $videocontainer.attr('data-prototype')
            .replace(/__name__label__/g,  + (index2++))
        ;

        // On crée un objet jquery qui contient ce template
        var $prototype = $(template);

        // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
        addDeleteLink($prototype);

        // On ajoute le prototype modifié à la fin de la balise <div>
        $videocontainer.append($prototype);

        // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
        index2++;
    }

    // La fonction qui ajoute un lien de suppression d'une catégorie
    function addDeleteLink($prototype) {
        // Création du lien
        var $deleteLink = $('<a href="#" class="btn btn-danger">Remove</a>');

        // Ajout du lien
        $prototype.append($deleteLink);

        // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie
        $deleteLink.click(function(e) {
            $prototype.remove();

            e.preventDefault(); // évite qu'un # apparaisse dans l'URL
            return false;
        });
    }
});
