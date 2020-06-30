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
	<table class="table" wire:loading.remove>
		<thead class="thead-dark">
			<tr>
				<th scope="col">#</th>
				<th scope="col">firstname</th>
				<th scope="col">lastname</th>
				<th scope="col">gender</th>
				<th scope="col">phone</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($data as $value)
				<tr>
					<th scope="row">{{$loop->index+1}}</th>
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
