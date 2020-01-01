module.exports = function(app){
	app.controller('AdminCartdetailsController', ['$scope', '$http', 'API_URL', 'BASE_URL', '$window',
		function($scope, $http, API_URL, BASE_URL, $window){
			$scope.cartdetails = [];
			$scope.selectedfiles = [];
			
			$scope.initData = function($items){
				$scope.cartdetails = JSON.parse($items);
			}

			$scope.setFileOK = function($item){
				$http(
					{
						method:"POST",
						url:API_URL+"cartdetails/filestatus/setOK/"+$item.id
					}
				).success(function(response){
					if(response.status == "success")
						$scope.cartdetails = response.data;
					else
						console.log('ERROR di Set File status => OK')
				}).error(function(response){});
			}

			$scope.setSelectedFiles = function($item)
			{
				$scope.selectedcart = $item;
			}
		}
	]);
};