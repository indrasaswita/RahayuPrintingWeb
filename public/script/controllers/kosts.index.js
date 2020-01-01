module.exports = function(app){
	app.controller('AdmKostController', ['$scope', '$http', 'API_URL', 'AJAX_URL', 'BASE_URL', '$window',
		function($scope, $http, API_URL, AJAX_URL, BASE_URL, $window){
			$scope.rooms2 = [];

			$scope.initData = function($datas, $customers){
				$scope.rooms = JSON.parse($datas);
				$scope.customers = JSON.parse($customers);
				$rooms2 = [];
				$rooms3 = [];
				$scope.rooms2 = [];
				$.each($scope.rooms, function($index, $item){
					$item.created_at = $scope.makeDateTime($item.created_at);
					$item.updated_at = $scope.makeDateTime($item.updated_at);
					$.each($item.kostsalesheader, function($index2, $item2){
						$item2.starttime = $scope.makeDate($item2.starttime);
						$item2.endtime = $scope.makeDate($item2.endtime);
						$item2.paid_at = $scope.makeDateTime($item2.paid_at);
					});
					if ($item.floornumber == 2) {
						$rooms2.push($item);
					} else if ($item.floornumber == 3) {
						$rooms3.push($item);
					}
				});
				//console.log($scope.rooms);
				$scope.rooms2.push($rooms2, $rooms3);
			}

			$scope.addnewheader = function($room){
				//tambah baru
				$scope.starttime = new Date();
				$scope.endtime = new Date();
				$scope.customer1 = null;
				$scope.customer2 = null;
				$scope.errormessage = "";
				$http({
					method: "GET",
					url: AJAX_URL+"kost/salesheader/"+$room.id+"/getlast"
				}).then(function(response){
					if(response.data!=null)
					{
						if(response.data.endtime != null){
							$scope.starttime = $scope.makeDate(response.data.endtime);
						}else{
							$scope.starttime = new Date();
						}
						$scope.starttime.setDate($scope.starttime.getDate()+1);
						console.log($scope.starttime.getDate());
					}
					$scope.endtime = new Date($scope.starttime.getTime());
					$scope.endtime.setDate($scope.starttime.getDate()-1);
					$scope.endtime.setMonth($scope.starttime.getMonth()+1);
				});

				$scope.selectedroom = $room;
				$scope.salesprice = $room.price;
				$scope.people = 1;

				$scope.nowtime = new Date();
				$("#modal-kostaddnewsales").modal('show');
			}

			$scope.autoendtime = function(){
				$scope.endtime = new Date($scope.starttime.getTime());
				$scope.endtime.setDate($scope.starttime.getDate()-1);
				$scope.endtime.setMonth($scope.starttime.getMonth()+1);
			}

			$scope.autocustomer = function(){
				if($scope.customer2 != null){
					$scope.salesprice = $scope.selectedroom.pricefortwo;
				}
			}

			$scope.selectroom = function($item){
				if($item.paid_at == null){
					//add new payment
				}else if($item.paid_at != null){
					//view detail + ganti orang
				}
			}

		}
	]);
}