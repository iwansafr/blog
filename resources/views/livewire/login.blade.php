<div>
  <form action="" wire:submit.prevent="submit">
  	<label for="">email</label><br>
  	<input type="text" wire:model="form.email"><br>
  	@error('form.email') <span style="color: red">{{ $message }}</span><br> @enderror()
  	<label for="">password</label><br>
  	<input type="password" wire:model="form.password"><br>
  	@error('form.password') <span style="color: red">{{ $message }}</span><br> @enderror()
  	<button type="submit">Login</button>
  </form>
</div>
