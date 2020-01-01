
<nav class="navbar navbar-dark">
		<div class="nav-wrapper">
			<ul class="nav navbar-nav">
				<li class="nav-item" ng-class="{'active':'{{Request::path()}}'=='dashboard'}">
					<a class="nav-link" href="{{URL::asset('dashboard')}}" data-title="Dashboard" data-placement="right" data-toggle="tooltip">
						<span class="fas fa-home-alt fa-fw"></span>
					</a>
				</li>
				<li class="nav-item" ng-class="{'active':
					'{{Request::path()}}'=='order'}">
					<a class="nav-link" tabindex="0" href="{{URL::asset('order')}}" data-title="Printing Order" data-placement="right" data-toggle="tooltip">
						<span class="fas fa-business-time fa-fw"></span>
					</a>
				</li>
				<li class="nav-item" ng-class="{'active':
					'{{Request::path()}}'=='kost'}">
					<a class="nav-link" tabindex="0" href="{{URL::asset('kost')}}" data-title="Kost" data-placement="right" data-toggle="tooltip">
						<span class="fas fa-building fa-fw"></span>
					</a>
				</li>
				@if(Session::has('role'))
					@if(Session::get('role') == 'customer')
				<li class="nav-item" ng-class="{'active':'{{Request::path()}}'=='cart'}">
					<li class="nav-item dropdown">
						<a class="nav-link" tabindex="0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" ng-class="{'active':
						'{{Request::path()}}'=='sales/all' ||
						'{{Request::path()}}'.indexOf('cart') == 0 ||
						'{{Request::path()}}'.indexOf('payment') == 0}">
							<span class="glyphicon glyphicon-th-large"></span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="{{URL::asset('cart')}}"><span class="glyphicon glyphicon-shopping-cart icon"></span>Cart</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="{{URL::asset('sales/all')}}"><span class="glyphicon glyphicon-stats icon"></span>Pembelian</a>
							<a class="dropdown-item" href="{{URL::asset('tracking')}}"><span class="glyphicon glyphicon-tasks icon"></span>Tracking</a>
							<a class="dropdown-item" href="{{URL::asset('sales/history')}}"><span class="glyphicon glyphicon-folder-open icon"></span></a>
						</div>
					</li>
				</li>
					@elseif(Session::get('role') != 'customer')
				<li class="nav-item">
					<li class="nav-item dropdown">
						<a class="nav-link" tabindex="0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
							<span class="glyphicon glyphicon-king"></span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="{{URL::asset('salesheaders')}}">SalesHeader</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="{{URL::asset('roles')}}">roles</a>
							<a class="dropdown-item" href="{{URL::asset('employees')}}">employees</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="{{URL::asset('companies')}}">companies</a>
							<a class="dropdown-item" href="{{URL::asset('customers')}}">customers</a>
							<a class="dropdown-item" href="{{URL::asset('cities')}}">cities</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="{{URL::asset('papershops')}}">papershops</a>
							<a class="dropdown-item" href="{{URL::asset('papertypes')}}">papertypes</a>
							<a class="dropdown-item" href="{{URL::asset('papers')}}">papers</a>
							<a class="dropdown-item" href="{{URL::asset('paperdetails')}}">paperdetails</a>
						</div>
					</li>
				</li>
					@endif
				@endif
				@if(Session::has('role'))
				<li class="nav-item">
					<li class="nav-item dropdown">
						<a class="nav-link" tabindex="0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
							<span class="glyphicon glyphicon-user"></span> 
							
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="{{URL::asset('profile')}}"><span class="glyphicon glyphicon-user"></span> {{ strtoupper( explode(' ',trim( Session::get( 'name' )) )[0] ) }}</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="{{URL::asset('chpass')}}"><span class="glyphicon glyphicon-lock"></span> Change Password</a>
							<!-- <a class="dropdown-item" href="{{URL::asset('ussetting')}}"><span class="glyphicon glyphicon-cog icon"></span>Setting</a> -->
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="{{URL::asset('logout')}}"><span class="glyphicon glyphicon-log-out"></span> Keluar</a>
						</div>
					</li>
				</li>
				@else
				<!-- <li class="nav-item">
					<a class="nav-link" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-off"></span> LOGIN</a>
				</li> -->
				<li class="nav-item">
					<li class="nav-item dropdown">
						<!-- <a class="nav-link" tabindex="0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> -->
						<a class="nav-link" href="#" role="button" data-title="Log out" data-placement="right" data-toggle="tooltip">
							<span class="fas fa-power-off fa-fw"></span> 
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="{{URL::asset('Log-In')}}">
								<span class="glyphicon glyphicon-log-in"></span> Log-in
							</a>
							<a class="dropdown-item" href="{{URL::asset('signup')}}">
								<span class="glyphicon glyphicon-user"></span> Daftar Baru
							</a>
						</div>
					</li>
				</li>
				@endif
			</ul>
		</div>
</nav>