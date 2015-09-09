$(document).ready(function () {

    var result = true;
//Quand l'utilisateur clicque sur envoyer
    $('form').submit(function () {
        if ($('#nom').val() == "") {
            $('#nom').css('border-color', '#ff0000');
            $('#nom').next('.error').fadeIn('fast').text('Champ Obligatoire !');
            $('#errornom').css('background-color', '#ff0000');
            result = false;
        }

        if ($('#prenom').val() == "") {
            $('#prenom').css('border-color', '#ff0000');
            $('#prenom').next('.error').fadeIn('fast').text('Champ Obligatoire !');
            $('#errorprenom').css('background-color', '#ff0000');
            result = false;
        }
        if ($('#pseudo').val() == "") {
            $('#pseudo').css('border-color', '#ff0000');
            $('#pseudo').next('.error').fadeIn('fast').text('Champ Obligatoire !');
            $('#errorpseudo').css('background-color', '#ff0000');
            result = false;
        }
        if ($('#mail').val() == "") {
            $('#mail').css('border-color', '#ff0000');
            $('#mail').next('.error').fadeIn('fast').text('Champ Obligatoire !');
            $('#errormail').css('background-color', '#ff0000');
            result = false;
        }

        return result;
    });
    //Quand l'utilisateur change de case
    $('#nom').change(function () {
        if ($('#nom').val().length < 2) {
            $('#nom').css('border-color', '#F2AB05');
            $('#nom').next('.error').fadeIn('fast').text('Le nom doit contenir au minimum 2 caractères.');
            $('#errornom').css('background-color', '#f2a91b');
            result = false;
        } else {
            $('#nom').css('border-color', '#00ff00');
            $('#nom').next('.error').fadeOut();
            result = true;
        }
        return result;
    });

    $('#prenom').change(function () {
        if ($('#prenom').val().length < 2) {
            $('#prenom').css('border-color', '#F2AB05');
            $('#prenom').next('.error').fadeIn('fast').text('Le prénom doit contenir au minimum 2 caractères.');
            $('#errorprenom').css('background-color', '#f2a91b');
            result = false;
        } else {
            $('#prenom').css('border-color', '#00ff00');
            $('#prenom').next('.error').fadeOut();
            result = true;
        }
        return result;
    });

    $('#pseudo').change(function () {
        if ($('#pseudo').val().length < 4) {
            $('#pseudo').css('border-color', '#f2a91b');
            $('#pseudo').next('.error').fadeIn('fast').text('Le pseudo doit contenir au minimum 4 caractères.');
            $('#errorpseudo').css('background-color', '#f2a91b');
            result = false;
        } else {
            $('#pseudo').css('border-color', '#00ff00');
            $('#pseudo').next('.error').fadeOut();
            result = true;
        }
        return result;
    });
    $('#mail').change(function () {
        if ($('#mail').val().length < 3) {
            $('#mail').css('border-color', '#f2a91b');
            $('#mail').next('.error').fadeIn('slow').text('L\'adresse email n\'est pas valide.');
            $('#errormail').css('background-color', '#f2a91b');
            result = false;
        } else {
            $('#mail').css('border-color', '#00ff00');
            $('#mail').next('.error').fadeOut();
            result = true;
        }
        return result;
    });
    $('#mdp').change(function () {
        if ($('#mdp').val().length < 4) {
            $('#mdp').css('border-color', '#f2a91b');
            $('#mdp').next('.error').fadeIn('slow').text('Le mot de passe est trop court');
            $('#errormdp').css('background-color', '#f2a91b');
            result = false;
        } else if ($("#cmdp").val() == $("#mdp").val()) {
            $('#cmdp').css('border-color', '#00ff00');
            $('#cmdp').next('.error').fadeOut('slow');
            $('#mdp').css('border-color', '#00ff00');
            $('#mdp').next('.error').fadeOut('slow');
            result = true;
        } else {
            $('#cmdp').css('border-color', '#f2a91b');
            $('#cmdp').next('.error').fadeIn('slow').text('Les mots de passe ne correspondent pas.');
            $('#errorcomfmdp').css('background-color', '#f2a91b');
            $('#mdp').css('border-color', '#f2a91b');
            $('#mdp').next('.error').fadeIn('slow').text('Les mots de passe ne correspondent pas.');
            $('#errormdp').css('background-color', '#f2a91b');
            result = false;
        }
        return result;
    });
    $('#cmdp').change(function () {
        if ($('#cmdp').val().length < 4) {
            $('#cmdp').css('border-color', '#f2a91b');
            $('#cmdp').next('.error').fadeIn('slow').text('Le mot de passe est trop court');
            $('#errorcomfmdp').css('background-color', '#f2a91b');
            result = false;
        }else if ($("#cmdp").val() == $("#mdp").val()) {
            $('#cmdp').css('border-color', '#00ff00');
            $('#cmdp').next('.error').fadeOut('slow');
            $('#mdp').css('border-color', '#00ff00');
            $('#mdp').next('.error').fadeOut('slow');
            result = true;
        } else {
            $('#cmdp').css('border-color', '#f2a91b');
            $('#cmdp').next('.error').fadeIn('slow').text('Les mots de passe ne correspondent pas.');
            $('#errorcomfmdp').css('background-color', '#f2a91b');
            $('#mdp').css('border-color', '#f2a91b');
            $('#mdp').next('.error').fadeIn('slow').text('Les mots de passe ne correspondent pas.');
            $('#errormdp').css('background-color', '#f2a91b');
            result = false;
        }
        return result;

    });
    result = true;

});
