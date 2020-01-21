@extends('admin.layouts.admin')

@section('page_header')

@include('admin.partials.page_header',[
    'title' =>  'Dashboard'
])

@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-primary img-card box-primary-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ count($users) }}</h2>
                            <p class="text-white mb-0">Total Usuarios </p>
                        </div>
                        <div class="ml-auto"> <i class="fe fe-user text-white fs-30 mr-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </div><!-- COL END -->

        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-secondary img-card box-secondary-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ count($roles) }}</h2>
                            <p class="text-white mb-0">Total Roles</p>
                        </div>
                        <div class="ml-auto"> <i class="ti-layers text-white fs-30 mr-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </div><!-- COL END -->
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card  bg-success img-card box-success-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{ count($permissions) }}</h2>
                            <p class="text-white mb-0">Total Permisos</p>
                        </div>
                        <div class="ml-auto"> <i class="ti-layers text-white fs-30 mr-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </div><!-- COL END -->
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-info img-card box-info-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">0</h2>
                            <p class="text-white mb-0">Total de Proyectos</p>
                        </div>
                        <div class="ml-auto"> <i class="fe fe-award text-white fs-30 mr-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </div><!-- COL END -->
    </div>
@endsection