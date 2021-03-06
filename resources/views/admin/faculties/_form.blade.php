@csrf

<div class="container col-lg-6 col-md-12 col-sm-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Formulario para {{ $txtTitle }} Facultades</h3>
            <a href="{{ route('dashboard.faculties.index') }}" class="btn btn-outline-danger btn-sm ml-auto">
            <i class="ti-angle-double-left"></i> Regresar</a>
        </div>
        <div class="card-body">

            <div class="form-group">
                <label for="" class="form-label">Nombre de la facultad</label>
                <input type="text" value="{{ old('name', $faculty->name) }}" name="name" class="form-control @error('name') form-control is-invalid state-invalid @enderror"
                 placeholder="Ingresa el nombre de la facultad">
                 @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                 @enderror
            </div>

           

        </div>
        <div class="card-footer">
            <button class="btn {{ $btnColor }} btn-block mb-1" type="submit"><i class="ion-paper-airplane"></i> {{ $btnTitle}}</button>
        </div>
    </div>
</div>