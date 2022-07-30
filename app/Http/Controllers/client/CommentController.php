<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Http\Middleware\CheckHostOkMiddleware;
use App\Http\Requests\Client\Comments\CreateCommentRequest;
use App\Models\Comment;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CommentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware(CheckHostOkMiddleware::class)->only('index');

    }

    public function index()
    {
        $hotelIds = auth()->user()->host->hotels->pluck('id');

        $comments = Comment::query()->whereIn('hotel_id', $hotelIds)->paginate(6);

        return view('client.comments.index', [

            'comments' => $comments
        ]);
    }

    public function store(CreateCommentRequest $request, Hotel $hotel)
    {
        Gate::authorize('UserHasAccessToReview',$hotel);

        $commentIsExists = $this->getCommentExists($hotel);

        if ($commentIsExists) {
            return redirect()->back()->withErrors(['comment' => 'نظر شما براي اين اقامتگاه قبلا ثبت شده است!']);
        }
        Gate::authorize('UserHasAccessToReview', $hotel);

        Comment::query()->create([
            'user_id' => auth()->user()->id,
            'hotel_id' => $hotel->id,
            'comment' => $request->get('comment'),
            'rating' => $request->get('rating'),
        ]);

        return redirect(route('client.hotel.show', $hotel));
    }

    /**
     * @param Hotel $hotel
     * @return bool
     */
    public function getCommentExists(Hotel $hotel): bool
    {
        return Comment::query()
            ->where('user_id', auth()->user()->id)
            ->where('hotel_id', $hotel->id)->exists();
    }
}
