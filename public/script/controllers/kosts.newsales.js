module.exports = function(app){
	app.controller('KostNewsalesController', ['$scope', '$http', 'API_URL', 'AJAX_URL', 'BASE_URL', '$window',
		function($scope, $http, API_URL, AJAX_URL, BASE_URL, $window){


			$scope.printnewsales = function(){
				console.log();

				if($scope.selectedroom.kostsalesheader.length==0){
					$scope.savenewsales(function(){
						$scope.printCardMaster();
					});
				}else{
					//PRINT HERE
					$scope.printCardMaster();
				}
			}

			$scope.printCardMaster = function (linewidth){

				var winparams = 'dependent=no,locationbar=no,scrollbars=no,menubar=no,'+
					'resizable,screenX=450,screenY=0,width=270,height=500';

				var bootstrap = '<link async rel="stylesheet" href="'+BASE_URL+'css/bootstrap.css?version=0.2">';

				var scss = "<style type='text/css' media='print'>"
						+"@page "
						+"{ "
						+"	size: auto;   /* auto is the initial value */"
						+" margin: 0mm; "
						+"	/*this affects the margin in the printer settings */"
						+"}"
						+"</style>"
						+"<script src='"+BASE_URL+"js/jquery.min.js'></script>"
						+"<script src='"+BASE_URL+"script/constants/JsBarcode.ean-upc.min.js'></script>"
						+"<link async rel='stylesheet' href='"+BASE_URL+"css/onlyprint.css'>";
				//scss to remove HEADER AND FOOTER

				var prebarcode = "<div class='logo'>"+app.logoforprint+"</div>";

				prebarcode += "<br><br>Kwitansi Otomatis<br>";
				prebarcode += "Kamar No."+$scope.selectedroom.roomnumber+"<br><hr>";
				prebarcode += "Untuk penyewaan sejak:<br>";
				prebarcode += "<b>"+$scope.starttime.setDateforPHP()+"</b><br>";
				prebarcode += "hingga tanggal:<br>";
				prebarcode += "<b>"+$scope.endtime.setDateforPHP()+"</b><br>";
				prebarcode += "dengan harga: Rp "+$scope.salesprice+"<br><hr>";
				prebarcode += "Tagihan untuk pihak penyewa:<br>";
				prebarcode += " 1. "+$scope.customer1.name+"<br>";
				if($scope.customer2 != null)
					prebarcode += " 2. "+$scope.customer2.name+"<br>";
				prebarcode += "dibuat pada:<br>";
				prebarcode += ""+$scope.nowtime.setDateforPHP()+"<br><hr>";
				prebarcode += "Pembayaran dapat dilakukan secara CASH<br>";
				prebarcode += "atau ditransfer ke Rek BCA<br>";
				prebarcode += "  a/n. Lie Ay Hoa<br>";
				prebarcode += "  No. 01234561256<br><br>";
				prebarcode += "sejumlah Rp <b>"+(parseInt($scope.salesprice)+parseInt($scope.selectedroom.roomnumber))+"</b><br><hr>";
				prebarcode += "Dan silahkan lakukan konfirmasi bayar ke WA. 0823-1600-9097<br><br>";
				prebarcode += "Terima kasih atas kerja samanya.<br><br>";

				var barcode = '01235678123';

				var afterbarcode = "Segala kekurangan, keluhan, dan masukkan akan diterima dengan senang hati. Komentar Anda sangat berguna untuk perbaikan kami dikemudian hari.";

				var htmlPop = scss
						+ '<div class="view-small-invoice">'
						+	prebarcode
						+ ''
						+ afterbarcode
						+ '</div>'
						+ '<script>'
						+ 'JsBarcode(".barcode").init();'
						+ '</script>'; 

				var printWindow = window.open ("", "PDF", winparams);
				printWindow.document.write (scss+htmlPop);
				printWindow.document.close();

				var intv = setInterval(function(){
					printWindow.focus();
					printWindow.print();
					clearInterval(intv);
					//printWindow.close();
				}, 200);
			}

			$scope.savenewsales = function(whendone){
				if( $scope.customer1==null ){
					$scope.errormessage = "Belum pilih customer 1.";
				} else if ( $scope.salesprice > 6000000 || $scope.salesprice < 100000 ){
					$scope.errormessage = "Harga tidak dapat dimasukkan. Periksa lagi.";
				} else {
					$scope.errormessage = "";

					if($scope.customer2==null){
						//1 orang
						$salesprice = $scope.selectedroom.price;
					} else {
						$salesprice = $scope.selectedroom.pricefortwo;
					}
					$salesdiscount = $salesprice - $scope.salesprice;

					$http({
						method: "POST",
						url: AJAX_URL+"kost/salesheader/"+$scope.selectedroom.id+"/addnew",
						data: {
							"created_at": $scope.nowtime.setDateforPHP(),
							"starttime": $scope.starttime.setDateforPHP(),
							"endtime": $scope.endtime.setDateforPHP(),
							"price": $salesprice,
							"discount": $salesdiscount,
							"customer1": $scope.customer1,
							"customer2": $scope.customer2
						}
					}).then(function(response){
						if(response.data!=null)
						{
							if(response.data.constructor === Array)
							{
								$.each($scope.rooms, function($i, $ii){
									if($ii.id == $scope.selectedroom.id){
										$ii.kostsalesheader.push(response.data[0]);
										console.log($scope.selectedroom.kostsalesheader);
										//$scope.selectedroom.kostsalesheader.push(response.data);
										//uda ke reference ke $scope.selectedroom
									}
								});
							}
							else if(response.data.constructor === String)
							{
							 if(response.data == "failed"){
							 	$scope.errormessage = "cannot save";

							 	if(whendone instanceof Function)
							 		whendone();
							 }
							}
						}
					}, function (error){
						console.log(error);
						if(error.data != null){
							$scope.errormessage = error.data;
						}
					});
				}
			}

		}
	]);
}