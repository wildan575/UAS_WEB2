@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Nilai
                
                </div>

                <div class="card-body">
                    <form action="{{ route('update.nilai', $nilai->id) }}" method="post">
                    @csrf
                        <div class="form-group row">
                            <label for="mahasiswa_id" class="col-md-4 text-md-right">Nama Mahasiswa</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="mahasiswa_id" id="mahasiswa_id">
                                        <option value="disabled selected">--- Pilih Nama ---</option>
                                            @foreach ($mahasiswa as $mhs)
                                        <option value="{{ $mhs->id }}" {{ $nilai->mahasiswa_id == $mhs->id ? 'selected' : '' }} > {{ $mhs->user->name }}</option>
                                            @endforeach
                                    </select>
                                </div>
                        </div>

                        <div class="form-group row">        
                            <label for="makul_id" class="col-md-4 text-md-right">Nama Matakuliah</label>
                                <div class="col-md-6">
                                    <select name="makul_id" id="makul_id" class="form-control">
                                        <option value="" disabled selected>-- Pilih Nama Makul --</option>
                                            @foreach ($makul as $mk)
                                        <option value="{{ $mk->id}}" {{ $nilai->makul_id == $mk->id ? 'selected' : '' }} > {{$mk->nama_makul}}</option>
                                            @endforeach
                                    </select>
                                </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="nilai" class="col-md-4 text-md-right">Nilai</label>
                                <div class="col-md-3">
                                    <input type="number" name="nilai" class="form-control" value="{{ is_null ($nilai) ? '' : $nilai->nilai }}">
                                </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-4 float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                        <a href="{{ route('nilai') }}" class="btn btn-md btn-danger">BATAL</a>
                                </div>
                            </div>
                        </div>
                    </form>  
                    
                </div>
                    
            </div>
                
        </div>
            
    </div>
        
</div>
</div>
</div>
@endsection