<?php

namespace App\Modules\Company\Livewire\Company;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Modules\Blog\Entities\Post;
use Livewire\WithPagination;
use App\Modules\Company\Model\Company;

class Crud extends Component
{
    use WithPagination;

    public $name, $email, $phone, $password, $data, $add_edit_view = 0, $index_view = 1, $id;
    public function ResetInput()
    {
        $this->name = null;
        $this->email = null;
        $this->phone = null;
        $this->password = null;
    }
    public function create()
    {
        unset($this->id);
        $this->ResetInput();
        $this->add_edit_view = 1;
        $this->index_view = 0;
    }
    public function index()
    {
        $this->add_edit_view = 0;
        $this->index_view = 1;
    }
    public function delete($id)
    {
        Company::find($id)->delete();
        $this->add_edit_view = 0;
        $this->index_view = 1;
    }
    public function edit($id)
    {
        $this->ResetInput();
        $table = Company::find($id);
        $this->id = $id;
        $this->name = $table->name;
        $this->email = $table->email;
        $this->phone = $table->phone;
        $this->add_edit_view = 1;
        $this->index_view = 0;
    }
    public function store()
    {
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ];
        $this->validate($rules);
        $table = new Company;
        $table->name = $this->name;
        $table->email = $this->email;
        $table->phone = $this->phone;
        $table->password = Hash::make($this->password);
        $table->save();
        $this->add_edit_view = 0;
        $this->index_view = 1;
    }
    public function update()
    {
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ];
        $this->validate($rules);
        $table = Company::find($this->id);
        $table->name = $this->name;
        $table->email = $this->email;
        $table->phone = $this->phone;
        if ($this->password) {
            $table->password = Hash::make($this->password);
        }
        $table->save();
        $this->add_edit_view = 0;
        $this->index_view = 1;
    }
    public function render()
    {
        $this->data = Company::all();
        return view('modules::Company.views.livewire.company.crud');
    }
}
