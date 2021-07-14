@extends('layouts.main_layout')

@section('title','Події')

@section('content')
    <!--Main layout-->
    <main class="my-5">
        <div class="container pt-5">
            <!--Section: Content-->
            {{--        <section class="text-center">--}}
            {{--            <h4 class="mb-5"><strong>Latest posts</strong></h4>--}}

            <div class="row">
                @foreach($posts as $post)
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple text-center" data-mdb-ripple-color="light">
                                <img src="{{$post->cover}}" class="img-fluid "/>
                                <a href="{{route('getPost',[$post->category['slug'], $post->slug])}}">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
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

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    {{--        </section>--}}
    <!--Section: Content-->
        <!-- Modal -->
        <div class="modal top fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
            <div class="modal-dialog  ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Вибір міста</h5>
                        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <ul class="">
                            <div class="form-outline">
                                <input type="text" id="form1" class="form-control" />
                                <label class="form-label" for="form1">Назва міста</label>
                            </div>
                            <a href="#link" class="btn btn-primary m-1" role="button">Усі міста</a>
                            <a href="#link" class="btn btn-primary m-1" role="button">Кременчук</a>
                            <a href="#link" class="btn btn-primary m-1" role="button">Полтава</a>
                            <a href="#link" class="btn btn-primary m-1" role="button">Київ</a>
                            <a href="#link" class="btn btn-primary m-1" role="button">Черкаси</a>


                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                            Відмінити
                        </button>
                        <button type="button" class="btn btn-primary">Зберегти</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pagination -->
    {{$posts->links('vendor.pagination.bootstrap-4')}}
    <!--Main layout-->
    </main>
@endsection
