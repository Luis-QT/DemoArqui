<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Faculty;
use App\School;

class SchoolController extends Controller
{
    public function index()
    {
    	$faculties = Faculty::all();
      $schools = School::all();

	    $new = view('admin.md_schools.new',[
	    	'faculties' => $faculties,
	    ]);

    	$edit = view('admin.md_schools.edit',[
          'school' => $schools->first(),
          'faculties' => $faculties,
      ]);

    	$show = view('admin.md_schools.show',[
          'schools' => $schools,
      ]);

    	return view('admin.md_schools.index',[
    		'new' => $new,
    		'edit' => $edit,
    		'show' => $show,
    	]);
    }

    public function store(Request $request)
    {
        $schools = School::all()->where('name',$request->name);

        if($schools->isNotEmpty()){
          $school = $schools->first();
          $obj = (object) array('caso' => 1, 'titulo' => 'Nombre Repetido !!' ,'texto' => "Ya existe una escuela con el nombre ".$school->name);
          return json_encode($obj);
        }else{
          $school = School::create([
             'name' => $request->name,
             'faculty_id' => $request->facultyId,
          ]);
          $obj = (object) array('caso' => 0, 'titulo' => 'Operación Exitosa !!' ,'texto' => "Se ha creado la escuela ");
          return json_encode($obj);
        }
    }

    public function edit($id)
    {
      $faculties = Faculty::all();
      $school = School::find($id);

      return  view('admin.md_schools.edit', [
         'school' => $school,
         'faculties' => $faculties
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
      $school = School::find($request->id);
      $schools = School::all()->where('name',$request->name);

      //Existe una escuela con el mismo nombre
      if($schools->isNotEmpty()){
        //Si tal escuela es la misma que se intenta editar , pasa
        if($schools->first()->id == $request->id){
          $school->name=$request->name;
          $school->faculty_id = $request->facultyId;
          $school->save();
          $obj = (object) array('caso' => 0, 'titulo' => 'Operación Exitosa !!' ,'texto' => "Se ha editado la escuela ");
          return json_encode($obj);
        }else{//si no error
          $aux = $schools->first();
          $obj = (object) array('caso' => 1, 'titulo' => 'Nombre Repetido !!' ,'texto' => "Ya existe una escuela con el nombre ".$aux->name);
          return json_encode($obj);
        }
      }else{
        //Si no existe una escuela con tal nombre , no hay problema
        $school->name=$request->name;
        $school->faculty_id = $request->facultyId;
        $school->save();
        $obj = (object) array('caso' => 0, 'titulo' => 'Operación Exitosa !!' ,'texto' => "Se ha editado la escuela ");
        return json_encode($obj);
      }
    }

    //Funcion valida todos los casos de la escuela
    //La primera vez que el admin pulsa el boton de eliminar llama a esta por ajax
    public function destroyValidation($id)
    {
        $school = School::find($id);

        //Caso donde la escuela es Ingenieria de Sistemas
        if($id == 1){
          $obj = (object) array('caso' => 1, 'titulo' => 'Operación no Procede !!' ,'texto' => "Por regla general , la escuela ".$school->name." no puede ser eliminada.\n Facultad : ".$school->faculty->name);
          return json_encode($obj);
        }
        //Caso donde la escuela es Ingenieria de Software
        if($id == 2){
          $obj = (object) array('caso' => 2, 'titulo' => 'Operación no Procede !!' ,'texto' => "Por regla general , la escuela ".$school->name." no puede ser eliminada.\n Facultad : ".$school->faculty->name);
          return json_encode($obj);
        }

        $users = $school->users;
        //Caso donde la escuela tiene relacion con usuarios
        if($users->isNotEmpty()){
          $txt = "La escuela ".$school->name." tiene relación con usuarios";

          foreach ($users as $i => $user) {
            $txt = $txt."\nUSUARIO ".($i+1)."\nNombre : ".$user->name." ".$user->lastName;
            $txt = $txt."\nCodigo : ".$user->code;
            if($i>=2){
              $txt = $txt."\n\n TOTAL DEMÁS USUARIOS ".($users->count()-$i-1);
              break;
            }
          }

          $obj = (object) array('caso' => 3,'titulo' => 'Operación no Procede !!', 'texto' => $txt);
          return json_encode($obj);
        }

        $obj = (object) array('caso' => 0, 'titulo' => 'Estas Seguro?' ,'texto' => 'Se eliminará la escuela '.$school->name.'!. Facultad : '.$school->faculty->name);

        return json_encode($obj);
    }

    //Esta funcion es llamada cuando el admin confirma el proceso de eliminacion
    //Tiene tambien la validacion , ya que el codigo jquery(ajax) pudo ser modificado desde el navegador , por eso tiene que pasar por otra validacion
    public function destroy($id)
    {
        $school = School::find($id);

        //Caso donde la escuela es Ingenieria de Sistemas
        if($id == 1){
          $obj = (object) array('caso' => 1, 'titulo' => 'Operación no Procede !!' ,'texto' => "Por regla general , la escuela ".$school->name." no puede ser eliminada.\n Facultad : ".$school->faculty->name);
          return json_encode($obj);
        }
        //Caso donde la escuela es Ingenieria de Software
        if($id == 2){
          $obj = (object) array('caso' => 2, 'titulo' => 'Operación no Procede !!' ,'texto' => "Por regla general , la escuela ".$school->name." no puede ser eliminada.\n Facultad : ".$school->faculty->name);
          return json_encode($obj);
        }

        $users = $school->users;
        //Caso donde la escuela tiene relacion con usuarios
        if($users->isNotEmpty()){
          $txt = "La escuela ".$school->name." tiene relación con usuarios";

          foreach ($users as $i => $user) {
            $txt = $txt."\nUSUARIO ".($i+1)."\nNombre : ".$user->name." ".$user->lastName;
            $txt = $txt."\nCódigo : ".$user->code;
            if($i>=2){
              $txt = $txt."\n\n TOTAL DEMÁS USUARIOS ".($users->count()-$i-1);
              break;
            }
          }

          $obj = (object) array('caso' => 3,'titulo' => 'Operación no Procede !!', 'texto' => $txt);
          return json_encode($obj);
        }

        $obj = (object) array('caso' => 0, 'titulo' => 'Eliminado!"' ,'texto' => 'La escuela ha sido eliminada.');
        $school->delete();
        return json_encode($obj);
    }

}
