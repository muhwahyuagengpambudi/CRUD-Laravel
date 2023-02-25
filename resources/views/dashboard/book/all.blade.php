@extends('dashboard.layouts.main')
@section('content')

<div class="container">
    <h3 class="text-center mt-5 ">Book List</h3>
        <div class="card ">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="/dashboard/book/all" style="display: flex">
                            @auth
                            <a type="button" class="btn btn-primary w-2 m-3 me-2" href="/dashboard/book/create/" >Tambah Data <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-plus-circle ms-2" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                              </svg></a>
                            @else          
                            @endauth
                            <div class="col-md-3 mt-3 me-4 ms-2">
                                <select class="form-select" name="category" id="">
                                    <option name="book_id" value="0"> -- Semua Pen--</option>
                                    @foreach ($publisher as $item)
                                    @if (request('category') == $item->id)
                                    <option name="category" value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                                    @else
                                    <option name="category" value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mt-3 me-3">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request()->input('search') }}">
                                    <button class="btn btn-dark" type="submit" id="search">Search</button>
                                </div>
                            </div>
                        </form>
                        <table class="table">
                            
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">nama</th>
                                    <th scope="col">pengarang</th>
                                    <th scope="col">harga</th>
                                    <th scope="col">aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = $books->firstItem()
                                @endphp
                                @foreach ($books as $book)
                              <tr>
                                <td>{{  $i++;  }}</td>
                                <td>{{ $book->nama }}</td>
                                <td >{{ $book->publisher->nama }}</td>
                                <td >{{ $book->harga }}</td>
                               @auth
                               <td>
                                <a type="button" class="btn btn-primary"  href="/dashboard/book/detail/{{ $book->id }}" >Detail</a>
                                <a type="button" class="btn btn-warning"  href="/dashboard/book/edit/{{ $book->id }}" >Edit</a>
                                <form action="/dashboard/book/delete/{{ $book->id}}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger" onclick="return confirm('Are you sure ?')">Hapus</button>
                                </form>
                            </td>
                            @else
                               @endauth
                              </tr>
                            </tbody>
                            @endforeach
                          </table>
                          {{-- Pagination --}}
                     {{-- <div class="d-flex justify-content-center"> --}}
                        {!! $books->links() !!}
                {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection