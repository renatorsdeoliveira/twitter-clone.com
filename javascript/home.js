$(document).ready(function(){
    
    
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
 
});