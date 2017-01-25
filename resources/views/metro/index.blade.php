@extends('main')

@section('content')

    <h1 class="text-center">Metro Stations</h1>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <img class="img-responsive" style="margin: 0 auto;" src="http://metro.idealab.com.ua/img/metro.jpg" width="1000" height="auto" alt="Metro" usemap="#metro">
            <map name="metro">
                @foreach($stations as $station)
                    <area shape="rect" coords="{{ $station->metro_station_coords }}" alt="{{ $station->metro_station_name }}" href="metro/{{ $station->metro_station_id }}.html">
                @endforeach
            </map>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-4">
            <ul>
                @foreach($stations as $station)
                    <a href="metro/{{ $station->metro_station_id }}.html"><li>{{ $station->metro_station_name }}</li></a>
                @endforeach
            </ul>
        </div>
        <div class="col-lg-4">
            <select id="stationsSelect" onchange="select()">
                <option value="">Выбор станции</option>
                <option value="dealers/">Все станции</option>
                @foreach($stations as $station)
                    <option value="metro/{{ $station->metro_station_id }}.html">{{ $station->metro_station_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-lg-4">
            <table class="table table-bordered table-hover table-striped">
                <tr class="info">
                    <td><b>Станции</b></td>
                    <td><b>К-ство диллеров</b></td>
                </tr>
                @foreach($stations as $station)
                    <tr>
                        <td><a href="metro/{{ $station->metro_station_id }}.html">{{ $station->metro_station_name }}</a></td>
                        <td>{{ $station->count_dealer }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <hr>
    <h4 class="text-center"><a href="dealers/">Полный список диллеров</a></h4>

@endsection