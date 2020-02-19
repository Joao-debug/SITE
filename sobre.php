<?php

// Configuração inicial da página
require ('_config.php');

// Define o título "desta" página
$titulo = "Sobre nosso site";

// Opção ativa no menu principal
// Valores possíveis: "", "artigos", "noticias", "contatos", "sobre", "procurar"
// Valores diferentes destes = ""
$menu = "sobre";

// Aponta para o CSS "desta" página. Ex.: /css/contatos.css
// Deixe vazio para não usar CSS adicional nesta página
$css = "/css/sobre.css";

// Aponta para o JavaScript "desta" página. Ex.: /js/contatos.js
// Deixe vazio para não usar JavaScript adicional nesta página
$js = "";

/*********************************************/
/*  SEUS CÓDIGOS PHP DESTA PÁGINA FICAM AQUI */
/*********************************************/



/************************************************/
/*  SEUS CÓDIGOS PHP DESTA PÁGINA TERMINAM AQUI */
/************************************************/

// Inclui o cabeçalho do template
require ('_header.php');

?>

<h2>Sobre nosso site</h2>
<p>A Rede Tv se compromete completamente em trazer informações totalmente veridicas e que vá acrescentar em sua vida</p>
<p>Se busca noticias, entretenimento e outros ramos jornalisticos, veio ao lugar certo</p>
<p>Seja bem vindo e embarque nessa aventura conosco.</p> 
<p>Se divirta e se informe, somos um site de noticias dedicado em trazer a verdade a tona.</p>
<p>Faça seu cadastro e seja abraçado pela nossa comunidade</p>
<div class="img"><img class="responsiva" src="img/redetv.jfif" alt="Rede Tv"></div>
<?php

// Inclui o rodapé do template
require ('_footer.php');

?>
