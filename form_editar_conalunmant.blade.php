
<section >



<div class="row" >

<div class="col-md-12">


  <div class="box box-primary box-gris">

      <div class="box-header with-border my-box-header">
        <h3 class="box-title"><strong>Editar condición del alumno al finalizar el año anterior</strong></h3>
        <button onclick="cerrar_modal()" type="button" class="close" style="font-size: 40px; color:#34495E;"  aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button> <!-- Botón cerrar para volver a la vista sin necesidad de recargar la página -->
      </div><!-- /.box-header -->

      <div id="notificacion_E2" ></div>
      <div class="box-body">



          <form   action="{{ url('editar_conalunmant') }}"  method="post" id="f_editar_conalunmant"  class="formentrada"  >
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <input type="hidden" name="id_con_alunmant" value="{{ $conalunmant->id }}">

          <div class="col-md-6">
              <div class="form-group">
                    <label class="col-sm-2" for="nombre">Código *</label>
                    <div class="col-sm-10" >
                      <input type="number" class="form-control" id="id_conalunmant" name="id_conalunmant"  value="{{ $conalunmant->IdConAlunmAnt }}"  required   >
                       </div>
              </div><!-- /.form-group -->
          </div><!-- /.col -->

          <div class="col-md-6">
              <div class="form-group">
                    <label class="col-sm-2" for="nombre">Descripcion *</label>
                    <div class="col-sm-10" >
                      <input type="text" class="form-control" id="descripcion" name="descripcion"  value="{{ $conalunmant->Descripcion }}"  required   >
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
