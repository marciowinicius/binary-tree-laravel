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
    protected $points_multiplier = 500;
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

        if (!($users_root_nodes->count() == 2)) {
            $user->parent_id = $parent_id;
            $user->save();
        }
    }

    /**
     * @param $points
     * @return string
     */
    public static function getRankSeller($points)
    {
        $points = intval($points);
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
        $second_node = User::whereParentId($user_id)->latest()->first();
//        dd(intval($first_node->getDescendantCount()) * 500);
        if (!is_null($first_node)) {
            if (!is_null($second_node)) {
                if ($first_node->id == $second_node->id) {
                    return 0;
                } else {
                    $first_node_points =  $this->points_multiplier * (intval($first_node->getDescendantCount()) + 1);
                    $second_node_points =  $this->points_multiplier * (intval($second_node->getDescendantCount()) + 1);

                    $points = $first_node_points >= $second_node_points ? $second_node_points : $first_node_points;

                    return $points;
                }
            } else {
                return 0;
            }
        } else {
            return 0;
        }
    }
}