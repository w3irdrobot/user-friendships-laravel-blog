@extends('layouts.master')

@section('main')

  <h1>Friends</h1>
  <table style="width:100%;">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach (Auth::user()->friends as $friend)
      <tr>
          <td>{{ $friend->getFullName() }}</td>
          <td>{{ $friend->email }}</td>
          <td>{{ link_to_action('DashboardController@getRemoveFriend', 'Remove friend', array('id' => $friend->id)) }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <h1>Other People</h1>
  <table style="width:100%;">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($not_friends as $friend)
      <tr>
          <td>{{ $friend->getFullName() }}</td>
          <td>{{ $friend->email }}</td>
          <td>{{ link_to_action('DashboardController@getAddFriend', 'Add friend', array('id' => $friend->id)) }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

@stop