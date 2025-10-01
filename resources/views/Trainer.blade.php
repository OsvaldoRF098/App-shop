
<form class="form-group" method="post" action="/trainers">
    @csrf
        <div class="form-group">
            <label for="">Nombre:</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" class="form-control" required>
         </div>

        <div class="form-group mb-4">
            <label for="avatar">Avatar (opcional):</label>
            <input type="file" name="avatar" id="avatar" class="form-control" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
</form>
