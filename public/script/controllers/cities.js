module.exports = function(app){
	app.controller('CityController', ['$scope', '$http', 'API_URL', 
		function($scope, $http, API_URL){
			$scope.URL = 'http://localhost:8000/';
			$scope.setFromValue = function($cities){
				$scope.selected = $cities;

				$('#btn-add').attr('hidden', 'hidden');
				$('#btn-cancel').removeAttr('hidden');
				$('#btn-update').removeClass('btn-secondary').addClass('btn-primary').removeAttr('disabled');
				$('#form-open').attr('action', $scope.URL+'cities/'+$cities.id);
				$('#form-method').val('PUT');
				$('#form-id').val($cities.id);
			}
			$scope.cancelUpdate = function(){
				$('#btn-cancel').attr('hidden', 'hidden');
				$('#btn-add').removeAttr('hidden');
				$('#btn-update').removeClass('btn-primary').addClass('btn-second').attr('disabled', 'disabled');
				$('#form-open').attr('action', $scope.URL+'cities');
				$('#form-method').val('POST');
			}
			$scope.selected={
                'name' : ''
			};
		}
	]);
};