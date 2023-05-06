<?php

namespace App\Http\Repositories\Admin;

use App\Http\Interfaces\Admin\UserInterface;
use App\Http\Traits\UserTrait;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserRepository implements UserInterface
{
    use UserTrait;
    private $userModel;
    public function __construct(User $user)
    {
        $this->userModel = $user;
    }

    public function index()
    {
        $users = $this->getUsers();
        return view('admin.pages.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.pages.user.create');
    }

    public function store($request)
    {
        $this->userModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Alert::toast('User Was Created Successfully','success');
        return redirect(route('admin.user.index'));
    }

    public function delete($request): RedirectResponse
    {
        $this->findUserById($request->id)->delete();
        Alert::toast('User Was Deleted Successfully','success');
        return back();
    }

    public function edit($request)
    {
        $user = $this->findUserById($request->id);
        return view('admin.pages.user.edit', compact('user'));
    }

    public function update($request)
    {
        $user = $this->findUserById($request->id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $user->password
        ]);

        Alert::toast('User Was Updated Successfully','success');
        return redirect(route('admin.user.index'));
    }
}
