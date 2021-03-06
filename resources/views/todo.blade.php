@extends('layouts.main')

@section('title','Todo page')

@section('content')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="#">Pages</a>
            </li>
            <li class="active">Todo</li>
        </ul><!-- /.breadcrumb -->
        <div class="nav-search" id="nav-search">
            <form class="form-search">
            <span class="input-icon">
            <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
            <i class="ace-icon fa fa-search nav-search-icon"></i>
            </span>
            </form>
        </div><!-- /.nav-search -->
    </div>
    <div class="page-content">
        <div id="app">
            <todo-component></todo-component>
            <todo-add-component></todo-add-component>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
@endsection
