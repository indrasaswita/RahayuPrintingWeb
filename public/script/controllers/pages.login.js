module.exports = function(app){
	app.controller('PagesLoginController', ['$scope', '$http', 'API_URL', 'AJAX_URL', 'BASE_URL', '$window',
		function($scope, $http, API_URL, AJAX_URL, BASE_URL, $window){
			
			$scope.localselected = {
				"logintab" : "login"
			};
			$scope.customerData = {
				"username": "",
				"password": ""
			};

			$scope.loginButtonClicked = function($link){
				
				$scope.alertmessage = 'Loading...';
				$scope.alerttype = "alert-info";
				$scope.alertshow = true;

				$http({
					method : 'POST',
					url : AJAX_URL + 'login',
					data :
					{
						'username' : $scope.customerData.username,
						'password' : $scope.customerData.password
					}
				}).then(function(response){
					console.log(response);
					if(response != null){
						if(typeof response.data == "string"){
							$scope.alertmessage = response.data;
							if($scope.alertmessage!="")
								$scope.alertshow = true;
							else
								$scope.alertshow = false;
						}else if(typeof response.data == "object"){
							$scope.alertmessage = "logined as employee";
							$scope.alertshow = true;

							$window.location.href=BASE_URL+"dashboard";
						}
					}
				}, function(error){
					console.log(error);
					if(typeof error.data == "string"){
						$scope.alertmessage = error.data;
					}
				});

			}



		}
	]);
};