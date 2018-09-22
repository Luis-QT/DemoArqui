<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Stand as Stand;
use App\User as User;

class StandController extends Controller
{

    public function index()
      {
        $stands = Stand::all();

        $new = view('admin.md_stands.new',[
          'stands' => $stands,
          'stand' => null

        ]);

        $edit = view('admin.md_stands.edit',[
            'stand' => null,
            'stands' => $stands,
        ]);

        $show = view('admin.md_stands.show',[
            'stands' => $stands,
            'stand' => null
        ]);
        //Verificar permisos del empleado
        return view('admin.md_stands.index',[
         'new' => $new,
         'edit' => $edit,
         'show' => $show,
       ]);
      }

      public function store(Request $request)
      {
        $stands = Stand::all()->where('name',$request->name);
        if($stands->isNotEmpty()){
          $stand = $stands->first();
          $obj = (object) array('caso' => 1, 'titulo' => 'Nombre Repetido !!' ,'texto' => "Ya existe un stand con el nombre ".$stand->name);
          return json_encode($obj);
        }else{
          $stand = Stand::create([
            'name' => $request['name'],
            'type' => $request->type,
            'state' => $request['state'],
            'level' => $request['level'],
          ]);
          $obj = (object) array('caso' => 0, 'titulo' => 'Operación Exitosa !!' ,'texto' => "Se ha creado el Stand ".$request['name']);
          return json_encode($obj);
        }

      }

      public function edit($id)
      {

          $stand = Stand::find($id);
          return  view('admin.md_stands.edit', [
             'stand' => $stand,
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

            $stand = Stand::find($request->id);
            $stands = Stand::all()->where('name',$request->name);

            if($stands->isNotEmpty()){
              if($stands->first()->id == $request->id){
                $stand->name = $request->name;
                $stand->type = $request->type;
                $stand->state = $request->state;
                $stand->level = $request->level;

                $stand->save();
                  $obj = (object) array('caso' => 0, 'titulo' => 'Operación Exitosa !!' ,'texto' => "Se ha guardado el Stand ".$stand->name);
                return json_encode($obj);
              }else{//si no error
                $aux = $stands->first();
                $obj = (object) array('caso' => 1, 'titulo' => 'Nombre Repetido !!' ,'texto' => "Ya existe un stand con el nombre ".$stand->name);
                return json_encode($obj);
              }
            }else{
              $stand->name = $request->name;
              $stand->type = $request->type;
              $stand->state = $request->state;
              $stand->level = $request->level;

              $stand->save();
              $obj = (object) array('caso' => 0, 'titulo' => 'Operación Exitosa !!' ,'texto' => "Se ha guardado el stand".$stand->name);
              return json_encode($obj);
            }

      }

      /**
       * Remove the specified resource from storage.
       *
       * @param  int  $id
       * @return \Illuminate\Http\Response
       */
      public function destroy($id)
      {

            $stand = Stand::find($id);
            $bookCopies = $stand->bookCopies;
            $theses = $stand->bookCopies;
            $magazines = $stand->bookCopies;
            //Caso 1 donde tiene libro incluido
            if($bookCopies->isNotEmpty()){
              $text = obtenerRelaciones($bookCopies,"libro");
              $obj = (object) array('caso' => '1', 'titulo' => 'Operación no Procede !!' ,'texto' => "Por regla general , el stand ".$stand->name." no puede ser eliminada porque contiene ejemplares de libro dentro",'text' => $text);
              return json_encode($obj);
            }else
            //Caso 2 donde la escuela es Ingenieria de Software
            if($theses->isNotEmpty()){
              $text = obtenerRelaciones($bookCopies,"thesis|informe");
              $obj = (object) array('caso' => '2', 'titulo' => 'Operación no Procede !!' ,'texto' => "Por regla general , el stand ".$stand->name." no puede ser eliminada porque contiene tesis | informes dentro",'text' => $text);
                return json_encode($obj);
            }else
            //Caso 3 donde la escuela es Ingenieria de Software
            if($magazines->isNotEmpty()){
              $text = obtenerRelaciones($bookCopies,"revista");
              $obj = (object) array('caso' => '3', 'titulo' => 'Operación no Procede !!' ,'texto' => "Por regla general , el stand ".$stand->name." no puede ser eliminada porque contiene revistas dentro",'text' => $text);
                return json_encode($obj);
            }

            //En caso no ocurra ninguno de los casos anteriores
            $obj = (object) array('caso' => '0', 'titulo' => 'Estas Seguro?' ,'texto' => 'Se eliminará el stand '.$stand->name.'!. Tipo : '.$stand->type);
            $stand->delete();
            return json_encode($obj);
      }

      //Funcion que valida que el stand no contenga registros
      //La primera vez que el admin pulsa el boton de eliminar llama a esta por ajax
      public function destroyValidation($id)
      {
          $stand = Stand::find($id);
          $bookCopies = $stand->bookCopies;
          $theses = $stand->theses;
          $magazines = $stand->magazines;
          $txt = "";
          //Caso 1 donde tiene libro incluido
          if($bookCopies->isNotEmpty()){
            foreach ($bookCopies as $i => $bookCopie) {
              $txt = $txt."\nMaterial: ".($i+1)."\nNombre : ".$bookCopie->title;
              $txt = $txt."\nClasificación : ".$bookCopie->clasification;
              if($i>=2){
                $txt = $txt."\n\n TOTAL DEMÁS MATERIALES ".($bookCopies->count()-$i-1);
                break;
              }
            }
            $obj = (object) array('caso' => 1, 'titulo' => 'Operación no Procede !!' ,'texto' => "Por regla general , el stand ".$stand->name." no puede ser eliminada porque contiene ejemplares de libro dentro",'text' => $text);
            return json_encode($obj);
          }else
          //Caso 2 donde tiene tesis incluido
          if($theses->isNotEmpty()){
            foreach ($theses as $i => $these) {
              $txt = $txt."\nMaterial: ".($i+1)."\nNombre : ".$these->title;
              $txt = $txt."\nClasificación : ".$these->clasification;
              if($i>=2){
                $txt = $txt."\n\n TOTAL DEMÁS MATERIALES ".($theses->count()-$i-1);
                break;
              }
            }
            $obj = (object) array('caso' => 2, 'titulo' => 'Operación no Procede !!' ,'texto' => "Por regla general , el stand ".$stand->name." no puede ser eliminada porque contiene tesis | informes dentro: ".$txt);

              return json_encode($obj);
          }else
          //Caso 3 donde tiene revista incluido
          if($magazines->isNotEmpty()){
            foreach ($magazines as $i => $magazine) {
              $txt = $txt."\nMaterial: ".($i+1)."\nNombre : ".$magazine->title;
              $txt = $txt."\nVolumen : ".$magazine->volume;
              if($i>=2){
                $txt = $txt."\n\n TOTAL DEMÁS MATERIALES ".($magazines->count()-$i-1);
                break;
              }
            }
            $obj = (object) array('caso' => 3, 'titulo' => 'Operación no Procede !!' ,'texto' => "Por regla general , el stand ".$stand->name." no puede ser eliminada porque contiene revistas dentro",'text' => $text);
              return json_encode($obj);
          }

          //En caso no ocurra ninguno de los casos anteriores
          $obj = (object) array('caso' => 0, 'titulo' => 'Estas Seguro?' ,'texto' => 'Se eliminará el stand '.$stand->name.'!. Tipo : '.$stand->type);

          return json_encode($obj);
        }

      //Agregar esta funcion a una clase abstracta
      public function cambiaCadena($str){return intval(preg_replace('/[^0-9]+/', '', $str), 10);}


}
