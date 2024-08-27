@extends('layouts.front.app')
@section('content')
    <!-- START PAGEBREDCUMS -->
    <div class="page-banner page-banner-overlay"
        data-background="https://images.unsplash.com/photo-1664575196644-808978af9b1f?q=80&w=1587&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12 my-auto">
                    <div class="page-banner-content text-center">
                        <h2 class="page-banner-title">Latest Post</h2>
                        <div class="page-banner-breadcrumb">
                            <p><a href="#">Home</a> Blog </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-banner-shape"></div>
    </div>
    <!-- END PAGEBREDCUMS -->

    <!-- START BLOG PAGE WELCOME SECTION -->
    <section id="bloglist" class="section-padding">
        <div class="auto-container">
            <div class="row mb-lg-5 mb-0">
                <div class="col-lg-12 col-md-12 col-12">
                    @foreach ($posts as $post)
                        <div class="single-blog-post wow fadeInUp">
                            <div class="single-blog-post-wrap">
                                <div class="single-blog-post-icon">
                                    <i class="icofont-file-wmv"></i>
                                </div>
                                <div class="single-blog-post-content">
                                    <h4 class="single-blog-post-title">
                                        <a href="#">{!! $post->judul !!}</a>
                                    </h4>
                                    <div class="single-blog-post-Info">
                                        <span><i class="icofont-user"></i>Admin</span>
                                        <small>/</small>
                                        <span><i
                                                class="icofont-calendar"></i>{{ $post->created_at->diffForHumans() }}</span>
                                        <small>/</small>
                                        <span class="tzcategory"><i
                                                class="icofont-ui-tag"></i>{{ $post->category->nama }}</span>
                                    </div>
                                    <div class="single-blog-post-gallery">
                                        <div class="gallery-slides-wrapper owl-carousel owl-theme">
                                            <div class="item">
                                                <div class="gallery-slides-inner">
                                                    <figure>
                                                        <img class="img-fluid" src="{{ url($post->gambar) }}"
                                                            alt="gambar">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end service slides -->
                                    </div>
                                    <p>
                                        {!! $post->isi !!}
                                    </p>
                                    <a href="{{ route('post', $post->slug) }}" class="blog-read-more-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- end single blog post -->

                    <!-- blog pagination -->
                    <div class="row wow fadeInUp mt-5">
                        <div class="col-12">
                            <div class="site-pagination">
                                <div class="navbar justify-content-center">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <i class="icofont-caret-left"></i>
                                            </a>
                                        </li>
                                        @for ($i = 1; $i <= $posts->lastPage(); $i++)
                                            <li class="page-item {{ $posts->currentPage() == $i ? 'active' : '' }}">
                                                <a class="page-link bo-tl"
                                                    href="{{ $posts->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endfor
                                        <li class="page-item"> <a class="page-link" href="{{ $posts->nextPageUrl() }}"
                                                aria-label="Next">
                                                <i class="icofont-caret-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end blog pagination -->
                </div>
                <!-- end col -->
            </div>
        </div>
    </section>
    <!-- END BLOG PAGE WELCOME SECTION -->
@endsection
