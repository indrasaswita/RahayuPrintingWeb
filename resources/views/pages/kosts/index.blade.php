@extends('layouts.default')
@section('title', 'Kost')
@section('description', 'Kost.')
@section('robots', 'noindex,nofollow')
@section('content')

<div ng-controller="AdmKostController" class="custom-kostrooms-index">

@if(isset($rooms))
	@if($rooms != null)

		<?php
			$temp = str_replace(array('\r', '\"', '\n', '\''), '?', $rooms);
			$temp2 = str_replace(array('\r', '\"', '\n', '\''), '?', $customers);
		?>

		@if(count($rooms) != 0)
	<div ng-init="initData('{{$temp}}', '{{$temp2}}')"></div>
		@endif
	@endif
@endif

	<div class="room-wrapper">
		<div class="floor" ng-repeat="room2 in rooms2">
			<div class="room" ng-class="{'filled':room.kostsalesheader.length>0}" ng-repeat="room in room2">
				<div class="title">
					[[room.roomnumber]] (lt. [[room.floornumber]])
				</div>
				<div class="noheader" ng-if="room.kostsalesheader.length==0" ng-click="addnewheader(room)">
					Not Filled
				</div>
				<div class="header" ng-repeat="header in room.kostsalesheader" ng-click="selectroom(room.kostsalesheader)">
					Tgl. [[header.starttime|date:'dd/MM/yyyy']] - [[header.endtime|date:'dd/MM/yyyy']]<br>
					Bayar: [[(header.baseprice-header.discount)|number:0]]
					<span class="green" ng-if="header.paid_at!=null">
						<i class="fas fa-check fa-fw"></i>
						[[header.paid_at|date:'dd MMM HH:mm']]
					</span>
					<i class="fas fa-times fa-fw red" ng-if="header.paid_at==null"></i>
					<div class="customer" ng-repeat="customer in header.kostsalescustomer">
						[[($index+1)]]). 
						[[customer.customer.name]]
						<span class="company" ng-if="customer.customer.company!=null">
							from [[customer.customer.company.name]]
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include ("pages.kosts.modals.addnewsales")

</div>

@stop
