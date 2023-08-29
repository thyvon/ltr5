@extends('layout.master')

@push('plugin-styles')
    {!! Html::style('plugins/table/datatable/datatables.css') !!}
    {!! Html::style('plugins/table/datatable/dt-global_style.css') !!}
@endpush

@section('content')
    <div class="layout-px-spacing">
        <div class="layout-top-spacing mb-2">
            <div class="col-md-12">
                <div class="row">
                    <div class="container p-0">
                        <div class="row layout-top-spacing date-table-container">
                            <!-- Datatable with a dropdown -->
                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                <div class="widget-content widget-content-area br-6">
                                        <a class="btn btn-outline-dark" href="{{route('product.create')}}">Add New</a>
                                    <h4 class="table-header">{{__('Product List')}}</h4>
                                    @if (session()->has('success'))
                                    <div class="alert alert-icon-button-left alert-light-success text-success-teal mb-4" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="{{__('Close')}}">
                                            <i class="las la-times text-success-teal"></i>
                                        </button>
                                        <i class="las la-check-double text-success-teal font-20"></i>
                                        <strong>{{__('Success!')}}</strong> {{session('success')}}
                                        <button type="button" class="btn btn-sm bg-gradient-success float-right mr-2 text-white" data-dismiss="alert" aria-label="{{__('Close')}}">
                                            {{__('Dismiss')}}
                                        </button>
                                    </div>
                                    @endif
                                    <div class="table-responsive mb-4">
                                        <table id="dropdown-dt" class="table table-hover" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>{{__('ID')}}</th>
                                                <th>{{__('Name')}}</th>
                                                <th>{{__('Qty')}}</th>
                                                <th>{{__('Price')}}</th>
                                                <th >{{__('Description')}}</th>
                                                <th>{{__('Option')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($products as $product)
                                                <tr>
                                                    <td>{{$product->id}}</td>
                                                    <td>{{$product->name}}</td>
                                                    <td>{{$product->qty}}</td>
                                                    <td>{{$product->price}}</td>
                                                    <td>{{$product->description}}</td>
                                                    <td class="text-center">
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle font-20 text-primary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="las la-cog"></i>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1" style="will-change: transform;">
                                                                <a class="dropdown-item" href="{{route('product.edit',['product' => $product])}}">{{__('Edit')}}</a>
                                                                    <form method="post" action="{{route('product.destroy',['product' => $product])}}">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <input type="submit" class="dropdown-item" value="Delete">
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>{{__('ID')}}</th>
                                                <th>{{__('Name')}}</th>
                                                <th>{{__('Qty')}}</th>
                                                <th>{{__('Price')}}</th>
                                                <th>{{__('Description')}}</th>
                                                <th></th>
                                            </tr>
                                            </tfoot>
                                        </table>
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

@include('include.datatablescript')
