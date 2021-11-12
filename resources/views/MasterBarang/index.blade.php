@extends("layouts.master")
@push('style')

    <!-- Custom styles for this page -->
    <link href="{{ asset('sb_admin_2') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush
@section('title')
    Halaman Master Barang
@endsection
@section('nama')
    Faisal Dzulfikar
@endsection
@section('judul')
    Halaman Master Barang
@endsection
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Barang</h6>
            </div>
            <div class="card-body">
                <a href="barang/create">Tambah +</a>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Harga Satuan</th>
                                <th>Waktu Dibuat</th>
                                <th>Waktu Diperbarui</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Harga Satuan</th>
                                <th>Waktu Dibuat</th>
                                <th>Waktu Diperbarui</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($barang as $item => $key)
                            <tr>
                                <td>{{ $item + 1 }}</td>
                                <td>{{ $key->nama_barang }}</td>
                                <td>{{ $key->harga_satuan }}</td>
                                <td>{{ $key->created_at }}</td>
                                <td>{{ $key->updated_at }}</td>
                                <td class="text-center">
                                    <a href="barang/{{$key->id}}" class="btn btn-outline-info"><i
                                            class="fas fa-eye"></i></a>
                                    <a href="barang/{{$key->id}}/edit" class="btn btn-outline-primary"><i
                                            class="far fa-edit"></i></a>

                                    <form action="barang/{{$key->id}}" method="POST" class="display-non">
                                        @csrf
                                        @method('DELETE')
                                        <button input type="submit" class="btn btn-outline-danger my-1" value="Delete"><i
                                                class="far fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection

@push('script')
<!-- Page level plugins -->
<script src="{{ asset('sb_admin_2') }}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('sb_admin_2') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('sb_admin_2') }}/js/demo/datatables-demo.js"></script>
@endpush
