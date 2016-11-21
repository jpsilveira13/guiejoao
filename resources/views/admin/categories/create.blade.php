@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title') {!! trans("New Category") !!} :: @parent @endsection

{{-- Content --}}
@section('main')
    <div class="page-header">
        <h3>
            {!! trans("Category") !!}

        </h3>
    </div>
    <div style="background: #fff" class="col-md-12">
        <form method="post" action="{{route('category.store')}}" class="form-group" role="form"  >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Name *</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>

                <div class="text-center">
                    <button class="btn btn-lg btn-primary center-block">Save</button>
                </div>
            </div>
        </form>
    </div>
    <br clear="all">

@endsection

{{-- Scripts --}}
@section('scripts')
@endsection
