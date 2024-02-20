<?php

namespace App\Http\Controllers;

use App\Repositories\RecommendationRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(
        private RecommendationRepository $recommendationRepository,
    ) {}

    public function __invoke(Request $request)
    {
        return view('welcome')->with([
            'recommendations' => $this->recommendationRepository->all(),
        ]);
    }
}
