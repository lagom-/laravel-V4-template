@extends('templates.master')

@section('content')

{{ Former::open() }}
{{ Former::email()->label('Email')->required() }}
{{ Former::password()->label('Password')->required() }}
{{ Former::password('confirm_password')->label('Confirm password')->required() }}
{{ Former::actions()->primary_submit('Register') }}
{{ Former::close() }}

@stop
