@extends('layouts.admin_layout')

@section('title', 'Главная')

@section('content')


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Главная</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Главная</li>
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $posts_count }}</h3>

                            <p>Статьи</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-edit"></i>
                        </div>
                        <a href="{{ route('post.index') }}" class="small-box-footer">Все статьи <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $categories_count }}</h3>

                            <p>Категории</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{ route('category.index') }}" class="small-box-footer">Все категории <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $users_count }}</h3>

                            <p>Ползователи</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{ route('users.index') }}" class="small-box-footer">Все ползователи <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $pages_count }}</h3>

                            <p>Статические страницы</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-document-text"></i>
                        </div>
                        <a href="{{ route('pages.index') }}" class="small-box-footer">Все страницы <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

            </div>
            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row (main row) -->
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div id="accordionPost">
                        <div class="card">
                            <div class="card-header" id="headingPost">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapsePost"
                                        aria-expanded="true" aria-controls="collapsePost">
                                        Последные статии
                                    </button>
                                </h5>
                            </div>
                            <ul id="collapsePost"
                                class="list-group list-group-flush collapse show"aria-labelledby="headingPost"
                                data-parent="#accordionPost">
                                @foreach ($last_posts as $last_post)
                                    <li class="list-group-item">
                                        <a
                                            href="{{ route('category_post', [$last_post->category->slug, $last_post->slug]) }}">
                                            {{ $last_post->title }}
                                        </a>
                                        <a class="btn btn-info btn-sm" href="{{ route('post.edit', $last_post->id) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>

                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div id="accordionPage">
                        <div class="card">
                            <div class="card-header" id="headingPage">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapsePage"
                                        aria-expanded="true" aria-controls="collapsePage">
                                        Последные страницый
                                    </button>
                                </h5>
                            </div>
                            <ul id="collapsePage"
                            class="list-group list-group-flush collapse show"aria-labelledby="headingPage"
                            data-parent="#accordionPage">
                                @foreach ($last_pages as $last_page)
                                    <li class="list-group-item">
                                        <a href="{{ route('page', $last_page->slug) }}">
                                            {{ $last_page->title }}
                                        </a>
                                        <a class="btn btn-info btn-sm" href="{{ route('pages.edit', $last_page->id) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>

                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
