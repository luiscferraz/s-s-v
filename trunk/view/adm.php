<?php

@session_start();
if (isset($_SESSION['flag'])){
    if($_SESSION['flag'] != true){
        header('Location : home.htm');
    }
    
}
// Importar as classes de construção do site
include_once 'importacao.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    
    <head>
    	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    	<meta name="author" content="Erick" />
        <link href="css/layout.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-1.7.1.min.js"></script>
        <script src="js/adm.js"></script>
        <script type="text/javascript" src="js/jscripts/tiny_mce/tiny_mce.js"></script>
        <!-- TinyMCE -->
        <script type="text/javascript">
        	tinyMCE.init({
        		mode : "textareas",
        		theme : "simple"
        	});
            
        </script>
        <!-- /TinyMCE -->
    
    	<title>Adm</title>
    </head>
    
    <body>
    
        <div id="corpo">
            <!-- Topo da pagina com logo da empresa e configurações -->
            <div id="topo">
                <?php echo $topo -> GetTopo();?>
            </div>
            <!-- Fim topo -->
            
            <!-- Centro da pagina com menu e conteiner com conteudo(o unico que ira mudar nas paginas) -->
            <div id="centro">
                <div id="menu">
                    <?php echo $menu -> GetMenu();?>
                </div>
                <div id="conteudo"></div>
            </div>
            <!-- Fim centro -->
            
            <!-- Roda pé da pagina, com informações do desenvolvedor e da empresa -->   
            <div id="rodape"></div>    
            <!-- Fim roda pé --> 
        </div>
    </body>
</html>