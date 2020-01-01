module.exports = function(app){
	app.controller('AddressController', ['$scope', '$http', 'API_URL', 'BASE_URL', '$cookies', '$window',
		function($scope, $http, API_URL, BASE_URL, $cookies, $window){
			//ADDRESS


			$scope.selected = {
				cityID : 1
			};

			/*$scope.initData = function($input){
				$data = JSON.parse($input);
				$scope.selected.name = $data.name;
				$scope.selected.address = $data.address;
				$scope.selected.cityID = $data.cityID;
				$scope.selected.addressnotes = $data.addressnotes;
			}*/

			$scope.initAddress = function($input){
				//console.log($input);
				$scope.addresses = JSON.parse($input);
				//console.log($scope.addresses);
			}

			$scope.initSalesID = function($id){
				$scope.selected.salesID = $id;
			}

			$scope.setAddress = function($input){
				//console.log($input);
				$scope.selected.name = $input.name;
				$scope.selected.address = $input.address;
				$scope.selected.cityID = $input.cityID;
				$scope.selected.addressnotes = $input.addressnotes;
				$scope.selected.receiver = $input.receiver;
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
					//$('#form-cityID').children().remove();
				});
			};
			$scope.fillCities.call();

			$scope.fillFromCust = function()
			{
				$http(
					{
						method : 'GET',
						url : API_URL + 'addresses/customeraddress'
					}
				).success(function(response) {
					console.log(response);
					$data = response['data'];
					$scope.selected.name="Main Address";
					$scope.selected.receiver=$data['name'];
					$scope.selected.address=$data['address']+", "+$data['postcode'];
					$scope.selected.cityID=$data['cityID'];
					$scope.selected.addressnotes=$data['phone1']+", "+$data['phone2']+", "+$data['phone3'];
				});
			};

			$scope.checkout = function(){
				console.log($scope.selected);
				$http(
					{
						method : 'POST',
						url : API_URL + 'addresses/store/all',
						data :  $scope.selected
					}
				).success(function(response) {
					//console.log(response);
					if (response.status == "success")
						$window.location.href=BASE_URL+"payment/confirm/"+response.salesID;
				});
			}

			$scope.delete = function($item){
				$http(
					{
						method 	: 'POST',
						url 	: API_URL+ 'addresses/delete/'+($item.id)+'/active',
					}
				).success(function(response) {
					//console(response);
					if(response.status=="success")
					{
						$scope.addresses = response.data;
					}
				});
			}
		}
	]);
}