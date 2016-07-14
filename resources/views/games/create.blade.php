@extends('layout.layout')

@section('head.title')
Create new game
@endsection

@section('body.content')
<div class="container" style="margin-top: 100px">
	<h1 style="text-align: center">Tạo post mới</h3>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			{!!Form::open([
				'route'   => 'game.store',
				'method'  => 'POST',
				'class'   => 'form-horizontal',
				'enctype' => 'multipart/form-data'
			])
			!!}
			<div class="form-group">
				{!! Form::label('name', 'Name', [ 'class' => 'control-label' ]) !!}
				{!! Form::text('name', '', [ 'class' => 'form-control', 'required']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('description', 'Description', [ 'class' => 'control-label' ]) !!}
				{!! Form::textarea('description', '', [ 'class' => 'form-control', 'required']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('minimumRequirement', 'Minimum Requirement', [ 'class' => 'control-label' ]) !!}
				{!! Form::textarea('minimumRequirement', '', [ 'class' => 'form-control', 'required']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('recommendRequirement', 'Recommend Requirement', [ 'class' => 'control-label' ]) !!}
				{!! Form::textarea('recommendRequirement', '', [ 'class' => 'form-control', 'required']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('category', 'Category', [ 'class' => 'control-label' ]) !!}
				{!! Form::select('category', $categoriesList, null, [ 'class' => 'form-control' ]) !!}
			</div>
			<div class="form-group">
				{!! Form::label('releaseTime', 'Release Time', [ 'class' => 'control-label' ]) !!}
				{!! Form::date('releaseTime', '', [ 'class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('downloadLink', 'Link download', [ 'class' => 'control-label' ]) !!}
				{!! Form::text('downloadLink', '', [ 'class' => 'form-control']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('size', 'Size (GB)', [ 'class' => 'control-label' ]) !!}
				{!! Form::text('size', '', [ 'class' => 'form-control']) !!}
			</div>
			<div class="form-group">
                <label class="control-label">Image</label>
                <div class="">
                    <input type="file" id="fileElem" required="" style="display:none" name="photo[]" multiple accept="image/*"  onchange="handleFiles(this.files)">
                    <button class="btn btn-primary" id="fileSelect">
                        <i class="icon-upload-cloud-1"></i>Thêm ảnh
                    </button>
                    <div id="fileList" style="margin-top: 5px">
                        <ul id="listImage" style="list-style-type: none;"></ul>
                    </div>
                    <hr>
                </div>
            </div>

			<div class="form-group">
				{!! Form::submit('Create', [ 'class' => 'btn btn-primary pull-right' ])!!}
			</div>
			{!!Form::close()!!}
		</div>
	</div>
</div>
@stop

@section('body.script')
<script>
    window.URL = window.URL || window.webkitURL;
    var fileSelect = document.getElementById("fileSelect"),
        fileElem = document.getElementById("fileElem"),
        fileList = document.getElementById("fileList");
    fileSelect.addEventListener("click", function (e) {
        if (fileElem) {
            fileElem.click();
        }
        e.preventDefault(); // prevent navigation to "#"
    }, false);
    function handleFiles(files) {
        if (files.length) {
            var list = document.getElementById("listImage");
            fileList.appendChild(list);
            for (var i = 0; i < files.length; i++) {
                var li = document.createElement("li");
                li.setAttribute("style", "display: inline; margin: 10px 10px;")
                list.appendChild(li);

                var img = document.createElement("img");
                img.src = window.URL.createObjectURL(files[i]);
                img.setAttribute("class", "img-control");
                img.height = 120;
				img.width = 200;
                img.onload = function() {
                    window.URL.revokeObjectURL(this.src);
                }
                li.appendChild(img);
            }
        }
    }
</script>
<script>
    $( document ).on( "click", ".img-control", function() {
        //alert( 111 );
        $(this).hide();
    });
</script>
@endsection
