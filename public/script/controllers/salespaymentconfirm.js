module.exports = function(app){
	app.controller('PaymentConfirmController', ['$scope', '$http', 'API_URL', '$window',
		function($scope, $http, API_URL, $window){
			$scope.URL = 'http://localhost:8000/';
			$scope.initSales = function($input){
				$scope.sales = JSON.parse($input);
				$scope.sales['totalprice'] = parseFloat($scope.sales['totalprice']);
				//console.log($scope.sales);
			}
			$scope.zeroFill = function ( number, width )
			{
				if(number != null)
				{
					width -= number.toString().length;
					if ( width > 0 )
					{
					    return new Array( width + (/\./.test( number ) ? 2 : 1) ).join( '0' ) + number;
					}
					return number + ""; // always return a string
				}
			}
			$scope.searchingkey = "";
			$scope.modal = {
				bankID : 5,
				accno: "",
				accname: "",
				acclocation: ""
			};

			$scope.selectBank = function($id){
				$scope.modal.bankID = $id;
			}
			$scope.searchOnBanks = function(){
				if ($scope.searchingkey == "")
					$scope.searchedbanks = $scope.banks;
				else
				{
					$scope.searchedbanks = [];
					for ($i = 0; $i < $scope.banks.length; $i++) {
						if($scope.isContained($scope.banks[$i]['bankname'], $scope.searchingkey)
							|| $scope.isContained($scope.banks[$i]['alias'], $scope.searchingkey))
							$scope.searchedbanks.push($scope.banks[$i]);
					}
				}
			}
			$scope.isContained = function($string, $key){
				if ($string.toLowerCase().indexOf($key.toLowerCase()) != -1)
					return true;
				else
					return false;
			}

			$scope.fillBanks = function()
			{
				$http(
					{
						method : 'GET',
						url : API_URL + 'banks'
					}
				).success(function(response) {
					$scope.banks = response;
					//$('#form-paperID').children().remove();
					$scope.searchOnBanks();
				});
			};
			$scope.fillBanks.call();
			$scope.fillAccs = function()
			{
				$http(
					{
						method : 'GET',
						url : API_URL + 'custaccs'
					}
				).success(function(response) {
					$scope.custaccs = response;
					$('#form-custAcc').children().remove();
				});
			};
			$scope.fillAccs.call();

			$scope.fillCompanyBankAccs = function()
			{
				$http(
					{
						method : 'GET',
						url : API_URL + 'compaccs'
					}
				).success(function(response) {
					$scope.compaccs = response;
					$('#form-compAcc').children().remove();
				});
			};
			$scope.fillCompanyBankAccs.call();

			$scope.storeAccs = function()
			{
				$http(
					{
						method : 'POST',
						url : API_URL + 'custaccs/store',
						data : $scope.modal
					}
				).success(function(response) {
					$scope.custaccs = response;
					//$('#form-custAcc').children().remove();
				});
			};

		}
	]);
};