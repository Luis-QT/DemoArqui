
    <!-- /.modal -->
    <div id="create-user-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Registrar Usuario</h4> </div>
                <div class="modal-body">
                  <form data-toggle="validator" id="formNewUser" action="#" enctype="multipart/form-data" files="true">

                  <section class="m-t-40">
                    <div class="sttabs sttabs-user tabs-style-iconbox">
                        <nav>
                            <ul>
                                <li><a href="#section-iconbox-1" class="sticon ti-user"><span>Usuario</span></a></li>
                                <li><a href="#section-iconbox-2" class="sticon ti-agenda"><span>Informacion</span></a></li>

                            </ul>
                        </nav>

                        <div class="content-wrap">
                            <section id="section-iconbox-1">
                              <hr>
                              <div class="form-group">
                                  <div class="row">
                                      <div class="form-group col-sm-4">
                                        <label for="inputNameStand" class="control-label">Nombres (*)</label>
                                        <input type="text" name="name" class="form-control" id="inputNameUser" placeholder="Nombre" required>
                                        <div class="help-block with-errors"></div>
                                      </div>
                                      <div class="form-group col-sm-4">
                                        <label for="inputNameStand" class="control-label">Apellidos (*)</label>
                                        <input type="text" name="lastname" class="form-control" id="inputLastNameUser" placeholder="Apellido" required>
                                        <div class="help-block with-errors"></div>
                                      </div>
                                      <div class="form-group col-sm-4">
                                        <label for="inputTypeUser" class="control-label">Tipo de Lector (*)</label>
                                          <select name="type" data-toggle="validator" id="inputTypeUser"	class="select2 form-control" required>
                                            @foreach($types as $type)
                                              @if($type->id != 1 && $type->id != 3 && $type->id != 4 )
                                              <option @if($type->id == 5) selected @endif value="{{$type->id}}">{{$type->name}}</option>
                                              @endif
                                            @endforeach
                                          </select>
                                          <div class="help-block with-errors"></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="row">
                                      <div class="form-group col-sm-5">
                                        <label for="inputDniUser" class="control-label">DNI (*)</label>
                                        <input type="text" name="dni" data-mask="99999999" data-toggle="validator" class="form-control" id="inputDniUser" placeholder="________" required>
                                        <div class="help-block with-errors"></div>
                                      </div>
                                      <div class="form-group col-sm-7">
                                        <label for="inputInsEmailUser" class="control-label">Correo Inst. (*)</label>
                                        <input type="email" name="instEmail" data-toggle="validator"  class="form-control" id="inputInsEmailUser" placeholder="Ingrese su correo institucional" required>
                                        <div class="help-block with-errors"></div>
                                      </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                <div class="row">
                                  <div class="form-group col-sm-12">
                                    <label for="urlImg" class="control-label">Foto(*)</label>
                                    <input type="file" name="urlImg" data-height="200" data-default-file="" id="urlImg" class="dropify" /> </div>
                                  </div>
                              </div>
                            </section>
                            <section id="section-iconbox-2">
                              <hr>
                              <!-- Este form-group solo lo debe ver el lector (Pregrado,postgrado,docente,externo) -->
                              <div class="form-group" id="form-group-lector">
                                <input type="text" name="" hidden data-form="create" value="">
                                  <div class="row">
                                      <div class="form-group col-sm-6">
                                        <label for="inputCodeUser" class="control-label">Código de lector (*)</label>
                                        <input type="text" name="code" data-toggle="validator" class="form-control" id="inputCodeUser" placeholder="XXXXX" required>
                                        <div class="help-block with-errors"></div>
                                      </div>
                                      <div class="form-group col-sm-6">
                                        <label for="inputSchoolUser" class="control-label">Escuela</label>
                                          <select name="school" data-toggle="validator" id="inputSchoolUser"	class="select2 form-control" required>
                                            @foreach($schools as $school)
                                              <option value="{{$school->id}}">{{$school->name}}</option>
                                            @endforeach
                                          </select>
                                          <div class="help-block with-errors"></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="row">
                                      <div class="form-group col-sm-6">
                                        <label for="inputPhoneUser" class="control-label">Teléfono</label>
                                        <input type="text" name="phone" data-mask="999-9999" class="form-control" id="inputPhoneUser" placeholder="___-____" required>
                                        <div class="help-block with-errors"></div>
                                      </div>
                                      <div class="form-group col-sm-6">
                                        <label for="inputCellPhoneUser" class="control-label">Celular (*)</label>
                                        <input type="text" name="cellPhone" data-mask="999999999" class="form-control" id="inputCellPhoneUser" placeholder="_________" required>
                                        <div class="help-block with-errors"></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="row">
                                      <div class="form-group col-sm-6">
                                        <label for="inputPersonalEmailUser" class="control-label">Correo Personal</label>
                                        <input type="email" name="personalEmail" class="form-control" id="inputPersonalEmailUser" placeholder="Ingrese su email personal" required>
                                        <div class="help-block with-errors"></div>
                                      </div>
                                      <div class="form-group col-sm-6">
                                        <label for="inputAddressUser" class="control-label">Dirección</label>
                                        <input type="text" name="address" class="form-control" id="inputAddressUser" placeholder="XXXXX" required>
                                        <div class="help-block with-errors"></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                  <div class="form-group col-sm-12">
                                    <label for="inputDescriptionUser" class="control-label">Descripción (*)</label>
                                    <textarea name="description" class="form-control" id="inputDescriptionUser" placeholder="XXXXX" required></textarea>
                                    <div class="help-block with-errors"></div>
                                  </div>
                                </div>
                              </div>
                            </section>

                        </div>

                        <!-- /content -->
                    </div>
                </section>
                <div class="footer-boton">
                  <button id="btnCrearUsuario" type="button" class="fcbtn btn btn-outline btn-primary btn-1e"> <i class="fa fa-envelope-o m-r-5"></i> <span>Crear</span></button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
          $(document).ready(function() {
    				$('#inputTypeUser').on('change',function(){
              //Si es de tipo Trabajador -> escondelo
              $element = $('#inputTypeUser').val();
              if($element=="2"){
                $('#form-group-lector').hide();
              }else{
                $('#form-group-lector').show();
              }
            })
          });
    </script>
