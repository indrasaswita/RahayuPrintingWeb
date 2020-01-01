module.exports = function(app){
	app.controller('PaperShopController', ['$scope', '$http', 'API_URL', 
		function($scope, $http, API_URL){
			$scope.selected={
                'name' : '', 
                'address' : '', 
                'cityID' : '1',
                'phone1' : '',
                'phone2' : '',
                'phone3' : '',
                'salesname' : ''
			};
			$scope.URL = 'http://localhost:8000/';
			$scope.setFromValue = function($papershops){
				$scope.selected = $papershops;
				$scope.selected.cityID = $scope.selected.cityID + "";

				$('#btn-add').attr('hidden', 'hidden');
				$('#btn-cancel').removeAttr('hidden');
				$('#btn-update').removeClass('btn-secondary').addClass('btn-primary').removeAttr('disabled');
				$('#form-open').attr('action', $scope.URL+'papershops/'+$papershops.id);
				$('#form-method').val('PUT');
				$('#form-id').val($papershops.id);

			};
			$scope.cancelUpdate = function(){
				$('#btn-cancel').attr('hidden', 'hidden');
				$('#btn-add').removeAttr('hidden');
				$('#btn-update').removeClass('btn-primary').addClass('btn-second').attr('disabled', 'disabled');
				$('#form-open').attr('action', $scope.URL+'papershops');
				$('#form-method').val('POST');
			}

			$scope.fillCities = function()
			{
				$http(
					{
						method : 'GET',
						url : API_URL + 'cities'
					}
				).success(function(response) {
					$scope.cities = response;
					$('#form-cityID').children().remove();
				});
			};
			$scope.fillCities.call();
		}
	]);
};