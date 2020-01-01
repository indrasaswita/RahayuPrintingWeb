module.exports = function(app){
	app.controller('PaperTypeController', ['$scope', '$http', 'API_URL', 
		function($scope, $http, API_URL){
			$scope.selected={
                'name' : '', 
                'category' : ''
			};
			$scope.URL = 'http://localhost:8000/';
			$scope.setFromValue = function($papertypes){
				$scope.selected = $papertypes;

				$('#btn-add').attr('hidden', 'hidden');
				$('#btn-cancel').removeAttr('hidden');
				$('#btn-update').removeClass('btn-secondary').addClass('btn-primary').removeAttr('disabled');
				$('#form-open').attr('action', $scope.URL+'papertypes/'+$papertypes.id);
				$('#form-method').val('PUT');
				$('#form-id').val($papertypes.id);

			};
			$scope.cancelUpdate = function(){
				$('#btn-cancel').attr('hidden', 'hidden');
				$('#btn-add').removeAttr('hidden');
				$('#btn-update').removeClass('btn-primary').addClass('btn-second').attr('disabled', 'disabled');
				$('#form-open').attr('action', $scope.URL+'papertypes');
				$('#form-method').val('POST');
			}
		}
	]);
};