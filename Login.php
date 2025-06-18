<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <link rel="stylesheet" href="/Site-CEU/styleGlobal.css" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            background-color: #d1eaff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: clamp(1rem, 2vw, 2.5rem);
            box-sizing: border-box;
        }

        .container-pagina-login {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .sombra-texto-comum {
            text-shadow: 0px 0.25em 1.25em rgba(0, 0, 0, 0.6);
        }

        .wrapper-secao-login {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cartao-login {
            background-color: #4f6c8c;
            border-radius: 2em;
            width: 100%;
            max-width: 400px; /* valor fixo para evitar overflow com zoom */
            max-height: 500px;
            /* font-size: 1.1vw;  Removido para evitar problemas com zoom */
            padding: 1.2em 1.5em;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .titulo-login {
            color: #ffffff;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 2rem;
            line-height: 1.32;
            letter-spacing: -0.02em;
            text-align: center;
            margin-top: 0;
            margin-bottom: clamp(0.5rem, 1vw, 1.5rem);
        }

        .prompt-cadastro {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 0.7em;
            margin-bottom: 1.2em;
        }

        .texto-cadastro,
        .link-cadastro {
            font-size: 1rem;
            color: #ffffff;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            line-height: 1.32;
            letter-spacing: -0.02em;
            text-align: center;
        }

        .link-cadastro {
            color: #8ad7da;
            text-decoration: none;
        }

        .link-cadastro:hover {
            text-decoration: underline;
        }

        .formulario-login {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .grupo-formulario {
            width: 100%;
            max-width: 90vw;
            margin-bottom: 1em;
        }

        .grupo-formulario:last-of-type {
            margin-bottom: 0;
        }

        .input-formulario {
            background-color: #ffffff;
            border-radius: 1em;
            width: 100%;
            height: 2.2em;
            border: none;
            padding: 0 1em;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
            font-size: 1em;
            color: #333;
        }

        .input-formulario::placeholder {
            color: #888;
            font-family: 'Inter', sans-serif;
        }

        .acoes-formulario {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            max-width: 90vw;
            margin-top: 1.2em;
        }

        .link-esqueci-senha {
            font-size: 1em;
            color: #ffffff;
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            line-height: 1.32;
            letter-spacing: -0.02em;
            text-decoration: none;
        }

        .link-esqueci-senha:hover {
            text-decoration: underline;
        }

        .botao-login {
            font-size: 1em;
            background-color: #6598d2;
            border-radius: 0.2em;
            color: #ffffff;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            line-height: 1.32;
            letter-spacing: -0.02em;
            text-align: center;
            border: none;
            padding: 0.5em 1.5em;
            width: 8em;
            height: 2.2em;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            box-sizing: border-box;
        }

        .botao-login:hover {
            opacity: 0.9;
        }

        #main-content {
            transition: margin-left 0.3s;
        }

        .shifted {
            margin-left: 220px; /* ajuste conforme a largura do menu expandido */
        }
    </style>
</head>
<body>
    <div id="main-content">
        <section class="wrapper-secao-login">
            <div class="container-pagina-login">
                <div class="cartao-login">
                    <h1 class="titulo-login sombra-texto-comum">Acesse sua conta</h1>
                    <p class="prompt-cadastro">
                        <span class="texto-cadastro sombra-texto-comum">Não tem uma conta?</span>
                        <button type="button" class="link-cadastro sombra-texto-comum" onclick="carregarPagina('cadastroP')" style="background:none;border:none;padding:0;margin:0;cursor:pointer;text-decoration:underline;color:#8ad7da;font-size:1rem;font-family:'Inter',sans-serif;font-weight:700;line-height:1.32;letter-spacing:-0.02em;text-align:center;">
                            Clique aqui para criar
                        </button>
                    </p>
                    <form class="formulario-login">
                        <div class="grupo-formulario">
                            <input type="email" id="email" name="email" placeholder="E-mail" class="input-formulario email-input">
                        </div>
                        <div class="grupo-formulario">
                            <input type="password" id="password" name="password" placeholder="Senha" class="input-formulario password-input">
                        </div>
                        <div class="acoes-formulario">
                            <a href="#" class="link-esqueci-senha sombra-texto-comum">Esqueci minha senha </a>
                            <button type="submit" class="botao-login">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</body>
</html>