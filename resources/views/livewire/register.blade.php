<div>
	<form wire:submit.prevent="submit">
		<label for="">name</label><br>
		<input type="text" wire:model="form.name"><br>
		@error('form.name') <span style="color: red">{{ $message }}</span><br> @enderror()
		<label for="">email</label><br>
		<input type="email" wire:model="form.email"><br>
		@error('form.email') <span style="color: red">{{ $message }}</span><br> @enderror()
		<label for="">password</label><br>
		<input type="password" wire:model="form.password"><br>
		<label for="">password confirmation</label><br>
		<input type="password" wire:model="form.password_confirmation"><br>
		@error('form.password') <span style="color: red">{{ $message }}</span><br> @enderror()
		<button type="submit">Register</button>
	</form>
</div>
