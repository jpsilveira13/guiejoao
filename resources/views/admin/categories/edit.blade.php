@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title') {!! trans("Edit Category") !!} :: @parent @endsection

{{-- Content --}}
@section('main')
    <div class="page-header">
        <h3>
            {!! trans("Edit category") !!}

        </h3>
    </div>
    <div style="background: #fff" class="col-md-12">
        <form method="post" action="{{route('category.update',['id'=>$category->id])}}" enctype="multipart/form-data" class="form-group" role="form"  >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Category *</label>
                        <input type="text" required name="name" value="{{$category->name}}" class="form-control">
                    </div>
                </div>

                <div class="text-center">
                    <button class="btn btn-lg btn-primary center-block">Save</button>
                </div>

        </form>
    </div>
    <br clear="all">

@endsection

{{-- Scripts --}}
@section('scripts')
@endsection
