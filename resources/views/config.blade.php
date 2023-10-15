<x-menu>
    <x-slot name="title">
        Configuraciones
    </x-slot>

    <h2>Configuraciones</h2>
    <section class="section">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>
    
              <!-- Horizontal Form -->
              <form action="" method="POST">
                @csrf
    
                <div class="row mb-3">
                    <label for="palabra" class="col-sm-2 col-form-label">Palabra de activación</label>
                    <div class="col-sm-10">
                      <input type="palabra" class="form-control" id="palabra" name="palabra" value="activate">
                      @error('palabra')
                        <p>{{$message}}</p>
                      @enderror
                    </div>
                </div>
              </form>
              <button class='btn btn-success'>Cambiar</button>
            </div>
        </div>

        <h3>Contactos de emergencia</h3>

        <div class="card">
            <br>
            <div class="card-body">
              Contacto 1
            </div>
        </div>

        <div class="card">
            <br>
            <div class="card-body">
              Contacto 2
            </div>
        </div>

        <div class="card">
            <br>
            <div class="card-body">
              Contacto 3
            </div>
        </div>

        <button class="btn btn-success">+</button>
    </section>
    <br>
    @livewire('terms')
</x-menu>