
function Affiche_liste(id_ensemble_select,id_select)
{
    // Sélection du bloc contenant les sélections liées (id = "categorie" dans notre exemple)
    var id_ensemble_select2 = document.getElementById(id_ensemble_select);

    // Sélection de la sélection liée
    var id_select2 = document.getElementById(id_select);

    if(id_ensemble_select2)
    {
        //Initialisation d'une variable pour contenir un tableau.
        var tab = new Array();

        // Cherche les balises select inlues dans le bloc (id = "categorie" dans notre exemple) contenant les sélections liées  et les retourne dans un tableau
        tab = id_ensemble_select2.getElementsByTagName('select');

        var tablength = tab.length;

        // Liste les éléments du tableau
        for (i=0; i < tablength; i++)
        {
            // Met les selects en disable = true et les cache avec style.display = 'none'
            tab[i].disabled = true;
            if(id_select2) tab[i].style.display = 'none';// si select est vide on ne fait rien
        }

        // Met la sélection liée sélectionné en disable = false et l'affiche avec style.display = 'inline'
        if(id_select2)
        {
            id_select2.disabled = false;
            id_select2.style.display = 'inline';
        }
    }

}