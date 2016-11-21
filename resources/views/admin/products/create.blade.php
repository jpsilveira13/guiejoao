@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title') {!! trans("New Product") !!} :: @parent @endsection

{{-- Content --}}
@section('main')
    <div class="page-header">
        <h3>
            {!! trans("Product") !!}

        </h3>
    </div>
    <div style="background: #fff" class="col-md-12">
        <form method="post" action="{{route('products.store')}}" enctype="multipart/form-data" class="form-group" role="form"  >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <div class="file-upload">
                    <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

                    <div class="image-upload-wrap">
                        <input class="file-upload-input" type="file" name="url_image" onchange="readURL(this);" accept="image/*">
                        <div class="drag-text">
                            <h3>
                                Drag or select image</h3>
                        </div>
                    </div>
                    <div class="file-upload-content">
                        <img class="file-upload-image" src="#" alt="sua imagem">
                        <div class="image-title-wrap">
                            <button type="button" onclick="removeUpload()" class="remove-image">Remover <span class="image-title">Image cad cadastrada</span></button>
                        </div>
                    </div>
                    <br>
                    <small class="text-center"><b>Obs: Format image 1024x688</b></small>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Name *</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Insert Price *</label>
                        <input type="text" name="price" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Category *</label>
                        <select name="category_id" class="form-control">
                            <option value="">Select category</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Description *</label>
                        <textarea name="description" class="form-control" rows="6"></textarea>
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
