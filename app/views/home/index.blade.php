@extends('layouts.master')

@section('main')

  {{ Form::open() }}

  {{ Form::label('email', 'Email') }}
  {{ Form::text('email') }}

  {{ Form::label('password', 'Password') }}
  {{ Form::password('password') }}

  {{ Form::submit('Login', array('class' => 'button')) }}

  {{ Form::close() }}

@stop