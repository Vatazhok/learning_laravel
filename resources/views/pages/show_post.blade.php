@extends('layouts.main_layout')

@section('title',$post->title)

@section('content')
    <!--Main layout-->
    <main class="my-5">
        <div class="container pt-5">
            <!--Section: Content-->
            <div class="row">

                <div class="col-xl-4  mb-4">

                    <div>
                        <img src="/{{$post->cover}}" class="img-fluid "/>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center pb-1">{{$post->title}}</h5>

                        <table class="table table-borderless">
                            <tbody>

                            <tr>
                                <th scope="row" class="px-0 pb-3 pt-2">
                                    <i class="far fa-calendar-alt fa-2x"></i>
                                </th>
                                <td class="pb-3 pt-2">{{$post->date}}</td>
                            </tr>
                            <tr class="mt-2">
                                <th scope="row" class="px-0 pb-3 pt-2">
                                    <i class="far fa-clock living-coral-text"></i>
                                </th>
                                <td class="pb-3 pt-2">{{$post->time}}</td>
                            </tr>
                            <tr class="mt-2">
                                <th scope="row" class="px-0 pb-3 pt-2">
                                    <i class="fas fa-city "></i>
                                </th>
                                <td class="pb-3 pt-2">{{$post->venue}}</td>
                            </tr>
                            <tr class="mt-2">
                                <th scope="row" class="px-0 pb-3 pt-2">
                                    <i class="fas fa-map-marked-alt "></i>
                                </th>
                                <td class="pb-3 pt-2">{{$post->settlement}}</td>
                            </tr>
                            <tr class="mt-2">
                                <th scope="row" class="px-0 pb-3 pt-2">
                                    <i class="fas fa-hryvnia"></i>
                                </th>
                                <td class="pb-3 pt-2">{{$post->price}}</td>
                            </tr>
                            <tr class="mt-2">
                                <th scope="row" class="px-0 ">

                                </th>
                                <td class="pb-3 pt-2"><a href="#link" class="btn btn-info" role="button">Додати до обраного  </a></td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <div class="col-xl-8  mb-4">
                    <article>
                        {!! $post->text !!}
                    </article>
                </div>


                <!-- Buttons trigger collapse -->
                <a
                    class="btn btn-primary"
                    data-mdb-toggle="collapse"
                    href="#collapseExample"
                    role="button"
                    aria-expanded="false"
                    aria-controls="collapseExample"
                >
                    Залишити коментар
                </a>
                <a
                    class="btn btn-primary"
                    data-mdb-toggle="collapse"
                    href="#collapseExample_1"
                    role="button"
                    aria-expanded="false"
                    aria-controls="collapseExample_1"
                >
                    Переглянути коментарі
                </a>

                <!-- Collapsed content -->
                <div class="row">
                    <div class="collapse mt-3" id="collapseExample">
                        <form class="row gy-2 gx-3 align-items-center">
                            <div class="col-auto">
                                <div class="form-outline">
                                    <input type="text" id="form11Example1" class="form-control"/>
                                    <label class="form-label" for="form11Example1">Ім'я</label>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form-outline">
                                    <input type="text" id="form11Example1" class="form-control"/>
                                    <label class="form-label" for="form11Example1">Адреса Email</label>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-outline p-5">
                                    <textarea class="form-control" id="textAreaExample" rows="4"></textarea>
                                    <label class="form-label" for="textAreaExample">Коментар</label>
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-primary">Відправити</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="collapse mt-3" id="collapseExample_1">

                        @foreach($post->comments as $comment)
                            <div class="card border border-primary shadow-0 m-1">
                                <div class="card-body">
                                    <h5 class="card-title">{{$comment->user['name']}}</h5>
                                    <p class="card-text">
                                        {{$comment->message}}
                                    </p>


                                </div>
                            </div>

{{--                            <div class=" m-2">--}}
{{--                                <div class="">--}}
{{--                                    {{$comment->user['name']}}--}}
{{--                                </div>--}}
{{--                                <div class="">--}}
{{--                                    {{$comment->message}}--}}
{{--                                </div>--}}
{{--                            </div>--}}


                        @endforeach
                    </div>
                </div>

{{--                <!-- Pills navs -->--}}
{{--                <ul class="nav nav-pills mb-3" id="ex1" role="tablist">--}}
{{--                    <li class="nav-item" role="presentation">--}}
{{--                        <a--}}
{{--                            class="nav-link"--}}
{{--                            id="ex1-tab-1"--}}
{{--                            data-mdb-toggle="pill"--}}
{{--                            href="#ex1-pills-1"--}}
{{--                            role="tab"--}}
{{--                            aria-controls="ex1-pills-1"--}}
{{--                            aria-selected="true"--}}
{{--                        >Залишити коментар</a--}}
{{--                        >--}}
{{--                    </li>--}}
{{--                    <li class="nav-item" role="presentation">--}}
{{--                        <a--}}
{{--                            class="nav-link"--}}
{{--                            id="ex1-tab-2"--}}
{{--                            data-mdb-toggle="pill"--}}
{{--                            href="#ex1-pills-2"--}}
{{--                            role="tab"--}}
{{--                            aria-controls="ex1-pills-2"--}}
{{--                            aria-selected="false"--}}
{{--                        >Переглянути коментарі</a--}}
{{--                        >--}}
{{--                    </li>--}}

{{--                </ul>--}}
{{--                <!-- Pills navs -->--}}

{{--                <!-- Pills content -->--}}
{{--                <div class="tab-content" id="ex1-content">--}}
{{--                    <div--}}
{{--                        class="tab-pane fade"--}}
{{--                        id="ex1-pills-1"--}}
{{--                        role="tabpanel"--}}
{{--                        aria-labelledby="ex1-tab-1"--}}
{{--                    >--}}
{{--                        <form class="row gy-2 gx-3 align-items-center">--}}
{{--                            <div class="col-auto">--}}
{{--                                <div class="form-outline">--}}
{{--                                    <input type="text" id="form11Example1" class="form-control"/>--}}
{{--                                    <label class="form-label" for="form11Example1">Ім'я</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-auto">--}}
{{--                                <div class="form-outline">--}}
{{--                                    <input type="text" id="form11Example1" class="form-control"/>--}}
{{--                                    <label class="form-label" for="form11Example1">Адреса Email</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-xl-12">--}}
{{--                                <div class="form-outline p-5">--}}
{{--                                    <textarea class="form-control" id="textAreaExample" rows="4"></textarea>--}}
{{--                                    <label class="form-label" for="textAreaExample">Коментар</label>--}}
{{--                                </div>--}}
{{--                                <div class="col-auto">--}}
{{--                                    <button type="submit" class="btn btn-primary">Відправити</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                    <div class="tab-pane fade" id="ex1-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">--}}

{{--                        @foreach($post->comments as $comment)--}}
{{--                            {{$comment->message}}--}}
{{--                        @endforeach--}}
{{--                    </div>--}}

{{--                </div>--}}
                <!-- Pills content -->

            </div>


        </div>

    </main>
@endsection

