module.exports = function(app){
	app.controller('CompanyController', ['$scope', '$http', 'API_URL', 
		function($scope, $http, API_URL){
			$scope.types = [
				"office", "organization", "corporate"
			];
			$scope.URL = 'http://localhost:8000/';
			$scope.setFromValue = function($companies){
				$scope.selected = $companies;
				//entah napa idnya harus string
				$scope.selected.cityID = $scope.selected.cityID + "";

				$('#btn-update').removeAttr('disabled');
				$('#form-open').removeAttr('action').attr('action', $scope.URL+'companies/'+$scope.selected.id);
			}
			$scope.selected={
				'nickname' : '',
                'name' : '', 
                'address' : '', 
                'cityID' : '1',
                'phone1' : '',
                'phone2' : '',
                'phone3' : '',
                'type' : 'corporate',
                'verified' : '0'
			};

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