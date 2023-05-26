<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Professor</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/imgfavicon/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
</head>
    <div class="container">
            <div class="form-image">
                <img src="img/undraw_quiz_re_aol4.svg" alt="img-professor">
            </div>

            <div class="form">
            <form action="testeloginprof.php" method="POST">
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
                <div class="form-group">
                    <label for="materia">Matéria Ministrada</label>
                    <select id="materia" name="materia" required>
                        <option value="">Selecione a matéria</option>
                        <option value="Português">Português</option>
                        <option value="Espanhol">Espanhol</option>
                        <option value="Inglês">Inglês</option>
                        <option value="Química">Química</option>
                        <option value="Física">Física</option>
                        <option value="Matemática">Matemática</option>
                        <option value="História">História</option>
                        <option value="Geografia">Geografia</option>
                        <option value="Filosofia">Filosofia</option>
                        <option value="Sociologia">Sociologia</option>
                        <option value="Artes">Artes</option>
                    </select>
                </div>
                <div class="continua-btn">
                    <button type="submit" name="submit" id="submit">Entrar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>