module.exports = function(app){
	app.controller('PaperController', ['$scope', '$http', 'API_URL', 
		function($scope, $http, API_URL){
			$scope.selected={
				'papertypeID' : '1',
                'name' : '', 
                'length' : '', 
                'width' : '1',
                'color' : '',
                'gramature' : ''
			};
			$scope.URL = 'http://localhost:8000/';
			$scope.setFromValue = function($papers){
				$scope.selected = $papers;
				$scope.selected.papertypeID = $scope.selected.papertypeID + "";

				$('#btn-add').attr('hidden', 'hidden');
				$('#btn-cancel').removeAttr('hidden');
				$('#btn-update').removeClass('btn-secondary').addClass('btn-primary').removeAttr('disabled');
				$('#form-open').attr('action', $scope.URL+'papers/'+$papers.id);
				$('#form-method').val('PUT');

			};
			$scope.cancelUpdate = function(){
				$('#btn-cancel').attr('hidden', 'hidden');
				$('#btn-add').removeAttr('hidden');
				$('#btn-update').removeClass('btn-primary').addClass('btn-second').attr('disabled', 'disabled');
				$('#form-open').attr('action', $scope.URL+'papers');
				$('#form-method').val('POST');
			}

			$scope.fillPapertypes = function()
			{
				$http(
					{
						method : 'GET',
						url : API_URL + 'papertypes'
					}
				).success(function(response) {
					$scope.papertypes = response;
					$('#form-papertypeID').children().remove();
				});
			};
			$scope.fillPapertypes.call();
		}
	]);
};