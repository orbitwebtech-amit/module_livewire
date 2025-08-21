<?php

namespace Modules\Blog\Livewire\Posts;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Modules\Blog\Entities\Post;
use Livewire\WithPagination;

class Crud extends Component
{
    use WithPagination;

    public $name, $email, $password, $data, $add_edit_view = 0, $index_view = 1, $id;
    public function ResetInput()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function index()
    {
        $this->add_edit_view = 0;
        $this->index_view = 1;
    }
    public function create()
    {
        $this->id = 0;
        $this->ResetInput();
        $this->index_view = 0;
        $this->add_edit_view = 1;
    }

    public function store()
    {
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ];
        $this->validate($rules);
        $table = new \App\Models\User;
        $table->name = $this->name;
        $table->email = $this->email;
        $table->password = Hash::make($this->password);
        $table->save();
        $this->add_edit_view = 0;
        $this->index_view = 1;
    }
    public function destroy($id)
    {
        \App\Models\User::find($id)->delete();
        $this->add_edit_view = 0;
        $this->index_view = 1;
    }
    public function edit($id)
    {
        $this->ResetInput();
        $this->id = $id;
        $table = \App\Models\User::find($id);
        $this->name = $table->name;
        $this->email = $table->email;
        $this->add_edit_view = 1;
        $this->index_view = 0;
    }
    public function update()
    {
        $rules = [
            'name' => 'required',
            'email' => 'required',
        ];
        $this->validate($rules);
        $table = \App\Models\User::find($this->id);
        $table->name = $this->name;
        $table->email = $this->email;
        if ($this->password) {
            $table->password = Hash::make($this->password);
        }
        $table->save();
        $this->add_edit_view = 0;
        $this->index_view = 1;
    }
    public function render()
    {
        $this->data = \App\Models\User::all();
        return view('blog::livewire.posts.crud');
    }

}
