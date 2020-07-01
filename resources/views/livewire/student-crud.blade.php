<div>
	<div wire:offline>
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-danger">
			  	You are now offline.
				</div>
			</div>
		</div>
	</div>
	@if (session()->has('message'))
		<div class="alert alert-success">
			{{ session('message') }}
		</div>
	@endif

	@if ($statusUpdate)
		<livewire:student-update></livewire:student-update>
	@else
		<livewire:student-create></livewire:student-create>
	@endif
	<hr>
	<div wire:loading>
		Processing ...
	</div>
	<div class="row">
		<div class="col">
			<select name="" id="" wire:model="paginate" class="form-control form-control-sm w-auto">
				<option value="5">5</option>
				<option value="10">10</option>
				<option value="15">15</option>
				<option value="20">20</option>
				<option value="25">25</option>
				<option value="30">30</option>
			</select>
		</div>
		<div class="col">
			<input wire:model="search" type="text" class="form-control form-control-sm w-auto pull-right" placeholder="search">
		</div>
	</div>
	<hr>
	<table class="table" wire:loading.remove>
		<thead class="thead-dark">
			<tr>
				<th scope="col">#</th>
				<th scope="col"><a href="#" wire:click="sort_data('firstname')"><i class="fa fa-sort"></i> firstname</a></th>
				<th scope="col"><a href="#" wire:click="sort_data('lastname')"><i class="fa fa-sort"></i> lastname</a></th>
				<th scope="col"><a href="#" wire:click="sort_data('gender')"><i class="fa fa-sort"></i> gender</a></th>
				<th scope="col"><a href="#" wire:click="sort_data('phone')"><i class="fa fa-sort"></i> phone</a></th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($data as $value)
				<tr>
					<th scope="row">{{$start_num++}}</th>
					<td>{{ $value->firstname }}</td>
					<td>{{$value->lastname}}</td>
					<td>{{$value->gender}}</td>
					<td>{{$value->phone}}</td>
					<td>
						<button wire:click="getStudent({{ $value->id }})" class="btn btn-sm btn-info text-white">Edit</button>
						<button wire:click="delete({{ $value->id }})" class="btn btn-sm btn-danger text-white">Delete</button>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>
	{{ $data->links() }}
</div>
