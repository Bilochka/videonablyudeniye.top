
<div  id="catalog_create" >

    <div class="catalog_create_header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4  id="catalog_create_exampleModalLabel" >Створення екземпляру каталогу:</h4>
    </div>


    <div class="catalog_create_body">

        <form id="catalog_create_Form" action="{{ route('catalog.store')}}" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Назва:</label>
                <input id="example_name" class="form-control" name="example_name"  type="text" value="{{old('example_name')}}">
            </div>
            <div class="form-group">
                <label for="example_images">Картинка:</label>
                <div class="row">
                    <div class="col-sm-4">
                        <input id="example_images" class="form-control" name="example_images" onchange="readURL(this);" type="file" value="{{old('example_images')}}" >
                    </div>
                    <div class="col-sm-8">
                        <img id="blah" src="#" alt="your image"  value="{{old('example_images')}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="example_code">Код:</label>
                <input id="example_code" class="form-control" name="example_code"   type="text" value="{{old('example_code')}}">

            </div>
            <div class="form-group">
                <label for="example_manufacturer">Виробник:</label>
                <input id="example_manufacturer" class="form-control" name="example_manufacturer"  type="text" value="{{old('example_manufacturer')}}">
            </div>

            <button id="catalog_create_example_button" class="btn btn-success" type="submit">Створити</button>
            {{csrf_field()}}
        </form>
    </div>

</div>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(150);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>