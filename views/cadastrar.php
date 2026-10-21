<link rel="stylesheet" href="views/cadastrar.css">

<h1>Cadastrar personagem</h1>

<?php if ($mensagem != "") { ?>
    <p class="mensagem">
        <?php echo htmlspecialchars($mensagem); ?>
    </p>
<?php } ?>

<form method="POST" action="index.php?acao=cadastrar">

    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="universo">Universo:</label>
    <input type="text" id="universo" name="universo" required>

    <label for="poder">Poder:</label>
    <input type="text" id="poder" name="poder" required>

    <button type="submit">Cadastrar</button>

</form>

<p class="voltar">
    <a href="index.php">Voltar para a lista</a>
</p>