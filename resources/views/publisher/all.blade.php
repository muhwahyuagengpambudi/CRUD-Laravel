@extends('layouts.main')
@section('content')
<div class="container">
    <h3 class="text-center mt-3">Data</h3>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Buku</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($publishers as $public)
                              <tr>
                                <td>{{ $public->id }}</td>
                                <td>{{ $public->nama }}</td>
                                <td >{{ $public->email }}</td>
                                <td >{{ $public->alamat }}</td>
                                <td>
                                    @foreach ($public->book as $book)
                                        <ul>
                                            <li>
                                                {{$book->nama}}
                                            </li>
                                        </ul>
                                    @endforeach
                                </td>
                                <td>
                                    <a type="button" class="btn btn-primary"  href="/publisher/detail/{{ $public->id }}" >Detail</a>
                                </td>
                              </tr>
                            </tbody>
                            @endforeach
                          </table>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection