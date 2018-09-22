<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name',
    ];

    public function books()
    {
      return $this->belongsToMany('App\Book', 'books_authors')->withPivot('type');
    }
    public function articles()
    {
      return $this->belongsToMany('App\Article', 'articles_authors');
    }
    public function theses()
    {
      return $this->belongsToMany('App\Thesis', 'thesis_authors');
    }
    public function magazines()
    {
      return $this->hasMany('App\Magazine','author_id');
    }
    public function categories()
    {
      return $this->belongsToMany('App\Category', 'authors_categories');
    }

    public function getPrincipalBook(){
      $aux = collect();
      foreach ($this->books as $book) {
        if($book->pivot->type == 1){
          $aux->push($book);
        }
      }
      return $aux;
    }

    public function getSecondaryBook(){
      $aux = collect();
      foreach ($this->books as $book) {
        if($book->pivot->type == 0){
          $aux->push($book);
        }
      }
      return $aux;
    }

    /************************METODOS ESTATICOS *************************/
     //Ingresa por parametro una variable String:
     //Libro, Tesis o Informe , Revista
     //Retorna todos los autores que pertenecen al tipo ingreso
     public static function onlyType($type){
        $autores = Author::all();
        $arreglo=collect();
        foreach ($autores as $autor) {
          foreach ($autor->categories as $category) {
            if($category->name == $type){
               $arreglo->push($autor);
            }
          }
        }
        return $arreglo;
     }
}
