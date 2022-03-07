<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\CreateUserRequest;

class UserController extends Controller
{
    protected $userModel;

    public function __construct(User $user)
    {
        $this->userModel = $user;
    }
    /**
     * Show list users
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notify = session()->get('status') ?? '';
        return view('users.list', [
            'notify' => $notify,
            'users'  => $this->userModel->getUsers()
        ]);
    }

    /**
     * Show the form to create a user
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a new user
     *
     * @param  \App\Http\Requests\CreateUserRequest  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        $this->userModel->createUser($request);
        session()->flash('status', 'Thêm người dùng thành công');
        return redirect()->route('users.index');
    }
}