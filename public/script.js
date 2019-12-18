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

//Dates
// var $j = jQuery.noConflict();
// $j('#datepicker').datepicker({
//     format: 'dd/mm/yyyy',
//     locale: 'fr-fr'
// });

//Envoi d'un formulaire en ajax
$(document).ready(function () {

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
                        document.getElementById('nom').value=''
                        $('#ajoutForm .close').click()
                    } else {
                        console.log('Echec')
                    }
                }
            )
        } else {
            console.log('Champs vide')
        }
    })
})

//Revevoir des données avec ajax (donnée reçu de php)

// $(document).ready(function () {

//     $('#btn_click').click(function () {

//         $.get(
//             'getAjax',
//             returnData
//         )

//         function returnData() {
//             console.log('Refresh')
//             $('#content').load('ajax #content')
//         }
//     })

// })