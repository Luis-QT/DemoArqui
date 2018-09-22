<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'clasification',
        'secondaryTitle',
        'edition',
        'year',
    ];

    public function bookCopies()
    {
      return $this->hasMany('App\BookCopy','book_id');
    }
    public function editorials()
    {
      return $this->belongsToMany('App\Editorial', 'books_editorials')->withPivot('type');
    }
    public function authors()
    {
      return $this->belongsToMany('App\Author', 'books_authors')->withPivot('type');
    }
    public function bookSpecification()
    {
      return $this->hasOne('App\BookSpecification','book_id');
    }

    public function totalAvailable(){
        $cont =0;
        foreach ($this->bookCopies as $bookCopy) {
            if($bookCopy->availability == 1){
                $cont++;
            }
        }
        return $cont;
    }
    public function getPrincipalAuthor(){
        $aux = collect();
        foreach ($this->authors as $author) {
            if($author->pivot->type == 1){
                $aux->push($author);
            }
        }
        return $aux;
    }
    public function getSecondaryAuthor(){
        $aux = collect();
        foreach ($this->authors as $author) {
            if($author->pivot->type == 0){
                $aux->push($author);
            }
        }
        return $aux;
    }


}
