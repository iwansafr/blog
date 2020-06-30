@extends('main')

@section('title','Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
	<div class="col-sm-4">
		<div class="page-header float-left">
			<div class="page-title">
				<h1>Dashboard</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-8">
		<div class="page-header float-right">
			<div class="page-title">
				<ol class="breadcrumb text-right">
					<li><a href="#">Dashboard</a></li>
					<li><a href="#">Table</a></li>
					<li class="active">Basic table</li>
				</ol>
			</div>
		</div>
	</div>
</div>
@endsection

@section('content')
<div class="content mt-3">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-secondary">
				   <div class="card-header">
					   <div class="pull-right">
						   <form action="" method="post">
							   <input type="text" class="form-control" placeholder="search">
						   </form>
					   </div>
				   </div>
				   <div class="card-body">
					   
				   </div>
				   <div class="card-footer">
					   
				   </div>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection