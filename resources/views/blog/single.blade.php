@extends('layouts.front.app')
@section('content')
    <!-- START PAGEBREDCUMS -->
    <div class="page-banner page-banner-overlay" data-background="assets/img/bg/banner-bg.jpg">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12 my-auto">
                    <div class="page-banner-content text-center">
                        <h2 class="page-banner-title">{{ $post->judul }}</h2>
                        <div class="page-banner-breadcrumb">
                            <p><a href="{{ route('blog') }}">Home</a> Detail Info </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-banner-shape"></div>
    </div>
    <!-- END PAGEBREDCUMS -->

    <!-- START BLOG PAGE WELCOME SECTION -->
    <section id="blogsingle" class="section-padding">
        <div class="auto-container">
            <div class="row mb-lg-5 mb-0">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="blog-single single-blog-post">
                        <div class="single-blog-post-wrap">
                            <div class="single-blog-post-content">
                                <h4 class="single-blog-post-title">
                                    <a href="#">{{ $post->judul }}</a>
                                </h4>
                                <div class="single-blog-post-Info">
                                    <span><i class="icofont-user"></i>Admin</span>
                                    <small>/</small>
                                    <span><i class="icofont-calendar"></i>{{ $post->created_at->diffForHumans() }}</span>
                                    <small>/</small>
                                    <span class="tzcategory"><i
                                            class="icofont-ui-tag"></i>{{ $post->category->nama }}</span>
                                </div>
                                <div class="blog-single-des mt-4">
                                    <figure>
                                        <img class="img-fluid" src="{{ url($post->gambar) }}" alt="gambar">
                                    </figure>
                                    <p>{!! $post->isi !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BLOG PAGE WELCOME SECTION -->
@endsection
