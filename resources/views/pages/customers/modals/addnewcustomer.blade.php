<div ng-controller="AdmCustomeraddnewmodalController">
	<div class="modal fade" id="modal-admcustomeraddnew" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">
						Tambah Customer Baru
					</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div>
						Customer Type
						<select class='form-control' ng-options="type as type.name for type in customertypes track by type.id" ng-model="newcustomer.customertype" ></select>
					</div>
					<div>
						Company
						<select class='form-control' ng-options="company as company.name for company in companies track by companies.id" ng-model="newcustomer.company"> 
						</select>
					</div>
					<div>
						Address()
						<select class='form-control' placeholder="Masukkan alamat" ng-options="address as address.name+' '+address.address for address in addresses track by address.id" ng-model="newcustomer.address">
						</select>
					</div>
					<div>
						Name
						<input class="form-control" type="text" ng-model="newcustomer.name" placeholder="Masukkan nama anda">
					</div>
					<div>
						Phone
						<input class="form-control" type="text" ng-model="newcustomer.phone" placeholder="Masukkan nomor telepon 1">
					</div>
					<div>
						Phone 2
						<input class="form-control" type="text" ng-model="newcustomer.phone2" placeholder="Masukkan nomor telepon 2">
					</div>
					<div>
						Phone 3
						<input class="form-control" type="text" ng-model="newcustomer.phone3" placeholder="Masukkan nomor telepon 3">
					</div>
					<div>
						Email
						<input class="form-control" type="text" ng-model="newcustomer.email" placeholder="entry your email">
					</div>
					<div>
						Card Number
						<input class="form-control" type="text" ng-model="newcustomer.cardnumber" placeholder="Card Number">
					</div>
					<div>
						Card UID
						<input class="form-control" type="text" ng-model="newcustomer.cardUID" placeholder="Card UID">
					</div>

					<div class="error" ng-if="errormessage.length>0">
						[[errormessage]]
					</div>
					<div class="actions">
						<button class="btn btn-sm btn-success" ng-click="savenewcustomer()" >
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