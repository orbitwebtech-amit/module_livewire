<div class="row m-0 p-0 mt-5 justify-content-center">
    <div class="col-md-6">
        <div class="card  ">
            <div class="card-header">

                <div class="row">
                    <div class="col-md-6">
                        <h1>user</h1>
                    </div>
                    <div class="col-md-6 text-end">
                        <button class="btn btn-primary" wire:click="index()" type="button">BACK</button>
                    </div>
                </div>
            </div>
            <form enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name" class="form-control" wire:model="name">
                        <x-blog::error :error="$errors->get('name')"></x-blog::error>
                    </div>
                    <div class="form-group">
                        <label>email:</label>
                        <input type="email" name="email" class="form-control" wire:model="email">
                        <x-blog::error :error="$errors->get('email')"></x-blog::error>
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" name="password" class="form-control" wire:model="password">
                        <x-blog::error :error="$errors->get('password')"></x-blog::error>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-warning" wire:click="ResetInput()" type="button">reset</button>
                    <button class="btn btn-success" wire:click.prevent="{{ $id != 0 ? 'update' : 'store' }}"
                        type="button">{{ $id != 0 ? 'UPDATE' : 'SAVE' }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
