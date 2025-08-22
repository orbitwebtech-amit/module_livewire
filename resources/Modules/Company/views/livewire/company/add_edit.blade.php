<div class="row m-0 p-0 mt-5 justify-content-center">
    <div class="col-md-6">
        <div class="card  ">
            <div class="card-header">

                <div class="row">
                    <div class="col-md-6">
                        <h1>user</h1>
                    </div>
                    <div class="col-md-6 text-end">
                        <button class="btn btn-primary" wire:click="index" type="button">BACK</button>
                    </div>
                </div>
            </div>
            <form enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" name="name"
                            class="form-control @error('name') border-red-500 @enderror" wire:model="name">
                        <x-modules_company_view::error :error="$errors->get('name')"></x-modules_company_view::error>
                    </div>
                    <div class="form-group">
                        <label>email:</label>
                        <input type="email" name="email" class="form-control" wire:model="email">
                        <x-modules_company_view::error :error="$errors->get('email')"></x-modules_company_view::error>
                    </div>
                    <div class="form-group">
                        <label>phone:</label>
                        <input type="text" name="phone" class="form-control" wire:model="phone">
                        <x-modules_company_view::error :error="$errors->get('phone')"></x-modules_company_view::error>
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" name="password" class="form-control" wire:model="password">
                        <x-modules_company_view::error :error="$errors->get('password')"></x-modules_company_view::error>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-warning" wire:click="ResetInput" type="button">reset</button>
                    <button class="btn btn-success" wire:click.prevent="{{ isset($id) ? 'update()' : 'store()' }}"
                        type="button">save</button>
                </div>
            </form>
        </div>
    </div>
</div>