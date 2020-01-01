module.exports = function(app){
	app.directive('pageRefresh', function($timeout) {
		return {
			restrict: 'A',
			link: function( $scope, elem, attrs ) {    
				elem.ready(function(){
					$scope.$apply(function(){
						$scope.afterAngular();
					})
				})
			}  
		}
	});
	app.directive('bootstrapSelectpicker', function(){
	var bootDirective = {
	    restrict : 'A',
	    link: function(scope, element, attr){
	        $(element).selectpicker();
	    }         
	};
	   return bootDirective;
	});
}