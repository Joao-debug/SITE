<?php

// Configuração inicial da página
require ('_config.php');

// Define o título "desta" página
$titulo = "";

// Opção ativa no menu principal
// Valores possíveis: "", "artigos", "noticias", "contatos", "sobre", "procurar"
// Valores diferentes destes = ""
$menu = "login";

// Aponta para o CSS "desta" página. Ex.: /css/contatos.css
// Deixe vazio para não usar CSS adicional nesta página
$css = "/css/login.css";

// Aponta para o JavaScript "desta" página. Ex.: /js/contatos.js
// Deixe vazio para não usar JavaScript adicional nesta página
$js = "";

$nome = $email = $cpf = $endereço = $senha = '';
/*********************************************/
/*  SEUS CÓDIGOS PHP DESTA PÁGINA FICAM AQUI */
/*********************************************/



/************************************************/
/*  SEUS CÓDIGOS PHP DESTA PÁGINA TERMINAM AQUI */
/************************************************/

// Inclui o cabeçalho do template
require ('_header.php');

?>
<div class="row">
&nbsp;
<div class="form">
    <div class="col1">
        <h2>Faça seu cadastro</h2>
<form name="login" id="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" accept-charset="utf-8">
            <input type="hidden" name="enviado" value="ok">
            <p>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Seu nome completo" value="<?php echo $nome ?>">
            </p>
            <p>
                <label for="email">E-mail:</label>
                <input type="text" name="email" id="email" placeholder="nome@provedor.com" value="<?php echo $email ?>">
            </p>
            <p>
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" id="cpf" placeholder="CPF" value="<?php echo $cpf ?>">
            </p>
            <p>
                <label for="endereço">Endereço:</label>
                <textarea name="endereço" id="endereço" placeholder="Seu Endereço"><?php echo $endereço ?></textarea>
            </p>
            <p>
                <label></label>
                <button type="submit">Enviar</button>
            </p>
        </form>
</div>
</div>
<div class="col2">
    <h2>Login</h2>
<p>    
    <label for="email">E-mail</label>
    <input type="text" name="email" placeholder="nome@provedor.com" value="<?php echo $email ?>">
</p>
<p>
    <label for="senha">Senha</label>
    <input type="text" name="senha" placeholder="Coloque sua senha" value="<?php echo $senha ?>">
</p>
<button type="submit">Enviar</button>    
</div>
</div>
<div class="col3">
    <h2>Login Admin</h2>
<p>
    <label for="email">E-mail</label>
    <input type="text" name="email" placeholder="nome@provedor.com" value="<?php echo $email?>">
</p>
    <label for="senha">Senha</label>
    <input type="text" name="senha" placeholder="Coloque sua senha" value="<?php echo $senha ?>">
</p>
<p>
    <label for="cpf">CPF:</label>
     <input type="text" name="cpf" id="cpf" placeholder="CPF" value="<?php echo $cpf ?>">
</p>
<p>
    <button type="submit">Enviar</button>
</p>

<?php

// Inclui o rodapé do template
require ('_footer.php');

?>
