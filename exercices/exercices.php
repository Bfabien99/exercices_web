<?php
    $list_dir = scandir('./');
    $exercices = [];

    foreach ($list_dir as $file) {
        if(str_ends_with($file, '.php')){
            $exercices[]=str_replace('.php','',$file);
        }
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

        section .exoBx{
            display:flex;
            flex-direction: column;
            gap: 2em;
            justify-content: center;
            align-items: center;
        }

        .exoBx a{
            text-decoration:none;
            color:black;
            font-size: 1.5em;
            text-align: center;
            border: 1px solid;
            width:fit-content;
            padding:20px;
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
            LISTE DE MES EXERCICES
        </h1>
        <section>
            <div class="exoBx">
            <?php foreach ($exercices as $value) {?>
                <a href="<?php echo $value; ?>.php"><?php echo $value; ?></a>
            <?php
}
?>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy;2023 - je suis développeur PHP - NAN Digital Academy</p>
    </footer>
</body>
</html>