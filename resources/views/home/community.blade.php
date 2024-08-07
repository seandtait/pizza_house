@extends('layout.layout')

@section('title', 'Community - Rate Us Today!')

@section('content')

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-12">
                <h1>Submit a Review</h1>
                <form action="{{ route('review.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Name</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>


@endsection
