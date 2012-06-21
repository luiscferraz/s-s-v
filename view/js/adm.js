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
    
    
    //funcao pesquisa
    
    $( 'body' ).delegate( '#form-buscar input', 'keyup', function() {
        
        var cont =  $(this).val();
        var campo = $(this).attr("id");
        var area =  $("#form-buscar").attr('class');
        $("table").load("../controller/pesquisa.php","area="+area+"&campo="+campo+"&cont="+cont);
    });
    
    //
    
    //funcao excluir
    $( 'body' ).delegate( '.excluir', 'click', function() {
        var campo = $(this).attr("id");
        var area = $('#tabela').attr('class');
        decisao = confirm("Deseja excluir realmente ?");
        if (decisao == true){
            $("table").load("../controller/excluir.php","area="+area+"&campo="+campo);
        }
    });
    
    //funcao editar
    $('body').delegate('.editar','click',function(){
        
       var campo = $(this).attr('id');
       var area = $('#tabela').attr('class');
       $("#conteudo").load("../controller/editar.php","area="+area+"&campo="+campo);
    });
    
    //salvar edicao 
    
    //editar funcionario
    $('#bt-edt-fun').live('click',function(){
        var nome = $('input[name=nome]').val();
        var senha = $('input[name=senha]').val();
        var id = $('#form-edit').attr('class');
        if (nome == '' || senha == ''){
            if (nome == ''){
                $('input[name=nome]').css('border','1px solid red');
                $('input[name=nome]').attr('placeholder','Campo obrigatorio');
                $('input[name=nome]').css('background','#FF8F8F');
                }
            if (senha == ''){
                $('input[name=senha]').css('border','1px solid red');
                $('input[name=senha]').css('background','#FF8F8F');
                $('input[name=senha]').attr('placeholder','Campo obrigatorio');
                }
        }
        else {
            $.ajax({
    			type: "POST",
    			url: "ajaxedicao.php",
    			//data: "edicao=fun&nome="+nome+"&senha="+senha+"&id="+id,
                data:{edicao:'fun',nome:nome, senha:senha,id:id},
    			success: function(conteudo){
    			     if (conteudo == 'true'){
                        $('input[name=nome]').val('');
                        $('input[name=senha]').val('');
                        $('.aviso').remove();
                        $('form').prepend('<h2 class="aviso positivo" >Salvo</h2>');
    			     }
			}
  	     })
        }
    });
    
    //editar depo
    
    
    $('#bt-edt-depo').live('click',function(){
        var id = $('#form-edit').attr('class');
        var nome = $('input[name=nome]').val();
        var cidade = $('input[name=cidade]').val();
        var estado = $('#estado').val();
        var curso = $('input[name=curso]').val();
        tinyMCE.triggerSave();
        var mensagem = $('#caixa-depo').val();
        if (nome == '' || conteudo == ''){
            if (nome == ''){
                $('input[name=nome]').css('border','1px solid red');
                $('input[name=nome]').attr('placeholder','Campo obrigatorio');
                $('input[name=nome]').css('background','#FF8F8F');
                }
            if (conteudo == ''){
                $('.mceLayout').css('border','1px solid red');;
                $('.mceLayout').css('background','#FF8F8F');
                $('textarea').attr('placeholder','Campo obrigatorio');
                }
        }
        
        else { 
            
            $.ajax({
    			type: "POST",
   				url: "ajaxedicao.php",
    			//data: "edicao=depo&nome="+nome+"&cidade="+cidade+"&estado="+estado+"&curso="+curso+"&mensagem="+mensagem+"&id="+id,
    			data: {edicao: "depo", nome:nome, cidade:cidade, estado: estado,curso:curso,mensagem:mensagem,id :id},
                success: function(conteudo){
    			     alert(conteudo)
                     if (conteudo == 'true'){
                        $('input[name=nome]').val('');
                        $('input[name=cidade]').val('');
                        $('input[name=estado]').val('');
                        $('input[name=curso]').val('');
                        $('#caixa-depo').val('');
                        $('.aviso').remove();
                        $('form').prepend('<h2 class="aviso positivo" >Salvo</h2>');
    			     }
			}
  	     })
        }
    });
    
    
    
    //editar noticias
    $('#bt-edt-not').live('click',function(){
        var id = $('#form-edit').attr('class');
        var titulo = $('input[name=titulo]').val();
        tinyMCE.triggerSave();
        var conteudo = $('textarea').val().replace(/&nbsp;/g,' ');
        //conteudo = $.base64.encode(conteudo);
        var postado = $('input[name=postado]').val();
        var fonte = $('input[name=fonte]').val();
        var data = $('input[name=data]').val(); 
        if (titulo == '' || conteudo == ''){
            if (titulo == ''){
                $('input[name=titulo]').css('border','1px solid red');
                $('input[name=titulo]').attr('placeholder','Campo obrigatorio');
                $('input[name=titulo]').css('background','#FF8F8F');
                }
            if (conteudo == ''){
                $('.mceLayout').css('border','1px solid red');;
                $('.mceLayout').css('background','#FF8F8F');
                $('textarea').attr('placeholder','Campo obrigatorio');
                }
        }
        else {
            $.ajax({
    			type: "POST",
    			url: "ajaxedicao.php",
    			//data: "cadastro=not&titulo="+titulo+"&conteudo="+conteudo+"&fonte="+fonte+"&postado="+postado+"&data="+data,
                data: { edicao: "not",id:id, titulo:titulo,conteudo:conteudo, fonte:fonte, postado:postado, data: data },
    			success: function(conteudo){
    			     if (conteudo == 'true'){
                        $('input[name=titulo]').val('');
                        $('input[name=postado]').val('');
                        $('input[name=data]').val('');
                        $('input[name=fonte]').val('');
                        $('textarea').val('');
                        $('.aviso').remove();
                        $('form').prepend('<h2 class="aviso positivo" >Salvo</h2>');
    			     }
			}
  	     })
        }
    });
    
    
    
    
    
    
    //Validações e efetuações de cadastro
    
    //Cadastro funcionario
    $('#bt-cad-fun').live('click',function(){
        var nome = $('input[name=nome]').val();
        var senha = $('input[name=senha]').val();
        if (nome == '' || senha == ''){
            if (nome == ''){
                $('input[name=nome]').css('border','1px solid red');
                $('input[name=nome]').attr('placeholder','Campo obrigatorio');
                $('input[name=nome]').css('background','#FF8F8F');
                }
            if (senha == ''){
                $('input[name=senha]').css('border','1px solid red');
                $('input[name=senha]').css('background','#FF8F8F');
                $('input[name=senha]').attr('placeholder','Campo obrigatorio');
                }
        }
        else {
            $.ajax({
    			type: "POST",
    			url: "ajaxcadastro.php",
    			//data: "cadastro=cad&nome="+nome+"&senha="+senha,
                data:{cadastro:"cad",nome:nome, senha:senha},
    			success: function(conteudo){
    			 alert(conteudo);
    			     if (conteudo == 'true'){
                        $('input[name=nome]').val('');
                        $('input[name=senha]').val('');
                        $('.aviso').remove();
                        $('form').prepend('<h2 class="aviso positivo" >Cadastro Efetuado</h2>');
    			     }
                     else {
                        $('.aviso').remove();
                        $('input[name=nome]').css('border','1px solid red');
                        $('input[name=nome]').css('background','#FF8F8F');
                        $('form').prepend('<h2 class="aviso" >Funcionário Existente</h2>');
                     }    
			}
  	     })
        }
    });
    // Fim cadastro fun
    
    // Cadastro Depoimentos
    
    $('#bt-cad-depo').live('click',function(){
        
        var nome = $('input[name=nome]').val();
        var cidade = $('input[name=cidade]').val();
        var estado = $('#estado').val();
        var curso = $('input[name=curso]').val();
        tinyMCE.triggerSave();
        var mensagem = $('#caixa-depo').val();
        if (nome == '' || conteudo == ''){
            if (nome == ''){
                $('input[name=nome]').css('border','1px solid red');
                $('input[name=nome]').attr('placeholder','Campo obrigatorio');
                $('input[name=nome]').css('background','#FF8F8F');
                }
            if (conteudo == ''){
                $('.mceLayout').css('border','1px solid red');;
                $('.mceLayout').css('background','#FF8F8F');
                $('textarea').attr('placeholder','Campo obrigatorio');
                }
        }
        else {        
            $.ajax({
    			type: "POST",
    			url: "ajaxcadastro.php",
    			//data: "cadastro=depo&nome="+nome+"&cidade="+cidade+"&estado="+estado+"&curso="+curso+"&mensagem="+mensagem,
                data: {cadastro: "depo", nome:nome, cidade:cidade, estado:estado,curso:curso,mensagem:mensagem},
    			success: function(conteudo){
    			     if (conteudo == 'true'){
                        $('input[name=nome]').val('');
                        $('input[name=cidade]').val('');
                        $('input[name=estado]').val('');
                        $('input[name=curso]').val('');
                        $('#caixa-depo').val('');
                        $('.aviso').remove();
                        $('form').prepend('<h2 class="aviso positivo" >Cadastro Efetuado</h2>');
    			     }
			}
  	     })
        }
    });
    //fim depoimentos
    
    //Cadastro noticias
    $('#bt-cad-not').live('click',function(){
        
        var titulo = $('input[name=titulo]').val();
        tinyMCE.triggerSave();
        var conteudo = $('textarea').val().replace(/&nbsp;/g,' ');
        //conteudo = $.base64.encode(conteudo);
        var postado = $('input[name=postado]').val();
        var fonte = $('input[name=fonte]').val();
        var data = $('input[name=data]').val();     
        if (titulo == '' || conteudo == ''){
            if (titulo == ''){
                $('input[name=titulo]').css('border','1px solid red');
                $('input[name=titulo]').attr('placeholder','Campo obrigatorio');
                $('input[name=titulo]').css('background','#FF8F8F');
                }
            if (conteudo == ''){
                $('.mceLayout').css('border','1px solid red');;
                $('.mceLayout').css('background','#FF8F8F');
                $('textarea').attr('placeholder','Campo obrigatorio');
                }
        }
        else {
            $.ajax({
    			type: "POST",
    			url: "ajaxcadastro.php",
    			//data: "cadastro=not&titulo="+titulo+"&conteudo="+conteudo+"&fonte="+fonte+"&postado="+postado+"&data="+data,
                data: { cadastro: "not", titulo:titulo,conteudo:conteudo, fonte:fonte, postado:postado, data: data },
    			success: function(conteudo){
    			 
    			     if (conteudo == 'true'){
                        $('input[name=titulo]').val('');
                        $('input[name=postado]').val('');
                        $('input[name=data]').val('');
                        $('input[name=fonte]').val('');
                        $('textarea').val('');
                        $('.aviso').remove();
                        $('form').prepend('<h2 class="aviso positivo" >Notícia Postada</h2>');
    			     }
			}
  	     })
        }
    });
    
    
    //funcao de pesquisa
    
    function pesquisa(cont,area,campo){
        $("table").load("../controller/pesquisa.php","area="+fun+"&campo="+campo+"&cont="+cont);
    }
   
    
});  
    
    
