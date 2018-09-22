<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Faculty;
use App\School;

class FacultyController extends Controller
{
    public function index()
    {	
    	$faculties = Faculty::all();

	    $new = view('admin.md_faculties.new');

    	$edit = view('admin.md_faculties.edit',[
          'faculty' => $faculties->first(),
      ]);

    	$show = view('admin.md_faculties.show',[
          'faculties' => $faculties,
      ]);

    	return view('admin.md_faculties.index',[
    		'new' => $new,
    		'edit' => $edit,
    		'show' => $show,
    	]);
    }

    public function store(Request $request)
    {   

        $faculties = Faculty::all()->where('name',$request->name);

        if($faculties->isNotEmpty()){
          $faculty = $faculties->first();
          $obj = (object) array('caso' => 1, 'titulo' => 'Nombre Repetido !!' ,'texto' => "Ya existe una facultad con el nombre ".$school->name);
          return json_encode($obj);
        }else{
          $faculty = Faculty::create([
             'name' => $request->name,
          ]);
          $obj = (object) array('caso' => 0, 'titulo' => 'Operación Exitosa !!' ,'texto' => "Se ha creado la facultad ");
          return json_encode($obj);
        }
    }

    public function edit($id)
    { 
      $faculty = Faculty::find($id);

      return  view('admin.md_faculties.edit', [
         'faculty' => $faculty,
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $faculty = Faculty::find($request->id);
      $faculties = Faculty::all()->where('name',$request->name);

      //Existe una facultad con el mismo nombre
      if($faculties->isNotEmpty()){
        //Si tal facultad es la misma que se intenta editar , pasa
        if($faculties->first()->id == $request->id){
          $faculty->name=$request->name;
          $faculty->save();
          $obj = (object) array('caso' => 0, 'titulo' => 'Operación Exitosa !!' ,'texto' => "Se ha editado la facultad ");
          return json_encode($obj);
        }else{//si no error
          $aux = $faculties->first();
          $obj = (object) array('caso' => 1, 'titulo' => 'Nombre Repetido !!' ,'texto' => "Ya existe una facultad con el nombre ".$aux->name);
          return json_encode($obj);
        }
      }else{
        //Si no existe una facultad con tal nombre , no hay problema
        $faculty->name=$request->name;
        $faculty->save();
        $obj = (object) array('caso' => 0, 'titulo' => 'Operación Exitosa !!' ,'texto' => "Se ha editado la facultad ");
        return json_encode($obj);
      }
    }

    //Funcion valida todos los casos de la facultad
    //La primera vez que el admin pulsa el boton de eliminar llama a esta por ajax
    public function destroyValidation($id)
    {
        $faculty = Faculty::find($id);

        //Caso donde la facultad es Ingenieria de Sistemas e Informatica
        if($id == 1){
          $obj = (object) array('caso' => 1, 'titulo' => 'Operación no Procede !!' ,'texto' => "Por regla general , la facultad ".$faculty->name." no puede ser eliminada.");
          return json_encode($obj);
        }

        $schools = $faculty->schools;
        //Caso donde la facultad tiene relacion con escuelas
        if($schools->isNotEmpty()){
          $txt = "La facultad ".$faculty->name." tiene relación con escuelas";

          foreach ($schools as $i => $school) {
            $txt = $txt."\nESCUELA ".($i+1)."\nNombre : ".$school->name;
            if($i>=2){
              $txt = $txt."\n\n TOTAL DEMÁS ESCUELAS ".($schools->count()-$i-1);
              break;
            }
          }

          $obj = (object) array('caso' => 2,'titulo' => 'Operación no Procede !!', 'texto' => $txt);
          return json_encode($obj);
        }
        
        $obj = (object) array('caso' => 0, 'titulo' => 'Estas Seguro?' ,'texto' => 'Se eliminará la facultad '.$faculty->name);

        return json_encode($obj);
    }

    //Esta funcion es llamada cuando el admin confirma el proceso de eliminacion
    //Tiene tambien la validacion , ya que el codigo jquery(ajax) pudo ser modificado desde el navegador , por eso tiene que pasar por otra validacion
    public function destroy($id)
    {
        $faculty = Faculty::find($id);

        //Caso donde la facultad es Ingenieria de Sistemas e informatica
        if($id == 1){
          $obj = (object) array('caso' => 1, 'titulo' => 'Operación no Procede !!' ,'texto' => "Por regla general , la escuela ".$faculty->name." no puede ser eliminada.\n Facultad : ".$school->faculty->name);
          return json_encode($obj);
        }

        $schools = $faculty->schools;
        //Caso donde la facultad tiene relacion con escuelas
        if($schools->isNotEmpty()){
          $txt = "La facultad ".$faculty->name." tiene relación con escuelas";

          foreach ($schools as $i => $school) {
            $txt = $txt."\nESCUELA ".($i+1)."\nNombre : ".$school->name;
            if($i>=2){
              $txt = $txt."\n\n TOTAL DEMÁS ESCUELAS ".($schools->count()-$i-1);
              break;
            }
          }

          $obj = (object) array('caso' => 2,'titulo' => 'Operación no Procede !!', 'texto' => $txt);
          return json_encode($obj);
        }
        
        $obj = (object) array('caso' => 0, 'titulo' => 'Eliminado!"' ,'texto' => 'La facultad ha sido eliminada.');
        $faculty->delete();
        return json_encode($obj);
    }

}
