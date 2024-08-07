@extends('layout.admin')

@section('title', 'Pizza House - View Reviews')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-9">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Message</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($reviews->isEmpty())
                            <p>No Reviews</p>
                        @else
                            @foreach ($reviews as $review)
                                <tr>
                                    <th scope="row">{{ $review->id }}</th>
                                    <td>{{ $review->username }}</td>
                                    <td>{{ $review->message }}</td>
                                    <td>
                                        <form action="{{ route('review.destroy', $review->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this review?')">Delete</button>
                                        </form>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="col-3">

            </div>
        </div>
    </div>



@endsection
