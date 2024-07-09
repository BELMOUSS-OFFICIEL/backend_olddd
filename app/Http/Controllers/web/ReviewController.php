<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $reviews=Review::all();
        // return dd($reviews);

        return view('pages.reviews.index',compact('reviews'));
    
    }

    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $review=Review::find($id);
        // dd($review);
        $review->etate='valider';
        $review->save();
        return redirect()->route('reviews.index')->with('success', 'Review bien valider');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        Review::destroy($id);
        return redirect()->route('reviews.index')->with('success', 'Review bien supprimer');
    }
}
