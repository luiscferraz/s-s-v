<?php

$local = $_SERVER['HTTP_HOST'];
if ($local == 'localhost'){
    $local = 'http://'.$local.'/acadetecinst/adm';
    }
else {
    $local = 'http://'.$local.'/teste/adm';
}

@session_start();
if (isset($_SESSION['flag'])){
    if($_SESSION['flag'] == true){
    } 
    else {
         header('Location:'.$local.'');
    } 
}
else {
    header('Location:'.$local.'');
}
// Importar as classes de construção do site
include_once 'importacao.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    
    <head>
    	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    	<meta name="author" content="Erick" />
        <link href="<?php echo $local?>/view/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $local?>/view/css/jquery-ui-1.8.21.custom.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo $local?>/view/js/jquery-ui-1.8.18.custom.min.js"></script>
        <script src="<?php echo $local?>/view/js/jquery-1.7.1.min.js"></script>
        <script type = "text/javascript" src="<?php echo $local?>/view/js/jquery.base64.min.js"></script>
        <script type="text/javascript" src="<?php echo $local?>/view/js/jscripts/tiny_mce/tiny_mce.js"></script>
        <script src="<?php echo $local?>/view/js/adm.js"></script>
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