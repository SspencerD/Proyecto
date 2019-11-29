<?php

namespace App\Http\Controllers\Admin;

use App\Region;
use App\Country;
use App\City;
use App\Province;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(8);
        
        return view('admin.users.index')->with(compact('users')); //trae las vistas de usuarios.
      

    }
    public function create()
    {
        $paises =Country::orderBy('name')->get();
        $roles = User::orderBy('roles')->get();
        return view('admin.users.create')->with(compact('roles','paises'));

    }
    public function store(Request $request)
    {
        $mensaje= [
            'name.required' => 'Es necesario agregar un nombre del personal',
            'name.min' => ' Es necesario un minimo de 4 palabras.',
            'lastname.required' => 'Es necesario agregar un apellido',
            'lastname.min' => 'es necesario un minimo de 3 palabras.',
            'phone.required' => 'es necesario agregar un numero',
            'phone.min' => 'es necesario un min de 8 numeros.',
            'email.required' => 'Es necesario un correo.',
            'address.required' => 'Es necesario una dirección',
            'password.required' => 'Es necesario una contraseña.'
            



        ];
        $rules= [
            'name' => 'required', 'string', 'max:60',
            'email' => 'required', 'string', 'email', 'max:60', 'unique:users',
            'password' => 'required', 'string', 'min:6', 'confirmed',
            'lastname' => 'required' , 'string', 'max:60',
            'phone'=>'required', 'numeric',
            'address'=>'required','string', 'max:200',

        ];

        //vamos a registar los usuarios agregdos.

        $this->validate($request , $rules, $mensaje);

    

        $user= new User();
        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->phone = $request->input('phone');
        $user->roles = $request->input('roles');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
        $user->country_id =$request->country_id;
        $user->region_id = $request->region_id;
        $user->city_id = $request->city_id;
        $user->province_id = $request->province_id;
        $user->dni = $request->input('dni');
        $user->raesonsocial = $request->input('raesonsocial');
        $user->activity = $request->input('activity');
        $user->saleman = $request->input('saleman');
        $user->creditactive = $request->input('creditactive');
        $user->password =Hash::make($request->input['password']);
        $user->save();

        return redirect('/admin/users')->with('notification','Usuario creado exitosamente.');

    }
    public function edit($id)
    {
        $roles = User::orderBy('roles')->get();
        $paises = Country::orderBy('name')->get();
        $users = User::find($id);
        return view('admin.users.edit')->with(compact('paises','users','roles'));


    }
    public function update(Request $request , $id)
    {
        $mensaje= [
            'name.required' => 'Es necesario agregar un nombre del personal',
            'name.min' => ' Es necesario un minimo de 4 palabras.',
            'lastname.required' => 'Es necesario agregar un apellido',
            'lastname.min' => 'es necesario un minimo de 3 palabras.',
            'phone.required' => 'es necesario agregar un numero',
            'phone.min' => 'es necesario un min de 8 numeros.',
            'email.required' => 'Es necesario un correo.',
            'address.required' => 'Es necesario una dirección',
            'password.required' => 'Es necesario una contraseña.'
        ];

        $rules= [
            'name' => 'required', 'string', 'max:60',
            'email' => 'required', 'string', 'email', 'max:60', 'unique:users',
            'password' => 'required', 'string', 'min:6', 'confirmed',
            'lastname' => 'required' , 'string', 'max:60',
            'phone'=>'required', 'numeric',
            'address'=>'required','string', 'max:200',

        ];

        //vamos a registar los usuarios agregdos.

        $this->validate($request , $rules, $mensaje);

        $user= User::find($id);
        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->phone = $request->input('phone');
        $user->roles = $request->input('roles');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
        $user->country_id =$request->country_id;
        $user->region_id = $request->region_id;
        $user->city_id = $request->city_id;
        $user->province_id = $request->province_id;
        $user->dni = $request->input('dni');
        $user->raesonsocial = $request->input('raesonsocial');
        $user->activity = $request->input('activity');
        $user->saleman = $request->input('saleman');
        $user->creditactive = $request->input('creditactive');
        $user->password =Hash::make($request->input['password']);
        $user->save();

        return redirect('/admin/users')->with('notification','Usuario Modificado exitosamente.');


    }
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete($id);

        return back()->with('notification','Usuario Eliminado correctamente');

    }
    public function byRegion($id)
    {
        return Region::where('country_id',$id)->get();
    }
    public function byCity($id)
    {
        return City::where('region_id',$id)->get();
    }
    public function byProvince($id)
    {
        return Province::where('city_id',$id)->get();
    }

}
