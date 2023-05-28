<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do Aluno</title>
    <link rel="shortcut icon" href="img/imgfavicon/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="stylealuno.css">
</head>
<body>
    <div class="container">
        <div class="form-image">
            <img src="img/undraw_exams_re_4ios.svg" alt="img-aluno">
        </div>
        <div class="form">
            <form action="testeloginaluno.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Acesse seu ambiente</h1>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="email">Seu melhor email</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu email" required>
                    </div>
                    <div class="input-box">
                        <label for="senha">Sua melhor senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite uma senha forte" required>
                    </div>
                </div>
                <div class="continua-btn">
                    <button type="submit" name="submit" id="submit">Entrar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>