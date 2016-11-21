@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title') {!! trans("Category") !!} :: @parent @endsection

{{-- Content --}}
@section('main')

    <div class="page-header">
        <h3>
            {!! trans("Category") !!}
            <div class="pull-right">
                <div class="pull-right">
                    <a href="{{route('category.create')}}"
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
            <th class="t-small">name</th>
            <th class="t-small">Options</th>

        </tr>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td class="vertical-middle">{{$category->id}}</td>

                <td class="vertical-middle">{{$category->name}}</td>
                <td  width="5%" class="text-center vertical-middle">

                    <div class="dropdown">

                        <a href="javascript:;" class="btn btn-xs btn-primary" data-toggle="dropdown"><i class="fa fa-plus"></i></a>

                        <ul class="dropdown-menu mudar-posicao pull-right">

                            <li>

                                <a href="{{route('category.edit',['id'=>$category->id])}}"><i class="fa fa-fw fa-gear"></i>Edit</a>

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
            {!! $categories->render() !!}
        </div>
    </div>
@endsection

{{-- Scripts --}}
@section('scripts')
@endsection
