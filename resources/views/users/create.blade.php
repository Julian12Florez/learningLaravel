<!-- modal referencia -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="modal fade" id="modalUsuarios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
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
                  <label for="recipient-name" class="col-form">Nombre</label>
                    <input type="text" class="form-control"  name="nombre" id="nombre">
                </div>
                </div>
                <div class="form-group">
                    <div>
                    <label for="message-text" class="col-form-control">Email</label>
                  <input type="text" class="form-control" name="email" id="email">
                </div>
                </div>
                <div class="form-group">
                    <div>
                    <label for="message-text" class="col-form-control">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                </div>
                <div class="form-group">
                    <div>
                    <label for="message-text" class="col-form-control">Rol</label>
                        <input type="text" class="form-control" name="rol" id="rol">
                    </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-black" data-dismiss="modal">cerrar</button>
              <button type="button" id="addUsers" class="btn btn-info">Guardar</button>
            </div>
          </div>
        </div>
      </div>
