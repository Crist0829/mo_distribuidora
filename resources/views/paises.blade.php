<x-blank-main>

    <x-nav-user-simple/>

    <x-slot name="titulo">
        - Región
    </x-slot>

    <x-slot name="titulo_contenido">
        ¿Cuál es tu ubicación?
    </x-slot>

    <x-row>
        
        <div class="col-md-3 m-3">
            <x-card class="bg-white rounded hemis">
                <h3 class="text-black text-center">Norteamérica</h3>
                <div  class="d-flex flex-column align-items-center">
                    <a href="">
                        <img src="{{url('assets/img/suramerica.png')}}" alt="" class="img-fluid" width="200">
                    </a>

                    <form action="{{route('dashboard')}}">
                        @csrf
                        <div class="form-group m-2">
                            <input type="text" class="form-control" placeholder="País">
                        </div>
                        <div class="form-group m-2">
                            <input type="text" class="form-control" placeholder="Ciudad">
                        </div>
                        <div class="d-grid gap-2">
                            <input type="submit" class="btn btn-secondary" value="Confirmar">
                        </div>
                    </form>
                </div>
            </x-card>
        </div>

        <div class="col-md-3 m-3">
            <x-card class="bg-secondary rounded hemis">
                <h3 class="text-white text-center">Centroamérica</h3>
                <div  class="d-flex flex-column align-items-center">
                    <a href="{{route('dashboard')}}">
                        <img src="{{url('assets/img/suramerica.png')}}" alt="" class="img-fluid" width="200">
                    </a>
                    <form action="{{route('dashboard')}}">
                        @csrf
                        <div class="form-group m-2">
                            <input type="text" class="form-control" placeholder="País">
                        </div>
                        <div class="form-group m-2">
                            <input type="text" class="form-control" placeholder="Ciudad">
                        </div>
                        <div class="d-grid gap-2">
                            <input type="submit" class="btn btn-primary" value="Confirmar">
                        </div>
                    </form>
                </div>
            </x-card>
        </div>

        <div class="col-md-3 m-3">
            <x-card class="bg-dark rounded justify-content-center hemis">
                <h3 class="text-white text-center">Sudamerica</h3>
                <div  class="d-flex flex-column align-items-center">
                    <a href="{{route('dashboard')}}">
                        <img src="{{url('assets/img/suramerica.png')}}" alt="" class="img-fluid" width="200">
                    </a>
                    <form action="{{route('dashboard')}}">
                        @csrf
                        <div class="form-group m-2">
                            <input type="text" class="form-control" placeholder="País">
                        </div>
                        <div class="form-group m-2">
                            <input type="text" class="form-control" placeholder="Ciudad">
                        </div>
                        <div class="d-grid gap-2">
                            <input type="submit" class="btn btn-success" value="Confirmar">
                        </div>
                    </form>
                </div>
            </x-card>
        </div>

    </x-row>

    <x-footer/>

</x-blank-main>