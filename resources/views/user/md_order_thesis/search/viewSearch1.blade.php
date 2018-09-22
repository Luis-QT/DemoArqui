@if($search == "")
<h2 class="m-t-0 m-b-0">Mostrando toda la colección de Tesis e Informes</h2>
@elseif($theses->count()==0)
<h2 class="m-t-0 m-b-0">No se encontraron resultados para "{{ $search }}"</h2> 
@else
<h2 class="m-t-0 m-b-0">Resultados de búsqueda para "{{ $search }}"</h2> 
@endif
<div style="float: none;" class="m-b-10">
    @if($year != "")
    <span class="label label-tags"> {{ $year }}</span>
    @endif
    @if($typeThesis == 1)
    <span class="label label-tags"> Tesis</span>
    @elseif($typeThesis == 2)
    <span class="label label-tags"> Informe</span>
    @endif
    @if($school == 1)
    <span class="label label-tags"> Ing. Sistemas</span>
    @elseif($school == 2)
    <span class="label label-tags"> Ing. Software</span>
    @endif
    @if($mention != "")
    <span class="label label-tags"> {{ $mention }}</span>
    @endif
</div>
<small>Alrededor de {{ $theses->count() }} resultados </small>
<hr class="hr-lqt">
<div class="tab-content" style="margin-top: 0px;">
    <?php
        $cont =1 ;
    ?>
    @foreach($theses as $i => $thesis)
        <?php $totalAvailable = $thesis->totalAvailable()
        ?>
        @if($i==0)
        <div id="tab-{{$cont}}" class="tab-pane active">
            <ul class="search-listing">
        @endif        
                
        @if($i%5==0 && $i!=0)
            </ul>
        </div>
        <?php $cont++; ?>
        <div id="tab-{{$cont}}" class="tab-pane">
            <ul class="search-listing">
        @endif
        <li>
            <h3><a style="font-weight: 400;" href="#" class="btnInformationThesis" data-info="0" data-toggle="modal" data-target=".modalInformacion" data-id="{{$thesis->id}}"><span class="text-title-thesis">{{$thesis->clasification}} - {{ $thesis->title }}. {{ $thesis->year }}</span></a></h3> 
            <div style="float: none;">
                @foreach($thesis->authors as $author)
                <span class="label label-author text-author-thesis">{{ $author->name }}</span>
                @endforeach
                @if($totalAvailable == 0)
                <span class="label label-danger-lqt pull-right"> {{$totalAvailable}} disponibles</span>
                @elseif($totalAvailable == 1)
                <span class="label label-warning-lqt pull-right"> {{$totalAvailable}} disponible</span>
                @else
                <span class="label label-success-lqt pull-right"> {{$totalAvailable}} disponibles</span>
                @endif
            </div>
            <p style="margin-top: 8px;">{{ $thesis->thesisSpecification->summary }}</p>
            <div>Asesor : <span class="text-adviser-thesis">{{ $thesis->thesisSpecification->adviser }}</span></div>
            <div>Palabras Clave : <span class="text-keywords-thesis">{{ $thesis->thesisSpecification->keywords }}</span></div>
        </li>
        @if($i+1 == $theses->count())
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
                var search = $('#inputSearchThesis').val();
                var typeSearch =  $('#selectSearchThesis').val();
                console.log(typeSearch);

                pane.find('li').each(function(){
                    //Sigo buscando solucion para buscar cadena en texto con tildes

                    var aux = $(this);       
                    switch(typeSearch){
                        case '1': aux.find('.text-title-thesis').text(normalize(aux.find('.text-title-thesis').text()));
                                aux.find('.text-title-thesis').highlight(search);
                                break;
                        case '2': aux.find('.text-author-thesis').text(normalize(aux.find('.text-author-thesis').text()));
                                aux.find('.text-author-thesis').highlight(search);
                                break;
                        case '3': aux.find('.text-adviser-thesis').text(normalize(aux.find('.text-adviser-thesis').text()));
                                aux.find('.text-adviser-thesis').highlight(search);
                                break;
                        case '4': aux.find('.text-keywords-thesis').text(normalize(aux.find('.text-keywords-thesis').text()));
                                aux.find('.text-keywords-thesis').highlight(search);
                                break;
                    }

                });
            });
        });
    @endif
</script>
