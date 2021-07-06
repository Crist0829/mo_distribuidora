<x-dashboard-main>
    <x-slot name="titulo">
        - Dashboard
    </x-slot>

    <x-slot name="sidebar">
       <x-sidebar/>
    </x-slot>
    
        <x-nav-user/>
        <h1 class="text-primary text-center">¡Hola {{Auth::user()->name}}, Bienvenid@!</h1>

        <x-row>

            <div class="col-md-6">
                <x-card class="m-2 bg-white">
                    <div class="d-flex flex-column align-items-center mb-2">
                        <img src="{{url('assets/img/sobre.png')}}" alt="" width="100">
                    </div>
                    <p class="text-center">
                        Esta es la página de inicio de los vendedores, acá iría información útil acerca de clientes, <br>
                        notificaciones, etc... acordar qué información poner aquí.
                    </p>
                </x-card>
            </div>
            
            <div class="col-md-6">
                <x-card class="m-2 bg-tertiary">
                    <p class="text-center">
                        Esta es la página de inicio de los vendedores, acá iría información útil acerca de clientes, <br>
                        notificaciones, etc... acordar qué información poner aquí.
                    </p>
                    <div class="d-flex flex-column align-items-center">
                        <img src="{{url('assets/img/campana.png')}}" alt="" width="100">
                    </div>
                </x-card>
            </div>

            <div class="col-md-4">
                <x-card class="m-2 bg-white">
                    <p class="text-center">
                        Esta es la página de inicio de los vendedores, acá iría información útil acerca de clientes, <br>
                        notificaciones, etc... acordar qué información poner aquí.
                    </p>
                </x-card>
            </div>

            <div class="col-md-4">
                <x-card class="m-2 bg-white">
                    <p class="text-center">
                        Esta es la página de inicio de los vendedores, acá iría información útil acerca de clientes, <br>
                        notificaciones, etc... acordar qué información poner aquí.
                    </p>
                </x-card>
            </div>

            <div class="col-md-4">
                <x-card class="m-2 bg-secondary">
                    <p class="text-center">
                        Esta es la página de inicio de los vendedores, acá iría información útil acerca de clientes, <br>
                        notificaciones, etc... acordar qué información poner aquí.
                    </p>
                </x-card>
            </div>

            <div class="col-md-8">
                <x-card class="m-2 bg-secondary">
                    <p class="text-center">
                        Esta es la página de inicio de los vendedores, acá iría información útil acerca de clientes, <br>
                        notificaciones, etc... acordar qué información poner aquí.
                    </p>
                    <div class="d-flex flex-column align-items-center">
                        <img src="{{url('assets/img/lentes.png')}}" alt="" width="100">
                    </div>
                </x-card>
            </div>

            <div class="col-md-4">
                <x-card class="m-2 bg-white">
                    <p class="text-center">
                        Esta es la página de inicio de los vendedores, acá iría información útil acerca de clientes, <br>
                        notificaciones, etc... acordar qué información poner aquí.
                    </p>
                    <div class="d-flex flex-column align-items-center">
                        <img src="{{url('assets/img/user-default.png')}}" alt="" width="100">
                    </div>
                </x-card>
            </div>

        </x-row>

        <x-dashboard-footer/>
</x-dashboard-main>
