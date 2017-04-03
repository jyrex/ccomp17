@extends('layouts.app')

@section('content')
<main>

    <div id="admin-team">
        <div class="container">
            <div class="row">
            	<div class="row center-align">
                    <a href="{{ url('admin/pengumuman/create') }}" class="btn-large-blue waves-effect waves-light">Tambah</a>
                </div>
                <table class="bordered striped highlight">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Lomba</th>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th>Opsi</th>
                            <th>Dibuat</th>
                            <th>Diedit</th>
                        </tr>
                    </thead>

                    <tbody>
	                    @foreach ($pengumuman as $list)
	                        <tr>
	                            <td>{{ $list->id_peng }}</td>
	                            <td>{{ $list->lomba }}</td>
	                            <td>{{ $list->judul }}</td>
	                            <td>{{ $list->isi }}</td>
	                            <td>{{ $list->created_at }}</td>
	                            <td>{{ $list->updated_at }}</td>
	                            <td>
	                                <a href="{{ url('admin/pengumuman/'.$list->id_peng.'/edit') }}" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Edit"><i class="zmdi zmdi-edit blue-text text-lighten-3"></i></a>
                                    <form action="{{ url('admin/pengumuman/'.$list->id_peng) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" id="delete-task-{{ $list->id_peng }}" class=" btn tooltipped" data-position="top" data-delay="50" data-tooltip="Hapus">
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