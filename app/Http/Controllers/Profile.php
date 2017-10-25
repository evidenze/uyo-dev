<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;


class Profile extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = User::where('id', Auth::id())->first();

        return view('profile', ['profiles' => $profile]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
      $profile = User::where('id', Auth::id())->first();
        return view('edit-profile', ['profiles' => $profile ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
       $this->validate($request, [
          'firstname' => 'required|string|max:255',
          'lastname' => 'required|string|max:255',
          'email' => 'required|string|email|max:255',
          'facebook_link' => 'required|url',
          'twitter_link' => 'required|url',
          'photo' => 'required|mimes:jpeg,png',
          'about' => 'required',
          'specialization' => 'required',
      ]);

      $user = User::where('id', Auth::id())->first();

      $user->firstname = $request->firstname;
      $user->lastname = $request->lastname;
      $user->email = $request->email;
      $user->specialization = $request->specialization;
      $user->photo = $request->photo->store('photos');
      $user->twitter_link = $request->twitter_link;
      $user->facebook_link = $request->facebook_link;
      $user->about = $request->about;

      $user->save();
      $request->session()->flash('success', 'Profile updated successfully.');
      return redirect('profile');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
