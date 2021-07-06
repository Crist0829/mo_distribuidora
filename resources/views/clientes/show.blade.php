<x-dashboard-main>
    <x-slot name="titulo">
        - Clientes
    </x-slot>

    <x-slot name="sidebar">
        <x-sidebar/>
     </x-slot>
    
        <x-nav-user/>
        <h1 class="text-primary text-center">Ver clientes</h1>

        <x-row>

            <div class="col-md-12">
                <div class="card shadow m-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0 rounded">
                                <thead class="thead-secondary bg-secondary rounde-top">
                                    <tr>
                                        <th class="border-0">#</th>
                                        <th class="border-0">Nombre</th>
                                        <th class="border-0">Apellido</th>
                                        <th class="border-0">Correo</th>
                                        <th class="border-0">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Item -->
                                    <tr>
                                        <td class="border-0"><a href="#" class="text-primary fw-bold">1</a> </td>
                                        <td class="border-0"><p class="m-1">Dante</p></td>
                                        <td class="border-0">
                                            <p class="m-1">Alighieri</p>
                                        </td>
                                        <td class="border-0">
                                            <p class="m-1">DivinaComedia@gmail.com</p>
                                        </td>
                                        <td class="border-0">
                                           <div class="d-flex flex-row align-items-center">
                                                <a class="btn btn-success btn-sm m-1">
                                                    <span class="fas fa-eye"></span>
                                                </a>
                                                <a class="btn btn-primary btn-sm m-1">
                                                    <span class="fas fa-edit"></span>
                                                </a>
                                                <a class="btn btn-danger btn-sm m-1">
                                                    <span class="fas fa-trash"></span>
                                                </a>
                                           </div>
                                        </td>                            
                                    </tr>
                                    <!-- End of Item -->

                                    <!-- Item -->
                                    <tr>
                                        <td class="border-0"><a href="#" class="text-primary fw-bold">2</a> </td>
                                        <td class="border-0"><p class="m-1">Horacio</p></td>
                                        <td class="border-0">
                                            <p class="m-1">Quiroga</p>
                                        </td>
                                        <td class="border-0">
                                            <p class="m-1">GallinaDegollada@gmail.com</p>
                                        </td>
                                        <td class="border-0">
                                           <div class="d-flex flex-row align-items-center">
                                                <a class="btn btn-success btn-sm m-1">
                                                    <span class="fas fa-eye"></span>
                                                </a>
                                                <a class="btn btn-primary btn-sm m-1">
                                                    <span class="fas fa-edit"></span>
                                                </a>
                                                <a class="btn btn-danger btn-sm m-1">
                                                    <span class="fas fa-trash"></span>
                                                </a>
                                           </div>
                                        </td>                            
                                    </tr>
                                    <!-- End of Item -->

                                    <!-- Item -->
                                    <tr>
                                        <td class="border-0"><a href="#" class="text-primary fw-bold">3</a> </td>
                                        <td class="border-0"><p class="m-1">Julio</p></td>
                                        <td class="border-0">
                                            <p class="m-1">Cortazar</p>
                                        </td>
                                        <td class="border-0">
                                            <p class="m-1">Rayuela@gmail.com</p>
                                        </td>
                                        <td class="border-0">
                                           <div class="d-flex flex-row align-items-center">
                                                <a class="btn btn-success btn-sm m-1">
                                                    <span class="fas fa-eye"></span>
                                                </a>
                                                <a class="btn btn-primary btn-sm m-1">
                                                    <span class="fas fa-edit"></span>
                                                </a>
                                                <a class="btn btn-danger btn-sm m-1">
                                                    <span class="fas fa-trash"></span>
                                                </a>
                                           </div>
                                        </td>                            
                                    </tr>
                                    <!-- End of Item -->

                                    <!-- Item -->
                                    <tr>
                                        <td class="border-0"><a href="#" class="text-primary fw-bold">4</a> </td>
                                        <td class="border-0"><p class="m-1">Isaac</p></td>
                                        <td class="border-0">
                                            <p class="m-1">Asimov</p>
                                        </td>
                                        <td class="border-0">
                                            <p class="m-1">YoRobot@gmail.com</p>
                                        </td>
                                        <td class="border-0">
                                           <div class="d-flex flex-row align-items-center">
                                                <a class="btn btn-success btn-sm m-1">
                                                    <span class="fas fa-eye"></span>
                                                </a>
                                                <a class="btn btn-primary btn-sm m-1">
                                                    <span class="fas fa-edit"></span>
                                                </a>
                                                <a class="btn btn-danger btn-sm m-1">
                                                    <span class="fas fa-trash"></span>
                                                </a>
                                           </div>
                                        </td>                            
                                    </tr>
                                    <!-- End of Item -->

                                    <!-- Item -->
                                    <tr>
                                        <td class="border-0"><a href="#" class="text-primary fw-bold">5</a> </td>
                                        <td class="border-0"><p class="m-1">Gabriel</p></td>
                                        <td class="border-0">
                                            <p class="m-1">García</p>
                                        </td>
                                        <td class="border-0">
                                            <p class="m-1">100AñosSoledad@mail.com</p>
                                        </td>
                                        <td class="border-0">
                                           <div class="d-flex flex-row align-items-center">
                                                <a class="btn btn-success btn-sm m-1">
                                                    <span class="fas fa-eye"></span>
                                                </a>
                                                <a class="btn btn-primary btn-sm m-1">
                                                    <span class="fas fa-edit"></span>
                                                </a>
                                                <a class="btn btn-danger btn-sm m-1">
                                                    <span class="fas fa-trash"></span>
                                                </a>
                                           </div>
                                        </td>                            
                                    </tr>
                                    <!-- End of Item -->
    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        

        </x-row>

        <x-dashboard-footer/>
</x-dashboard-main>
