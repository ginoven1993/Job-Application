<?php

namespace App\Repositories;

use App\Models\User;
use Auth;
use Exception;
use Hash;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Spatie\Permission\Models\Role;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

/**
 * Class UserRepository
 *
 * @version January 11, 2020, 11:09 am UTC
 */
class UserRepository 
{
/**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return User::class;
    }

    /**
     * @param  array  $input
     * @return User
     */
    public function store($input)
    {
        try {
            /** @var User $user */
            $user = User::create($input);

            return $user;
        } catch (Exception $e) {
            throw new UnprocessableEntityHttpException($e->getMessage());
        }
    }
}