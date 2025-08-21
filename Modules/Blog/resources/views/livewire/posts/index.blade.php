<div class="card m-2">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">INDEX</div>
            <div class="col-md-6 text-end"><button class="btn btn-primary" wire:click="create">ADD USER</button></div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>email</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td><button class="btn btn-success" wire:click='edit({{$item->id}})'>edit </button><button class="btn btn-danger" wire:click="destroy({{$item->id}})" >delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
