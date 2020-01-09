var btncopy = document.querySelector('.js-copy');
if (btncopy) {
    btncopy.addEventListener('click', docopy);
}

function docopy() {

    // Cible de l'élément qui doit être copié
    var target = this.dataset.target;
    var fromElement = document.querySelector(target);
    if (!fromElement) return;

    // Sélection des caractères concernés
    var range = document.createRange();
    var selection = window.getSelection();
    range.selectNode(fromElement);
    selection.removeAllRanges();
    selection.addRange(range);

    try {
        // Exécution de la commande de copie
        var result = document.execCommand('copy');
        if (result) {
            // La copie a réussi
            alert('Copié !');
        }
    } catch (err) {
        // Une erreur est surevnue lors de la tentative de copie
        alert(err);
    }

    // Fin de l'opération
    selection = window.getSelection();
    if (typeof selection.removeRange === 'function') {
        selection.removeRange(range);
    } else if (typeof selection.removeAllRanges === 'function') {
        selection.removeAllRanges();
    }
}


//Envoi d'un formulaire en ajax
$(document).ready(function () {

    //Dates
    //var $j = jQuery.noConflict();
    $('#datepicker').datepicker({
        format: 'dd-mm-yyyy',
        locale: 'fr-fr'
    });
    $("#submit").click(function (e) {
        e.preventDefault();

        if ($('#nom').val() != '') {
            $.post( //envoie de donnée (ex: formulaire)
                'addValue', {
                    nom: $('#nom').val()
                },
                function (data) {
                    if (data == "Success") {
                        console.log('OK')
                        $('#content').load('ajax #content')
                        document.getElementById('nom').value = ''
                        $('#ajoutForm .close').click()
                    } else {
                        console.log('Echec')
                    }
                }
            )
        } else {
            console.log('Champs vide')
        }
    });


    //Modal body ajout adresse
    $(".modalSociety").click(function () {

        idUser = $(this).attr('idUser')

        $.ajax({
            type: 'GET',
            url: "addAccessSociety",
            data: {
                idUser: idUser
            },
            success: function (data) {
                $('#exampleModal').show();
                $('.modal_body').html(data);
            }
        });
    });


    //Chache le select pour authentification
    $('#society_selected').hide()
    $('#email').focusout(function () {
        //Initialise le select à vide
        $("#nameOfSociety").empty()

        if (!!$('#email').val()) {
            $.post(
                'checkSociety', {
                    email: $('#email').val()
                },

                function (data) {

                    if (data == 'Failed') {
                        $('.error_society').html('Aucunes entreprises trouvées')
                        $('.error_society').css('display', 'block');
                        $('#society_selected').hide()
                    } else {
                        $('.error_society').css('display', 'none');
                        data = JSON.parse(data)
                        //Récupération du nom de la société
                        for (var i = 0; i < data.length; i++) {
                            var soc_name = data[i].soc_name
                            $("#nameOfSociety").append('<option value="' + soc_name + '">' + soc_name + '</option>')
                        }
                        if (data.length >= 2) {
                            $('#society_selected').show()
                        } else if (data.length <= 1) {
                            $('#society_selected').show()
                        }
                    }
                }
            )
        } else {
            $('.error_society').html('Veuillez remplir tous les champs')
            $('#society_selected').hide()
        }
    })

   /*  $('#valid_auth').submit(function () {

        username = $('#username').val()
        pwd = $('#pwd').val()
        society_name = $('#nameOfSociety').val()

        // console.log(username + ' ' + pwd + ' ' + society_name)
        $.post(
            'auth', {
                username: username,
                pwd: pwd,
                society_name: society_name
            },
            function (data) {
                if (data == 'Error username_pwd') {
                    $('.error_society').html('Mauvaise combinaison username <-> password')
                    return false
                } else if (data == 'Error is empty') {
                    $('.error_society').html('Veuillez remplir tous les champs')
                    return false
                } else {
                    return true
                }
            }
        )

    }) */

    /* $('#valid_register').submit(function (e) {
        e.preventDefault()
        RegisterSuccess()

    })

    function RegisterSuccess() {

        username = $('#username').val()
        firstname = $('#firstname').val()
        pwd = $('#pwd').val()
        pwd1 = $('#pwd1').val()

        if (!!username) {
            $('#error_register').html('')
            $.post(
                'register', {
                    username: username,
                    firstname : firstname,
                    pwd: pwd,
                    pwd1: pwd1
                },
                function (data) {
                   
                     if (data == 'is empty') {
                        $('#error_register').html('Veuillez remplir tous les champs')

                    } else if (data == 'user exist') {
                        $('#error_register').html('Déjà enregistré')

                    } else if (data == 'wrong pwd') {
                        $('#error_register').html('Les mots de passes ne sont pas identiques')

                    } else if (data == 'Success') {

                        $('#error_register').html('Vous êtes enregistré')
                    } 
                }
            )
        } else {
           $('#error_register').html('Veuillez remplir tous les champs')
        }
    } */

    
})