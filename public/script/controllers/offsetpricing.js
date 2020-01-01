module.exports = function(app){
	app.controller('OffsetPricing', ['$scope', '$http', 'API_URL', 'BASE_URL', '$cookies', '$window',
		function($scope, $http, API_URL, BASE_URL, $cookies, $window){
			$scope.sizetabs = [
				{
					label : "International Size",
					value : "inter"
				},
				{
					label : "Custom Size",
					value : "custom"
				}
			];
			$scope.sideprints = [
				{
					label : "1 sisi (semuka)",
					value : "1"
				},
				{
					label : "2 sisi (bolak balik)",
					value : "2"
				}
			];
			$scope.user = {
				login : false
			};
			$scope.selected = {
				qty : "1",
				size : 3,
				mat : 1,
				gram : 120,
				sdp	: "2",
				width : 21.0,
				length : 29.7
			};
			$scope.localselected = {
				sizetab : "inter"
			}
			$scope.selectedGramatures = [];
			$scope.tableshow = false;

			$scope.initData = function($input){
				//console.log($input);
				if ($input != null){
					$data = JSON.parse($input);
					$scope.selected.qty = $data.qty;
					$scope.selected.size = $data.size;
					if ($data.size != 0)
					{
						$scope.setSizeByID();
						$scope.localselected.sizetab = "inter";
					}
					else
					{
						$scope.localselected.sizetab = "custom";
						$scope.selected.width = parseFloat($data.width);
						$scope.selected.length = parseFloat($data.length);
					}
					$scope.selected.mat = $data.mat;
					$scope.getGram();
					$scope.selected.gram = $data.gram;
					$scope.selected.sdp = $data.sdp;
					$scope.selected.jobtitle = $data.jobtitle;
					$scope.selected.customernote = $data.customernote;
					$scope.productPrice = $data.totalprice;
					$scope.productPerRim = $data.perrim;
					$scope.productPerPcs = $data.perpcs;
				}
			}
			$scope.setUserLogin = function(){
				$scope.user.login = true;
			}
			$scope.initMaterial = function($input){
				$scope.materials = JSON.parse($input);
				$scope.setSelectedMaterial($scope.materials[0]);
			}
			$scope.initSize = function($input){
				$scope.sizes = JSON.parse($input);
				$scope.setSelectedSize($scope.sizes[3]);
				$.each($scope.sizes, function(key, value){
					if (value.name.indexOf('eco') != -1)
					{
						value['eco'] = true;
						value['name'] = value['name'].replace('eco', '');
					}
					else
					{
						value['eco'] = false;
					}
				});
			}

			$scope.checkout = function($input){

				//$cookies.remove('name');
				//$cookies.put('name', 'indra', 1);
				//alert('cookies : ' + JSON.stringify($cookies.getAll()['name']));
				if ($scope.localselected.sizetab == "custom")
					$scope.selected.size = 0;
				// console.log('API URL : ' + API_URL);
				$http(
					{
						method : 'POST',
						url : API_URL + 'flyer/spec',
						data : 
							{
								'data' : $scope.selected,
							}
					}
				).success(function(response) {
					//console.log(response);
					$scope.paper = response.paper;
					$scope.productPrice = response.price;
					$scope.productPerRim = response.perrim;
					$scope.productPerPcs = response.perpcs;
					if ($input != null && response != null)
					{
						if ($scope.user.login == true)
						{
							$window.location.href=BASE_URL+"description";
						}
						else
						{
							$('#loginModal').modal('show');			
						}
					}
				});
			}

			if($window.location.pathname == "/flyer")
				$scope.checkout.call();

			$scope.getPage = function(){
				$pathname = $window.location.pathname;
				$pathname = $pathname.substring($pathname.lastIndexOf('/')+1);
				return $pathname;
			}

			$scope.nextCalled = function(){
				//$scope.checkout(''); //kalo NULL = brarti tidak next
				if($scope.getPage() == "flyer")
				{
					$scope.checkout('');
				}
				else if ($scope.getPage() == "description")
				{
					$scope.descriptioncheckout();
				}
				else if ($scope.getPage() == "upload")
				{
					$scope.uploadcheckout();
				}
			}

			$scope.prevCalled = function(){
				if($scope.getPage() == "description")
				{
					$scope.descriptionprev();
				}
				else if ($scope.getPage() == "upload")
				{
					$scope.uploadprev();
				}
			}

			$scope.setQtyIncr = function(){
				if ($scope.selected.qty < 100){
					$scope.selected.qty ++;
					$scope.checkout.call();
				}
			}
			$scope.setQtyDecr = function(){
				if ($scope.selected.qty > 1) {
					$scope.selected.qty --;
					$scope.checkout.call();
				}
			}
			$scope.setSizeByID = function(){
				$.each($scope.sizes, function(key, value){
					if (value.id == $scope.selected.size)
						$scope.setSelectedSize(value);
				});
			}
			$scope.getGram = function(){
				$.each($scope.materials, function(key, value){
					if (value.id == $scope.selected.mat)
						$scope.selectedGramatures = value.gramatures;
				});
			}
			$scope.getGram();

			$scope.setSelectedMaterial = function($material){
				//console.log("" + material + " (material value) just clicked, and choosen!");
				$scope.selected.mat = $material.id;
				$scope.selectedGramatures = $material.gramatures;
				$scope.selected.gram = $material.gramatures[0].gramature;
				//$scope.getGram();
				$scope.checkout.call();
			}

			$scope.setSelectedGramatur = function(gramatur){
				$scope.selected.gram = gramatur;
				$scope.checkout.call();
			}

			$scope.setSelectedSize = function(size){
				//console.log(size.id);
				$scope.selected.size = size.id;
				$scope.selected.width = parseFloat(size.width);
				$scope.selected.length = parseFloat(size.length);
				$scope.checkout.call();
			}

			$scope.setSelectedSidePrint = function(sideprint){
				$scope.selected.sdp = sideprint;
				$scope.checkout.call();
			}

			$scope.setSelectedSizeTab = function(sizetab){
				$scope.localselected.sizetab = sizetab;
			}

			$scope.data = "";
			$scope.setData = function(data){
				$scope.data = data;
			}

			$scope.addThousandSeparator = function(x) {
			    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
			}

			$scope.isTheSame = function(x, y) {
				if (x == y) return true;
			    return false;
			}

			// SIDEBAR CONTROLLER

			$scope.flyersteps = [
				{
					label		: "Specification", 
					link		: BASE_URL+"flyer"
				},
				{
					label		: "Deskripsi Kerjaan", 
					link		: BASE_URL+"description"
				},
				{
					label		: "File Upload", 
					link		: BASE_URL+"upload"
				}
			];
			console.log($window.location.pathname);
			$scope.setSelected = function(){
				$scope.selected.link = $window.location.pathname;
				for($i=$scope.flyersteps.length-1;$i>=0;$i--)
				{
					// console.log($scope.flyersteps[$i].link+" : "+$scope.selected.link);
					if ($scope.flyersteps[$i].link == $scope.selected.link)
						break;
					$scope.flyersteps[$i].link = "#";
				}
			}
			$scope.setSelected();

			//DESCRIPTION

			$scope.setJobTitleErr = function($error){
				$scope.jobTitleErr = $error;
				$scope.jobTitleEShow = true;
			}
			$scope.setCustomerNoteErr = function($error){
				$scope.customerNoteErr = $error;
				$scope.customerNoteEShow = true;
			}

			$scope.descriptionprev = function(){
				$window.location.href=BASE_URL+"flyer";
			}
			$scope.descriptioncheckout = function(){
				$http(
					{
						method	: "POST",
						url 	: API_URL+"flyer/description",
						data 	: {
								'jobtitle' 		: $scope.selected.jobtitle,
								'customernote'	: $scope.selected.customernote
							}
					}
				).success(function(response){
					//console.log(response);
					$scope.error = null;
					if(response == "success"){
						$window.location.href=BASE_URL+"upload";
					}else{
						console.log(response);
					}
				}).error(function(response){
					$scope.error = response;
				});
			}

			//UPLOAD FILE


			$scope.initFiles = function($input){
				$scope.uploadedfiles = JSON.parse($input);
				console.log($scope.uploadedfiles);
	    		if (Object.keys($scope.uploadedfiles).length > 0) $scope.tableshow = true;
	    		console.log($scope.tableshow);
			}

			$scope.deletefile = function($input){
				//console.log($input['id']);
				$http(
					{
						method : 'POST',
						url : API_URL + 'upload/delete',
						data : $input['id']
					}
				).success(function(response) {
			    	if(response!=null){
			    		$scope.uploadedfiles = response;
			    		if ($scope.uploadedfiles.length > 0) $scope.tableshow = true;
			    	}else
			    		console.log	('response = null');
					//alert('resonse' + response);
				});
			}

			$scope.uploadprev = function(){
				$window.location.href=BASE_URL+"description";
			}
			$scope.uploadcheckout = function($input){
				$http(
					{
						method : 'POST',
						url : API_URL + 'flyer/commit'
					}
				).success(function(response) {
					if(response.error!=null)
						$scope.error = response.error;
			    	if(response.cartID != null)
		    			$window.location.href=BASE_URL+"cart/"+response.cartID;
				});
			}

			var upload = function(files) {
			    var data = new FormData();
			    $scope.errors = [];
			    $scope.errorsshow = false;
			    angular.forEach(files, function(value){
			    	$ext = value.name.substring(value.name.lastIndexOf('.') + 1);
			    	if ($ext != 'cdr' &&
			    		$ext != 'zip' &&
			    		$ext != 'rar' &&
			    		$ext != 'ai' &&
			    		$ext != 'xls' &&
			    		$ext != 'xlsx' &&
			    		$ext != 'doc' &&
			    		$ext != 'docx' &&
			    		$ext != 'tiff' &&
			    		$ext != 'tif' &&
			    		$ext != 'pdf' &&
			    		$ext != 'jpg' &&
			    		$ext != 'jpeg' &&
			    		$ext != 'psd' &&
			    		$ext != '7z' &&
			    		$ext != 'indd') //indesign
			    	{
			    		//console.log('format ngacoook');
			    		$scope.errors.push(value.name+" : tidak bisa upload dengan file format "+$ext+".");
			    		$scope.errorsshow = true;
			    	}
			    	else if(value.size > 50 * 1024 * 1024)
			    	{
			    		$scope.errors.push(value.name+" : file terlalu besar.")
			    		$scope.errorsshow = true;
			    	}
			        else 
			        {
			        	//BERHASIL -> ADD files[] ke data
			        	data.append("files[]", value);
			        }
			    });

			    //data.append("objectId", ngModel.$viewValue);
			    $http({
			        method: 'POST',
			        url: API_URL+'upload',
			        data: data,
			        withCredentials: true,
			        headers: {'Content-Type': undefined },
			        transformRequest: angular.identity
			    }).success(function(response) {
			    	//console.dir(response);
			    	//console.log(response.photo);
			        //console.log("Uploaded");
			    	//console.log("error ("+response.code+") : " +response.error);
					//console.log(response);			    	

			    	if(response!=null){
			    		$scope.uploadedfiles = response;
			    		if ($scope.uploadedfiles.length > 0) $scope.tableshow = true;
			    	}else
			    		console.log	('response = null');

			    }).error(function(response) {
			        //$scope.error = response;
			    });
			};
			$scope.getIndex0 = function($input){
				if ($input != null)
				{
					return $input[0];
				}
				return "";
			}

			$('#real-dropzone').on('dragover', function(e) {
			    e.preventDefault();
			    e.stopPropagation();
			});
			$('#real-dropzone').on('dragenter', function(e) {
			    e.preventDefault();
			    e.stopPropagation();
			});

			$('#real-dropzone').on('drop', function(e) {
			    e.preventDefault();
			    e.stopPropagation();
			    if (e.originalEvent.dataTransfer){
			        if (e.originalEvent.dataTransfer.files.length > 0) {
			            upload(e.originalEvent.dataTransfer.files);
			        }
			    } 
			    return false;
			});


		}
	]);
}