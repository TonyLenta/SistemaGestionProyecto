@extends('admin.layouts.admin')

@section('page_header')
    @include('admin.partials.page_header',[
        'title' =>  'Crear Profesion'
    ])
@endsection

@section('content')
    <form method="POST"
        action="{{ route('dashboard.professions.store') }}">
        <div class="row">
            @include('admin.professions._form',[
                'txtTitle'  =>  'Crear',
                'btnTitle'   =>  'Guardar',
                'btnColor'  =>  'btn-success'
            ])
        </div>
    </form>
@endsection

    @push('styles')
        <!-- SELECT2 CSS -->
        <link href="/assets/plugins/select2/select2.min.css" rel="stylesheet"/>
        <!--BOOTSTRAP-DATERANGEPICKER CSS-->
        <link rel="stylesheet" href="/assets/plugins/bootstrap-daterangepicker/daterangepicker.css">

        <!-- TIME PICKER CSS -->
        <link href="/assets/plugins/time-picker/jquery.timepicker.css" rel="stylesheet"/>

        <!-- DATE PICKER CSS -->
        <link href="/assets/plugins/date-picker/spectrum.css" rel="stylesheet"/>

        <!-- MULTI SELECT CSS -->
        <link rel="stylesheet" href="/assets/plugins/multipleselect/multiple-select.css">
    @endpush

    @push('scripts')
         <!-- SELECT2 JS -->
         <script src="/assets/plugins/select2/select2.full.min.js"></script>
         <!-- BOOTSTRAP-DATERANGEPICKER JS -->
         <script src="/assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
         <script src="/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
 
         <!-- TIMEPICKER JS -->
         <script src="/assets/plugins/time-picker/jquery.timepicker.js"></script>
         <script src="/assets/plugins/time-picker/toggles.min.js"></script>
 
         <!-- DATEPICKER JS -->
         <script src="/assets/plugins/date-picker/spectrum.js"></script>
         <script src="/assets/plugins/date-picker/jquery-ui.js"></script>
         <script src="/assets/plugins/input-mask/jquery.maskedinput.js"></script>
 
         <!-- MULTI SELECT JS-->
         <script src="/assets/plugins/multipleselect/multiple-select.js"></script>
             <script src="/assets/plugins/multipleselect/multi-select.js"></script>
             <!-- FORMELEMENTS JS -->
         <script src="/assets/js/form-elements.js"></script>
 
         <!-- CUSTOM JS -->
         <script src="/assets/js/custom.js"></script>
    @endpush