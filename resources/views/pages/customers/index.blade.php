@extends('layouts.default')
@section('title', 'PageTitle')
@section('description', 'PageTitle')
@section('robots', 'noindex,nofollow')
@section('content')

<div ng-controller="AdmCustomerController" class="custom-kostrooms-index">

@if(isset($customers))
	@if($customers != null)

		<?php
			$temp = str_replace(array('\r', '\"', '\n', '\''), '?', $customers);
		?>

		@if(count($customers) != 0)
	<div ng-init="initData('{{$temp}}')"></div>
		@endif
	@endif
@endif
	
	<div class="padding-">
		<div>
			
		</div>
	</div>

	<div class="padding-20">
		<div style="width:100%; text-align: right; margin-bottom: 20px;">
			<button class="btn btn-sm btn-outline-primary pull-xs-right" ng-click="showaddnewmodal()">
				<i class="fas fa-plus-square fa-fw"></i> Tambah Customer
			</button>
		</div style="width:100%; text-align: left; margin-bottom: 20px;">

		<div>
			Total Customers : [[customers.length]] Customers
		</div>

		<table class="table table-sm">
			<thead>
				<tr>
					<td>
						No
					</td>
					<td>
						Customer Name
					</td>
					<td>
						Company Name
					</td>
					<td>
						 Action
					</td>
				</tr>
			</thead>
			<tbody ng-repeat="customer in customers">
				<tr>
					<td >
						[[$index+1]]
					</td>
					<td>
						#[[zeroFill(customer.id, 4)]]
						[[customer.name]]
					</td>
					<td class="line-11">
						<span ng-show="customer.company==null">
							- no data -
						</span>
						<span ng-show="customer.company!=null">
							[[zeroFill(customer.company.id, 4)]]
							[[customer.company.name]]
						</span>
					</td>
					<td>
						<button class="btn btn-success btn-xs" ng-click="showupdatemodal(customer)">Edit</button>
						<button class="btn btn-danger btn-xs" ng-click="deletecustomer(customer.company)" >Delete</button>
					</td>
				</tr>
			</tbody>
		</table>
	</div>



	@include ("pages.customers.modals.addnewcustomer")
	@include ("pages.customers.modals.updatecustomer")
</div>

@stop