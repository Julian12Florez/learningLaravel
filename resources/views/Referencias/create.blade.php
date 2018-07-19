<!-- modal referencia -->
<div class="modal fade" id="modalReferencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Nueva Referencia</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form  method="POST">
                @csrf {{ method_field('POST') }}
                <input type="hidden" id="id" value="">
                <div class="form-group">
                    <div>
                  <label for="recipient-name" class="col-form">Código</label>
                    <input type="text" class="form-control" value="{{ old('codigo') }}" name="codigo" id="codigo">
                </div>
                </div>
                <div class="form-group">
                    <div>
                    <label for="message-text" class="col-form-control">Referencia</label>
                  <input type="text" class="form-control" value="{{ old('nombre') }}" name="nombre" id="referencia">
                </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-black" data-dismiss="modal">cerrar</button>
              <button type="button" id="addReference" class="btn btn-info">Guardar</button>
            </div>
          </div>
        </div>
      </div>

