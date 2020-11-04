@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header font-weight-bold">{{ __('Let\'s book a room!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <input type="text" name="destination" id="destination">
                    <select name="brand" id="brand">
                        <option value="one">Uno</option>
                    </select>
                    <select name="rateplan" id="rateplan">
                        <option value="one">Uno</option>
                    </select>
                    <select name="city" id="city">
                        <option value="one">Uno</option>
                    </select>
                    <select name="state" id="state">
                        <option value="one">Uno</option>
                    </select>
                    <select name="country" id="country">
                        <option value="one">Uno</option>
                    </select>
                    <input type="text" name="zipcode" id="zipcode">
                    <input type="date" name="checkin" id="checkin">
                    <input type="number" name="nights" id="nights">
                    <input type="date" name="checkout" id="checkout">
                    <input type="number" name="adults" id="adults">
                    <input type="number" name="children" id="children">
                    <input type="number" name="rooms" id="rooms">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection