@if($search == "")
<h2 class="m-t-0 m-b-0">Mostrando toda la colección de Libros</h2>
@elseif($books->count()==0)
<h2 class="m-t-0 m-b-0">No se encontraron resultados para "{{ $search }}"</h2> 
@else
<h2 class="m-t-0 m-b-0">Resultados de búsqueda para "{{ $search }}"</h2> 
@endif
<div style="float: none;" class="m-b-10">
    @if($year != "")
    <span class="label label-tags"> {{ $year }}</span>
    @endif
    @if($edition != "")
    <span class="label label-tags"> Edición {{ $edition }}</span>
    @endif
</div>
<small>Alrededor de {{ $books->count() }} resultados </small>
<hr class="hr-lqt">
<div class="tab-content" style="margin-top: 0px;">
    <?php
        $cont =1 ;
    ?>
    @foreach($books as $i => $book)
        <?php $totalAvailable = $book->totalAvailable()
        ?>
        @if($i==0)
        <div id="tab-{{$cont}}" class="tab-pane active">
            <ul class="search-listing">
        @endif        
                
        @if($i%10==0 && $i!=0)
            </ul>
        </div>
        <?php $cont++; ?>
        <div id="tab-{{$cont}}" class="tab-pane">
            <ul class="search-listing">
        @endif
        <li>
            <h3><a style="font-weight: 400; font-size: 20px;" href="#" class="btnInformationBook" data-info="0" data-toggle="modal" data-target=".modalInformacion" data-id="{{$book->id}}"><span class="text-title-book">{{ $book->title }}</span><span> - Edición {{$book->edition}} - {{ $book->year }}. </span>
            <div style="font-size: 15px;">{{$book->secondaryTitle}}</div>
            </a></h3> 
            <div style="float: none;">
                @foreach($book->getPrincipalAuthor() as $author)
                <span class="label label-author text-author-book">{{ $author->name }}</span>
                @endforeach
                @if($totalAvailable == 0)
                <span class="label label-danger-lqt pull-right"> {{$totalAvailable}} disponibles</span>
                @elseif($totalAvailable == 1)
                <span class="label label-warning-lqt pull-right"> {{$totalAvailable}} disponible</span>
                @else
                <span class="label label-success-lqt pull-right"> {{$totalAvailable}} disponibles</span>
                @endif
            </div>
            <p style="margin-top: 8px;">{{ $book->BookSpecification->summary }}</p>
            @if($book->getSecondaryAuthor()->isNotEmpty())
            <div>Autor Secundario : <span class="text-secondaryAuthor-book">{{ $book->getSecondaryAuthor()->implode('name',', ') }}</span></div>
            @endif
            @if($book->bookSpecification->keywords!="")
            <div>Palabras Clave : <span class="text-keywords-book">{{ $book->bookSpecification->keywords }}</span></div>
            @endif
        </li>
        @if($i+1 == $books->count())
            </ul>
        </div>
        @endif
    @endforeach
</div>
<ul class="pagination m-b-0">
    <li> <a href="javascript:void(0)"  id="pg-left"><i class="fa fa-angle-left"></i></a> </li>
    <li class="active"> <a href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab">1</a> </li>
    @for ($i = 2; $i <= $cont; $i++)
    <li> <a href="#tab-{{ $i }}" aria-controls="tab-{{$i}}" role="tab" data-toggle="tab">{{$i}}</a> </li>
    @endfor
    <li> <a href="javascript:void(0)" id="pg-right" ><i class="fa fa-angle-right"></i></a> </li>
</ul>

<script type="text/javascript">
    @if($highlightSearch==1)
        $(document).ready(function(){
            $('.tab-pane').each(function(){
                var pane = $(this);
                var search = $('#inputSearchBook').val();
                var typeSearch =  $('#selectSearchBook').val();
                console.log(typeSearch);

                pane.find('li').each(function(){
                    //Sigo buscando solucion para buscar cadena en texto con tildes
                    var aux = $(this);       
                    switch(typeSearch){
                        case '1': aux.find('.text-title-book').text(normalize(aux.find('.text-title-book').text()));
                                aux.find('.text-title-book').highlight(search);
                                break;
                        case '2': aux.find('.text-author-book').text(normalize(aux.find('.text-author-book').text()));
                                aux.find('.text-author-book').highlight(search);
                                break;
                        case '3': aux.find('.text-secondaryAuthor-book').text(normalize(aux.find('.text-secondaryAuthor-book').text()));
                                aux.find('.text-secondaryAuthor-book').highlight(search);
                                break;
                        case '4': aux.find('.text-keywords-book').text(normalize(aux.find('.text-adviser-book').text()));
                                aux.find('.text-adviser-book').highlight(search);
                                break;
                        case '5': aux.find('.text-keywords-book').text(normalize(aux.find('.text-keywords-book').text()));
                                aux.find('.text-keywords-book').highlight(search);
                                break;
                    }

                });
            });
        });
    @endif
</script>
