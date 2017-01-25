@extends('main')

@section('content')

    <h1 class="text-center">{{ $station }}</h1>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered table-hover table-striped">
                <tr class="info">
                    <td><b>Диллер</b></td>
                    <td><b>Адрес</b></td>
                    <td><b>Телефон</b></td>
                </tr>
                @foreach($dealers as $dealer)
                    <tr>
                        @if(empty($dealer->dealer_name))
                            <th>Нет привязанных диллеров.</th>
                            <th>-</th>
                            <th>-</th>
                        @else
                            <td>{{ $dealer->dealer_name }}</td>
                            <td>{{ $dealer->address }}</td>
                            <td>{{ $dealer->phone }}</td>
                        @endif
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-6">
            <h4 class="text-center"><a href="/dealers/">Отобразить полный список диллеров</a></h4>
        </div>
        <div class="col-lg-6">
            <h4 class="text-center"><a href="/">Отобразить полный список станций</a></h4>
        </div>
    </div>

@endsection