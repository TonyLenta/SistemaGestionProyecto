@csrf

<div class="container col-lg-6 col-md-12 col-sm-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Formulario para {{ $txtTitle }}</h3>
            <a href="{{ route('dashboard.management.index') }}" class="btn btn-outline-danger btn-sm ml-auto">
            <i class="ti-angle-double-left"></i> Regresar</a>
        </div>
        <div class="card-body">

            <div class="form-group">
                <label for="" class="form-label">Nombre del permiso</label>
                <input type="text" value="{{ old('name', $permission->name) }}" name="name" class="form-control @error('name') form-control is-invalid state-invalid @enderror"
                 placeholder="Ingresa el nombre del permiso">
                 @error('name')
                 <div class="invalid-feedback">{{ $message }}</div>
                 @enderror
            </div>

            <div class="form-group">
                <label for="" class="form-label">Guard Name</label>
                <select name="guard_name" class="form-control select2-show-search" data-placeholder="Elige un guard">
                    <option label="Ingresa el tipo de guard"></option>
                    @foreach (config('auth.guards') as $guardName => $guard)
                        <option value="{{ $guardName }}" {{ old('guard_name', $permission->guard_name) === $guardName ? 'selected' : '' }}>{{ $guardName }}</option>
                        
                    @endforeach
                </select>
            </div>



            <div class="form-group">
                    <label for="" class="form-label">Descripcion</label>
                    <textarea name="description" rows="4" class="form-control @error('description') form-control is-invalid state-invalid @enderror"
                     placeholder="Ingresa la descripcion del permiso">{{ old('description', $permission->description) }}</textarea>
                     @error('description')
                     <div class="invalid-feedback">{{ $message }}</div>
                     @enderror
            </div>
        </div>
        <div class="card-footer">
            <button class="btn {{ $btnColor }} btn-block mb-1" type="submit"><i class="ion-paper-airplane"></i> {{ $btnTitle}}</button>
        </div>
    </div>
</div>