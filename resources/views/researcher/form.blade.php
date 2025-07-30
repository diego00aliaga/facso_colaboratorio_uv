<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_orcid" class="form-label">{{ __('Id Orcid') }}</label>
            <input type="text" name="id_orcid" class="form-control @error('id_orcid') is-invalid @enderror" value="{{ old('id_orcid', $researcher?->id_orcid) }}" id="id_orcid" placeholder="Id Orcid">
            {!! $errors->first('id_orcid', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ap_paterno" class="form-label">{{ __('Ap Paterno') }}</label>
            <input type="text" name="ap_paterno" class="form-control @error('ap_paterno') is-invalid @enderror" value="{{ old('ap_paterno', $researcher?->ap_paterno) }}" id="ap_paterno" placeholder="Ap Paterno">
            {!! $errors->first('ap_paterno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ap_materno" class="form-label">{{ __('Ap Materno') }}</label>
            <input type="text" name="ap_materno" class="form-control @error('ap_materno') is-invalid @enderror" value="{{ old('ap_materno', $researcher?->ap_materno) }}" id="ap_materno" placeholder="Ap Materno">
            {!! $errors->first('ap_materno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombres" class="form-label">{{ __('Nombres') }}</label>
            <input type="text" name="nombres" class="form-control @error('nombres') is-invalid @enderror" value="{{ old('nombres', $researcher?->nombres) }}" id="nombres" placeholder="Nombres">
            {!! $errors->first('nombres', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="funcionario" class="form-label">{{ __('Funcionario') }}</label>
            <input type="text" name="funcionario" class="form-control @error('funcionario') is-invalid @enderror" value="{{ old('funcionario', $researcher?->funcionario) }}" id="funcionario" placeholder="Funcionario">
            {!! $errors->first('funcionario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $researcher?->email) }}" id="email" placeholder="Email">
            {!! $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="sexo" class="form-label">{{ __('Sexo') }}</label>
            <input type="text" name="sexo" class="form-control @error('sexo') is-invalid @enderror" value="{{ old('sexo', $researcher?->sexo) }}" id="sexo" placeholder="Sexo">
            {!! $errors->first('sexo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="reparticion" class="form-label">{{ __('Reparticion') }}</label>
            <input type="text" name="reparticion" class="form-control @error('reparticion') is-invalid @enderror" value="{{ old('reparticion', $researcher?->reparticion) }}" id="reparticion" placeholder="Reparticion">
            {!! $errors->first('reparticion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="grado" class="form-label">{{ __('Grado') }}</label>
            <input type="text" name="grado" class="form-control @error('grado') is-invalid @enderror" value="{{ old('grado', $researcher?->grado) }}" id="grado" placeholder="Grado">
            {!! $errors->first('grado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="institucion" class="form-label">{{ __('Institucion') }}</label>
            <input type="text" name="institucion" class="form-control @error('institucion') is-invalid @enderror" value="{{ old('institucion', $researcher?->institucion) }}" id="institucion" placeholder="Institucion">
            {!! $errors->first('institucion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="foto" class="form-label">{{ __('Foto') }}</label>
            <input type="text" name="foto" class="form-control @error('foto') is-invalid @enderror" value="{{ old('foto', $researcher?->foto) }}" id="foto" placeholder="Foto">
            {!! $errors->first('foto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="video" class="form-label">{{ __('Video') }}</label>
            <input type="text" name="video" class="form-control @error('video') is-invalid @enderror" value="{{ old('video', $researcher?->video) }}" id="video" placeholder="Video">
            {!! $errors->first('video', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="asociatividad_1" class="form-label">{{ __('Asociatividad 1') }}</label>
            <input type="text" name="asociatividad_1" class="form-control @error('asociatividad_1') is-invalid @enderror" value="{{ old('asociatividad_1', $researcher?->asociatividad_1) }}" id="asociatividad_1" placeholder="Asociatividad 1">
            {!! $errors->first('asociatividad_1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="rol_1" class="form-label">{{ __('Rol 1') }}</label>
            <input type="text" name="rol_1" class="form-control @error('rol_1') is-invalid @enderror" value="{{ old('rol_1', $researcher?->rol_1) }}" id="rol_1" placeholder="Rol 1">
            {!! $errors->first('rol_1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="asociatividad_2" class="form-label">{{ __('Asociatividad 2') }}</label>
            <input type="text" name="asociatividad_2" class="form-control @error('asociatividad_2') is-invalid @enderror" value="{{ old('asociatividad_2', $researcher?->asociatividad_2) }}" id="asociatividad_2" placeholder="Asociatividad 2">
            {!! $errors->first('asociatividad_2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="rol_2" class="form-label">{{ __('Rol 2') }}</label>
            <input type="text" name="rol_2" class="form-control @error('rol_2') is-invalid @enderror" value="{{ old('rol_2', $researcher?->rol_2) }}" id="rol_2" placeholder="Rol 2">
            {!! $errors->first('rol_2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="asociatividad_3" class="form-label">{{ __('Asociatividad 3') }}</label>
            <input type="text" name="asociatividad_3" class="form-control @error('asociatividad_3') is-invalid @enderror" value="{{ old('asociatividad_3', $researcher?->asociatividad_3) }}" id="asociatividad_3" placeholder="Asociatividad 3">
            {!! $errors->first('asociatividad_3', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="rol_3" class="form-label">{{ __('Rol 3') }}</label>
            <input type="text" name="rol_3" class="form-control @error('rol_3') is-invalid @enderror" value="{{ old('rol_3', $researcher?->rol_3) }}" id="rol_3" placeholder="Rol 3">
            {!! $errors->first('rol_3', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="area_1" class="form-label">{{ __('Area 1') }}</label>
            <input type="text" name="area_1" class="form-control @error('area_1') is-invalid @enderror" value="{{ old('area_1', $researcher?->area_1) }}" id="area_1" placeholder="Area 1">
            {!! $errors->first('area_1', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="area_2" class="form-label">{{ __('Area 2') }}</label>
            <input type="text" name="area_2" class="form-control @error('area_2') is-invalid @enderror" value="{{ old('area_2', $researcher?->area_2) }}" id="area_2" placeholder="Area 2">
            {!! $errors->first('area_2', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="area_3" class="form-label">{{ __('Area 3') }}</label>
            <input type="text" name="area_3" class="form-control @error('area_3') is-invalid @enderror" value="{{ old('area_3', $researcher?->area_3) }}" id="area_3" placeholder="Area 3">
            {!! $errors->first('area_3', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado', $researcher?->estado) }}" id="estado" placeholder="Estado">
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>