<?php
/**
 * Created by PhpStorm.
 * User: Márcio Winicius
 * Date: 18/05/2018
 * Time: 11:35
 */

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Validator;

class BinaryService
{
    /**
     * Validator de category
     * @param $data
     * @return \Illuminate\Validation\Validator
     */
    public function validator($data)
    {
        return Validator::make($data, [
            'name' => 'required|min:3|max:254',
            'email' => 'required|email|max:254|unique:users,email',
            'user_id' => 'sometimes|required|exists:users,id',
        ]);
    }

    /**
     * @param $data
     */
    public function storeRootUser($data)
    {
        $user = new User($data);
        $user->saveAsRoot();
    }

    /**
     * @param $data
     */
    public function storeNodeUser($data, $parent_id)
    {
        $users_root_nodes = User::where(['parent_id' => $parent_id])->get();

        $user = new User($data);
        $user->save();

        if (!$users_root_nodes->count() == 2) {
            $user->parent_id = $parent_id;
            $user->save();
        }
    }
}