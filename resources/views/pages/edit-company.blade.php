@extends('layouts.app')

@section('content')
    @foreach($company as $item)
    <form class="m-auto w-50" method="post" action="{{ route('save-edit-company', $item->id) }}">
        @csrf

        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="title">Įmonės Pavadinimas</label>
                <input type="text" class="form-control" id="title" placeholder="Pavadinimas" name="title" value="{{ $item->title }}">
            </div>

            <div class="form-group col-md-6">
                <label for="password">Įmonės Lyderis</label>
                <input type="text" class="form-control" id="boss" placeholder="Lyderis" name="boss" value="{{ $item->boss }}">
            </div>
        </div>

        <div class="form-group">
            <label for="address">Adresas</label>
            <input type="text" class="form-control" id="address" placeholder="Adresas" name="address" value="{{ $item->address }}">
        </div>

        <div class="form-group">
            <label for="desc">Įmonės Aprašymas</label>
            <input type="text" class="form-control" id="desc" placeholder="Desc" name="desc" value="{{ $item->desc }}">
        </div>

        <button type="submit" class="btn btn-primary btn-md">Atnaujinti</button>
    </form>
    @endforeach
@endsection
