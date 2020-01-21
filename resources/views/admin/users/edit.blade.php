@extends('admin.layouts.admin')

@section('page_header')
    @include('admin.partials.page_header',[
        'title' =>  'Editar Usuario'
    ])
@endsection

@section('content')

<form method="POST" 
		action="{{ route('dashboard.users.update', $user) }}" >
		@method('PATCH')
		<div class="row">
			@include('admin.users._form',[
				'txtTitle'  =>  'editar',
                'btnTitle'  =>  'Actualizar',
                'txtPass'   =>  'Si no desea actualizar la contrasena no introduzca datos',
                'txtConfirm' => 'Si no desea actualizar la contrasena no introduzca datos',
                'btnColor'  =>  'btn-info'
				])
		</div>
	</form>
    
@endsection

@push('styles')
        <!-- FILE UPLODE CSS -->
        <link href="/assets/plugins/fileuploads/css/fileupload.css" rel="stylesheet" type="text/css"/>

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
        <!-- FILE UPLOADES JS -->
        <script src="/assets/plugins/fileuploads/js/fileupload.js"></script>
        <script src="/assets/plugins/fileuploads/js/file-upload.js"></script>
        <script src="{{ asset('js/worldedit.js') }}" defer></script>

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
        
        <script type="text/javascript">
            $('.btn-change-pw').click(function(event) {
              var pwInput = $('#password');
              var pwInputConf = $('#password_confirmation');
              pwInput.val('').prop('disabled', true);
              pwInputConf.val('').prop('disabled', true);
              $('.pw-change-container').slideToggle(100, function() {
                pwInput.prop('disabled', function () {
                   return ! pwInput.prop('disabled');
                });
                pwInputConf.prop('disabled', function () {
                   return ! pwInputConf.prop('disabled');
                });
              });
            });
            $("input").keyup(function() {
              checkChanged();
            });
            $("select").change(function() {
              checkChanged();
            });
            function checkChanged() {
              var saveBtn = $(".btn-save");
              if(!$('input').val()){
                saveBtn.hide();
              }
              else {
                saveBtn.show();
              }
            }
          </script>
       
    @endpush