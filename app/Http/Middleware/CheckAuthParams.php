<?php

namespace App\Http\Middleware;

use App\Repositories\BasketRepository;
use Closure;
use Illuminate\Support\Facades\Auth;
use JWTAuth;
use Illuminate\Http\JsonResponse;

class CheckAuthParams
{
    private $basketRepository;

    public function __construct(BasketRepository $basketRepository)
    {
        $this->basketRepository = $basketRepository;
    }

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

       if($uuidHas = $request->headers->has('X-uuid')) {
           $uuid = $request->header('X-uuid');
       } ;

        $tokenHas = Auth::check();

        if ($uuidHas || $tokenHas) {
            if ($uuidHas && $tokenHas) {
                if ($this->basketRepository->findWhere('uuid',$uuid)->count() > 0) {
                    $this->basketRepository->deleteOldBasket(Auth::user());
                    $this->basketRepository->merge(Auth::user()->getId(), $request->header('X-uuid'));
                }

            }
            return $next($request);
        } else {
            return new JsonResponse(['success' => false, 'error' => ['message' => ERROR_7002_MESSAGE]], 401);
        }
    }
}
