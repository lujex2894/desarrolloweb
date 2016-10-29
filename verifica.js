function verifica(){
	$(document).ready(function() {	
	$('#usr').blur(function(){
		
		$('#Info').html('<img id="carga" src="loader.gif" alt="" />').fadeOut(1000);

		var usr = $(this).val();		
		var dataString = 'usr='+usr;
		
		$.ajax({
            type: "POST",
            url: "verifica.php",
            data: dataString,
            success: function(data) {
				$('#Info').fadeIn(1000).html(data);
				//alert(data);
            }
        });
    });              
});    
}
