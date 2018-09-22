<div class="panel panel-celeste-lqt">
    <div class="panel-heading"><i class="fa fa-list-alt"></i> LISTA DE USUARIOS
      <div class="panel-action"><a href="#" data-perform="panel-collapse"><i class="ti-minus"></i></a></div>
    </div>
    <div class="panel-wrapper collapse in">
<div class="white-box">
  <div class="">
    <button data-toggle="modal" data-target="#create-user-modal" type="button" name="button">Crear</button>
    <button data-toggle="modal" data-target="#show-information" type="button" name="button">mostrar</button>
  </div>
		<div class="table-responsive">
					<table class="export toggle-circle table-hover" cellspacing="0" width="100%">
					   <thead>
								<tr>
									<th data-toggle="true">Nº</th>
                  <th>Lector</th>
									<th>Tipo</th>
									<th>Estado</th>
									<th data-hide="all">Correo Institucional</th>
									<th>Codigo</th>
									<th></th>

								</tr>
						</thead>
						<tbody>
								@foreach($users as $i => $user)
								<tr>
                  <td>{{$i+1}}</td>
									<td>
										 <a class="showUserInformation" data-id="{{$user->id}}" href="#" >
                       <img width="30"  @if($user->userSpecification->urlImg!=null) src="{{ asset('imgUsuarios/'.$user->userSpecification->urlImg) }}" @else src="{{ asset('plugins/images/users/pawandeep.jpg') }}" @endif alt="user" class="img-circle" />
				               {{ $user->name }} {{ $user->lastName }}
                   </a>

								 	</td>
									<td>{{ $user->userType->name }}</td>
									<td>
                    {{$user->getState()}}
                  </td>
									<td>{{ $user->instEmail }}</td>
									<td>{{ $user->code }}</td>
									{{-- Solo los alumnos pueden tener castigos --}}
									<td class="text-center">
										@if(!$user->esEmpleado())
										<button type="button" data-toggle="tooltip"  title="Mostrar castigos"  class="btn btn-info btn-outline btn-circle btn-sm m-r-5 btnCastigo" data-id="{{$user->id}}" ><i class="ti-hand-open"></i></button>
										@endif
										<button type="button"  class="btn btn-info btn-outline btn-circle btn-sm m-r-5 editUser" data-id="{{$user->id}}" ><i class="ti-pencil-alt"></i></button>
										<button type="button"  class="btn btn-info btn-outline btn-circle btn-sm m-r-5 deleteUser" data-id="{{$user->id}}" ><i class="ti-trash"></i></button>

									</td>
								</tr>
								@endforeach
						</tbody>

				</table>
		</div>

</div>
</div>
</div>

<div id="show-information" class="modal fade row" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
</div>
