module.exports = function(app){
	app.controller('UploadController', ['$scope', '$http', 'API_URL', '$window',
		function($scope, $http, API_URL, $window){


			/*$('#real-dropzone').on('dragover', function(e) {
			    e.preventDefault();
			    e.stopPropagation();
			});
			$('#real-dropzone').on('dragenter', function(e) {
			    e.preventDefault();
			    e.stopPropagation();
			});

			$('#real-dropzone').on('drop', function(e) {
			    e.preventDefault();
			    e.stopPropagation();
			    if (e.originalEvent.dataTransfer){
			        if (e.originalEvent.dataTransfer.files.length > 0) {
			            upload(e.originalEvent.dataTransfer.files);
			        }
			    } 
			    return false;
			});*/
		}
	]);

};