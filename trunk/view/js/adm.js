$(document).ready(function()
{
    // submenu
    var uls = $('#ul-menu ul');  
    uls.hide();  
  
    $('#ul-menu > li').click(function( e ){  
        e.stopPropagation();  
        uls.hide();  
        $( this ).find('ul').slideDown();  
    });  
    $('#ul-menu ul').click(function( e ){  
        e.stopPropagation();  
    });  
    $('body').click(function(){  
        uls.slideUp();  
    });  
    
    //fim funcao submenu
    
    
    //abrir conteudo cadastrar funcionario
    
    $('.submenu li a').click(function(){
        var clas = $(this).attr('id');
        
       $('#conteudo').load('ajaxphp.php','conteudo='+clas); 
        
    });
    
    
    
    
});  
    
    
