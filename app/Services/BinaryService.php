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

    /**
     * @param int $points
     * @return string
     */
    public static function getRankSeller(int $points)
    {
        switch ($points) {
            case $points == 0:
                return 'Vendedor';

            case $points >= 1 && $points <= 500:
                return 'Bronze';

            case $points >= 501 && $points <= 1000:
                return 'Prata';

            case $points >= 1001 && $points <= 2000:
                return 'Ouro';

            case $points >= 2001 :
                return 'Diamante';
        }
    }

    /**
     * @param $user_id
     * @return int
     */
    public function getNodesPoints($user_id)
    {
        $first_node = User::whereParentId($user_id)->first();
        $second_node = User::whereParentId($user_id)->latest();

        if (!is_null($first_node) || !is_null($second_node)) {
            if ($first_node['id'] == $second_node['id']) { // só possui uma perna
                return 1; // como so tem uma perna retorna 0 pq a outra perna é o menor nivel
            } else {
                return 5;
            }
        }
        return 0;
    }
}