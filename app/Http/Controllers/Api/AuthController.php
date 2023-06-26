<?php

namespace App\Http\Controllers\Api;

use App\akEminenceGroup\Articles\Repository\Interfaces\ArticleRepositoryInterface;
use App\akEminenceGroup\Users\Repositories\Interfaces\UserRepositoryInterface;
use App\akEminenceGroup\Users\Requests\LoginRequest;
use Illuminate\Http\JsonResponse;

class AuthController extends ApiBaseController
{
    protected $userRepo;
    protected $articleRepo;
    /**
     */
    public function __construct(UserRepositoryInterface $userRepo, ArticleRepositoryInterface $articleRepo)
    {
        $this->userRepo = $userRepo;
        $this->articleRepo = $articleRepo;
    }

    public function authenticate(LoginRequest $request): JsonResponse
    {
        if (auth()->attempt($request->only('email', 'password'))) {

            $user = auth()->user();
            $token = $user->createToken(config('app.name'))->plainTextToken;

            $data = [
                'user' => $user,
                'token' => $token,
            ];

            return $this->successResponse(data: $data);
        }

        return $this->errorResponse(message: 'Données de connexion invalides.');
    }


    public function logout(): JsonResponse
    {
        $user = request()->user();

        $user->currentAccessToken()->delete();

        return $this->successResponse(message: 'Déconnexion avec succès.');
    }

}