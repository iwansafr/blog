<div>
	 <form wire:submit.prevent="update">
	 	<input type="hidden" name="" wire:model="studentId">
	 	<input type="hidden" name="" wire:model="oldFirstname">
  	<div class="form-group">
  		<div class="form-row">
  			<div class="col">
  				<input wire:model="firstname" type="text" name="" id="" class="form-control @error('firstname') is-invalid @enderror" placeholder="firstname" wire:offline.attr="disabled">
  				@error('firstname')
  					<span class="invalid-feedback">
  						<strong> {{ $message }} </strong>
  					</span>
  				@enderror
  			</div>
  			<div class="col">
  				<input wire:model="lastname" type="text" name="" id="" class="form-control @error('lastname') is-invalid @enderror" placeholder="lastname" wire:offline.attr="disabled">
  				@error('lastname')
  					<span class="invalid-feedback">
  						<strong> {{ $message }} </strong>
  					</span>
  				@enderror
  			</div>
  		</div>
  	</div>
  	<div class="form-group">
  		<div class="form-row">
  			<div class="col">
  				<input wire:model="gender" type="text" name="" id="" class="form-control @error('gender') is-invalid @enderror" placeholder="gender" wire:offline.attr="disabled">
  				@error('gender')
  					<span class="invalid-feedback">
  						<strong> {{ $message }} </strong>
  					</span>
  				@enderror
  			</div>
  			<div class="col">
  				<input wire:model="phone" type="text" name="" id="" class="form-control @error('phone') is-invalid @enderror" placeholder="phone number" wire:offline.attr="disabled">
  				@error('phone')
  					<span class="invalid-feedback">
  						<strong> {{ $message }} </strong>
  					</span>
  				@enderror
  			</div>
  		</div>
  	</div>
  	<div class="form-group">
  		<button class="btn btn-sm btn-info" wire:offline.attr="disabled">Submit</button>
  	</div>
  </form>
</div>
