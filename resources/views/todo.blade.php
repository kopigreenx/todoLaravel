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
        <table id="simple-table" class="table  table-bordered table-hover">
            <thead>
                <tr>
                    <th class="center">
                        <label class="pos-rel">
                            <input type="checkbox" class="ace" />
                            <span class="lbl"></span>
                        </label>
                    </th>
                    <th class="detail-col">Details</th>
                    <th>Domain</th>
                    <th>Price</th>
                    <th class="hidden-480">Clicks</th>
                    <th>
                        <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                        Update
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="center">
                <label class="pos-rel">
                <input type="checkbox" class="ace" />
                <span class="lbl"></span>
                </label>
                </td>
                <td class="center">
                <div class="action-buttons">
                <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                <i class="ace-icon fa fa-angle-double-down"></i>
                <span class="sr-only">Details</span>
                </a>
                </div>
                </td>
                <td>
                <a href="#">ace.com</a>
                </td>
                <td>$45</td>
                <td class="hidden-480">3,330</td>
                <td>Feb 12</td>
                <td class="hidden-480">
                <span class="label label-sm label-warning">Expiring</span>
                </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
