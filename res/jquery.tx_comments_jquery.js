jQuery(function($) {
	var setField = function(fieldName) {
		var field = $('#tx_comments_pi1_' + fieldName);
		if (field.val() == '') { 
			field.val(unescape($.cookie('tx_comments_pi1_' + fieldName).replace(/\+/, ' ')));
		}
	}
	
	setField('firstname');
	setField('lastname');
	setField('email');
	setField('location');
	setField('homepage');	

});
