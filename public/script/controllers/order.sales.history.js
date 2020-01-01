module.exports = function(app){
	app.controller('HistoryController', ['$scope', '$http', 'API_URL', 'BASE_URL', '$window',
		function($scope, $http, API_URL, BASE_URL, $window){
			$scope.initAllSales = function($input){
				$scope.sales = JSON.parse($input);
				$.each($scope.sales, function($index, $item){
					$item.created_at = $scope.makeDateTime($item.created_at);
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
		}
	]);
};