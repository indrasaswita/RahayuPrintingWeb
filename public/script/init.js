module.exports = angular.module('rahayudg', 
	[
		"ngRoute",
		"ngResource",
		"ngCookies",
		"angularUtils.directives.dirPagination"
	]
,function($interpolateProvider) 
	{
        $interpolateProvider.startSymbol('[[');
        $interpolateProvider.endSymbol(']]');
    }
)