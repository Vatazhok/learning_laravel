@extends('layouts.dashboard')

@section('content')
<div class="container">
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}


                <!-- Main content -->
                <section class="content">



                    <div class="container-fluid">
                        <h5>Змінити дані про себе</h5>



                                    <form class="form-inline" action="#" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <label class="sr-only" for="inlineFormInputName2">Имя</label>
                                        <input type="text" name="name" value="{{$user->name}}" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" >

                                        <label class="sr-only" for="inlineFormInputGroupUsername2">Имя пользователя</label>
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">@</div>
                                            </div>
                                            <input type="text" name="email" value="{{$user->email}}" class="form-control" id="inlineFormInputGroupUsername2" >
                                        </div>
                                        <label class="sr-only" for="inlineFormInputName2">Пароль</label>
                                        <input type="text" name="name" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Пароль">



                                        <button type="submit" class="btn btn-primary mb-2">Зберегти</button>
                                    </form>



                        <h5>Коментарі</h5>
{{--                        <div class="card">--}}
{{--                            <div class="card-body p-1">--}}
                                <table class="table table-striped projects">
                                    <thead>
                                    <tr>


                                        <th>
                                            Пост
                                        </th>
                                        <th>
                                            Коментар
                                        </th>
                                        <th>
                                            E-mail
                                        </th>

                                        <th style="width: 30%">
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($comments as $comment)
                                        <tr>


                                            <td>
                                                <a href="{{route('getPost',[$comment->post->category['slug'], $comment->post['slug']])}}" class="badge badge-info">{{ $comment->post['title'] }}</a>

                                            </td>
                                            <td>
                                                {{ $comment['message'] }}
                                            </td>
                                            <td>
                                                {{ $comment['email'] }}
                                            </td>

                                            <td class="project-actions text-right">

                                                <form action="{{ route('comment.destroy', $comment['id']) }}" method="POST"
                                                      style="display: inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                                        <i class="fas fa-trash">
                                                        </i>
                                                        Видалити
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
{{--                        </div>--}}
{{--                    </div><!-- /.container-fluid -->--}}
                </section>
                <!-- /.content -->

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    {{ __('You are logged in!') }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
</div>

@endsection
