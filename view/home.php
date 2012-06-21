<?php 
    $local = $_SERVER['HTTP_HOST'];
    
    if ($local == 'localhost'){
        $local = 'http://'.$local.'/acadetecinst/adm';
        }
    else {
        $local = 'http://'.$local.'/teste/adm';
    }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    
    <head>
    	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    	<meta name="author" content="Erick" />
        <link href="<?php echo $local?>/view/css/layout.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo $local?>/view/js/jquery-1.7.1.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#entrar').click(function(){
                    
                    if (($('#login').val() == '') || ($('#senha').val() == ''))     {                        
                        $('#senha').css('border','1px solid red');
                    }
                    else{
                        $('#form-login').attr('action','<?php echo $local?>/controller/conectar.php');
                    }
                    
                });
                
            });
        </script>
    
    	<title>Adm</title>
    </head>
    
    <body>
    
        <form action="#" id="form-login" method="post">
            <label>�rea Restrita :.</label>
            <input type="text" value="" name="login" id="login" placeholder="Login"/>
            <input type="password" value="" name="senha" id="senha" placeholder="Senha" />
            <input type="submit" id="entrar" class="" value="Entrar"/>
        </form>
    
    

</body>
</html>