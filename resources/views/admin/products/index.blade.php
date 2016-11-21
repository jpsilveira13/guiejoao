@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title') {!! trans("Products") !!} :: @parent @endsection

{{-- Content --}}
@section('main')

    <div class="page-header">
        <h3>
            {!! trans("Product") !!}
            <div class="pull-right">
                <div class="pull-right">
                    <a href="{{route('products.create')}}"
                       class="btn btn-sm  btn-primary iframe"><span
                                class="glyphicon glyphicon-plus-sign"></span> {{
					trans("admin/modal.new") }}</a>
                </div>
            </div>
        </h3>
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('alert-success'))
                    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('alert-success') !!}</em></div>
                @elseif(Session::has('alert-success-delete'))
                    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('alert-success-delete') !!}</em></div>
                @endif
            </div>
        </div>
    </div>

    <table id="table" class="table table-striped table-hover">
        <thead>
        <tr>

            <th class="t-small">ID</th>

            <th class="t-small">Image</th>

            <th class="t-medium">Title</th>

            <th class="t-medium">Date</th>

            <th class="t-small">Situation</th>

            <th class="t-small">Options</th>

        </tr>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td class="vertical-middle">{{$product->id}}</td>
                <td>

                    <img src="{{url('img/products')}}/{{$product->url_image}}" alt="" width="80" height="80" />
                </td>
                <td class="vertical-middle">{{$product->name}}</td>
                <td class="vertical-middle">{{ date("d/m/Y H:i:s", strtotime($product->created_at)) }}</td>
                <td class="t-status t-active vertical-middle">@if($product->situation == "A")<span class="label label-success"> Active</span> @else <span class="label label-primary"> Desactive</span> @endif</td>
                <td  width="5%" class="text-center vertical-middle">

                    <div class="dropdown">

                        <a href="javascript:;" class="btn btn-xs btn-primary" data-toggle="dropdown"><i class="fa fa-plus"></i></a>

                        <ul class="dropdown-menu mudar-posicao pull-right">

                            <li>

                                <a href="{{route('products.edit',['id'=>$product->id])}}"><i class="fa fa-fw fa-gear"></i>Edit</a>

                            </li>

                            <li class="divider"></li>

                            <li>

                                <a class="fechar" href="javascript:void(0)"><i class="fa fa-fw fa-times"></i>Fechar</a>

                            </li>

                        </ul>

                    </div>

                </td>
            </tr>
        @endforeach
        </tbody>
        </thead>
        <tbody></tbody>
    </table>
    <div class="col-md-12">
        <div class="text-center">
            {!! $products->render() !!}
        </div>
    </div>
@endsection

{{-- Scripts --}}
@section('scripts')
@endsection
