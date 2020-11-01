@extends('layouts.app')

@section('content')
    <form class="m-auto w-50" method="post" action="{{ route('save-company') }}">
        @csrf

        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="title">Įmonės Pavadinimas</label>
                <input type="text" class="form-control" id="title" placeholder="Pavadinimas" name="title">
            </div>

            <div class="form-group col-md-6">
                <label for="password">Įmonės Lyderis</label>
                <input type="text" class="form-control" id="boss" placeholder="Lyderis" name="boss">
            </div>
        </div>

        <div class="form-group">
            <label for="address">Adresas</label>
            <input type="text" class="form-control" id="address" placeholder="Adresas" name="address">
        </div>

        <div class="form-group">
            <label for="desc">Įmonės Aprašymas</label>
            <input type="text" class="form-control" id="desc" placeholder="Desc" name="desc">
        </div>

        <button type="submit" class="btn btn-primary btn-md">Sukurti</button>
    </form>

@endsection
