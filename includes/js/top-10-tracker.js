jQuery( document ).ready(function($) {
	var data = {
		'action': 'tptn_tracker',
		'top_ten_nonce': ajax_tptn_tracker.top_ten_nonce,
		'top_ten_id': ajax_tptn_tracker.top_ten_id,
		'top_ten_blog_id': ajax_tptn_tracker.top_ten_blog_id,
		'activate_counter': ajax_tptn_tracker.activate_counter
	};
	jQuery.post(ajax_tptn_tracker.ajax_url, data, function(response) {
		console.log( '<!--' + response + '-->' );
	});
});
