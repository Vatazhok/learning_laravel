@extends('layouts.admin_layout')

@section('title', 'Всі коментарі')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Всі коментарі</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 5%">
                                ID
                            </th>
                            <th>
                                Ім'я користувача
                            </th>
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
                                    {{ $comment['id'] }}
                                </td>
                                <td>
                                    {{ $comment->user['name'] }}
                                </td>
                                <td>
                                    <a href="{{route('getPost',[$comment->post->category['slug'], $comment->post['slug']])}}" class="badge badge-info">{{ $comment->post['title'] }}</a>
{{--                                    {{ $comment->post['slug'] }}--}}
                                </td>
                                <td>
                                    {{ $comment['message'] }}
                                </td>
                                <td>
                                    {{ $comment['email'] }}
                                </td>
{{--                                @foreach($post->comments as $comment)--}}
{{--                                    {{$comment->message}}--}}
{{--                                @endforeach--}}

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
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
