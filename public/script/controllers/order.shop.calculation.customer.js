module.exports = function(app){
	app.controller('OrderShopCalculationController', ['$scope', '$http', 'API_URL', 'BASE_URL', '$window',
		function($scope, $http, API_URL, BASE_URL, $window){
			$scope.selected.quantity = 500;

			$scope.selected = {
				'paper': 0,
				'size' : 0,
				'printtype' : 'DG',
			};

			$scope.setData = function($datas){
				$scope.master = $datas;
				if($datas.digitaloffset==0 || $datas.digitaloffset==1)
					$scope.selected.printtype = 'OF';
				else if($datas.digitaloffset==2)
					$scope.selected.printtype = 'DG';
				$scope.refreshOfDg();
			}

			$scope.refreshOfDg = function(){
				$scope.datas = $scope.splitMaster($scope.master, $scope.selected.printtype);

				//SET DATA YANG BISA DI PILIH

				//SET DEFAULT
				$scope.selected.paper = $scope.datas.papers[0];
				$scope.selected.size = $scope.datas.sizes[0];
				$scope.selected.quantity = $scope.datas.defaultqty;
			};

			$scope.splitMaster = function($datas, $type){
				//UNTUK BELAH MASTER JADI 'OF' DAN 'DG'
				$result = null;
				$result = $scope.clone($datas);
				if($type=="OF"){
					$result.minqty = $result.minoffset;
					$result.maxqty = $result.maxoffset;
					$result.stepqty = $result.stepoffset;
					$result.defaultqty = $result.defaultoffset;

					//REMOVE 2 : DIGITAL <- PARAM ke-2
					$result.quantities = $scope.ofdgRemove($result.quantities, 2);
					$result.sizes = $scope.ofdgRemove($result.sizes, 2);
					$result.papers = $scope.ofdgRemove($result.papers, 2);
				}else if($type=="DG"){
					$result.minqty = $result.mindigital;
					$result.maxqty = $result.maxdigital;
					$result.stepqty = $result.stepdigital;
					$result.defaultqty = $result.defaultdigital;

					//REMOVE 1 : OFFSET <- PARAM ke-2
					$result.quantities = $scope.ofdgRemove($result.quantities, 1);
					$result.sizes = $scope.ofdgRemove($result.sizes, 1);
					$result.papers = $scope.ofdgRemove($result.papers, 1);
				}
				return $result;
			}

			$scope.ofdgRemove = function($items, $key) {
			    for ($i = $items.length - 1; $i >= 0; $i--) {
			        if ($items[$i].ofdg == $key) {
			            $items.splice($i, 1);
			        }
			    }
			    return $items;
			};

			/*$scope.$watch('datas', function(newValue, oldValue) {
				if(!newValue || newValue === oldValue) return;

				//At this point, newValue contains the new value of your persons array
				$('.selectpicker').selectpicker('refresh');
				//console.log('HEHE');
			});*/

			$scope.increment = function($step){
				if($scope.selected.quantity + $step <= $scope.datas['maxqty'])
					$scope.selected.quantity += $step;
			}
			$scope.decrement = function($step){
				if($scope.selected.quantity - $step >= $scope.datas['minqty'])
					$scope.selected.quantity -= $step;
			}
			$scope.setQty = function($qty){
				if($qty <= $scope.datas['maxqty'] && $qty >= $scope.datas['minqty'])
					$scope.selected.quantity = $qty;
			}
			$scope.setprinttype = function($printtype){
				if ($printtype != $scope.selected.printtype){
					$scope.selected.printtype = $printtype;
					$scope.refreshOfDg();
				}
			}
		}
	]);
};