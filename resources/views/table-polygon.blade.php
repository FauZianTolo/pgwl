@extends('layouts.template')

@section('content')

<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header text-center">
            <h3 >Data Poligon</h3>
        </div>
        <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered table-striped text-center" id="example">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            {{-- <th>Koordinat</th> --}}
            <th>Foto</th>
            <th>Created at</th>
        </tr>
    </thead>
    <tbody>
    @php $no = 1 @endphp
    @foreach ($polygons as $p)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $p->name }}</td>
        <td>{{ $p->deskripsi }}</td>
        {{-- <td>{{ $p->koordinat }}</td> --}}
        {{-- <td>{{ $p->geom }}</td> --}}
        <td>
            <img src="{{ asset('storage/images/'.$p->image)}}" alt="" width="200">
        </td>
        <td>{{ date_format($p->created_at, 'D, d M Y, H:i:s') }}</td>
    </tr>

    @endforeach
    </tbody>
</table>
        </div>
    </div>
</div>

@endsection

@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
@endsection

@section('script')
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
<script>
    new DataTable('#example');
</script>
@endsection
