module.exports = function(app){
	app.controller('SalesController', ['$scope', '$http', 'API_URL', 
		function($scope, $http, API_URL){
			$scope.selected={
                'name' : '', 
                'address' : '', 
                'cityID' : '1',
                'phone1' : '',
                'phone2' : '',
                'phone3' : '',
                'salesname' : ''
			};
			$scope.URL = 'http://localhost:8000/';

			
			$scope.initHeader = function($input){
				$scope.headers = JSON.parse($input);
				for ($i = 0; $i < $scope.headers.length; $i++) {
					//console.log('paydate : ' + $scope.headers[$i].paydate);
					$scope.headers[$i].tempo = $scope.makeDate($scope.headers[$i].tempo+"");
					$scope.headers[$i].salesTime = $scope.makeDateTime($scope.headers[$i].salesTime+"");
					$scope.headers[$i].paydate = $scope.makeDate($scope.headers[$i].paydate+"");
					$scope.headers[$i].verifdatetime = $scope.makeDateTime($scope.headers[$i].verifdatetime+"");
				}
			};

			$scope.selectVerif = function($item){
				$scope.modalselected = $item;
				$scope.modalselected.salesTime = $scope.makeDateTime($scope.modalselected.salesTime);
			};
			$scope.searchOnVerifs = function(){
				console.log($scope.paiddatas);
				if ($scope.searchingkey == "")
					$scope.searchedpaiddatas = $scope.paiddatas;
				else
				{
					$scope.searchedpaiddatas = [];
					for ($i = 0; $i < $scope.paiddatas.length; $i++) {
						if($scope.isContained($scope.paiddatas[$i]['accname'], $scope.searchingkey)
							|| $scope.isContained($scope.paiddatas[$i]['accno']+"", $scope.searchingkey)
							|| $scope.isContained($scope.paiddatas[$i]['bankname']+"", $scope.searchingkey)
							|| $scope.isContained($scope.paiddatas[$i]['ammount']+"", $scope.searchingkey))
							$scope.searchedpaiddatas.push($scope.paiddatas[$i]);
					}
				}
			};
			$scope.isContained = function($string, $key){
				if ($string.toLowerCase().indexOf($key.toLowerCase()) != -1)
					return true;
				else
					return false;
			};

			$scope.setHeaderFromValue = function($salesheader){
				$scope.headerselected = $salesheader;
				console.log($scope.headerselected);
				/*$temp = $salesheader.tempo.split(' ')[0];
				$temp = $temp.split('-');
				$scope.headerselected.tempo = new Date($temp[0], $temp[1]-1, $temp[2]);*/
				$scope.getDetailData($salesheader.salesID);

			};
			$scope.setDetailFromValue = function($salesdetail){
				$scope.detailselected = $salesdetail;
				$scope.getCartData($salesdetail.cartdetailID);
			}
			$scope.totalDetail = 0;
			$scope.getDetailData = function($id){
				$http(
					{
						method : 'GET',
						url : API_URL + 'salesdetails/'+$id+'/header'
					}
				).success(function(response) {
					$scope.salesdetails = response;
					$scope.totalDetail = 0;
					for($i = 0; $i < response.length; $i++){
						$scope.totalDetail = $scope.totalDetail + parseInt(response[$i].totalprice);
					}
				});
			}
			$scope.getCartData = function($id){
				$http(
					{
						method : 'GET',
						url : API_URL + 'cartdetails/'+$id+'/header'
					}
				).success(function(response) {
					$scope.cartdetails = response;
				});
			}
			$scope.cancelUpdate = function(){
				$('#btn-cancel').attr('hidden', 'hidden');
				$('#btn-add').removeAttr('hidden');
				$('#btn-update').removeClass('btn-primary').addClass('btn-second').attr('disabled', 'disabled');
				$('#form-open').attr('action', $scope.URL+'salesheader');
				$('#form-method').val('POST');
			}

			$scope.fillPapers = function()
			{
				$http(
					{
						method : 'GET',
						url : API_URL + 'papers'
					}
				).success(function(response) {
					$scope.papers = response;
					$('#form-paperID').children().remove();
				});
			};
			$scope.fillPapers.call();

			$scope.getVerifData = function()
			{
				console.log('verif');
				$http(
					{
						method : 'GET',
						url : API_URL + 'verif'
					}
				).success(function(response) {
					console.log(response);
					$scope.paiddatas = response;
					$scope.searchOnVerifs();
					//$('#form-paperID').children().remove();
				});
			};
			//$scope.getVerifData.call();

			$scope.verify = function()
			{
				$http(
					{
						method 	: 'POST',
						url 	: API_URL + 'verif/store',
						data 	: {
							'id' 		: $scope.modalselected.salesID
						}
					}
				).success(function(response) {
					console.log(response);
				});
			}

			$scope.makeDate = function($input){
				if ($input == 'null') return null;
				$temp = $input.split(' ')[0];
				$temp = $temp.split('-');
				return new Date($temp[0], $temp[1]-1, $temp[2]);
			}

			$scope.makeDateTime = function($input){
				//console.log($input+ " : "+($input == 'null'));
				if ($input == 'null') return null;
				$temp = $input.split(' ')[0];
				$temp = $temp.split('-');
				$temp2 = $input.split(' ')[1];
				$temp2 = $temp2.split(':');
				return new Date($temp[0], $temp[1]-1, $temp[2], $temp2[0], $temp2[1], $temp2[2]);
			}

			$scope.zeroFill = function ( number, width )
			{
				if (number == null) return "null";
				width -= number.toString().length;
				if ( width > 0 )
				{
				    return new Array( width + (/\./.test( number ) ? 2 : 1) ).join( '0' ) + number;
				}
				return number + ""; // always return a string
			}
			$scope.searchingkey = "";
			$scope.modal = {
				bankID : 5,
				accno: "",
				accname: "",
				acclocation: ""
			};
		}
	]);
};