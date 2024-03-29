<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
    <!-- Inclua o CSS do Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgba(28, 36, 56, 1);
            color: #fff;
        }

        .header {
            background-color: rgba(28, 36, 56, 1);
            padding: 10px 0;
        }

        .header i {
            font-size: 24px;
            color: #fff;
            margin-right: 10px;
            cursor: pointer;
        }

        .profile-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .profile-image {
            max-width: 200px;
            margin: 0 auto;
            border-radius: 50%;
        }

        .profile-info {
            margin-top: 20px;
        }

        .btn-save {
            background-color: rgba(28, 36, 56, 1);
            color: #fff;
            border: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Cabeçalho com link para a Home -->
        <div class="header">
            <a href="/view/home.php"><i class="fa fa-home"></i>Home</a>
        </div>

        <div class="profile-container">
            <img src="sua_foto.jpg" alt="Minha Foto de Perfil" class="profile-image">
            <div class="profile-info">
                <h2>Nome: João da Silva</h2>
                <p>Facebook: <a href="https://www.facebook.com/seu_perfil">https://www.facebook.com/seu_perfil</a></p>
                <p>Sócios: Maria Santos, José Oliveira</p>
                <p>LinkedIn: <a href="https://www.linkedin.com/in/seu_perfil">https://www.linkedin.com/in/seu_perfil</a></p>
                <button class="btn btn-save">Salvar</button>
            </div>
        </div>
    </div>

    <!-- Inclua o JavaScript do Bootstrap (opcional) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYlT" crossorigin="anonymous"></script>
</body>
</html>
