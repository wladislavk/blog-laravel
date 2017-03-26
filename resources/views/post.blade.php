@extends('layouts.main')
@section('main')
    <div class="site-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="entry-content-center">
                        <article class="post single">
                            <div class="post-body">
                                <div class="post-title">
                                    <h1 class="bndl-title left">What Will Work Be Like In 100 Years?</h1>
                                </div>
                                <div class="post-meta">
                                    <div class="post-likes"><i class="ei-heart"></i><a href="#">9</a></div>
                                    <div class="post-comments"><i class="ei-comment"></i><a href="#">23</a></div>
                                    <div class="post-date">February 29 2016,</div>
                                    <div class="read-more">Read more</div>
                                </div>
                                <div class="post-category"><i class="ei-pencil"></i><a href="#">Online Business</a></div>
                            </div>
                            <div class="post-entry">
                                <p>Duis iaculis vestibulum viverra. Donec ac odio maximus, porta tellus ut, cursus felis. Nunc gravida lobortis metus venenatis aliquet. Cras vel semper dolor. Phasellus pharetra lorem in euismod convallis. Nulla faucibus, leo a viverra feugiat, neque eros iaculis nisl, non suscipit dui diam vitae lorem.</p>
                                <h4>Aliquam scelerisque varius est</h4>
                                <p>Morbi porta lacus eros, eget varius justo malesuada eu. Aliquam scelerisque varius est. Nulla ut tempor magna. Nullam et lectus eu est iaculis volutpat in eu ex. Pellentesque dapibus urna at placerat facilisis. In aliquam eget dui vitae efficitur. Sed interdum urna vel sagittis dignissim.</p><img src="storage/placeholder.jpg" alt="alternative text" style="width:100%">
                                <p>Ut lacinia maximus ipsum, id ultricies dolor commodo vel. Donec ut malesuada purus. Mauris maximus leo non nisi ornare viverra eget vel diam. Sed lacinia ante sit amet nulla ornare, at hendrerit velit pretium. Vivamus orci nulla, gravida eget lorem id, pharetra efficitur ante. Duis porttitor, nulla quis facilisis lacinia, dolor est hendrerit magna, quis accumsan ex odio non sapien. Aenean mattis enim sit amet diam fringilla aliquet. Aliquam non luctus enim, in congue orci.</p>
                                <h4>Integer a molestie nibh</h4>
                                <p>Aliquam sed dolor vitae mi interdum rutrum. Mauris eget risus sem. Morbi fermentum nisi dui, quis ullamcorper risus laoreet sit amet. Morbi ut erat vitae massa tincidunt laoreet. Morbi eleifend lectus tortor, fringilla efficitur libero pretium et. Nullam ut erat quis eros consectetur imperdiet. Vivamus fermentum tempor hendrerit. Phasellus volutpat velit eget auctor facilisis. In quis justo gravida, lacinia sapien sit amet, euismod metus.</p><img src="storage/placeholder.jpg" alt="alternative text" style="width:100%">
                                <p>Suspendisse hendrerit turpis ac felis varius, eu pellentesque dolor pellentesque. Nulla id luctus velit. Morbi arcu erat, viverra at est nec, fringilla dapibus odio. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce quis dignissim leo. Donec tristique a sapien eget hendrerit. Sed at facilisis turpis.</p>
                                <h4>Aliquam scelerisque varius est</h4>
                                <p>Morbi porta lacus eros, eget varius justo malesuada eu. Aliquam scelerisque varius est. Nulla ut tempor magna. Nullam et lectus eu est iaculis volutpat in eu ex. Pellentesque dapibus urna at placerat facilisis. In aliquam eget dui vitae efficitur. Sed interdum urna vel sagittis dignissim.</p>
                                <p>Integer a molestie nibh, at dapibus eros. Fusce aliquet, velit pretium feugiat imperdiet, augue dolor vulputate elit, eget aliquet massa magna id tortor. Aliquam interdum placerat tellus. Nunc sed tristique lorem. Praesent volutpat urna et nisi cursus lacinia. Sed commodo et turpis nec interdum.</p>
                            </div>
                        </article>
                        @include('partials.post_tags')
                        @include('sidebars.author_sidebar')
                        @include('partials.related_post')
                        @include('partials.comments')
                        @include('partials.response_form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
