@extends('layout.master')

@push('plugin-styles')
    {!! Html::style('assets/css/forms/form-widgets.css') !!}
@endpush

@section('content')
    <!--  Navbar Starts / Breadcrumb Area  -->
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                <i class="las la-bars"></i>
            </a>
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">{{__('Forms')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>{{__('Edit Product')}}</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  Navbar Ends / Breadcrumb Area  -->
    <!-- Main Body Starts -->
    <div class="layout-px-spacing">
        <div class="layout-top-spacing mb-2">
            <div class="col-md-12">
                <div class="row">
                    <div class="container p-0">
                        <div class="row layout-top-spacing">
                            <div class="col-lg-12 layout-spacing">
                                <div class="statbox widget box box-shadow mb-4">
                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                <h4>{{__('Please input product information')}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content widget-content-area">
                                        <div class="w-100">
                                            <form method="post" action="{{route('product.update',['product' => $product])}}">
                                                @csrf
                                                @method('put')
                                            <div class="form-group row">
                                                <div class="col-lg-4 pb-4">
                                                    <label>{{__('Product Name')}}:</label>
                                                    <input type="text" class="form-control" name="name" value="{{$product->name}}" placeholder="{{__('---')}}">
                                                </div>
                                                <div class="col-lg-4 pb-4">
                                                    <label>{{__('Quantity')}}:</label>
                                                    <input type="number" class="form-control" name="qty" value="{{$product->qty}}" placeholder="{{__('---')}}">
                                                </div>
                                                <div class="col-lg-4 pb-4">
                                                    <label>{{__('Price')}}:</label>
                                                    <div class="input-group">
                                                        <input type="decimal" class="form-control" name="price" value="{{$product->price}}"  placeholder="{{__('---')}}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <label>{{__('Description')}}:</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="description" value="{{$product->description}}" placeholder="{{__('---')}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-footer text-right">
                                                <input type="submit" class="btn btn-primary mr-2" value="Update">
                                                <a href="{{route('product.index')}}" class="btn btn-outline-primary" >Cancel</a>
                                            </div>
                                            <div class="text-danger">
                                            @if($errors->any())
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{$error}}</li>
                                                @endforeach
                                            @endif
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Body Ends -->
@endsection

@push('plugin-scripts')
    {!! Html::script('assets/js/forms/forms-layouts.js') !!}
@endpush

@push('custom-scripts')

@endpush
