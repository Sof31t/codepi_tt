$(function () {
	
	var selectLoad = function (id, url) {

		// alert($('#'+id).html());

		$.ajax({
			url		: url,
			dataType: 'json',
			type 	:'POST',
			data 	: {'_token' : $('#_token').val()},

			success	:function(data) {
				$.each(data, function(index, val) {
					
				})
			},
			error	:function() {
				console.log(url);
			}
		})
	}

	selectLoad('ville','getville');
	selectLoad('tags','gettags');
	selectLoad('prix','getprix');
	selectLoad('date_from','getfrom');
	selectLoad('date_to','getto');

})