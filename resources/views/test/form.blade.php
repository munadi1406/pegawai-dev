<div class="form-group {{ $errors->has('nama_tabel') ? 'has-error' : ''}}">
    <label for="nama_tabel" class="control-label">{{ 'Nama Tabel' }}</label>
    <input class="form-control" name="nama_tabel" type="text" id="nama_tabel" value="{{ isset($test->nama_tabel) ? $test->nama_tabel : ''}}" >
    {!! $errors->first('nama_tabel', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
