<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\BinaryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Yajra\DataTables\Facades\DataTables;

class BinaryController extends Controller
{
    /**
     * @var BinaryService
     */
    protected $binaryService;

    /**
     * BinaryController constructor.
     * @param BinaryService $binaryService
     */
    public function __construct(BinaryService $binaryService)
    {
        $this->binaryService = $binaryService;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \DaveJamesMiller\Breadcrumbs\Facades\DuplicateBreadcrumbException
     */
    public function index()
    {
//        $user = User::find(1);
//        dd($user->getDescendantCount());
        return view('binary.index');
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = $this->binaryService->validator($data);
        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator->errors())
                ->withInput();
        }
        $data['password'] = bcrypt('123456');
        $user_id = $request->get('user_id');

        if (is_null($user_id)) {
            $this->binaryService->storeRootUser($data);
        } else {
            $this->binaryService->storeNodeUser($data, $user_id);
        }

        return view('binary.added');
    }

    /**
     * @return mixed
     * @throws \Exception
     */
    public function sellersDatatable()
    {
        $users = DB::table('users')->select(['id', 'name', 'email', 'parent_id']);

        return DataTables::of($users)
            ->addColumn('points', function ($user) {
                return $this->binaryService->getNodesPoints($user->id);
            })
            ->addColumn('nivel', function ($user) {
                $points = $this->binaryService->getNodesPoints($user->id);
                return BinaryService::getRankSeller($points);
            })
            ->make(true);
    }
}
