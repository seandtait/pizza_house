@extends('layout.layout')

@section('title', 'Pizza House - Order Now')

@section('content')

    <div class="row">
        <div class="col-12">
            @if (session('success'))
                <div class="toast align-items-center text-bg-success border-0 show w-100" role="alert" aria-live="assertive"
                    aria-atomic="true">
                    <div class="d-flex w-100">
                        <div class="toast-body w-100">
                            {{ session('success') }}
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('images/pizza1.jpg') }}" class="" alt="Banner Pizza" height="225"
                            width="100%">
                        <div class="card-body">
                            <p class="card-text">The succulent ham and pineapple.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-danger">Order</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Customise</button>
                                </div>
                                <small class="text-muted">From £10</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('images/pizza2.jpg') }}" class="" alt="Banner Pizza" height="225"
                            width="100%">
                        <div class="card-body">
                            <p class="card-text">Delicious tomato.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-danger">Order</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Customise</button>
                                </div>
                                <small class="text-muted">From £9</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('images/pizza3.jpg') }}" class="" alt="Banner Pizza" height="225"
                            width="100%">
                        <div class="card-body">
                            <p class="card-text">Margherita. Simple and tasty.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-danger">Order</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Customise</button>
                                </div>
                                <small class="text-muted">From £9</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('images/pizza2.jpg') }}" class="" alt="Banner Pizza" height="225"
                            width="100%">
                        <div class="card-body">
                            <p class="card-text">Delicious tomato.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-danger">Order</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Customise</button>
                                </div>
                                <small class="text-muted">From £9</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('images/pizza3.jpg') }}" class="" alt="Banner Pizza" height="225"
                            width="100%">
                        <div class="card-body">
                            <p class="card-text">Margherita. Simple and tasty.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-danger">Order</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Customise</button>
                                </div>
                                <small class="text-muted">From £9</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('images/pizza1.jpg') }}" class="" alt="Banner Pizza" height="225"
                            width="100%">
                        <div class="card-body">
                            <p class="card-text">The succulent ham and pineapple.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-danger">Order</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Customise</button>
                                </div>
                                <small class="text-muted">From £10</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('images/pizza3.jpg') }}" class="" alt="Banner Pizza" height="225"
                            width="100%">
                        <div class="card-body">
                            <p class="card-text">Margherita. Simple and tasty.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-danger">Order</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Customise</button>
                                </div>
                                <small class="text-muted">From £9</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('images/pizza1.jpg') }}" class="" alt="Banner Pizza" height="225"
                            width="100%">
                        <div class="card-body">
                            <p class="card-text">The succulent ham and pineapple.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-danger">Order</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Customise</button>
                                </div>
                                <small class="text-muted">From £10</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="{{ asset('images/pizza2.jpg') }}" class="" alt="Banner Pizza" height="225"
                            width="100%">
                        <div class="card-body">
                            <p class="card-text">Delicious tomato.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-danger">Order</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Customise</button>
                                </div>
                                <small class="text-muted">From £9</small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    {{-- <div class="row">
        <div class="col-6 offset-3 text-center">
            <div class="row p-2 pb-0 pe-lg-0 pt-lg-2 align-items-center border shadow-lg">
                <div class="col-lg-10 offset-1 p-3 p-lg-5 pt-lg-3">
                    <h3>Available for delivery or collection!</h3>
                    <br>
                    <h5>Enter your post code to begin</h5>
                    <div class="modal-body p-5 pt-0">
                        <form class="">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="">
                                <label for="floatingInput">Post Code</label>
                            </div>
                            <button class="w-100 p-2 btn btn-lg btn-danger" type="submit">See Deals</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

@endsection
