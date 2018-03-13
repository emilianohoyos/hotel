<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;
use App\Models\pais;
use App\Models\ciudades;
use App\Models\nivelacademico;
use DB;



class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function informacionUsuarioview(){
        $pais=pais::all();
        $ciudad=ciudades::all();
        $nivelacademico=nivelacademico::all();

        return view('create')->with('pais',$pais)->with('ciudad',$ciudad)->with('nivelacademico',$nivelacademico);
    }
    public function registrarusuario(Request $request){
        $usuario=new usuarios;
        $usuario->nombres=$request->nombres;
        $usuario->correo=$request->email;
        $usuario->paises_Codigo=$request->pais;
        $usuario->ciudades_idCiudades=$request->ciudad;
        $usuario->nivelacademico_idnivelacademico=$request->nivelacademico;
        $usuario->telefono=$request->telefono;
        $usuario->save();

                return view('welcome')->with('mensaje', 'su informacion ha sido guardada con exito');
    }
    public function consultarregistroview(){
        return view('/consulta');
    }
    public function consultarregistro(Request $request){
        $usuario=usuarios::select('usuarios.nombres','usuarios.correo as email','paises.Pais as pais', 'nivelacademico.descripcion as nivelacademico','ciudades.Ciudad as ciudad', 'usuarios.telefono')->join('paises','usuarios.paises_Codigo','=','paises.Codigo')
                            ->join('ciudades', 'usuarios.ciudades_idCiudades','=','ciudades.idCiudades')
                            ->join('nivelacademico','usuarios.nivelacademico_idnivelacademico','=','idnivelacademico')
                            ->where('usuarios.correo',$request->email)->get();
        if(count($usuario)>0) {
            return view('consulta')->with('consulta', $usuario);
        }else{
            return view('consulta')->with('error', 'usuario no encontrado');
        }
    }

    public function eliminarregistro(Request $request){
        $usuario=usuarios::where('correo','=',$request->correo)->delete();

        return redirect('welcome');

    }

    public function consultarusuarios(){
        $usuario=usuarios::select('usuarios.idusuarios','usuarios.nombres','usuarios.correo as email','paises.Pais as pais', 'nivelacademico.descripcion as nivelacademico','ciudades.Ciudad as ciudad', 'usuarios.telefono')->join('paises','usuarios.paises_Codigo','=','paises.Codigo')
            ->join('ciudades', 'usuarios.ciudades_idCiudades','=','ciudades.idCiudades')
            ->join('nivelacademico','usuarios.nivelacademico_idnivelacademico','=','idnivelacademico')
            ->get();

        return view('/usuarios')->with('usuario', $usuario);
    }
}
