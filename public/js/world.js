$(document).ready(function(){
	$('select[name="country_id"]').on('change',function(){

		var country_id = $(this).val();
		
		if(country_id)
		{
			$.ajax({

				url: 'create/getStates/'+country_id,
				type: 'GET',
				dataType: 'json',
				success: function(data){
					console.log(data);
					$('select[name="state_id"]').empty();
					$.each(data, function(key, value){
						$('select[name="state_id"]')
									.append('<option value="'+key+'">' + value + '</option>');
					});
				}



			});
		} else {
			$('select[name="state_id"]').empty();
		}

    });
    


    $('select[name="state_id"]').on('change',function(){
        var state_id = $(this).val();
        if(state_id)
		{
			$.ajax({

				url: 'create/getCities/'+state_id,
				type: 'GET',
				dataType: 'json',
				success: function(data){
					console.log(data);

					$('select[name="city_id"]').empty();
					$.each(data, function(key, value){
						$('select[name="city_id"]').append('<option value="'+key+'">' + value + '</option>');
					})
				}

			});
		}else {
			$('select[name="city_id"]').empty();
		}

    });

});
