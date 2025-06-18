<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar conta como Participante</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            background-color: #d1eaff;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100dvh;
            box-sizing: border-box;
        }

        .sombra-texto {
            text-shadow: 0px 0.25em 1.25em rgba(0, 0, 0, 0.6);
        }

        .cartao-cadastro {
            background-color: #4f6c8c;
            border-radius: 2.0625em;
            width: 32.67rem;
            max-width: 32.67rem;
            height: 30em;
            padding: 0.528em 1.98em 1.32em 1.98em;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            position: relative;
        }

        .cartao-cadastro__titulo {
            color: #ffffff;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 2.772rem;
            line-height: 1.32;
            text-align: center;
            letter-spacing: -0.02em;
            margin-top: 0;
            margin-bottom: 0.33em;
            width: 100%;
            max-width: 100%;
            overflow-wrap: break-word;
        }

        .cartao-cadastro__seletor-papel {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1.98em;
            margin-bottom: 1.32em;
            width: 100%;
            max-width: 100%;
            position: relative;
            right: 0;
        }

        .opcao-papel {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            cursor: pointer;
            height: 2.145em;
            padding: 0 0.462em;
            max-width: 100%;
            flex: 1 1 0;
            min-width: 0;
            box-sizing: border-box;
        }

        .opcao-papel--ativa {
            width: 100%;
            max-width: 13.398em;
            height: 2.145em;
            padding: 0;
            min-width: 0;
            background: #6598d2;
            box-shadow: 0 0 0 4px #6598d2;
            border-radius: 1em;
        }

        .opcao-papel__texto {
            color: #ffffff;
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 1.485rem;
            line-height: 1.32;
            text-align: center;
            letter-spacing: -0.02em;
            position: relative;
            z-index: 1;
            white-space: nowrap;
            width: 100%;
            max-width: 11.418em;
            overflow: hidden;
            text-overflow: ellipsis;
            display: inline-block;
            vertical-align: middle;
            line-height: 2.145em;
            height: 2.145em;
        }

        .cartao-cadastro__formulario {
            display: flex;
            flex-direction: column;
            gap: 1.32em;
            width: 100%;
            max-width: 28.644em;
            margin-bottom: 7em;
        }

        .formulario__grupo {
            width: 100%;
            max-width: 100%;
        }

        .formulario__input {
            background-color: #ffffff;
            border-radius: 1em;
            width: 100%;
            height: 2.5em;
            border: none;
            padding: 0 0.66em;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
            font-size: 0.66rem;
            color: #333;
            max-width: 100%;
        }

        .formulario__input::placeholder {
            color: #888;
            font-family: 'Inter', sans-serif;
            font-size: 0.66rem;
        }

        .cartao-cadastro__termos {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.99em;
            margin-top: 0.792em;
            margin-bottom: 0.462em;
            width: 100%;
            max-width: 100%;
            position: absolute;
            left: 0;
            bottom: 4.5em;
        }

        .termos__texto {
            color: #ffffff;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 0.99rem;
            line-height: 1.32;
            text-align: center;
            letter-spacing: -0.02em;
            margin: 0;
            max-width: 100%;
        }

        .termos__link {
            text-decoration: underline;
            color: #6598d2;
            font-weight: 700;
        }

        .termos__toggle {
            width: 1.056em;
            height: 1.056em;
            display: block;
            flex-shrink: 0;
        }

        .cartao-cadastro__acoes {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            max-width: 100%;
            margin-top: 0.792em;
            gap: 18em;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: 1.32em;
        }

        .botao {
            background-color: #6598d2;
            border-radius: 0.264em;
            border: none;
            color: #ffffff;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 0.825rem;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            height: 2.64em;
            padding: 0 0.99em;
            box-sizing: border-box;
            min-width: 0;
            max-width: 100%;
            flex: 1 1 0;
        }

        .botao--secundario {
            max-width: 6.072em;
        }

        .botao--primario {
            max-width: 7.656em;
        }
    </style>
</head>

<body>
    <div id="main-content">
        <div class="cartao-cadastro">
            <h1 class="cartao-cadastro__titulo sombra-texto">Criar conta</h1>

            <div class="cartao-cadastro__seletor-papel">
                <div class="opcao-papel opcao-papel--ativa">
                    <span class="opcao-papel__texto sombra-texto">Como participante</span>
                </div>
                <div class="opcao-papel" onclick="carregarPagina('cadastroO')">
                    <span class="opcao-papel__texto sombra-texto">Como organizador</span>
                </div>
            </div>

            <form class="cartao-cadastro__formulario">
                <div class="formulario__grupo">
                    <input type="text" id="nome-completo" name="nome-completo" placeholder="Nome Completo" class="formulario__input">
                </div>
                <div class="formulario__grupo">
                    <input type="text" id="cpf" name="cpf" placeholder="CPF" class="formulario__input">
                </div>
                <div class="formulario__grupo">
                    <input type="email" id="email" name="email" placeholder="E-mail" class="formulario__input">
                </div>
                <div class="formulario__grupo">
                    <input type="password" id="senha" name="senha" placeholder="Senha" class="formulario__input">
                </div>
                <div class="formulario__grupo">
                    <input type="password" id="confirmar-senha" name="confirmar-senha" placeholder="Confirmar senha" class="formulario__input">
                </div>
                <div class="formulario__grupo" style="visibility:hidden;height:1.65em;">
                    <input type="text" style="height:1.65em;" disabled>
                </div>
            </form>

            <div class="cartao-cadastro__termos">
                <p class="termos__texto sombra-texto">
                    Concordo com os <a href="#" class="termos__link">Termos de Condições</a>
                </p>
                <button type="button" class="termos__toggle" aria-label="Toggle de aceite dos termos"
                    style="background:#fff;border:none;border-radius:50%;width:1.056em;height:1.056em;cursor:pointer;padding:0;"></button>
            </div>

            <div class="cartao-cadastro__acoes">
                <button type="button" class="botao botao--secundario" onclick="carregarPagina('login')">Voltar</button>
                <button type="submit" class="botao botao--primario">Cadastrar</button>
            </div>
        </div>
    </div>

</body>

</html>