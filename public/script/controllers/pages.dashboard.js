module.exports = function(app){
	app.controller('PagesDashboardController', ['$scope', '$http', 'API_URL', 'BASE_URL', '$window',
		function($scope, $http, API_URL, BASE_URL, $window){
			$scope.initDataSiapCetak = function($siapcetak){
				//console.log($siapcetak.substring(1, $siapcetak.length - 1));
				$scope.siapcetak = JSON.parse($siapcetak);
				//console.log($scope.siapcetak);
			}
		}
	]);
};