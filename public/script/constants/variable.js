module.exports = function(app){
	$public_path = '/rahayu/public/';
	//$public_path = 'http://www.jakartabrosur.com/';
	//$public_path = '/';

	app.constant("BASE_URL", $public_path);
	app.constant("API_URL", $public_path+'API/');
	app.constant("AJAX_URL", $public_path+'AJAX/');
}