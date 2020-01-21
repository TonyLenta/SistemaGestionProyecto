@extends('admin.layouts.admin')

@section('page_header')
    @include('admin.partials.page_header',[
        'title' =>  'Administracion de permisos'
    ])
@endsection

@section('content')
    @include('admin.roles_management.roles.index')

    @include('admin.roles_management.permissions.index')
@endsection

    @push('styles')
        <!--SWEET ALERT CSS-->
		<link href="/assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet" />
    @endpush

    @push('scripts')
        <!-- SWEET-ALERT JS -->
		<script src="/assets/plugins/sweet-alert/sweetalert.min.js"></script>
		<script src="/assets/js/sweet-alert.js"></script>
    @endpush