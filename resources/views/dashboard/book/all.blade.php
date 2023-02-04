@extends('dashboard.layouts.main')
@section('content')

<div class="container">
    <h3 class="text-center mt-3">Book List</h3>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            @auth
                            <a type="button" class="btn btn-primary"  href="/dashboard/book/create" >Add New Data</a>
                            @else          
                            @endauth
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
                                <td >{{ $book->author }}</td>
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