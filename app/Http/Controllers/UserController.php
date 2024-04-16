<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Perfil;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }
    /**
     * List Users
     *
     * @return void
     */
    public function lista(Request $request)
    {
        //Verificando Permisos
        //$view['permiso'] = $request->session()->get('perfil');
        //if ($this->seguridad( array($view['permiso']), array(1))) {

            $user = Auth::user();
            $idUser = $user->id;

            $listaUsuarios = User::orderby('name','DESC')->get();

            $view['idUser'] = $idUser;
            $view['listUsers'] = $listaUsuarios;
            //$view['nombrecorto'] = $request->session()->get('nombrecorto');

            return view('user/list', $view);
        //}
        //else{
        //    return redirect('/');
        //}
    }
    /**
     * Create Users
     *
     * @return void
     */
    public function createUser(Request $request)
    {
        //Verificando Permisos
        $view['permiso'] = $request->session()->get('perfil');
        if ($this->seguridad( array($view['permiso']), array(1))) {
            $view['listProfile'] = Perfil::orderby('nombre','desc')->get();
            $view['nombrecorto'] = $request->session()->get('nombrecorto');
            return view('user/create', $view);
        }
        else{
            return redirect('/');
        }
    }
    /**
     * Create-Post New Users
     *
     * @return void
     */
    public function createUserPost(UserRequest $request)
    {
        //Verificando Permisos
        $view['permiso'] = $request->session()->get('perfil');
        if ($this->seguridad( array($view['permiso']), array(1))) {
            $passwordUsuario=Hash::make($request->password);
            $newUser = new User();
            $newUser->name=$request->name;
            $newUser->email=$request->email;
            $newUser->password=$passwordUsuario;
            $newUser->perfiles_id=$request->perfiles_id;
            $newUser->estado='activo';
            $newUser->save();
            flash('Se ha creado el usuario con éxito!')->success();
            return redirect('listUser');
        }
        else{
            return redirect('/');
        }
    }
    /**
     * Edit Users
     *
     * @return void
     */
    public function editUser($pIdUser, Request $request)
    {
        //Verificando Permisos
        $view['permiso'] = $request->session()->get('perfil');
        if ($this->seguridad( array($view['permiso']), array(1))) {
            //Buscando el Usuario
            $view['infoUser'] = User::find($pIdUser);
            $view['listProfile'] = Perfil::orderby('nombre','desc')->get();
            $view['nombrecorto'] = $request->session()->get('nombrecorto');
            return view('user/edit', $view);
        }
        else{
            return redirect('/');
        }
    }
    /**
     * Edit-Post Users
     *
     * @return void
     */
    public function editUserPost(UserRequest $request)
    {

        //Verificando Permisos
        $view['permiso'] = $request->session()->get('perfil');
        if ($this->seguridad( array($view['permiso']), array(1))) {

            $infoUser = User::find($request->hddIdUser);
            $infoUser->name=$request->name;
            $infoUser->email=$request->email;
            if ($request->password != 'jddjkj32232dksj'){
                $infoUser->password=Hash::make($request->password);
            }
            $infoUser->perfiles_id=$request->perfiles_id;
            $infoUser->estado=$request->estado;
            $infoUser->save();
            flash('Se ha modificado el usuario con éxito!')->success();
            return redirect('listUser');
        }
        else{
            return redirect('/');
        }
    }
    /**
     * Seguridad
     *
     * @return void
     */
    private function seguridad($perfil = array(), $permisoIds = array()) {
        return true;
        if (!empty($permisoIds) && empty(array_intersect($perfil, $permisoIds))) {
            return false;
        }
        else{
            return true;
        }
    }
}
