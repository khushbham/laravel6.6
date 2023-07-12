<div>
<div class="row">
    <div class="col-md-12">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </div>
</div>
<form wire:submit.prevent="submit" method="post">
    @csrf
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label>Name: </label>
                <input type="text" wire:model="name" class="form-control">
                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Email: </label>
                <input type="email" wire:model="email" class="form-control">
                @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Phone: </label>
                <input type="text" wire:model="phone" class="form-control">
                @error('phone') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label>Password: </label>
                <input type="password" wire:model="password" class="form-control">
                @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <br>
            <button class="btn text-white btn-success" type="submit">Update</button>
        </div>
    </div>
</form>
</div>
