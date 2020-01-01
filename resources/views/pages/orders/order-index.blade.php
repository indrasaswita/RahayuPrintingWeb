@extends('layouts.default')
@section('content')

<div ng-controller="PageOrderIndexController">
<?php 
	if(isset($cart)) {
		if($cart != 'null' && $cart != '') {
?>
	<div ng-init="setPreviousData('{{str_replace(array('\r', '\n'), '-', $cart)}}')"></div>
<?php 
		}
	} 
?>
	<div class="order-wrapper">
		<div class="order-content-wrapper">
			<div class="order-panel">
				<div class="panel-header">
					<div class="panel-title">DIGITAL</div>
					<div class="panel-subtitle">PILIH KRITERIA CETAK DISINI</div>
				</div>
				<div class="panel-block">
					<div class="block-divider"></div>
					<div class="text-xs-center bg-lightmagenta padding-10-0">
						<div class="btn-group">
							<button class="btn btn-outline-purple" ng-click="setPrintType('Kartu Nama')">KN</button>
							<button class="btn btn-outline-purple" ng-click="setPrintType('Digital A3+')">A3+</button>
							<button class="btn btn-outline-purple" ng-click="setPrintType('Photo Copy Warna')">Fotokp</button>
							<button class="btn btn-outline-purple" ng-click="setPrintType('Print Epson')">Epson</button>
							<button class="btn btn-outline-purple" ng-click="setPrintType('Print Mesin Fotokopi')">Canon</button>
							<button class="btn btn-outline-purple" ng-click="setPrintType('Nota Manual NCR')">Nota</button>
							<button class="btn btn-outline-purple" ng-click="setPrintType('Flyer / Leaflet')">Flyer</button>
							<button class="btn btn-outline-purple" ng-click="setPrintType('Print Offset')">Offset</button>
							<button class="btn btn-outline-purple" ng-click="setPrintType('Print Indoor')">Indr</button>
							<button class="btn btn-outline-purple" ng-click="setPrintType('Print Outdoor')">Outdr</button>
						</div>
					</div>
					<div class="block-list">
						<div class=txt>Jenis Cetakan</div>
						<div class="input">
							<input type="text" class="single-input" ng-model="datas[idx].printtype" placeholder="Jenis Cetakan (cth. 'Booklet / Flyer / Kartu Nama / Voucher')">
						</div>
					</div>
					<div class="block-list">
						<div class="txt">Tipe Kerjaan</div>
						<div class="select">
							<select class="selectpicker" data-width="100%" ng-model="datas[idx].jobtype" ng-options="item.value as item.label for item in tipekerjaan">
							</select>
						</div>
					</div>
					<div class="block-list">
						<div class="txt">Judul Cetakan</div>
						<div class="input">
							<input type="text" class="single-input" ng-model="datas[idx].printtitle" placeholder="Judul Cetakan (cth. 'Top Coffee Bulan Feb-2017')">
						</div>
					</div>
					<div class="block-list">
						<div class="txt">Deskripsi Cetakan</div>
						<div class="input">
							<input type="text" class="single-input" ng-model="datas[idx].description" placeholder="Deskripsi Cetakan (cth. 'Setiap nama dicetak masing-masing 2 box')">
						</div>
						<div class="info">
							<small class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-title="Akan keluar 
							di NOTA" data-placement="right"></small>
						</div>
					</div>
					<div class="block-list">
						<div class="txt">
							Catatan Pribadi
						</div>
						<div class="input">
							<input type="text" class="single-input" ng-model="datas[idx].note" placeholder="Catatan Pribadi (cth. 'Numerator dicetak dengan mesin Epson')">
						</div>
						<div class="info">
							<small class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-title="Tidak akan keluar 
							di NOTA" data-placement="right"></small>
						</div>
					</div>
					<div class="block-list">
						<div class="txt">Jumlah Cetakan</div>
						<div class="input-group input">
							<input type="number" class="single-input" ng-model="datas[idx].quantity" placeholder="Jumlah Cetakan (cth. '10 / 100')">
							<select class="selectpicker" data-width="fit" ng-model="datas[idx].quantitytype">
								<option>lembar</option>
								<option>box</option>
								<option>buah</option>
							</select>
						</div>
					</div>
					<div class="block-list">
						<div class="txt">Jumlah Inchiet</div>
						<div class="input-group input">
							<input type="number" class="single-input" ng-model="datas[idx].inschiet" placeholder="Jumlah Cetakan (cth. '10 / 100')">
							<select class="selectpicker" data-width="fit" ng-model="datas[idx].inschiettype">
								<option>lembar</option>
								<option>box</option>
								<option>buah</option>
							</select>
						</div>
					</div>
					<div class="block-list">
						<div class="txt">Material</div>
						<div class="select">
							<div class="input-group">
								<input class="form-control" type="text" ng-model="datas[idx].bahan">
								<div class="input-group-btn">
								<button type="button" class="btn btn-secondary" data-toggle="dropdown">
          <b>AC</b>
        </button>
	        <div class="dropdown-menu">
	          <a class="dropdown-item" href="" ng-click="setMaterial(item)" ng-repeat="item in material1s">[[item]]</a>
	        </div>
	       </div>
								<div class="input-group-btn">
								<button type="button" class="btn btn-secondary" data-toggle="dropdown">
          <i class="fa fa-mouse-pointer"></i>
        </button>
	        <div class="dropdown-menu">
	          <a class="dropdown-item" href="" ng-click="setMaterial(item)" ng-repeat="item in material2s">[[item]]</a>
	        </div>
	       </div>
	      </div>
						</div>
					</div>
					<div class="block-list">
						<div class="txt">
							Ukuran Plano
						</div>
						<div class="input-group input">
							<input type="number" step="0.5" class="form-control" ng-model="datas[idx].planowidth" placeholder="Lebar Plano (cm)">
							<span class="input-group-addon">
								<small class="glyphicon glyphicon-remove"></small>
							</span>
							<input type="number" step="0.5" class="form-control" ng-model="datas[idx].planolength" placeholder="Panjang Plano (cm)">
							<div class="input-group-btn">
								<button type="button" class="btn btn-secondary" ng-click="setPlano(0, 0)">
          <i class="fa fa-eraser"></i>
        </button>
       </div>
							<div class="input-group-btn">
								<button type="button" class="btn btn-secondary" data-toggle="dropdown">
          <i class="fa fa-mouse-pointer"></i>
        </button>
        <div class="dropdown-menu">
									<a href="" class="dropdown-item" ng-click="setPlano(61,88)">61 x 88 cm</a>
									<a href="" class="dropdown-item" ng-click="setPlano(61,92)">61 x 92 cm</a>
									<a href="" class="dropdown-item" ng-click="setPlano(65,90)">65 x 90 cm</a>
									<a href="" class="dropdown-item" ng-click="setPlano(65,100)">65 x 100 cm</a>
									<a href="" class="dropdown-item" ng-click="setPlano(79,109)">79 x 109 cm</a>
        </div>
							</div>
						</div>
					</div>
					<div class="block-list">
						<div class="txt">
							Ukuran Kertas
						</div>
						<div class="input-group input">
							<input type="number" step="0.5" class="form-control" ng-model="datas[idx].paperwidth" placeholder="Lebar Potongan (cm)">
							<span class="input-group-addon">
								<small class="glyphicon glyphicon-remove"></small>
							</span>
							<input type="number" step="0.5" class="form-control" ng-model="datas[idx].paperlength" placeholder="Panjang Potongan (cm)">
							<div class="input-group-btn">
								<button type="button" class="btn btn-secondary" ng-click="setPaperSize(0, 0)">
          <i class="fa fa-eraser"></i>
        </button>
       </div>
							<div class="input-group-btn">
								<button type="button" class="btn btn-secondary" data-toggle="dropdown">
          <i class="fa fa-mouse-pointer"></i>
        </button>
        <div class="dropdown-menu">
									<a href="" class="dropdown-item" ng-click="setPaperSize(32,48)" ng-show="datas[idx].planowidth==0||datas[idx].planolength==0">A3+ (konica)</a>
									<a href="" class="dropdown-item" ng-click="setPaperSize(21,29.7)" ng-show="datas[idx].planowidth==0||datas[idx].planolength==0">A4 (epson)</a>
									<a href="" class="dropdown-item" ng-click="setPaperSize(21.5,33)" ng-show="datas[idx].planowidth==0||datas[idx].planolength==0">F4 (epson)</a>
									<a href="" class="dropdown-item" ng-click="setPaperBagi4()" ng-hide="datas[idx].planowidth==0||datas[idx].planolength==0">Plano Bagi 4</a>
									<a href="" class="dropdown-item" ng-click="setPaperBagi3()" ng-hide="datas[idx].planowidth==0||datas[idx].planolength==0">Plano Bagi 3</a>
									<a href="" class="dropdown-item" ng-click="setPaperBagi2()" ng-hide="datas[idx].planowidth==0||datas[idx].planolength==0">Plano Bagi 2</a>
								</div>
							</div>
						</div>
					</div>
					<div class="block-list">
						<div class="txt">
							Uk. Jadi (<span class="text-bold">t'buka</span>)
						</div>
						<div class="input-group input">
							<input type="number" step="0.5" class="form-control" ng-model="datas[idx].imagewidth" placeholder="Lebar Hasil (cm)">
							<span class="input-group-addon">
								<small class="glyphicon glyphicon-remove"></small>
							</span>
							<input type="number" step="0.5" class="form-control" ng-model="datas[idx].imagelength" placeholder="Panjang Hasil (cm)">
							<div class="input-group-btn">
								<button type="button" class="btn btn-secondary" data-toggle="dropdown">
          <i class="fa fa-mouse-pointer"></i>
        </button>
								<div class="dropdown-menu">
									<a href="" class="dropdown-item" ng-click="setImageSize(21,29.7)">A4</a>
									<a href="" class="dropdown-item" ng-click="setImageSize(14.8,21)">A5</a>
									<a href="" class="dropdown-item" ng-click="setImageSize(10.5,14.8)">A6</a>
									<a href="" class="dropdown-item" ng-click="setImageSize(29.7,42)">A3</a>
									<a href="" class="dropdown-item" ng-click="setImageSize(32,48)">A3+</a>
									<a href="" class="dropdown-item" ng-click="setImageSize(21.5,33)">F4</a>
								</div>
							</div>
						</div>
						<div class="info">
							<small class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-title="Jika ada lipat, hitung ukuran ketika dibuka" data-placement="right"></small>
						</div>
					</div>
					<div class="block-list">
						<div class="txt">Sisi Cetak</div>
						<div class="select">
							<select class="selectpicker" data-width="100%" ng-model="datas[idx].sideprint">
								<option>2 sisi (Kontraform)</option>
								<option>2 sisi (Balik Bakul)</option>
								<option>2 sisi (Bolak Balik Beda)</option>
								<option>1 sisi</option>
							</select>
						</div>
					</div>
					<div class="block-list">
						<div class="txt">Jumlah Plat</div>
						<div class="input input-group">
							<input type="number" step="1" class="single-input" ng-model="datas[idx].totalplat" placeholder="Total Plat (pcs)">
							<div class="input-group-btn">
								<button type="button" class="btn btn-secondary" data-toggle="dropdown">
          <i class="fa fa-mouse-pointer"></i>
        </button>
       	<div class="dropdown-menu">
									<a href="" class="dropdown-item" ng-click="datas[idx].totalplat=4">1 set (4 plat)</a>
									<a href="" class="dropdown-item" ng-click="datas[idx].totalplat=8">2 set (8 plat)</a>
									<a href="" class="dropdown-item" ng-click="datas[idx].totalplat=1">1 plat</a>
									<a href="" class="dropdown-item" ng-click="datas[idx].totalplat=2">2 plat</a>
								</div>
							</div>
						</div>
					</div>
					<div class="block-list">
						<div class="txt">Deadline</div>
						<div class="input input-group">
							<input type="datetime-local" step="1" class="single-input" ng-model="datas[idx].deadline" placeholder="Total Plat (pcs)">
							<div class="input-group-btn">
								<button type="button" class="btn btn-secondary" data-toggle="dropdown">
          <i class="fa fa-mouse-pointer"></i>
        </button>
        <div class="dropdown-menu">
									<a href="" class="dropdown-item" ng-click="set1hours()">+ 1jam (dr sekarang)</a>
									<a href="" class="dropdown-item" ng-click="set2hours()">+ 2jam (dr sekarang)</a>
									<a href="" class="dropdown-item" ng-click="setToday5()">Hari ini jam 5 sore</a>
									<a href="" class="dropdown-item" ng-click="setToday7()">Hari ini jam 7 malam</a>
									<a href="" class="dropdown-item" ng-click="setTomorrow10()">Besok jam 10 pagi</a>
									<a href="" class="dropdown-item" ng-click="setTomorrow14()">Besok jam 2 siang</a>
									<a href="" class="dropdown-item" ng-click="setTomorrow17()">Besok jam 5 sore</a>
								</div>
							</div>
						</div>
					</div>

					<div class="block-subdetail">
						<div class="txt">FINISHING</div>
						<div class="line"></div>
					</div>
					<div class="text-xs-center bg-lightgray display-block padding-10" ng-hide="datas[idx].finishings.length>0">
						Tanpa Finishing..
					</div>
					<div class="block-list finishing" ng-repeat="item in datas[idx].finishings">
						<div class="txt">
							<select class="selectpicker show-tick" data-width="100%" ng-model="item.type">
								<option>LAMINATING</option>
								<option>VARNISH</option>
								<option>SPOT UV</option>
								<option data-divider="true"></option>
								<option>EMBOSS</option>
								<option>POLY</option>
								<option>SPOT UV</option>
								<option data-divider="true"></option>
								<option>LIPAT</option>
								<option>LEM</option>
								<option value="DIE-CUT (POND)">POND</option>
								<option>JILID</option>
								<option>HOOK</option>
								<option>BOR</option>
								<option>NUMERATOR</option>
								<option>SABLON</option>
								<option value="NGURUT">Nge-SET</option>
								<option value="PERFORASI">CACAH</option>
								<option data-divider="true"></option>
								<option>MATA AYAM</option>
								<option>SELONGSONG</option>
								<option data-divider="true"></option>
								<option>PRESS</option>
								<option>EMBOSS</option>
							</select>
						</div>
						<div class="input">
							<input type="text" step="1" class="single-input" ng-model="item.detail" placeholder="Detail">
						</div>
						<div class="info">
							<a href="" ng-click="removeFinishingField($index)">
								<small class="glyphicon glyphicon-remove"></small>
							</a>
						</div>
					</div>
					<div class="block-divider"></div>
					<div class="block-list">
						<button class="btn btn-outline-purple width-100" ng-click="addFinishingField()">
							<small class="glyphicon glyphicon-plus-sign"></small> TAMBAH FINISHING
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="order-summary-wrapper">
			<div class="order-summary">
				<div class="summary-panel order-panel">
					<div class="panel-block">
						<div class="block-subdetail">
							<div class="txt">
								<i class="fa fa-link purple"></i> 
								MASUKKAN LINK FILE
							</div>
							<div class="line"></div>
						</div>
						<div class="block-list">
							<table class="table table-sm table-center table-bordered">
								<thead>
									<tr>
										<th class="width-min">#</th>
										<th>Links</th>
									</tr>
								</thead>
								<tbody>
									<tr ng-repeat="item in datas[idx].files">
										<td>[[zeroFill($index+1, 2)]].</td>
										<td>
											<input type='text' class="form-control" placeholder="Copy link file ke sini!" ng-model="item.link"></td>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="block-divider"></div>
						<div class="block-button">
							<button class="btn btn-purple" ng-click="addFilesField()">
								Add New Link
								<i class="fa fa-plus-square glyphicon"></i> 
							</button>
						</div>
					</div>
				</div>
				<div class="summary-panel order-panel">
					<div class="panel-block">
						<div class="block-subdetail">
							<div class="txt">
								<i class="fa fa-dollar purple"></i> 
								HARGA
							</div>
							<div class="line"></div>
						</div>
						<div class="block-list">
							<div class=txt>Harga Material</div>
							<div class="input">
								<input type="number" class="single-input" ng-model="datas[idx].material" placeholder="Harga Tidak Potong Pajak" ng-change="calculateTotal()">
							</div>
						</div>
						<div class="block-list">
							<div class="txt">Ongkos Cetak</div>
							<div class="input">
								<input type="number" class="single-input" ng-model="datas[idx].ongkoscetak" placeholder="Harga Kena PPh 21" ng-change="calculateTotal()">
							</div>
						</div>
						<div class="block-divider"></div>
						<div class="block-list">
							<div class="txt">Harga Total</div>
							<div class="input">
								<div class="single-input text-bold">[[(datas[idx].material+datas[idx].ongkoscetak)|number:0]]</div>
							</div>
						</div>
						<div class="block-divider"></div>
					</div>
				</div>
				<div class="summary-panel order-panel">
					<div class="panel-block">
						<div class="block-subdetail">
							<div class="txt">
								<span class="glyphicon glyphicon-shopping-cart purple"></span>
								KERANJANG BELANJA
							</div>
							<div class="line"></div>
						</div>
						<div class="block-list">
							<table class="table table-sm table-center table-bordered">
								<thead>
									<tr>
										<th class="width-min">#</th>
										<th>Details</th>
										<th>Jumlah</th>
										<th>Harga</th>
										<th class="width-min"></th>
									</tr>
								</thead>
								<tbody>
									<tr ng-repeat="data in datas" ng-class="{'bg-purple':idx==$index}" ng-click="setIndex($index)" style="cursor:pointer;">
										<td data-toggle="tooltip" data-placement="top" data-title="Tipe Job">
											[[data.jobtype]]
										</td>
										<td>
											[[data.printtype]] "<span ng-hide="data.printtitle==''">No Title</span>[[data.printtitle]]" 
											<b>[[data.imagewidth]]x[[data.imagelength]]</b>cm
										</td>
										<td>[[data.quantity]] [[data.quantitytype]]</td>
										<td class="text-xs-right">Rp [[(data.material+data.ongkoscetak)|number:0]]</td>
										<td>
											<a class="" href="" ng-click="deleteByIndex($index)">
												<i class="fa fa-trash red" data-toggle="tooltip" data-title="Delete Item" data-placement="top"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td colspan="3" class="text-xs-right">Grand Total:</td>
										<td class="text-xs-right text-bold purple">Rp [[totalharga|number:0]]</td>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="block-divider"></div>
						<div class="text-xs-center">
							<button class="btn btn-circle btn-success" ng-click="addNewCart()"
									data-toggle="tooltip" data-title="Tambah Item">
								<i class="fa fa-cart-plus fa-2x"></i> 
							</button>
							<button class="btn btn-circle btn-primary" ng-click="saveCart()"
									data-toggle="tooltip" data-title="Simpan">
								<i class="fa fa-save fa-2x"></i> 
							</button>
							<button class="btn btn-circle btn-danger" ng-click="addOrder()"
									data-toggle="tooltip" data-title="Buat Orderan">
								<i class="fa fa-arrow-circle-right fa-2x"></i> 
							</button>
						</div>
						<div class="text-xs-center text-bold" ng-hide="successmsg==null" style="background-color: #70a; color: white; padding: 10px 0; margin: 10px 0; font-family: Signika">
							[[successmsg]]
						</div>
						<div class="signika margin-20" ng-hide="errormsg==null">
							<div class="text-bold">Error:</div>
							<ol class="">
								<li ng-repeat="item in errormsg track by $index">
									[[(item[0])]]
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop