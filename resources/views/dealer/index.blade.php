@extends('main')

@section('content')

    <h1 class="text-center">Dealers</h1>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered table-hover table-striped">
                <tr class="info">
                    <td><b>Диллер</b></td>
                    <td><b>Адрес</b></td>
                    <td><b>Телефон</b></td>
                    <td><b>К-ство станций</b></td>
                </tr>
                @foreach($dealers as $dealer)
                    <tr>
                        <td>{{ $dealer->dealer_name }}</td>
                        <td>{{ $dealer->address }}</td>
                        <td>{{ $dealer->phone }}</td>
                        <td>{{ $dealer->count_station }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <hr>
    <h4 class="text-center"><a href="/">Полный список станций</a></h4>

@endsection