<?php 

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\Review;

class ReviewComposer
{
    public function compose(View $view)
    {
        // Fetch the last 3 reviews from the database
        $reviews = Review::latest()->take(3)->get();

        // Bind the reviews data to the view
        $view->with('reviews', $reviews);
    }
}
