<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Page Classement Evaluateurs</title>
        <link rel=stylesheet href="style.css">
    </head>
    <body>
        <div class="Classement">
            <h1>Bienvenue Evaluateurs !</h1>
            <button class="Nouveau" onclick="window.location.href = '../PageNouveauEtudiant/PageNouveauEtudiant.php';">Nouveau</button>
            <table>
                <tr>
                    <th class="Etudiants" scope="col">Etudiants</th>
                    <th scope="col">Notes</th>
                </tr>
                <tr>
                    <td class="Nom">Dupont Jean</td>
                    <td class="Note">17</td>
                    <td class="Modif"><button class="BoutonModif">Modifier</button></td>
                </tr>
                <tr>
                    <td class="Nom">Dupont Mathilde</td>
                    <td class="Note">8</td>
                    <td class="Modif"><button class="BoutonModif">Modifier</button></td>
                </tr>
                <tr>
                    <td class="Nom">Dupont Max</td>
                    <td class="Note">13</td>
                    <td class="Modif"><button class="BoutonModif">Modifier</button></td>
                </tr>
            </table>
        </div>
        <div>
		    <?php include('../pied_de_page.php'); ?>
		</div>
    </body>
</html>