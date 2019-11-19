<?php

namespace App\Http\Controllers\Auth;

use App\City;
use App\Region;
use App\Country;
use App\User;
use App\Http\Controllers\Controller;
use App\Province;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\http\Request as Req;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/perfil';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'lastname' => ['required' , 'string', 'max:255'],
            'dni' => ['required','string','max:14','unique:users'],
            'raesonsocial' =>['string', 'min:10'],
            'activity' => ['required', 'string', 'min:10'],
            'phone'=>['required', 'numeric'],
            'address'=>['required','string', 'max:100'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'lastname' => $data['lastname'],
            'dni' => $data['dni'],
           'raesonsocial' => $data['raesonsocial'],
           'activity' => $data['activity'],
           'phone' => $data['phone'],
           'address' => $data['address'],
           'country_id' => $data['country'],
           'region_id' =>$data['region'],
           'city_id' =>$data['city'],
           'province_id' =>$data['province'],
        ]);
    }
    
    public function showRegistrationForm(Req $request )
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $paises = Country::orderBy('name')->get();
        
        return view('auth.register')->with(compact('name','email','paises'));
        
    }
    public function byRegion($id)
    {
        return Region::where('country_id',$id)->get();
    }
    public function byCity($id)
    {
        return City::where('region_id',$id )->get();
    }
    public function byComuna($id)
    {
        return Province::where('city_id',$id )->get();
    }


}
