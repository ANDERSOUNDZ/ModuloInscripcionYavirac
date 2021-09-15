<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postulante;
use App\Models\Profesor;

class PostulantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postulante = Postulante::get();
        return response()->json($postulante, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    public function storePostulante(Request $request){
        
        $postulante = new Postulante;
        $postulante->CEDULA = $request->CEDULA;
        $postulante->APELLIDOS = $request->APELLIDOS;
        $postulante->NOMBRES = $request->NOMBRES;
        $postulante->POS_NOTA = $request->POS_NOTA;
        $postulante->USU_FECHA_NAC = $request->USU_FECHA_NAC;
        $postulante->USU_NACIONALIDAD = $request->USU_NACIONALIDAD;
        $postulante->GENERO = $request->GENERO;
        $postulante->PROVINCIA_RESIDE = $request->PROVINCIA_RESIDE;
        $postulante->CANTON_RESIDE = $request->CANTON_RESIDE;
        $postulante->PARROQUIA_RESIDE = $request->PARROQUIA_RESIDE;
        $postulante->EMAIL = $request->EMAIL;
        $postulante->INS_TELEFONO = $request->INS_TELEFONO;
        $postulante->INS_CELULAR = $request->INS_CELULAR;
        $postulante->ETNIA = $request->ETNIA;
        $postulante->DISCAPACIDAD = $request->DISCAPACIDAD;
        $postulante->INSTANCIA_POSTULACION = $request->INSTANCIA_POSTULACION;
        $postulante->INSTANCIA_ASIGNACION = $request->INSTANCIA_ASIGNACION;
        $postulante->GRATUIDAD = $request->GRATUIDAD;
        $postulante->TIPO_INSTITUCION = $request->TIPO_INSTITUCION;
        $postulante->TIPO_FINANCIAMIENTO = $request->TIPO_FINANCIAMIENTO;

        $postulante->NUEVO_CORREO = $request->NUEVO_CORREO;
        $postulante->NUEVO_TELF_CONTACTO = $request->NUEVO_TELF_CONTACTO;
        $postulante->FECHA_CONTACTO = $request->FECHA_CONTACTO;
        $postulante->RESPONSABLES = $request->RESPONSABLES;
        $postulante->OBSERVACIONES = $request->OBSERVACIONES;
        $postulante->save();
        return response()->json([
            'message' => "Postulante creado.",
            'success' => true
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postulante = Postulante::find($id);
        return response()->json($postulante, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $postulante['CEDULA'] = $request['CEDULA'];
        $postulante['APELLIDOS'] = $request['APELLIDOS'];
        $postulante['NOMBRES'] = $request['NOMBRES'];
        $postulante['POS_NOTA'] = $request['POS_NOTA'];
        $postulante['USU_FECHA_NAC'] = $request['USU_FECHA_NAC'];
        $postulante['USU_NACIONALIDAD'] = $request['USU_NACIONALIDAD'];
        $postulante['GENERO'] = $request['GENERO'];
        $postulante['PROVINCIA_RESIDE'] = $request['PROVINCIA_RESIDE'];
        $postulante['CANTON_RESIDE'] = $request['CANTON_RESIDE'];
        $postulante['PARROQUIA_RESIDE'] = $request['PARROQUIA_RESIDE'];
        $postulante['EMAIL'] = $request['EMAIL'];
        $postulante['ETNIA'] = $request['ETNIA'];
        $postulante['DISCAPACIDAD'] = $request['DISCAPACIDAD'];
        $postulante['INSTANCIA_POSTULACION'] = $request['INSTANCIA_POSTULACION'];
        $postulante['INSTANCIA_ASIGNACION'] = $request['INSTANCIA_ASIGNACION'];
        $postulante['GRATUIDAD'] = $request['GRATUIDAD'];
        $postulante['TIPO_INSTITUCION'] = $request['TIPO_INSTITUCION'];
        $postulante['TIPO_FINANCIAMIENTO'] = $request['TIPO_FINANCIAMIENTO'];

        $postulante['NUEVO_CORREO'] = $request['NUEVO_CORREO'];
        $postulante['NUEVO_TELF_CONTACTO'] = $request['NUEVO_TELF_CONTACTO'];
        $postulante['FECHA_CONTACTO'] = $request['FECHA_CONTACTO'];
        $postulante['RESPONSABLES'] = $request['RESPONSABLES'];
        $postulante['OBSERVACIONES'] = $request['OBSERVACIONES'];
        Postulante::find($id)->update($postulante);
        return response()->json([
            'message' => "Postulante actualizado.",
            'success' => true
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $postulante = Postulante::find($id)->delete();
        return response()->json([
            'message' => "Postulante eliminado",
            'success' => true
        ], 200);
    }
}
