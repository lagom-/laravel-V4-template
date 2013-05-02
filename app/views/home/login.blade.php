@extends('templates.master')

@section('content')

{{ Former::open() }}
{{ Former::email()->label('Email')->required() }}
{{ Former::password()->label('Password')->required() }}
{{ Former::actions()->primary_submit('Login') }}
{{ Former::close() }}

@stop
