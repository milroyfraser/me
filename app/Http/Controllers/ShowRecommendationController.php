<?php

namespace App\Http\Controllers;

use App\Repositories\RecommendationRepository;
use Illuminate\Http\Request;

class ShowRecommendationController extends Controller
{
    public function __construct(
        private readonly RecommendationRepository $recommendationRepository,
    ) {}

    public function __invoke(
        string $slug,
        Request $request,
    ) {
        $recommendation = $this->recommendationRepository->findBySlug($slug);

        if ($recommendation === null) {
            abort(404);
        }

        return view('recommendation', [
            'recommendation' => $recommendation,
        ]);
    }
}
