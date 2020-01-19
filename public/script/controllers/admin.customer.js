module.exports = function(app){
	app.controller('AdmCustomerController', ['$scope', '$http', 'API_URL', 'AJAX_URL', 'BASE_URL', '$window',
		function($scope, $http, API_URL, AJAX_URL, BASE_URL, $window){
			$scope.customers = [];
			$scope.customertypes = [];
			$scope.companies = [];
			$scope.addresses = [];
			$scope.customer = [];

			$scope.newcustomer = {
				"customertype" : null,
				"company" : null,
				"address" : null,
				"name" : "",
				"phone" : "",
				"phone2" : "",
				"phone3" : "",
				"email" : "",
				"cardnumber" : "",
				"cardUID" : ""
			};

			$scope.deletecustomer = function($customer){

				$http({
					method: "POST",
					url: AJAX_URL+"customer/delete",
					data: {
						"customertypeID": $customer.customertype,
						"companyID": $customer.company,
						"addressID": $customer.address,
						"name": $customer.name,
						"phone": $customer.phone,
						"phone2": $customer.phone2,
						"phone3": $customer.phone3,
						"email": $customer.email,
						"cardnumber": $customer.cardnumber,
						"cardUID": $customer.cardUID,
					}
				})
			}

			$scope.initData = function($customers){
				$scope.customers = JSON.parse($customers);
			}

			$scope.showupdatemodal = function($customer){
				$("#modal-admcustomerupdate").modal('show');

				$http({
					method: "GET",
					url:    AJAX_URL+"customertypes" 
				}).then(function(response){
					if(response.data!=null){
						if(response.data instanceof Array){
							$scope.customertypes = response.data;

							if($scope.customertypes.length>0){
								$scope.newcustomer.customertype = $scope.customertypes[0];
							}
						}
					}
				}, function(error){
					//error
					console.log(error);
				});

				$http({
					method: "GET",
					url:    AJAX_URL+"companies" 
				}).then(function(response){
					if(response.data!=null){
						if(response.data instanceof Array){
							$scope.companies = response.data;
							if($scope.companies.length>0){
								$scope.newcustomer.company = $scope.companies[0];
							}
						}
					}
				}, function(error){
					//error
					console.log(error);
				});

				$http({
					method: "GET",
					url:    AJAX_URL+"addresses" 
				}).then(function(response){
					if(response.data!=null){
						if(response.data instanceof Array){
							$scope.addresses = response.data;

							if($scope.addresses.length>0){
								$scope.newcustomer.address = $scope.addresses[0]
								
							}
						}
					}
				}, function(error){
					//error
					console.log(error);
				});

				$scope.newcustomer = $customer;
			}

			$scope.showaddnewmodal = function(){
				$("#modal-admcustomeraddnew").modal('show');
				
				$http({
					method: "GET",
					url:    AJAX_URL+"customertypes" 
				}).then(function(response){
					if(response.data!=null){
						if(response.data instanceof Array){
							$scope.customertypes = response.data;

							if($scope.customertypes.length>0){
								$scope.newcustomer.customertype = $scope.customertypes[0];
							}
						}
					}
				}, function(error){
					//error
					console.log(error);
				});

				$http({
					method: "GET",
					url:    AJAX_URL+"companies" 
				}).then(function(response){
					if(response.data!=null){
						if(response.data instanceof Array){
							$scope.companies = response.data;
							if($scope.companies.length>0){
								$scope.newcustomer.company = $scope.companies[0];
							}
						}
					}
				}, function(error){
					//error
					console.log(error);
				});

				$http({
					method: "GET",
					url:    AJAX_URL+"addresses" 
				}).then(function(response){
					if(response.data!=null){
						if(response.data instanceof Array){
							$scope.addresses = response.data;

							if($scope.addresses.length>0){
								$scope.newcustomer.address = $scope.addresses[0]
								
							}
						}
					}
				}, function(error){
					//error
					console.log(error);
				});
			}


		}
	]);
}