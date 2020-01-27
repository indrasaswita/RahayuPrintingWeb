module.exports = function(app){
	app.controller('AdmCustomeraddnewmodalController', ['$scope', '$http', 'API_URL', 'AJAX_URL', 'BASE_URL', '$window',
		function($scope, $http, API_URL, AJAX_URL, BASE_URL, $window){

			$scope.savenewcustomer = function(){

				$http({
					method: "POST",
					url: AJAX_URL+"customer/store",
					data: {
						"customertypeID": $scope.newcustomer.customertype,
						"companyID": $scope.newcustomer.company,
						"addressID": $scope.newcustomer.address,
						"name": $scope.newcustomer.name,
						"phone": $scope.newcustomer.phone,
						"phone2": $scope.newcustomer.phone2,
						"phone3": $scope.newcustomer.phone3,
						"email": $scope.newcustomer.email,
						"cardnumber": $scope.newcustomer.cardnumber,
						"cardUID": $scope.newcustomer.cardUID,
					}
				}).success(function(response)
					{
						console.log(response.data);
						$scope.newcustomer = response.data;
					}
				).error(function(response){})
			}

			$scope.updatecustomer = function(){

				$http({
					method: "POST",
					url: AJAX_URL+"customer/update",
					data: {
						"customertypeID": $scope.newcustomer.customertype,
						"companyID": $scope.newcustomer.company,
						"addressID": $scope.newcustomer.address,
						"name": $scope.newcustomer.name,
						"phone": $scope.newcustomer.phone,
						"phone2": $scope.newcustomer.phone2,
						"phone3": $scope.newcustomer.phone3,
						"email": $scope.newcustomer.email,
						"cardnumber": $scope.newcustomer.cardnumber,
						"cardUID": $scope.newcustomer.cardUID,
					}
				}).success(function(response)
					{
						console.log(response.data);
						$scope.newcustomer = response.data;
					}
				).error(function(response){})
			}


		}
	]);
}