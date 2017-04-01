@extends('layouts.app')

@section('content')
<main>

    <div id="admin-peserta">
        <div class="container">
            <div class="row">
                <table class="bordered striped highlight">
                    <thead>
                        <tr>
                        	<th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Fakultas</th>
                            <th>Prodi</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>

                    <tbody> 
                    <?php $i=1; ?>
                    @foreach ($peserta as $list)
                        <tr>
                        	<td>{{ $i }}</td>
                            <td>{{ $list->NIM }}</td>
                            <td>{{ $list->nama_lengkap }}</td>
                            <td>{{ $list->prodi->fakultas->fakultas }}</td>
                            <td>{{ $list->prodi->program_studi }}</td>
                            <td>
                                <a href="" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Edit"><i class="zmdi zmdi-edit zmdi-hc-2x blue-text text-lighten-3"></i></a>
                                <a href="" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Hapus"><i class="zmdi zmdi-delete zmdi-hc-2x red-text text-lighten-1"></i></a>
                            </td>
                        </tr>
                    <?php $i=$i+1; ?>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</main>
@endsection