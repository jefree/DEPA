<div class="modal fade modal-slide-in-left " aria-hidden="true" role="dialog" tabindex="-1" id="modal-view-{{$pd->id}}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Nombre Punto {{$pd->id}}.<b>{{$pd->nombre}}</b></h4>
        </div>
        <div class="modal-body">
             {!! Form::open(array('url' => 'domicilios/tiempos', $pd->id ,'method'=>'POST','autocomplete'=>'off') ) !!}
                {{Form::token()}}
                <input type="hidden"  value="{{$pd->id}}" name="id">
            <table class="table table-hover">
                <tr>
                   <th>Dias</th>
                   <th>24 Horas</th>
                   <th>Hora apertura</th>
                   <th>Hora cierre</th>
                </tr>
                <tr>
                    <td>Lunes</td>
                    <td><input type="checkbox" name="lunes24" id="lunes24"  value="0-0"  onchange="deshabilitarInputs('lunes', this.checked, {{$pd->id}});"></td>
                    <td><input type="number" style="width: 80px" step="any" required="" id="lunes1-{{$pd->id}}" class="form-control" name="lunes1"></td>
                    <td><input type="number" style="width: 80px" step="any" required="" id="lunes2-{{$pd->id}}" class="form-control" name="lunes2"></td>
                </tr>
                <tr>
                    <td>Martes</td>
                    <td><input type="checkbox" name="martes24" id="martes24"  value="0-0"  onchange="deshabilitarInputs('martes', this.checked, {{$pd->id}});"></td>
                    <td><input type="number" style="width: 80px"   step="any" required="" id="martes1-{{$pd->id}}" class="form-control" name="martes1"></td>
                    <td><input type="number" style="width: 80px"   step="any" required="" id="martes2-{{$pd->id}}" class="form-control" name="martes2"></td>
                </tr>
                <tr>
                    <td>Miercoles</td>
                    <td><input type="checkbox" name="miercoles24"  value="0-0"  onchange="deshabilitarInputs('miercoles', this.checked, {{$pd->id}});"></td>
                    <td><input type="number" style="width: 80px"   step="any" required="" id="miercoles1-{{$pd->id}}" class="form-control" name="miercoles1"></td>
                    <td><input type="number" style="width: 80px"   step="any" required="" id="miercoles2-{{$pd->id}}" class="form-control" name="miercoles2"></td>
                </tr>
                <tr>
                    <td>Jueves</td>
                    <td><input type="checkbox" name="jueves24"  value="0-0"  onchange="deshabilitarInputs('jueves', this.checked, {{$pd->id}});"></td>
                    <td><input type="number" style="width: 80px"   step="any" required="" id="jueves1-{{$pd->id}}" class="form-control" name="jueves1"></td>
                    <td><input type="number" style="width: 80px"   step="any" required="" id="jueves2-{{$pd->id}}" class="form-control" name="jueves2"></td>
                </tr>
                <tr>
                    <td>Viernes</td>
                    <td><input type="checkbox" name="viernes24"  value="0-0"  onchange="deshabilitarInputs('viernes', this.checked, {{$pd->id}});"></td>
                    <td><input type="number" style="width: 80px"   step="any" required="" id="viernes1-{{$pd->id}}" class="form-control" name="viernes1"></td>
                    <td><input type="number" style="width: 80px"   step="any" required="" id="viernes2-{{$pd->id}}" class="form-control" name="viernes2"></td>
                </tr>
                <tr>
                    <td>Sabados</td>
                    <td><input type="checkbox" name="sabados24"  value="0-0"  onchange="deshabilitarInputs('sabado', this.checked, {{$pd->id}});"></td>
                    <td><input type="number" style="width: 80px"   step="any" required="" id="sabado1-{{$pd->id}}" class="form-control" name="sabado1"></td>
                    <td><input type="number" style="width: 80px"   step="any" required="" id="sabado2-{{$pd->id}}" class="form-control" name="sabado2"></td>
                </tr>
                <tr>
                    <td>Domingos</td>
                    <td><input type="checkbox" name="domingos24"  value="0-0"  onchange="deshabilitarInputs('domingo', this.checked, {{$pd->id}});"></td>
                    <td><input type="number" style="width: 80px"   step="any" required="" id="domingo1-{{$pd->id}}" class="form-control" name="domingo1"></td>
                    <td><input type="number" style="width: 80px"   step="any" required="" id="domingo2-{{$pd->id}}" class="form-control" name="domingo2"></td>
                </tr>
                <tr>
                    <td>Festivos</td>
                    <td><input type="checkbox" name="festivos24"  value="0-0"  onchange="deshabilitarInputs('festivos', this.checked, {{$pd->id}});"></td>
                    <td><input type="number" style="width: 80px"   step="any" required="" id="festivos1-{{$pd->id}}" class="form-control" name="festivos1"></td>
                    <td><input type="number" style="width: 80px"   step="any" required="" id="festivos2-{{$pd->id}}" class="form-control" name="festivos2"></td>
                </tr>
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger " data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" onclick="validar();">Guardar</button>
        </div>        
        {!! Form::close() !!}
      </div>
    </div>
</div>

