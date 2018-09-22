<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Magazine;
use App\MagazineSpecification;

use App\Author;
use App\Stand;
use App\Article;
use Redirect;

class MagazineController extends Controller
{
    
    public function index()
    {
        $revistas = Magazine::all();

        $autores = Author::onlyType('Revista');

        $stands = Stand::all()->where('type',2);

        $show = view('admin.md_magazines.show',[
              'revistas' => $revistas,
              'search' => "",
              'autores' => $autores,
              'stands' => $stands
        ]);

        return view('admin.md_magazines.index',[
            'show' => $show,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        if($request->cAutor=="1" && $request->cEditorial=="1"){
            $revista = Magazine::create([
           'title'=> $request->cTitulo, 
           'restOfTheTitle' => $request->cTituloSec,
           'volume' => $request->cVolumen,
           'number'=> $request->cNRevista,
           'numberOfCopies' => $request->cNCopias,
           'author_id' => $request->cAutor,
           'editorial_id' => $request->cEditorial,
           'stand_id' => $request->cStand,
            ]);

            $revista2 = MagazineSpecification::create([
                    'issn' => $request->cISSN,
                    'issnD' => $request->cISSND, 
                    'publicationDate' => $request->cFPublicacion,
                    'summary' => $request->cResumen,
                    'directive' => $request->cDirectiva, 
                    'magazine_id' => $revista->id,
                ]);
            $i=1;
            while($request['CColaborador'.$i]!=null){

                $articulo = Article::create([
                        'title' => $request["CNArticulo".$i],
                        'magazine_id' => $revista->id
                    ]);
                foreach($request['CColaborador'.$i] as $valor){
                    $articulo->authors()->attach($valor);
                }

                $i++;
            }
        }
        return redirect('admin/magazines');        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        if($request->cAutor=="1" && $request->cEditorial=="1"){
            $revista = Magazine::find($id);
            $revista->title = $request->cTitulo;
            $revista->restOfTheTitle = $request->cTituloSec;
            $revista->volume = $request->cVolumen;
            $revista->number = $request->cNRevista;
            $revista->numberOfCopies = $request->cNCopias;
            $revista->author_id = $request->cAutor;
            $revista->editorial_id = $request->cEditorial;
            $revista->stand_id = $request->cStand;
            $revista->save();

            $revista2 = $revista->magazineSpecification;

            $revista2->issn = $request->cISSN;
            $revista2->issnD = $request->cISSND;
            $revista2->publicationDate = $request->cFPublicacion;
            $revista2->summary = $request->cResumen;
            $revista2->directive = $request->cDirectiva;
            $revista2->save();

            $articulos = $revista->articles;
            foreach($articulos as $articulo){
                $articulo->authors()->detach();
                $articulo->delete();
            }

            $i=1;
            while($request['CColaborador'.$i]!=null){

                $articulo = Article::create([
                        'title' => $request["CNArticulo".$i],
                        'magazine_id' => $revista->id
                    ]);
                foreach($request['CColaborador'.$i] as $valor){
                    $articulo->authors()->attach($valor);
                }

                $i++;
            }
        }
        return redirect('admin/magazines');      
    }

    public function destroy($id)
    {
        $revista = Magazine::find($id);
        $articulos = $revista->articles;
        foreach($articulos as $articulo){
            $articulo->authors()->detach();
            $articulo->delete();
        }
        $revista->magazineSpecification->delete();
        $revista->delete();

        return 'true';
    }
    public function modalNew($id){

        if($id=='0'){
            $revista = null;
        }else{
            $revista = Magazine::find($id);
        }
        $stands = Stand::all()->where('type',2);
        $autores = Author::onlyType('Revista');

        return view('admin.md_magazines.modalNew',[
            'stands' => $stands,
              'autores' => $autores,
              'revista' => $revista
            ]);
    }

    public function modalSee($id){
        $revista = Magazine::find($id);

        return view('admin.md_magazines.modalSee',[
              'revista' => $revista
            ]);
    }
}
