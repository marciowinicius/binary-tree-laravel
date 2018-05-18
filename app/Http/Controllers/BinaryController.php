<?php

namespace App\Http\Controllers;

use App\Services\BinaryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
}
