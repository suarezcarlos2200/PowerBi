<section >



<div class="row" >

<div class="col-md-12">


  <div class="box box-primary box-gris">

      <div class="box-header with-border my-box-header">
        <h3 class="box-title"><strong>Editar capacidad excepcional</strong></h3>
        <button onclick="cerrar_modal()" type="button" class="close" style="font-size: 40px; color:#34495E;"  aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button> <!-- Botón cerrar para volver a la vista sin necesidad de recargar la página -->
      </div><!-- /.box-header -->

      <div id="notificacion_E2" ></div>
      <div class="box-body">



          <form   action="{{ url('editar_capacidadexcepcional') }}"  method="post" id="f_editar_capacidadexcepcional"  class="formentrada"  >
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <input type="hidden" name="id_capacidad_excepcional" value="{{ $capacidadexcepcional->id }}">

          <div class="col-md-6">
              <div class="form-group">
                    <label class="col-sm-2" for="nombre">Código capacidad excepcional *</label>
                    <div class="col-sm-10" >
                      <input type="number" class="form-control" id="id_capacidadexcepcional" name="id_capacidadexcepcional"  value="{{ $capacidadexcepcional->IdCapacidadExcepcional }}"  required   >
                       </div>
              </div><!-- /.form-group -->
          </div><!-- /.col -->

          <div class="col-md-6">
              <div class="form-group">
                    <label class="col-sm-2" for="nombre">Descripción *</label>
                    <div class="col-sm-10" >
                      <input type="text" class="form-control" id="descripcion" name="descripcion"  value="{{ $capacidadexcepcional->Descripcion }}"  required   >
                       </div>
              </div><!-- /.form-group -->
          </div><!-- /.col -->
          <div class="box-footer col-xs-12 box-gris ">
                <button type="submit" class="btn btn-primary">Actualizar datos</button>
          </div>

          </form>

      </div>

    </div>

  </div>
</div>
</section>
