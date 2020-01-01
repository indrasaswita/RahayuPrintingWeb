@extends('layouts.directprint')
@section('title', 'Admin Print Invoice')
@section('content')

<div ng-controller="KostNewsalesPrint" class="view-small-invoice">

	@if(isset($sales))
		@if($sales != null)
			<?php
				$temp = str_replace(array('\r', '\"', '\n', '\''), '?', $sales);
			?>

	<div ng-init="initData('{{$temp}}')"></div>
		@endif
	@endif

	<div class="view-wrapper">

		<button class="btn btn-sm btn-primary" ng-click="printCardMaster()">
			PRINT
		</button>

	</div>
</div>


@endsection