<h1 class="admin_title">Каталог сайту</h1>



<div class="container">
    <div class="create_catalog_btn">
        <a class="btn btn-info btn-lg catalog_create_button" href="{{ route('catalog.create')}}" >Створити екземпляр каталогу</a>

    </div>



    <div class="row create_catalog_table">
        <div class="col-md-10">
            <table class="table">
                <theard>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Image</td>
                        <td>Code</td>
                        <td>Actions</td>
                    </tr>
                </theard>
                <tbody>
                @foreach($all_catalog as $catalog)
                    <tr>
                        {{--<td>id</td>--}}
                        {{--<td>name</td>--}}
                        {{--<td>image</td>--}}
                        {{--<td>code</td>--}}

                        <td>{{$catalog->id}}</td>
                        <td>{{$catalog->name}}</td>
                        <td>{{$catalog->images}}</td>
                        <td>{{$catalog->code}}</td>


                        <td>
                            <div class="actions_catalog">
                                <a href="#">
                                    {{--<a href="{{route('tasks.show', $task->id)}}">--}}

                                    <i class="glyphicon glyphicon-eye-open"></i>
                                </a>
                            </div>
                            <div class="actions_catalog">
                                <a href="{{route('catalog.edit', $catalog->id)}}">
                                {{--<a href="#">--}}
                                <i class="glyphicon glyphicon-edit"></i>
                                </a>
                            </div>


                            <div class="actions_catalog">

                                <a href="#">
                                    <i class="glyphicon glyphicon-remove"></i>
                                </a>
                            </div>
                            {{--{!! Form::open(['method'=>'DELETE', 'route'=>['tasks.destroy', $task->id]]) !!}--}}
                            {{--<button onclick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-remove"></i></button>--}}
                            {{--{!! Form::close() !!}--}}
                        </td>
                    </tr>
                @endforeach
                </tbody>


            </table>
        </div>
    </div>
</div>




