@extends('layouts.default')
@section('title', 'Login')
@section('description', 'Halaman Login.')
@section('robots', 'noindex,nofollow')
@section('content')

<div ng-controller="PagesLoginController">

@if(isset($employees))
	@if($employees != null)

		<?php
			$temp = str_replace(array('\r', '\"', '\n', '\''), '?', $employees);
		?>

		@if(count($employees) != 0)
	<div ng-init="initData('{{$temp}}')"></div>
		@endif
	@endif
@endif


	<div class="login-wrapper">
		<div class="login-header">
			Log-In
		</div>
		<div class="login-block">
			<div class="form-group">
				<input type="text" id="login-username" class="login-text-input" data-toggle="tooltip" data-placement="top" title="email@example.com" placeholder="Email Anda" ng-model="customerData.username" name="email">
			</div>
			<div class="form-group">
				<input type="password" id="login-password" class="login-text-input" data-toggle="tooltip" data-placement="bottom" title="min. 6 digits" placeholder="Password Anda" ng-model="customerData.password" name="password">
			</div>
		</div>
		[[alertshow]]
		<div class="login-error" ng-show="alertshow">
			[[alertmessage]]
		</div>
		<div class="login-footer">
			<input type="submit" class="btn login-submit" value="Login" ng-click="loginButtonClicked('dashboard')" >
		</div>
		<div class="login-redirector">
			Jika belum punya account?<br />Silahkan <a href="{{URL::asset('signup')}}">sign-up</a> disini!
		</div>
	</div>
</div>

@stop