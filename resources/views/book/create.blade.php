@extends('layouts.main')
@section('content')
<h2 align="center" class="mt-5">Add New Data</h2>
<form method="post" action="/book/add">
    @csrf
    <div class="mb-2">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" required id="nama" name="nama" value="{{ old('nama') }}">
    </div>
    <div class="mb-2">
        <label for="pengarang">Pengarang</label>
        <input type="text" class="form-control" required id="author" name="author" value="{{ old('author') }}">
      </div>
      <div class="mb-2">
        <label for="publisher" class="form-label">Publisher</label>
        <select class="form-select" name="publisher_id" id="">
            @foreach ($publisher as $publisher)
            <option name="publisher_id" value="{{ $publisher->id}}">{{ $publisher->nama }}</option>
            @endforeach
        </select>
      </div>
      <div class="mb-2">
        <label for="harga">Harga</label>
        <input type="number" class="form-control" required id="harga" name="harga" value="{{ old('harga') }}">
      </div>
      <div class="mb-3">
        <label for="rilis">Rilis</label>
        <input type="date" class="form-control" required id="rilis" name="rilis" value="{{ old('rilis') }}">
      </div>
      <button type="submit" class="btn btn-primary">Add</button>
    {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
  </form>
@endsection