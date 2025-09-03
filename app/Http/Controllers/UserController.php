<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;



class UserController extends Controller
{/**
 *
 * Display a listing of the resource.
 */

    public function index()
    {
        $users = User::all();
        return response()->json([
            'message' => 'Users retrieved successfully.',
            'users'    => $users,
            'authUser' => Auth::user(),
        ], 201);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();

        $user = User::create([
            'name' => $validated['name'],
            'email'      => $validated['email'],
            'address'    => $validated['address'],
            'phone'      => $validated['phone'],
            'password'   => Hash::make($validated['password']),
        ]);

        if ($user) {
            return response()->json([
                'message' => 'Registration successful.',
                'user'    => new UserResource($user),
            ], 201);

        }

        return response()->json([
            'message' => 'Registration failed.',
        ], 400);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $user->update($request->all());

        return response()->json([
            'message' => 'User updated successfully.',
            'user'    => new UserResource($user->fresh()), // ensure latest data
        ], \Symfony\Component\HttpFoundation\Response::HTTP_OK);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        $user->delete();
        return response()->noContent();
    }

}
