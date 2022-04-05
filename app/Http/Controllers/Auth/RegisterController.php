<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStore;
use App\Http\Requests\UserStoreRequest;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    
    use RegistersUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest');
    }

 
 
    protected function create(array $data)
    {   
        $path = '/img/users/default.png';

        if (isset($data['photo'])) {
            $path = $data['photo']->store('img\users','public');
        }
          
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone_number' => $data['phone_number'],
            'photo' => $path ,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'login' => $data['login'],
        ]);
    }
}
