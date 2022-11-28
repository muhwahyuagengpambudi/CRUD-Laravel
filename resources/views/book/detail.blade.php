@extends('layouts.main')
@section('content')
     {{-- <h1>{{ $book['nama'] }}</h1> --}}
     <form>
        <div class="mb-3">
          <label >Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" value="{{ $book->nama }}" readonly>
        </div>
        <div class="mb-3">
          <label >Publisher</label>
          <input type="text" class="form-control" id="nama" name="nama" value="{{ $book->publisher->nama }}" readonly>
        </div>
        <div class="mb-3">
            <label >Pengarang</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}" readonly>
          </div>
          <div class="mb-3">
            <label >Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" value="{{ $book->harga }}" readonly>
          </div>
          <div class="mb-3">
            <label >Rilis</label>
            <input type="text" class="form-control" id="rilis" name="rilis" value="{{ $book->rilis }}" readonly>
          </div>
        
        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
      </form>
@endsection