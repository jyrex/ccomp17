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
                            <th>Nama Tim</th>
                            <th>Lomba Diikuti</th>
                            <th>Email Ketua</th>
                            <th>NIM Ketua</th>
                            <th>HP Ketua</th>
                            <th>Submission</th>
                        </tr>
                    </thead>

                    <tbody> 
                    @foreach ($tim as $list)
                        <tr>
                        	<td>{{ $list->id }}</td>
                            <td>{{ $list->tim }}</td>
                            <td>{{ $list->lomba }}</td>
                            <td>{{ $list->email }}</td>
                            <td>{{ $list->id_ketua }}</td>
                            <td>{{ $list->hp }}</td>
                            <td>{{ $list->submission }}</td>
                            <td>
                                <a href="" class="tooltipped" data-position="top" data-delay="50" data-tooltip="Edit"><i class="zmdi zmdi-edit zmdi-hc-2x blue-text text-lighten-3"></i></a>
                                <form action="{{ url('admin/tim/'.$list->id) }}" method="POST">
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