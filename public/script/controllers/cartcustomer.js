module.exports = function(app){
	app.controller('CartController', ['$scope', '$http', 'API_URL', 'BASE_URL', '$window',
		function($scope, $http, API_URL, BASE_URL, $window){
			$scope.URL = 'http://localhost:8000/';

			$scope.selected=[];
			$scope.selectedPrice = 0;
			$scope.jobtypes = ["flyer"];
			$scope.error = "";
			
			$scope.initSelectedID = function($id){
				if ($id != 0)
				{
					for (var i = 0; i < $scope.carts.length; i++) {
						if($scope.carts[i].id == $id && $scope.carts[i].filestatus == true){
							$scope.carts[i].checked = true;
							$scope.selectedPush($scope.carts[i]);
						}
					}
				}
			}

			$scope.changeTitle = function($item){
				$('#changeTitleModal').modal('show');
				$scope.setSelectedItem($item);
			}
			$scope.changeSpec = function($item){
				$('#changeSpecModal').modal('show');
				$scope.setSelectedItem($item);
			}
			$scope.setSelectedItem = function($item){
				$scope.edit = {
					color:$item.color,
					customernote:$item.customernote,
					employeenote:$item.employeenote,
					gramature:$item.gramature,
					id:$item.id,
					imagesize:$item.imagesize,
					jobtitle:$item.jobtitle,
					jobtype:$item.jobtype,
					length:parseFloat($scope.getlength($item.imagesize)),
					machtype:$item.machtype,
					name:$item.name,
					paperID:$item.paperID,
					papertypeID:$item.papertypeID,
					printsize:$item.printsize,
					quantity:parseInt($item.quantity/500),
					quantitytypename:$item.quantitytypename,
					sideprint:$item.sideprint,
					totalprice:parseInt($item.totalprice),
					width:parseFloat($scope.getwidth($item.imagesize))
				};
			}
			$scope.getwidth = function($input){
				return $input.substring(0, $input.indexOf('x'));
			}
			$scope.getlength = function($input){
				return $input.substring($input.indexOf('x') + 1, $input.indexOf('cm'));
			}
			$scope.qtyIncr = function(){
				if($scope.edit.quantity<100)
					$scope.edit.quantity++;
				$scope.updatePrice();
			}
			$scope.qtyDecr = function(){
				if($scope.edit.quantity>1)
					$scope.edit.quantity--;
				$scope.updatePrice();
			}

			$scope.selectedPush = function ($item){
				$scope.selected.push($item);
				$scope.countSelectedPrice();
			}
			$scope.countSelectedPrice = function(){
				$scope.selectedPrice = 0;
				for($i=0;$i<$scope.selected.length;$i++){
					$scope.selectedPrice+=parseFloat($scope.selected[$i].totalprice);
				}
			}

			$scope.checkChanged = function($item){
				if($item.filestatus == 1)
					if($item.checked == true)
					{
						$scope.selectedPush($item);
					}
					else
					{
						for (var i = 0; i < $scope.selected.length; i++) {
							if($scope.selected[i].id == $item.id){
								$scope.selected.splice(i, 1);
							}
						}
						$scope.countSelectedPrice();
					}
				else
				{
					$item.checked = false;
					$scope.error = "File belum OK! Silahkan hubungi kami untuk mempercepat proses";
				}
			}

			$scope.initData = function($input){
				$scope.carts = JSON.parse($input);
				for($i = 0; $i < $scope.carts.length; $i++)
					$scope.carts[$i].checked = false;
			}

			$scope.setPapersize = function($width, $length){
				$scope.edit.width = parseFloat($width);
				$scope.edit.length = parseFloat($length);
			}

			$scope.delete = function($input){
				//console.log($input['id']);
				$http(
					{
						method : 'POST',
						url : API_URL + 'cart/delete',
						data : $input['id']
					}
				).success(function(response) {
					//alert(response);
			    	if(response!=null){
			    		$scope.carts = response;
			    		//if ($scope.uploadedfiles.length > 0) $scope.tableshow = true;
			    	}else
			    		console.log	('response = null');
					//alert('resonse' + response);
				});
			}

			$scope.checkout = function(){
				$http(
					{
						method: 'POST',
						url: API_URL+'sales/create',
						data: $scope.selected 
					}
				).success(function(response){
					if (response == null)
					{
						console.log('return null, data kiriman juga null');
					}
					else
					{
						//$window.location.href="payment/"+response;
						$window.location.href=BASE_URL+"sales/all";
					}
				});
				//$window.location.href="payment";
			}

			$scope.fillPapers = function()
			{
				$http(
					{
						method : 'GET',
						url : API_URL + 'papers/OF'
					}
				).success(function(response) {
					$scope.papers = response;
					console.log(response);
				});
			};
			$scope.fillPapers();

			$scope.fillPapersizes = function()
			{
				$http(
					{
						method : 'GET',
						url : API_URL + 'papersizes'
					}
				).success(function(response) {
					$scope.papersizes = response;
					console.log(response);
				});
			};
			$scope.fillPapersizes();

			$scope.fillCartfiles = function($id)
			{
				$http(
					{
						method : 'GET',
						url : API_URL + 'cartfiles/'+$id
					}
				).success(function(response) {
					$scope.cartfiles = response;
					console.log(response);
					if(typeof response == "object"){
						if(response.length > 0)
						{
							$scope.setFilePreview($scope.cartfiles[0]);
							$("#changeFileModal").modal('show');
						}
					}
				});
			};
			$scope.fillCartfiles();

			$scope.setFilePreview = function($item){
				if($item.preview == "") 
					$item.preview = "image/404.jpg";
				$scope.selectedfile = $item;
				//console.log($item);
			}

			$scope.updatePrice = function(){
				$.each($scope.papers, function($key, $item){
					if($item.name == $scope.edit.name)
					{
						$scope.edit.gramature = $item.gramature;
						$scope.edit.papertypeID = $item.papertypeID;
						console.log($item.papertypeID);
					}
				});

				$http(
					{
						method 		: 'POST',
						url 		: API_URL+'flyer/spec',
						data 		: {
								"data" : {
									'qty' 	: $scope.edit.quantity,
									'mat' 	: $scope.edit.papertypeID,
									'sdp' 	: $scope.edit.sideprint,
									'width' : $scope.edit.width,
									'length': $scope.edit.length,
									'gram'	: $scope.edit.gramature
								}
							}
					}
				).success(function(response)
					{
						console.log(response.totalprice);
						$scope.edit.totalprice = response.totalprice;
					}
				).error(function(response){})
			}

			$scope.updateTitle = function($id)
			{
				$http(
					{
						method : 'POST',
						url : API_URL + 'cartdetails/title/update',
						data : {
							'cartID' : $scope.edit.id,
							'jobtitle' : $scope.edit.jobtitle,
							'jobtype' : $scope.edit.jobtype,
							'customernote' : $scope.edit.customernote
						}
					}
				).success(function(response) {
					//$scope.initData(response);
					console.log(response);
					if(typeof response == "object"){
						$scope.updateCartrow($scope.edit.id, response[0]);
						$('#changeTitleModal').modal('hide')
					}
				});
			};

			$scope.updateCartrow = function($id, $data){
				$.each($scope.carts, function($index, $item){
					if($item.id == $id){
						console.log("SaMa di " + $index);
						$scope.carts[0] = $data;
					}
				});
			}
		}
	]);
};