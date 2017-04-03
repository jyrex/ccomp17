@extends('layouts.app')

@section('content')
<main>

    <div id="admin-peserta">
        <div class="container">
            <div class="row">
                <table class="bordered striped highlight">
                    <thead>
                        <tr>
                        	<th>ID</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Fakultas</th>
                            <th>Prodi</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($peserta as $list)
                        <tr>
                        	<td>{{ $list->id }}</td>
                            <td>{{ $list->NIM }}</td>
                            <td>{{ $list->nama_lengkap }}</td>
                            <td>{{ $list->prodi->fakultas->fakultas }}</td>
                            <td>{{ $list->prodi->program_studi }}</td>
                            <td>
                                <a href="{{ url('/team/'.$list->id.'/edit') }}" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Edit"><i class="zmdi zmdi-edit blue-text text-lighten-3"></i></a>
                                <form action="{{ url('admin/peserta/'.$list->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" id="delete-task-{{ $list->id }}" class=" btn tooltipped" data-position="top" data-delay="50" data-tooltip="Hapus">
                                        <i class="zmdi zmdi-delete zmdi-hc-2x red-text text-lighten-1"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</main>
@endsection