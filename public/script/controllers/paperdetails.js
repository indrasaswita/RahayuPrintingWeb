module.exports = function(app){
	app.controller('PaperDetailController', ['$scope', '$http', 'API_URL', 
		function($scope, $http, API_URL){
			$scope.searchingkey = "";
			$scope.selected={
                'papername' : '', 
                'width' : 0, 
                'length' : 0,
                'papershopname' : '',
                'phone1' : '',
                'phone2' : '',
                'phone3' : '',
                'totalprice' : 0,
                'totaltypename' : 'rim',
                'unitprice' : 0,
                'unittypename' : 'kg',
                'papershopID' : '1',
                'paperID' : '1'
			};
			$scope.unittypenames = [
				{
					"label" : "kilograms",
					"value" : "kg"
				},
				{
					"label" : "lembar",
					"value" : "lbr"
				},
				{
					"label" : "meter",
					"value" : "m"
				},
				{
					"label" : "centimeter",
					"value" : "cm"
				}
			];
			$scope.totaltypenames = [
				{
					"label" : "rim",
					"value" : "rim"
				},
				{
					"label" : "pack",
					"value" : "pack"
				},
				{
					"label" : "roll",
					"value" : "roll"
				},
				{
					"label" : "plano",
					"value" : "plano"
				}
			];

			$scope.initPapers = function($input){
				$scope.papers = JSON.parse($input);
				$scope.searchedpapers = $scope.papers;
				for($i=0;$i<$scope.papers.length;$i++)
					$scope.searchedpapers[$i].checked = false;
			}
			$scope.searchPaper = function(){
				if ($scope.searchingkey == "")
				{
					$scope.searchedpapers = $scope.papers;
				}
				else
				{
					$scope.searchedpapers = [];
					for($i=0,$index=0;$i<$scope.papers.length/*&&$index<20*/;$i++)
					{
						console.log($scope.papers[$i]['papertypename']);
						if($scope.isContained($scope.papers[$i]['name'], $scope.searchingkey) == true
							|| $scope.isContained($scope.papers[$i]['papertypename'], $scope.searchingkey) == true
							|| $scope.isContained($scope.papers[$i]['papershopname'], $scope.searchingkey) == true)
						{
							$scope.searchedpapers.push($scope.papers[$i]);
							$index++;
						}
					}
				}
			}

			$scope.setSelectedPaper = function($checked, $item){
				$flag = 0;
				for ($i = ($scope.currentPage-1)*$scope.itemsPerPage; $i < $scope.currentPage*$scope.itemsPerPage; $i++) {
					if ($scope.searchedpapers[$i].checked)
						$flag=$flag+1;
				}
				if ($flag == 0)
				{	
					$("#allchecked").prop("indeterminate", false);
					$scope.allchecked = false;
				}
				else if ($flag == $scope.itemsPerPage)
				{	
					$("#allchecked").prop("indeterminate", false);
					$scope.allchecked = true;
				}
				else
				{
					$("#allchecked").prop("indeterminate", true);
					$scope.allchecked = false;
				}
				//console.log($item);
				$scope.selectedpaper = $item.paperdetail;
			}

			$scope.setPrice = function(){
				$scope.data = [];
				for ($i = 0; $i < $scope.searchedpapers.length; $i++) {
					if ($scope.searchedpapers[$i].checked)
						$scope.data.push($scope.searchedpapers[$i].id);
				}
				if ($scope.newprice != null) 
				{
					$http(
						{
							'method' : 'POST',
							'url' 	 : API_URL+"paperdetails/setprice",
							'data' 	 : 
							{
								'ids' : $scope.data,
								'price' : $scope.newprice,
								'shopID' : $scope.shopID
							}
						}
					).success(function(response){
						//console.log(response);
						//$scope.searchingkey = "";
						$scope.papers = response;
						$scope.searchPaper();
					}).error(function(){

					});
				}
				else
				{
					$scope.errormessage="New price cannot be null";
				}
			}

			$scope.URL = 'http://localhost:8000/';
			$scope.setFromValue = function($paperdetails){
				$scope.selected = $paperdetails;
				$scope.selected.papershopID = $scope.selected.papershopID + "";
				$scope.selected.paperID = $scope.selected.paperID + "";

				$('#btn-add').attr('hidden', 'hidden');
				$('#btn-cancel').removeAttr('hidden');
				$('#btn-update').removeClass('btn-secondary').addClass('btn-primary').removeAttr('disabled');
				$('#form-open').attr('action', $scope.URL+'paperdetails/'+$paperdetails.paperID+'/'+$paperdetails.papershopID);
				$('#form-method').val('PUT');
				$('#form-id').val($paperdetails.id);

			};
			$scope.cancelUpdate = function(){
				$('#btn-cancel').attr('hidden', 'hidden');
				$('#btn-add').removeAttr('hidden');
				$('#btn-update').removeClass('btn-primary').addClass('btn-second').attr('disabled', 'disabled');
				$('#form-open').attr('action', $scope.URL+'paperdetails');
				$('#form-method').val('POST');
			}

			$scope.isContained = function($string, $key){
				if ($string == null) return false;
				if ($key == null) return true;
				if ($string.toLowerCase().indexOf($key.toLowerCase()) != -1)
					return true;
				else
					return false;
			};

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
			//$scope.fillPapers.call();

			$scope.fillPapershops = function()
			{
				$http(
					{
						method : 'GET',
						url : API_URL + 'papershops'
					}
				).success(function(response) {
					$scope.papershops = response;
					$('#form-papershopID').children().remove();
				});
			};
			$scope.fillPapershops.call();


			$scope.currentPage = 1;
			$scope.itemsPerPage = 10;

			$scope.selectAllInCurrent = function($check){
				for ($i = 0; $i < $scope.searchedpapers.length; $i++) {
					$scope.searchedpapers[$i].checked = false;
				}
				if ($check)
					for ($i = ($scope.currentPage-1)*$scope.itemsPerPage; $i < $scope.currentPage*$scope.itemsPerPage; $i++) {
						$scope.searchedpapers[$i].checked = true;
					}
			}
			$scope.setAllChecked = function($checked){
				$scope.selectAllInCurrent($checked);
			}

			$scope.pageChangeHandler = function(num) {
			    $scope.currentPage = num;
			};
		}
	]);
};