@extends('layouts.app')

@section('content')
    <router-view :user="user"></router-view>
@endsection
