module.exports = function(app){
	app.controller('ProfileController', ['$scope', '$http', 'API_URL', 'BASE_URL', '$window',
		function($scope, $http, API_URL, BASE_URL, $window){
			$scope.customer = [];
			$scope.initCustomer = function($customer)
			{
				$scope.customer = JSON.parse($customer);
				$scope.customer.news = $scope.customer.news==1?true:false;
			}
			$scope.apiInitCustomer = function($customer)
			{
				$scope.customer = $customer;
				$scope.customer.news = $scope.customer.news==1?true:false;
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
				});
			};
			$scope.fillCities.call();
			$scope.changeProfile = function()
			{
				$scope.customer.news = $scope.customer.news==true?1:0;
				$http
					(
						{
							method: 	"POST",
							url: 		API_URL+"profile/update/"+$scope.customer.id,
							data: 		$scope.customer 
						}
					)
				.success(function(response){
					if(response.status=="success")
						$scope.apiInitCustomer(response.data);
					else if(response.status=="error")
						$scope.errors = [response.data];
				})
				.error(function(response){$scope.errors = response;})
			}
			$scope.changePassword = function()
			{
				if($scope.customer.cnewpass == $scope.customer.newpass)
				{
					$http
						(
							{
								method: 	"POST",
								url: 		API_URL+"chpass/update/"+$scope.customer.id,
								data: 		$scope.customer
							}
						)
					.success(function(response){
						if(response.status=="success")
							$window.location.href=BASE_URL;
						else if(response.status=="error")
							$scope.errors = [response.data];
					})
					.error(function(response){$scope.errors = response;})
				}
			}
		}
	]);
};