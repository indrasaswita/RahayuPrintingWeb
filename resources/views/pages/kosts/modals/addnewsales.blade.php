<div ng-controller="KostNewsalesController">
	<div class="modal fade" id="modal-kostaddnewsales" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">
						Buat Sales untuk kamar no. [[selectedroom.roomnumber]]
					</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="description">
						normal price: <span class="price">[[selectedroom.price|number:0]]</span>
					</div>
					<div class="description">
						for 2 people: <span class="price">[[selectedroom.pricefortwo|number:0]]</span>
					</div>
					<div class="inputs">
						<div class="input">
							buat nota: <br>
							<input type="datetime-local" ng-model="nowtime">
						</div>
						<div class="input">
							awal sewa: <br>
							<input type="date" ng-model="starttime" ng-change="autoendtime()">
						</div>
						<div class="input">
							akhir sewa: <br>
							<input type="date" ng-model="endtime">
						</div>

						<div class="customers">
							Pelanggan 1:<br>
							<select class="selectpicker" data-live-search="true" ng-options="customer as customer.name for customer in customers track by customer.id" ng-model="customer1">
							</select><br>
							Pelanggan 2 (untuk 2 orang):<br>
							<select class="selectpicker" data-live-search="true" ng-options="customer as customer.name for customer in customers track by customer.id" ng-model="customer2" ng-change="autocustomer()">
							</select>
						</div>


						<div class="input">
							harga: <br>
							<input type="number" ng-model="salesprice">
						</div>
					</div>
					<div class="error" ng-if="errormessage.length>0">
						[[errormessage]]
					</div>
					<div class="actions">
						<button class="btn btn-sm btn-success" ng-click="savenewsales()" ng-if="!savednewheader">
							<i class="fas fa-save fa-fw"></i>
							Simpan
						</button>
						<button class="btn btn-sm btn-primary" ng-click="printnewsales()">
							<i class="fas fa-print fa-fw"></i>
							Print Tagihan
						</button>
					</div>
				</div>
				<div class="modal-footer">
					<!-- FOOTER -->
					<div class="info">
						<i class="fas fa-save fa-fw gray"></i>
						Simpan : <b>disimpan masuk ke komputer.</b><br>
						<i class="fas fa-print fa-fw gray"></i>
						Print Tagihan : <b>disimpan ke komputer + print.</b>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>