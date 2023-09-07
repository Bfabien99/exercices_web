<?php
/*
Créez une fonction qui prend deux nombres en entrée et renvoie leur somme.
 */
function addition($nb1 = 0, $nb2 = 0)
{
    return ($nb1 + $nb2);
}

$resultat = 0;
if(!empty($_POST['nb1']) && !empty($_POST['nb2'])){
    $resultat = $_POST['nb1']+$_POST['nb2'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MES EXERCICES</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            width: 100%;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header{
            width: 100%;
            background-color: black;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 15px;
        }

        .name{
            font-size: 2em;
        }

        ul{
            display: flex;
            width: 100%;
            max-width: 400px;
            justify-content: space-evenly;
            list-style: none;
            padding: 10px;
        }

        ul a{
            text-decoration: none;
            color: white;
            font-size: 1.2em;
        }
        
        main{
            flex-grow: 1;
            padding: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2em;
        }

        section{
            width: 100%;
            max-width: 800px;
        }

        section h2{
            text-align: center;
        }

        section p{
            text-align: justify;
            padding: 10px;
        }

        footer{
            background-color: black;
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        footer p{
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <p class="name">
            BROU
        </p>
        <ul>
            <li><a href="/exercices_web">Accueil</a></li>
            <li><a href="/exercices_web/exercices/exercices.php">Exercices</a></li>
        </ul>
    </header>
    <main>
        <h1>
            Addition
        </h1>
        <section>
            <h2>Énoncé</h2>
            <p>Créez une fonction qui prend deux nombres en entrée et renvoie leur somme.</p>
            <hr>
            <form action="" method="post">
                <input type="number" name="nb1" id="">
                <input type="number" name="nb2" id="">
                <button type="submit">Calculer</button>
            </form>
            <hr>
            <p>resultat: <?php echo $resultat;?></p>
        </section>
    </main>
    <footer>
        <p>&copy;2023 - je suis développeur PHP - NAN Digital Academy</p>
    </footer>
</body>
</html>