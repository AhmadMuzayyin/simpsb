@extends('layouts.front.app')
@section('content')
    <!-- START PORTFOLIO SECTION -->
    <section id="portfolio" class="section-padding">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-12 mx-auto text-center">
                    <div class="section-title">
                        <h2>Gambar Galeri</h2>
                        <p>Beberapa dokumentasi kegiatan sekolah, mulai dari kegiatan belajar mengajar, bermain hingga
                            prestasi dan beberapa kegiatan lainnya.</p>
                    </div>
                </div>
            </div>
            <!-- end section title -->
            <div class="row mb-5">
                <div class="col-12 mx-auto text-center wow fadeInDown">
                    <div class="portfolio-filter-menu">
                        <ul>
                            <li class="filter active" data-filter="*">Semua</li>
                            @foreach ($galeries as $galeri)
                                <li class="filter" data-filter=".{{ $galeri->kategori }}">{{ $galeri->kategori }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end portfolio menu list -->
            <div class="row project-list">
                @foreach ($galeries as $galery)
                    <div class="col-lg-4 col-md-6 col-12 mb-lg-4 mb-md-4 mb-4 {{ $galery->kategori }}">
                        <figure class="portfolio-sin-item">
                            <img class="img-fluid" src="{{ url($galery->gambar) }}" alt="{{ $galery->kategori }}"
                                width="100" />
                            <figcaption>
                                <h3>{{ $galery->kategori }}</h3>
                                <div class="port-icon mt-3">
                                    <a class="icon-ho venobox" href="{{ url($galery->gambar) }}"
                                        data-title="{{ $galery->deskripsi }}" data-gall="{{ $galery->id }}"><i
                                            class="icofont-eye"></i></a>
                                    <a class="icon-ho" href="#"><i class="icofont-link"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
            </div>
            <!--  end single item -->
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END PORTFOLIO SECTION -->
@endsection
