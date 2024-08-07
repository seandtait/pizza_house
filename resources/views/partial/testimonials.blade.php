<div class="container">
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row me-4 ms-4">

                @if ($reviews->isEmpty())
                    <p>No reviews</p>
                @else
                    @foreach ($reviews as $review)
                        <div class="col-lg-4 col-sm-12 mb-4">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <p class="card-text p-1">{{ $review->message }}</p>
                                    <div class="d-flex justify-content-end align-items-center">
                                        <small class="text-muted p-1">{{ $review->username }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>

    </div>

</div>
</div>
