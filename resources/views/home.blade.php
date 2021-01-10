@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg rounded">
                <div class="card-header h3 font-weight-bold">{{ __('¡Reserva tu habitación ahora!') }}</div>

                <div class="card-body p-6">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form action="{{ route('hotels') }}" method="GET">
                        @csrf
                        <div class="form-row p-4">
                            <input class="@error('destination') is-invalid @enderror form-control text-center col-4" type="text" name="destination" id="destination" placeholder="Destination">

                            <div class="col dropdown">
                                {{-- <button type="button" class="form-control bg-white text-black dropdown-toggle" data-toggle="dropdown">
                                    Ciudad
                                </button> --}}
                                <select class="form-control" name="city" id="city">
                                    <option class="dropdown-item" selected>Ciudades</option>
                                    <option class="dropdown-item" value="algo mas">Algo mas</option>
                                </select>
                            </div>

                            <div class="col dropdown">
                                <button type="button" class="form-control bg-white text-black dropdown-toggle" data-toggle="dropdown">
                                    Estado
                                </button>
                                <div class="dropdown-menu" name="state" id="state">
                                    <option class="dropdown-item" value="Estado">Estado</option>
                                </div>
                            </div>

                            <div class="col dropdown">
                                <button type="button" class="form-control bg-white text-black dropdown-toggle" data-toggle="dropdown">
                                    Pais
                                </button>
                                <div class="dropdown-menu" name="country" id="country">
                                    <option class="dropdown-item" value="">Pais</option>
                                    <option class="dropdown-item" value="Santa Ana">Santa Ana</option>
                                </div>
                            </div>

                            <input type="text" class="col-1 form-control text-center" name="zipcode" id="zipcode" placeholder="zipcode" maxlength="8">
                        </div>

                        <div class="form-row pl-4">
                            <div class="form-group col-5 dropdown">
                                <button type="button" class="form-control bg-white mt-4 text-black dropdown-toggle" data-toggle="dropdown">
                                    Franquicia
                                </button>
                                <div class="dropdown-menu" name="brand" id="brand">
                                    <a class="dropdown-item" value="Marca">Marca</a>
                                </div>
                            </div>

                            <div class="form-group col-7">
                                <div class="form-row justify-content-center">
                                    <label class="col-3" for="checkin">Fecha de llegada</label>
                                    <label class="col-2" for="nights">Noches</label>
                                    <label class="col-3" for="checkout">Fecha de salida</label>
                                </div>
                                <div class="form-row justify-content-center">
                                    <input class="col-3 @error('checkin') is-invalid @enderror form-control mr-3 col-2 text-center" type="date" name="checkin" id="checkin">
                                    <input class="col-2 @error('nights') is-invalid @enderror form-control mr-3 col-1" type="number" name="nights" id="nights" placeholder="0">
                                    <input class="col-3 @error('checkout') is-invalid @enderror form-control mr-3 col-2 text-center" type="date" name="checkout" id="checkout">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row justify-content-center">
                                <label class="col-1 text-center" for="adults">Adultos</label>
                                <label class="col-1 text-center" for="children">Niños</label>
                                <label class="col-1 text-center" for="rooms">Cuartos</label>
                            </div>
                            <div class="form-row justify-content-center">
                                <input class="col-1 @error('adults') is-invalid @enderror form-control mr-3 col-1" type="number" name="adults" placeholder="0" id="adults">
                                <input class="col-1 @error('children') is-invalid @enderror form-control mr-3 col-1" type="number" name="children" placeholder="0" id="children">
                                <input class="col-1 @error('rooms') is-invalid @enderror form-control mr-3 col-1" type="number" name="rooms" placeholder="0" id="rooms">
                            </div>
                        </div>

                        <div class="col text-center">
                            <input type="submit" class="btn btn-dark align-items-center btn-lg mt-4" value="Buscar">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection