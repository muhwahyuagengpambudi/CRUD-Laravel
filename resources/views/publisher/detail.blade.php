@extends('layouts.main')
@section('content')
     {{-- <h1>{{ $book['nama'] }}</h1> --}}
     <form>
        <div class="mb-3">
          <label >Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" value="{{ $public->nama }}" readonly>
        </div>
        <div class="mb-3">
            <label >Email</label>
            <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $public->email}}" readonly>
          </div>
          <div class="mb-3">
            <label >Alamat</label>
            <input type="text" class="form-control" id="harga" name="harga" value="{{ $public->alamat }}" readonly>
          </div>
        
        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
      </form>
@endsection