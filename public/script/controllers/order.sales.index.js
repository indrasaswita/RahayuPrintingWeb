module.exports = function(app){
	app.controller('AllSalesController', ['$scope', '$http', 'API_URL', '$window',
		function($scope, $http, API_URL, $window){
			$scope.URL = 'http://localhost:8000/';
			$scope.initAllSales = function($input){
				$scope.sales = JSON.parse($input);
				$.each($scope.sales, function($index, $item){
					$item.created_at = $scope.makeDateTime($item.created_at);
					$item.showpayment = false;
					$item.showdelivery = false;
					$item.showdetail = false;
				});
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
			  width -= number.toString().length;
			  if ( width > 0 )
			  {
			    return new Array( width + (/\./.test( number ) ? 2 : 1) ).join( '0' ) + number;
			  }
			  return number + ""; // always return a string
			}

			$scope.isLunas = function($item){
				if ($item.status=='LUNAS')
					return true;
				else
					return false;
			}

			$scope.fillCompanyBankAccs = function()
			{
				$http(
					{
						method : 'GET',
						url : API_URL + 'compaccs'
					}
				).success(function(response) {
					$scope.compaccs = response;
					if(response!=null){
						if(response.length>0)
							$scope.showncompacc = $scope.compaccs[0];
					}
				});
			};
			$scope.fillCompanyBankAccs.call();

			$scope.showcompacc = function(item){
				$scope.showncompacc = item;
			}

			$scope.hidealldetail = function(){
				$.each($scope.sales, function($index, $item){
					$item.showdetail = false;
					$item.showdelivery = false;
					$item.showpayment = false;
				});
			}
			$scope.showdelivery = function($item){
				$show = $item.showdelivery;
				$scope.hidealldetail();
				if(!$show) $item.showdelivery = true;
				else $item.showdelivery = false;
			}
			$scope.showpayment = function($item){
				$show = $item.showpayment;
				$scope.hidealldetail();	
				if(!$show) $item.showpayment = true;
				else $item.showpayment = false;
			}
			$scope.showdetail = function($item){
				$show = $item.showdetail;
				$scope.hidealldetail();
				if(!$show) $item.showdetail = true;
				else $item.showdetail = false;
			}
			$scope.showfiles = function($item){
				$http({
					method: "GET",
					url: 	API_URL+"cartfiles/"+$item['cartdetailID']+""
				}).success(function(response){
					if(response!=null)
					{
						$scope.selecteddetail = $item;
						$scope.files = response;
						$.each($scope.files, function($index, $item){
							$item.updated_at = $scope.makeDateTime($item.updated_at);
						});
						$("#filesModal").modal('show');
					}
				});
			}
		}
	]);
};