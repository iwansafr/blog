<div>
  <form wire:submit.prevent="store">
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
          <select name="" id="" class="form-control @error('gender') is-invalid @enderror" wire:model="gender">
            <option value="">Jenis Kelamin</option>
            <option value="1">Laki-laki</option>
            <option value="2">Perempuan</option>
          </select>
  				@error('gender')
  					<span class="invalid-feedback">
  						<strong> {{ $message }} </strong>
  					</span>
  				@enderror
  			</div>
  			<div class="col">
  				<input wire:model="phone" type="number" name="" id="" class="form-control @error('phone') is-invalid @enderror" placeholder="phone number" wire:offline.attr="disabled">
  				@error('phone')
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
          {{-- <input wire:model="photo" type="file" name="" id="" class="form-control @error('photo') is-invalid @enderror" placeholder="photo" wire:offline.attr="disabled" accept=".jpg, .png, .jpeg"> --}}
          <input wire:model="photo" type="file" name="" id="" class="form-control @error('photo') is-invalid @enderror" placeholder="photo" wire:offline.attr="disabled" accept="image/*">
          @error('photo')
            <span class="invalid-feedback">
              <strong> {{ $message }} </strong>
            </span>
          @enderror
          @if ($photo)
            <img src="{{ $photo->temporaryUrl() }}" height="100">
          @endif
          <div wire:loading wire:target="photo">Uploading...</div>
        </div>
        <div class="col">
        </div>
      </div>
    </div>
  	<div class="form-group">
  		<button class="btn btn-sm btn-info" wire:offline.attr="disabled">Submit</button>
  	</div>
  </form>
</div>
