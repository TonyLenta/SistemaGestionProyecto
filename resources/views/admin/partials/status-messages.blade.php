@if (session('status'))
    
<div class="alert alert-success alert-dismissible fade show" id="success-alert" role="alert">
  <strong>Mensaje: </strong> {{ session('status') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@elseif(session('info'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>Mensaje: </strong> {{ session('info') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@elseif(session('danger'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Mensaje: </strong> {{ session('danger') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif

@push('scripts')
    <script>
    $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
    });
    </script>
@endpush