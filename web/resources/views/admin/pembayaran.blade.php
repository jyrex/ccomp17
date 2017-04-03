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
                            <th>Tim</th>
                            <th>Bukti</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>

                    <tbody> 
                    @foreach ($pembayaran as $list)
                        <tr>
                        	<td>{{ $list->id_pembayaran }}</td>
                            <td>{{ $list->tim->tim }}</td>
                            <td><a href="{{ url('/'.$list->bukti) }}">{{ $list->bukti }}</a></td>
                            <td>{{ $list->keterangan }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</main>
@endsection