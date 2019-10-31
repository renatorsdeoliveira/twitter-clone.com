$(document).ready(function(){
    $('#btn_login').click(function(){
   
        //início validação do formulário de login
        let campo_vazio = false;

        if($('#campo_usuario').val() == ''){
            $('#campo_usuario').css({'border-color' : '#ff0000'});
            campo_vazio = true;
        }else{
            $('#campo_usuario').css({'border-color' : '#ccc'});
        }
        if ($('#campo_senha').val() == ''){
            $('#campo_senha').css({'border-color' : '#ff0000'});
            campo_vazio = true;
        }
        else{
            $('#campo_senha').css({'border-color' : '#ccc'});
        }

        if(campo_vazio) return false;
        //final validação do formulario de login

    });

    // ajax dos tweets incluindo
    $('#btn_tweet').click(function(){
    	$.ajax({
            url: 'inclui_tweet.php',
            method: 'post',
            data: $('#form_tweet').serialize(),
    		success: function(data){
                $('#texto_tweet').val('');
                atualizarTweet()
    		}
    	});
    });
    if(linkPagina == '/twitter-clone.com/home.php'){
        // ajax dos tweets motrando
        function atualizarTweet(){
            $.ajax({
                url: 'get_tweet.php',
                success: function(data){
                    $('#tweets').html(data);
                }

            });
        }

        atualizarTweet()
    }

});