@extends('layouts.admin_layout')
@section('title','Добавити пост')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавити пост</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{session('success') }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{ route('post.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Назва</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                           placeholder="Уведіть назву заходу" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Назва(трансліт)</label>
                                    <input type="text" name="slug" class="form-control" id="exampleInputEmail1"
                                           placeholder="Уведіть назву заходу" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Дата</label>
                                    <input type="date" name="date" class="form-control" id="exampleInputEmail1"
                                           placeholder="Уведіть дату проведення заходу" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Час</label>
                                    <input type="time" name="time" class="form-control" id="exampleInputEmail1"
                                           placeholder="Уведіть час проведення заходу" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Місце проведення</label>
                                    <input type="text" name="venue" class="form-control" id="exampleInputEmail1"
                                           placeholder="Уведіть місце проведення заходу" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Населений пункт, де проходитиме подія</label>
                                    <input type="text" name="settlement" class="form-control" id="exampleInputEmail1"
                                           placeholder="Уведіть назву населеного пункту, де проходитиме подія" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ціна</label>
                                    <input type="text" name="price" class="form-control" id="exampleInputEmail1"
                                           placeholder="Уведіть ціну заходу" required>
                                </div>

                                <div class="form-group">
                                    <!-- select -->
                                    <div class="form-group">
                                        <label>Оберіть категорію</label>
                                        <select name="category_id" class="form-control">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category['id'] }}">{{ $category['title'] }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <textarea name="text" class="editor"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="feature_image">Зображення посту</label>
                                    <img src="" alt="" class="img-uploaded" style="display: block; width: 300px">
                                    <input type="text" name="cover" class="form-control" id="feature_image"
                                           name="feature_image" value="" readonly>
                                    <a href="" class="popup_selector" data-inputid="feature_image">Обрати зображення</a>
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" value="1" name="is_published" class="custom-control-input" id="customSwitch1">
                                        <label class="custom-control-label"  for="customSwitch1">Опублікувати?</label>
                                    </div>
{{--                                    <label for="exampleInputEmail1">Публікація?</label>--}}
{{--                                    <input type="text" name="is_published" class="form-control" id="exampleInputEmail1"--}}
{{--                                           placeholder="Введите название статьи" required>--}}
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Добавити пост</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


@endsection
