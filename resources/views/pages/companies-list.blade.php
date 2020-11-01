@extends('layouts.app')

@section('content')
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Pavadinimas</th>
            <th scope="col">Adresas</th>
            <th scope="col">Lyderis</th>
            <th scope="col">Aprašymas</th>
            @auth
            <th scope="col">Veiksmai</th>
            @endauth
        </tr>
        </thead>
        <tbody>
        @foreach($companies as $company)
        <tr>
            <th scope="row">{{ $company->title }}</th>
            <th scope="row">{{ $company->address }}</th>
            <th scope="row">{{ $company->boss }}</th>
            <th scope="row">{{ $company->desc }}</th>
            @auth
            <th scope="row">
                <a href="{{ route('panaikinti', $company->id) }}" class="mr-2">Ištrinti</a>
                <a href="{{ route('redaguoti', $company->id) }}" class="ml-2">Redaguoti</a>
            </th>
            @endauth
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
