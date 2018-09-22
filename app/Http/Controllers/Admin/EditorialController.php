<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Editorial;
use Redirect;
use DateTime;

class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd(date(DATE_W3C));
        //$fechaDebo = new DateTime();
        //$fechaActual = new DateTime();
        //dd($hoy->modify("20:00"));
        //dd($hoy->diff($manana)->format("%R"));
        //dd($hoy < $manana);
        //dd(date(DATE_W3C, strtotime($hoy,"20:00")));
        //Para probar mientras tanto que no existe los permisos o roles.
        $puedeVer = true;
        $puedeEditar = true;
        $puedeCrear = true;
        $puedeEliminar = true;

        $editoriales = Editorial::all();

        $vistaCrear=null;
        $vistaVer=null;

        if($puedeCrear){
            $vistaCrear = view('admin.md_editorials.new');
        }
        if($puedeVer){
            $vistaVer = view('admin.md_editorials.show',[
                'editoriales' => $editoriales,
            ]);
        }
        

        return view('admin.md_editorials.index',[
            'vistaCrear' => $vistaCrear,
            'vistaVer' => $vistaVer
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
                'name' => 'required | unique:editorials',
                'categoria' => 'required'
            ]);
        
        $editorial = Editorial::create([
           'name' => $request->name
        ]);
        $categoriasPedidas = $request->categoria;

        foreach ($categoriasPedidas as $categoriaPedida) {
           $editorial->categories()->attach($categoriaPedida+1);
        }
        return redirect('admin/editorials')->with('info','Se ha creado exitosamente la editorial.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$parametro,$a="---")
    {
        $puedeEditar = true;
        $vistaEditar = null;

        $editorial = Editorial::find($id);

        if($puedeEditar){
            
            $mensaje = "";
            $bandera[0] = false;
            $bandera[1] = false;
            $bandera[2] = false;
            if($a=="---"){
                foreach($editorial->categories as $categoria){
                    $bandera[($categoria->id)-1]=true;
                }
            }else{
                $dato = explode(",", $a); 
                for($i=1;$i<count($dato)-1;$i++){
                    $bandera[$dato[$i]]=true;
                }
            }
            

            if($bandera[0]==true){
                $mensaje = $mensaje."<option value='0'id='opcion20' selected>Libro</option>";
            }else{
                $mensaje = $mensaje."<option value='0'id='opcion20'>Libro</option>";
            }
            if($bandera[1]==true){
                $mensaje = $mensaje."<option value='1'id='opcion21' selected>Tesis o Informe</option>";
            }else{
                $mensaje = $mensaje."<option value='1'id='opcion21'>Tesis o Informe</option>";
            }
            if($bandera[2]==true){
                $mensaje = $mensaje."<option value='2'id='opcion22' selected>Revista</option>";
            }else{
                $mensaje = $mensaje."<option value='2'id='opcion22'>Revista</option>";
            }

            if($a=="---"){
                $vistaVer = view('admin.md_editorials.edit')->with('editorial', $editorial)->with('mensaje', $mensaje)->with('error', $parametro)->with('nombre', $editorial->name);
            }else{
                $vistaVer = view('admin.md_editorials.edit')->with('editorial', $editorial)->with('mensaje', $mensaje)->with('error', $parametro)->with('nombre', $dato[0]);
            }
            

            
        }

        return $vistaVer;
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

        $this->validate($request,[
                'name2' => 'required',
                'categoria2' => 'required'
        ]);

        
        $this->validate($request,[
                'name2'  =>  "unique:editorials,name,$id"
        ]);

        $editorial = Editorial::find($id);

        $editorial->name=$request->name2;

        $editorial->categories()->detach();

        $categoriasPedidas = $request->categoria2;

        foreach ($categoriasPedidas as $categoriaPedida) {
           $editorial->categories()->attach($categoriaPedida+1);
        }
        return redirect()->intended('/admin/editorials')->with('info','Se ha editado exitosamente a la editorial.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $editorial = Editorial::find($id);

        /*   POR AHORA ESTA COMENTADO HASTA QUE HAYA RELACIONES CON LIBROS; TESIS; REVISTAS

        $cadena="";
        return("Error");
        if($editorial>books!=null){
            foreach($editorial->books as $libro){
                $cadena=$cadena.$libro->title."\n";
            }
        }
        
        if($editorial->theses !=null){
            foreach($editorial->theses as $tesis){
                $cadena=$cadena.$tesis->title."\n";
            }
        }
        if($editorial->magazines!=null){
            foreach($editorial->magazines as $revista){
                $cadena=$cadena.$revista->title."\n";
            }
        }

        if($cadena!=""){
            return $cadena;
        }
        */

        $editorial->categories()->detach();
        $editorial->delete();
        return "true";
    }

    public function canDestroy($id)
    {
        $editorial = Editorial::find($id);

        /*   POR AHORA ESTA COMENTADO HASTA QUE HAYA RELACIONES CON LIBROS; TESIS; REVISTAS

        $cadena="";
        return("Error");
        if($editorial->books!=null){
            foreach($editorial->books as $libro){
                $cadena=$cadena.$libro->title."\n";
            }
        }
        
        if($editorial->theses !=null){
            foreach($editorial->theses as $tesis){
                $cadena=$cadena.$tesis->title."\n";
            }
        }
        if($editorial->magazines!=null){
            foreach($editorial->magazines as $revista){
                $cadena=$cadena.$revista->title."\n";
            }
        }

        if($cadena!=""){
            return $cadena;
        }
        */

        return "true";
    }
    public function pedirExportacion(){
        $editoriales = Editorial::all();

        $mpdf = new \Mpdf\Mpdf();
        $cadena = " <!DOCTYPE html>
                    <html lang='en'>
                    <head>
                        <meta charset='utf-8'>
                        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
                        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css' integrity='sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp' crossorigin='anonymous'>
                        <title>Título</title>
                    </head>
                    <body>";

        $cadena .= "<h1>Lista de Editoriales</h1><table id='dataTable' class='table table-hover'>
              <thead>
                  <tr>
                      <th class='text-center'>#</th>
                      <th>Nombre</th>
                      <th>Categorias</th>
                  </tr>
              </thead>
              <tbody>"; 
        foreach($editoriales as $i => $editorial){
            $cadena .= "<tr><td class='text-center'>".($i+1)."</td>
                      <td>". $editorial->name ."</td>
                      <td>";
                      foreach($editorial->categories as $i => $categoria){
                        if($i>0){
                            $cadena .= " , ";
                        }else{
                            $cadena .= $categoria->name;
                        }
                      }
                      $cadena .="</td></tr>";
        }

        $cadena .= "</tbody>
            </table>";  

        $cadena .= "
                    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
                  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>
                  </body>
                  </html>
                  ";
        $mpdf->WriteHTML($cadena);
        $mpdf->Output();
    }
}
