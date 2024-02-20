<?php

namespace App\View\Components;

use App\Repositories\RecommendationRepository;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Recommendations extends Component
{
    public function __construct(
        private readonly RecommendationRepository $repository,
    ) {}

    public function render(): View|Closure|string
    {
        return view('components.recommendations')->with([
            'recommendations' => $this->repository->all(),
        ]);
    }
}
