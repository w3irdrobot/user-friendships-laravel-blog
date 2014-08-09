<?php

class DashboardController extends BaseController {

  public function getIndex()
  {
    $not_friends = User::where('id', '!=', Auth::user()->id);
    if (Auth::user()->friends->count()) {
      $not_friends->whereNotIn('id', Auth::user()->friends->modelKeys());
    }
    $not_friends = $not_friends->get();

    return View::make('dashboard.index')->with('not_friends', $not_friends);
  }

  public function getAddFriend($id)
  {
    $user = User::find($id);
    Auth::user()->addFriend($user);
    return Redirect::back();
  }

  public function getRemoveFriend($id)
  {
    $user = User::find($id);
    Auth::user()->removeFriend($user);
    return Redirect::back();
  }

}