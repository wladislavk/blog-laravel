@extends('layouts.main')
@section('main')
    <div class="site-content grey-background">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-loop masonry-col-1">
                        <!-- BLOG CARDS LAYOUT-->
                        <div class="loop horizontal-layout">
                            @include('partials.post_excerpt')
                            @include('partials.post_excerpt')
                            @include('partials.post_excerpt')
                            @include('partials.post_excerpt')
                            @include('partials.post_excerpt')
                            @include('partials.post_excerpt')
                        </div>
                        <!-- END BLOG CARDS LAYOUT-->
                    </div>
                    @include('partials.pagination')
                </div>
            </div>
        </div>
    </div>
@endsection
