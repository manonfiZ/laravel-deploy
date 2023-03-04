<?php
namespace App\akEminenceGroup\Users\Repositories;

use App\akEminenceGroup\Base\Repositories\BaseRepository;
use App\akEminenceGroup\Users\Repositories\Interfaces\UserRepositoryInterface;
use App\akEminenceGroup\Users\User;

class UserRepository extends BaseRepository implements UserRepositoryInterface {
    
    /**
     */
    public function __construct(User $model) {
        parent::__construct($model);
    }


	/**
     * Create new user
	 * @param array $data
	 * @return User
	 */
	public function create(array $data): User {

        $user = $this->model->make($data);
        
        $user->password = bcrypt($data['password']);

        $user->save();

        return $user;
	}
}