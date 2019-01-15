
@extends('layouts.admin')

@section('logout')

    @include('admin.logout')

@endsection

@section('header')

    @include('admin.header')

@endsection

@section('menu')

    @include('admin.menu')

@endsection

@section('content')

    @include('admin.catalog.edit')

@endsection