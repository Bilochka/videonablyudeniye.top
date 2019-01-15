<?php
//set headers to NOT cache a page
header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
header("Pragma: no-cache"); //HTTP 1.0
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
?>
<div  id="catalog_edit" >

    <div class="catalog_edit_header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4  id="catalog_edit_exampleModalLabel" >Редагування екземпляру каталогу №: {{$catalog->id}}</h4>
    </div>


    <div class="catalog_edit_body">

        {{--<form id="catalog_edit_Form" action="{{ route('catalog.update')}}" method="post" enctype="multipart/form-data">--}}
        {!! Form::open(['route'=>['catalog.update', $catalog->id],'method'=>'put', 'enctype'=>'multipart/form-data'])!!}

            <div class="form-group">
                <label for="edit_example_name">Назва:</label>
                <input id="edit_example_name" class="form-control" name="example_name"  type="text" value="{{$catalog->name}}" >
            </div>
            <div class="form-group">
                <label for="edit_example_images">Картинка:</label>
                <div class="row">
                    <div class="col-sm-4">
                        <input  id="edit_example_images" class="form-control" name="example_images" onchange="readURL(this);" type="file"  value="{{old('example_images')}}" >
                    </div>
                    <div class="col-sm-8">
                        <p>Попереднє фото:</p>
                        <img id="edit_blah" src="\assets\img\catalog\{{$catalog->images}}" alt="your image"  >
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="edit_example_code">Код:</label>
                <input id="edit_example_code" class="form-control" name="example_code"   type="text" value="{{$catalog->code}}">

            </div>
            <div class="form-group">
                <label for="edit_example_manufacturer">Виробник:</label>
                <input id="edit_example_manufacturer" class="form-control"  name="example_manufacturer"  type="text" value="{{$catalog->manufacturer}}">
            </div>

            <button id="catalog_edit_example_button" class="btn btn-success" type="submit">Зберегти</button>
            {{csrf_field()}}
        {{--</form>--}}
        {!! Form::close()!!}
    </div>

</div>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#edit_blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(150);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>