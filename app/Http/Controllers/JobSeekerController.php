<?php

namespace App\Http\Controllers;

use App\Events\CustomRegistered;
use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;
use App\Models\JobSeeker;
use App\Models\UserDetail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JobSeekerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            return \responseBuilder(JobSeeker::all(), 200);
        } catch (\Exception $e) {
            return \responseBuilder($e->getMessage(), 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        $validated = $request->validated();
        try {
            $request->merge(['api_token' => Str::random(80)]);
            $user = User::create($request->input());
            $userDetail = UserDetail::create(['users_id' => $user->id]);
            $jobSeeker = JobSeeker::create(['users_id' => $user->id]);
            event(new CustomRegistered($user));
            return \responseBuilder($user, 200);
        } catch (\Exception $e) {
            return \responseBuilder($e->getMessage(), 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobSeeker  $jobSeeker
     * @return \Illuminate\Http\Response
     */
    public function show(JobSeeker $jobseeker)
    {
        try {
            return \responseBuilder($jobseeker, 200);
        } catch (\Exception $e) {
            return \responseBuilder($e->getMessage(), 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobSeeker  $jobSeeker
     * @return \Illuminate\Http\Response
     */
    public function edit(JobSeeker $jobseeker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobSeeker  $jobSeeker
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUser $request, JobSeeker $jobseeker)
    {
        $validated = $request->validated();
        try {
            $user = User::update($request->input());
            $userDetail = UserDetail::update($request->input());
            $jobseeker->update($request->input());
            return \responseBuilder($user, 200);
        } catch (\Exception $e) {
            return \responseBuilder($e->getMessage(), 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobSeeker  $jobSeeker
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobSeeker $jobseeker)
    {
        try {
            $jobseeker->delete();
            return responseBuilder(null, 204);
        } catch (\Exception $e) {
            return \responseBuilder($e->getMessage(), 500);
        }
    }
}
