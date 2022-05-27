@extends('admin.layouts.app')

@section('content')
<div class="col-md-9 ms-sm-auto col-lg-9 px-md-4 mt-5">
    <form action="{{ route('admin.kelompokindikator.simpan') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="form-group" style="margin-bottom: 10px;">
                <label for="nama">Pertanyaan</label>
                <input required type="text" class="form-control" name="pertanyaan">
            </div>
            <div class="form-group" style="margin-bottom: 10px;">
                <label for="nama">Indikator</label><br/>
                @foreach($indikator as $i)
                    <input type="checkbox" name="indikator[]" id="" value="{{ $i->id }}">{{ $i->nama_indikator }}<br/>
                @endforeach
            </div>
        <div class="text-right" >
            <button type="submit" class="btn btn-success text-right">Simpan</button>
        </div>
    </form>
</div>
@endsection