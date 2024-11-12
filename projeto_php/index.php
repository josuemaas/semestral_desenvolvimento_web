<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeedbackHRV</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div id="bloco_principal">
        <div id="bloco_paragrafo">
        <p> Perguntas: O formulário deve buscar as perguntas no banco de dados e exibi-las
            dinamicamente conforme ordem pré-definida. As perguntas serão cadastradas
            previamente no sistema de retaguarda.</p>
        </div>
        <div id="bloco_feedback">
           
            <div class="scale">
                <span class="label">Improvável</span>
                <button class="scale-item" data-value="0">0</button>
                <button class="scale-item" data-value="1">1</button>
                <button class="scale-item" data-value="2">2</button>
                <button class="scale-item" data-value="3">3</button>
                <button class="scale-item" data-value="4">4</button>
                <button class="scale-item" data-value="5">5</button>
                <button class="scale-item" data-value="6">6</button>
                <button class="scale-item" data-value="7">7</button>
                <button class="scale-item" data-value="8">8</button>
                <button class="scale-item" data-value="9">9</button>
                <button class="scale-item" data-value="10">10</button>
                <span class="label">Muito Provável</span>
            </div>

        </div>
        <div id="bloco_comentario">
          
                <label for="comentario">Comentário:</label>
                <textarea class="fullscreen-textarea" name="comentario" rows="4" colms="500"   axlength="200" placeholder="Escreva seu comentário aqui..." oninput="atualizarContador()"></textarea>
    <div id="contador">0/200 caracteres</div>
          

        </div>
        <div id="bloco_next_page" >
            
            <button><a href="/teste.php"> Enviar</a></button>
        </div>
    </div>

</body>
</html>