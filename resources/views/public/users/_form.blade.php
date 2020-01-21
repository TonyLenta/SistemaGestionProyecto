@csrf

<div class="container">
<div class="card">
        <div class="card-header">
            <h3 class="mb-0 card-title">{{ $user->name }} || {{ $txtTitle }}</h3>
            <a href="{{ route('users.show', $user) }}" 
            class="btn btn-outline-danger btn-sm ml-auto mb-auto"><i class="ti-angle-double-left"></i> 
            Regresar</a>
        </div>
        <div class="card-body">
                <div class="row">
                        <div class="col-md-6">
                                <div class="form-group mb-auto">
                                        <label class="form-label">Avatar</label>  
                                        @if (auth()->user()->avatar)
                                                 <input type="file" class="dropify"  data-default-file="{{ $user->avatar }}"
                                                  name="avatar"data-height="300">          
                                        @else
                                        <input type="file" class="dropify" name="avatar"data-height="300">
                                        @endif
                                </div>

                                <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control @error('email') form-control is-invalid state-invalid @enderror" name="email" placeholder="Ingresa el Email"
                                        value="{{ old('email', $user->email) }}">

                                        @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
					@enderror
                                </div>

                                <div class="form-group">
                                        <label class="form-label">Nick</label>
                                        <input type="text" class="form-control" name="name" placeholder="Ingresa el nick"
                                        value="{{ old('name', $user->name) }}">
                                </div>

                                <div class="form-group">
                                        <label class="form-label">DNI/Cedula</label>
                                        <input type="text" class="form-control" name="dni" placeholder="Ingresa la cedula de identificacion (opcional)"
                                        value="{{ old('dni', $user->dni) }}">
                                        @error('dni')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                </div>
                               
                        </div>
                        <div class="col-md-6">

                                <div class="form-group">
                                        <label class="form-label">Nombre</label>
                                        <input type="text" class="form-control" name="first_name" placeholder="Ingresa el Nombre (opcional)"
                                        value="{{ old('first_name', $user->first_name) }}">
                                </div>

                                <div class="form-group">
                                        <label class="form-label">Apellido</label>
                                        <input type="text" class="form-control" name="last_name" placeholder="Ingresa el apellido (opcional)"
                                        value="{{ old('last_name', $user->last_name) }}">
                                </div>

                                <div class="form-group">
                                        <label class="form-label">Direccion</label>
                                        <input type="text" class="form-control" name="address" placeholder="Ingresa la dirección (opcional)"
                                        value="{{ old('address', $user->address) }}">
                                        @error('address')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                </div>

                                <div class="form-group">
                                        <label class="form-label">Pais</label>
                                        <select name="country_id" id="country_id" class="form-control select2-show-search @error('country_id') form-control select2-show-search is-invalid state-invalid @enderror" 
                                        data-placeholder="Elige un pais">
                                            @foreach ($countries as $id => $name)
                                                <option value="{{ $id }}">{{ $name }}</option>
                                            @endforeach
                                        </select>
                                        @error('country_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                
                                    <div class="form-group">
                                        <label id="state_id" class="form-label">Estado</label>
                                        <select name="state_id" id="country_id" class="form-control select2-show-search @error('state_id') form-control select2-show-search is-invalid state-invalid @enderror"
                                        data-placeholder="Elige un Estado">
                                            <option value=""></option>
                                        </select>
                                        @error('state_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                
                                    <div class="form-group">
                                        <label id="city_id" class="form-label">Ciudad</label>
                                        <select name="city_id" id="state_id" class="form-control select2-show-search @error('city_id') form-control select2-show-search is-invalid state-invalid @enderror"
                                        data-placeholder="Elige una ciudad">
                                            <option value=""></option>
                                        </select>
                                        @error('city_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
            
                                    <a href="#" class="btn btn-radius btn-warning-light btn-block btn-change-pw">Colocar la Contraseña</a>

                                    <div class="pw-change-container" style="display: none">
                                        <div class="form-group">
                                                <label class="form-label" for="password">Password</label>
                                                <input id="password" id='password' name="password" type="password" class="form-control" placeholder="{{ $txtPass }}">
                                        </div>
                                                        
                                        <div class="form-group">
                                                <label  class="form-label" for="password_confirmation">Confirmar Contraseña</label>
                                                <input id="password_confirmation"  name="password_confirmation" type="password" class="form-control" placeholder="{{ $txtConfirm }}">
                                        </div>
                                    </div>
                        </div>
                        
                </div>
        </div>
                <div class="card-footer">
                        <div class="btn-list text-center">
                                <button type="submit" class="btn {{ $btnColor }} mb-1"><i class="ion-paper-airplane"></i> {{ $btnTitle }} </button>
                        </div>   
                </div>
    </div>
</div>
