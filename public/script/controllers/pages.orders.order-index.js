module.exports = function(app){
	app.controller('PageOrderIndexController', ['$timeout', '$scope', '$http', 'API_URL', 'BASE_URL', '$window',
		function($timeout, $scope, $http, API_URL, BASE_URL, $window){
			$scope.datas = [];
			$scope.tipekerjaan = [{
				"value"	: "OF",
				"label"	: "Offset"
			},{
				"value"	: "DG",
				"label"	: "Digital"
			},{
				"value"	: "PL",
				"label"	: "PL"
			},{
				"value"	: "LL",
				"label"	: "Lain-Lain"
			}];
			$scope.material1s = [
				"ArtPaper 100g",
				"ArtPaper 104g",
				"ArtPaper 120g",
				"ArtPaper 150g",
				"ArtCarton 190g",
				"ArtCarton 210g",
				"ArtCarton 230g",
				"ArtCarton 260g",
				"ArtCarton 310g",
				"ArtCarton 350g",
			];
			$scope.material2s = [
				"HVS Paper 70g",
				"HVS Paper 80g",
				"HVS Paper 100g",
				"Kertas NCR",
				"Bluish White (BW)",
				"Linen Karton",
				"Sticker Vinyl Putih Doff",
				"Sticker Vinyl Putih Glossy",
				"Sticker Vinyl Transparent",
				"Sticker Chromo",
			];
			$scope.idx = 0;
			$scope.totalharga = 0;
			$scope.initDefault = function(){
				$scope.datas = [
					{
						"finishings" : [],
						"files" : [{"link":""}],
						"jobtype" : "OF",
						"printtitle" : "",
						"printtype" : "",
						"description" : "",
						"note" : "",
						"material" : 0,
						"ongkoscetak" : 0,
						"quantity" : 1,
						"inschiet" : 0, 
						"quantitytype" : "lembar",
						"inschiettype" : "lembar",
						"totalplat" : 0,
						"imagewidth" : 0,
						"imagelength" : 0,
						"paperwidth" : 0,
						"paperlength" : 0,
						"planowidth" : 0,
						"planolength" : 0,
						"sideprint" : "2 sisi (Kontraform)",
						"bahan": "Art Carton 190g",
					}
				];
			}
			$scope.initDefault();
			$scope.addNewCart = function(){
				$nw = {
					"finishings" : [],
					"files" : [{"link":""}],
					"jobtype" : "OF",
					"printtitle" : "",
					"printtype" : "",
					"description" : "",
					"note" : "",
					"material" : 0,
					"ongkoscetak" : 0,
					"quantity" : 1,
					"inschiet" : 0, 
					"quantitytype" : "lembar",
					"inschiettype" : "lembar",
					"totalplat" : 0,
					"imagewidth" : 0,
					"imagelength" : 0,
					"paperwidth" : 0,
					"paperlength" : 0,
					"planowidth" : 0,
					"planolength" : 0,
					"sideprint":"2 sisi (Kontraform)",
					"bahan": "Art Carton 190g",
				};
				$scope.datas.push($nw);
				$scope.idx = $scope.datas.length-1;
			}
			$scope.setPreviousData = function($datas){
				$dts = JSON.parse($datas);

				$scope.datas.splice(0);
				$.each($dts, function($i, $dt){
					$scope.datas.push($dt);
				});
			}
			$scope.setIndex = function(index){
				$scope.idx = index;
				$scope.selectpickerrefresh();
			}
			$scope.setMaterial = function(item){
				$scope.datas[$scope.idx].bahan = item;
			}
			$scope.deleteByIndex = function($index){
				if($scope.datas.length > 1)
				{
					$scope.datas.splice($index);
					if($index > $scope.datas.length - 1)
					{
						$scope.idx = $scope.datas.length - 1;
					}
				}
			}
			$scope.addFinishingField = function(){
				$item = {"type":"LIPAT", "detail":""};
				$scope.datas[$scope.idx].finishings.push($item);
				$scope.selectpickerrefresh();
			}
			$scope.removeFinishingField = function($item){
				$scope.datas[$scope.idx].finishings.splice($item, 1);
			}
			$scope.addFilesField = function(){
				$item = {"link":""};
				$scope.datas[$scope.idx].files.push($item);
			}
			$scope.setPrintType = function(input){
				$scope.datas[$scope.idx].printtype = input;
			}
			$scope.setPlano = function (x, y){
				$scope.datas[$scope.idx].planolength = y;
				$scope.datas[$scope.idx].planowidth = x;
			}
			$scope.setPaperBagi4 = function (){
				$scope.datas[$scope.idx].paperlength = Math.floor($scope.datas[$scope.idx].planolength/2*10)/10;
				$scope.datas[$scope.idx].paperwidth = Math.floor($scope.datas[$scope.idx].planowidth/2*10)/10;
			}
			$scope.setPaperBagi3 = function (){
				$scope.datas[$scope.idx].paperlength = Math.floor($scope.datas[$scope.idx].planolength/3*10)/10;
				$scope.datas[$scope.idx].paperwidth = $scope.datas[$scope.idx].planowidth;
			}
			$scope.setPaperBagi2 = function (){
				$scope.datas[$scope.idx].paperlength = Math.floor($scope.datas[$scope.idx].planolength/2*10)/10;
				$scope.datas[$scope.idx].paperwidth = $scope.datas[$scope.idx].planowidth;
			}
			$scope.setPaperSize = function (x, y){
				$scope.datas[$scope.idx].paperlength = y;
				$scope.datas[$scope.idx].paperwidth = x;
			}
			$scope.setImageSize = function (x, y){
				$scope.datas[$scope.idx].imagelength = y;
				$scope.datas[$scope.idx].imagewidth = x;
			}
			$scope.setToday5 = function(){
				$nw = new Date();
				$nw.setDate(0);
				$scope.datas[$scope.idx].deadline = $nw;
			}
			$scope.setToday5 = function(){
				$nw = new Date();
				$nw.setHours(17);
				$nw.setMinutes(0);
				$nw.setSeconds(0);
				$nw.setMilliseconds(0);
				$scope.datas[$scope.idx].deadline = $nw;
			}
			$scope.setToday7 = function(){
				$nw = new Date();
				$nw.setHours(19);
				$nw.setMinutes(0);
				$nw.setSeconds(0);
				$nw.setMilliseconds(0);
				$scope.datas[$scope.idx].deadline = $nw;
			}
			$scope.setTomorrow10 = function(){
				$nw = new Date();
				$nw.setDate($nw.getDate()+1);
				$nw.setHours(10);
				$nw.setMinutes(0);
				$nw.setSeconds(0);
				$nw.setMilliseconds(0);
				$scope.datas[$scope.idx].deadline = $nw;
			}
			$scope.setTomorrow14 = function(){
				$nw = new Date();
				$nw.setDate($nw.getDate()+1);
				$nw.setHours(14);
				$nw.setMinutes(0);
				$nw.setSeconds(0);
				$nw.setMilliseconds(0);
				$scope.datas[$scope.idx].deadline = $nw;
			}
			$scope.setTomorrow17 = function(){
				$nw = new Date();
				$nw.setDate($nw.getDate()+1);
				$nw.setHours(17);
				$nw.setMinutes(0);
				$nw.setSeconds(0);
				$nw.setMilliseconds(0);
				$scope.datas[$scope.idx].deadline = $nw;
			}
			$scope.set1hours = function(){
				$nw = new Date();
				$nw.setHours($nw.getHours()+1);
				$nw.setMinutes($nw.getMinutes()+1);
				$nw.setSeconds(0);
				$nw.setMilliseconds(0);
				$scope.datas[$scope.idx].deadline = $nw;
			}
			$scope.set2hours = function(){
				$nw = new Date();
				$nw.setHours($nw.getHours()+2);
				$nw.setMinutes($nw.getMinutes()+1);
				$nw.setSeconds(0);
				$nw.setMilliseconds(0);
				$scope.datas[$scope.idx].deadline = $nw;
			}
			$scope.calculateTotal = function(){
				$scope.totalharga = 0;
				for (i = 0; i < $scope.datas.length; i++) {
					$scope.totalharga += ($scope.datas[i].material + $scope.datas[i].ongkoscetak);
				}
			}
			$scope.saveCart = function(){
				$http(
					{
						"method": "POST",
						"url"	: API_URL+"setcart",
						"data" 	: $scope.datas,
					}
				).success(function(response){
					console.log('Response : '+response);
				});
			}
			$scope.addOrder = function(){
				$http(
					{
						"method" 	: "POST",
						"url"		: API_URL+"addorder",
						"data"		: $scope.datas
					}
				).success(function(response){
					if ($scope.isNum(response))
					{
						$scope.successmsg = "Ditambah di Nomor : "+response;
						$scope.errormsg = null;
						$scope.hapusdata();
					}
					else
					{
						$scope.successmsg = null;
						$scope.errormsg = ["Error from Server"];
					}
				}).error(function(response){
					$scope.successmsg = null;
					$scope.errormsg = response;
				});
			}
			$scope.hapusdata = function(){
				$scope.datas.splice(0, $scope.datas.length);
				$scope.initDefault();
			}
		}
	]);
};