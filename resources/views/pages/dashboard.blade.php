@extends('layouts.default')
@section('content')

<div class="home" ng-controller="PagesDashboardController">
@if(isset($siapcetak))
	<div ng-init="initDataSiapCetak('{{str_replace(array('\r', '\n'), '-', $siapcetak)}}')"></div>
@endif
	<div class="item">
		<div class="title">Tabel List Siap Cetak</div>
		<table class="table table-bordered table-center table-sm">
			<thead>
				<tr>
					<th>#</th>
					<th>Company</th>
					<th>Customer</th>
					<th>Judul</th>
					<th>Quantity</th>
					<th>Inschiet</th>
					<th>Material</th>
					<th>Ukuran</th>
					<!-- <th>Harga</th> -->
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				
				<tr ng-repeat="item in siapcetak track by $index">
					<td class="text-xs-left">
						<b>[[item.jobType]]</b>-[[item.printingSalesID]] 
						<span class="tag tag-purple">
							[[item.printingType]]
						</span>
					</td>
					<td>
						<span ng-hide="item.companyName='No Company'">
							[[item.companyName.up1()]]
						</span>
						<span ng-show="item.companyName='No Company'">-</span>
					</td>
					<td>
						<span ng-hide="item.customerName='CASH'">
							[[item.customerName.up1()]]
						</span>
						<span ng-show="item.customerName='CASH'">-</span>
					</td>
					<td class="text-xs-left">[[item.printingTitle.up1()]]</td>
					<td>[[item.quantity]] [[item.quantityType]]</td>
					<td>
						<span ng-hide="item.inschiet == 0">
							[[item.inschiet]] [[item.inschietType]]
						</span>
						<span ng-show="item.inschiet == 0">
							-
						</span>
					</td>
					<td>[[item.material.up1()]]</td>
					<td>
						[[item.paperSize]]
						<span ng-hide="item.imageSize == '-'">
							 (potong: [[item.imageSize]])
						</span>
					</td>
					<!--<td>
						Rp [[item.hargaMaterial + item.hargaOngkosCetak]]
							<span ng-hide="item.hargaMaterial + item.hargaOngkosCetak == item.hargaAsli">
								 (asli: Rp [[item.hargaAsli]])
							</span>
					</td>-->
					<td>[[item.status]]</td>
				</tr>
				
			</tbody>
		</table>
	</div>

</div>


@stop