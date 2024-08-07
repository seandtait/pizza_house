@extends('layout.layout')

@section('title', 'Deals')

@section('content')

    <div class="album py-5 bg-light">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('images/deal.png') }}" class="" alt="Banner Pizza" height="225"
                            width="100%">
                        <div class="card-body">
                            <p class="card-text">Buy one get one free!</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-danger">Claim</button>
                                </div>
                                <small class="text-muted">Valid Until 11/05/24</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('images/deal.png') }}" class="" alt="Banner Pizza" height="225"
                            width="100%">
                        <div class="card-body">
                            <p class="card-text">Spend £40 Get 50% Off!</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-danger">Claim</button>
                                </div>
                                <small class="text-muted">Valid Until 11/05/24</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('images/deal.png') }}" class="" alt="Banner Pizza" height="225"
                            width="100%">
                        <div class="card-body">
                            <p class="card-text">Spend £20 Get 10% Off!</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-danger">Claim</button>
                                </div>
                                <small class="text-muted">Valid Until 11/05/24</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('images/deal.png') }}" class="" alt="Banner Pizza" height="225"
                            width="100%">
                        <div class="card-body">
                            <p class="card-text">Two pizzas, One Side, One 2l Drink for £40</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-danger">Claim</button>
                                </div>
                                <small class="text-muted">Valid Until 11/05/24</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('images/deal.png') }}" class="" alt="Banner Pizza" height="225"
                            width="100%">
                        <div class="card-body">
                            <p class="card-text">Any pizza any size, £10</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-danger">Claim</button>
                                </div>
                                <small class="text-muted">Valid Until 11/05/24</small>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


@endsection
