module.exports = function(app){
	app.controller('AdmPrintingtimeController', ['$scope', '$http', 'API_URL', 'AJAX_URL', 'BASE_URL', '$window',
		function($scope, $http, API_URL, AJAX_URL, BASE_URL, $window){
			$scope.rooms2 = [];

			$scope.initData = function($datas){
				$scope.rooms = JSON.parse($datas);
				
			}

				$scope.newtimer = {
				"printingsales" : null,
				"customer" : null,
				"employee" : null,
				"keterangan" : "",
				"status" : "",
			};

			$scope.showaddtimemodal = function($customer){
				$("#modal-admaddtime").modal('show');

				$http({
					method: "GET",
					url:    AJAX_URL+"printingtimerdetails" 
				}).then(function(response){
					if(response.data!=null){
						if(response.data instanceof Array){
							$scope.printingsales = response.data;

							if($scope.printingsales.length>0){
								$scope.newtimer.printingsales = $scope.printingsales[0];
							}
						}
					}
				}, function(error){
					//error
					console.log(error);
				});

				$http({
					method: "GET",
					url:    AJAX_URL+"customers" 
				}).then(function(response){
					if(response.data!=null){
						if(response.data instanceof Array){
							$scope.customers = response.data;
							if($scope.customers.length>0){
								$scope.newtimer.customer = $scope.customers[0];
							}
						}
					}
				}, function(error){
					//error
					console.log(error);
				});

				$http({
					method: "GET",
					url:    AJAX_URL+"employees" 
				}).then(function(response){
					if(response.data!=null){
						if(response.data instanceof Array){
							$scope.employees = response.data;

							if($scope.employees.length>0){
								$scope.newtimer.employees = $scope.employees[0]
								
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
}cu