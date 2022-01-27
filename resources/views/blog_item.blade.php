@extends('layouts.blog')

@section('content')
    <div id="heading">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content">
                        <h2>Single Product</h2>
                        <span><a href="/blog"> Blog</a> / <?php echo $blog['title']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="product-post">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-section">
                        <h2> <?php echo $blog['title']; ?></h2>
                        <img src="/images/under-heading.png" alt="" />
                    </div>
                </div>
            </div>
            <div id="single-blog" class="page-section first-section">
                <div class="container">
                    <div class="row">
                        <div class="product-item col-md-12">
                            <div class="row">
                                <div class="col-md-8">
                                    <?php echo $blog['html']; ?>
                                    <div class="divide-line">
                                        <img src="/images/div-line.png" alt="" />
                                    </div>
                                    <div id="comments-form">
                                        <Comments/>
                                    </div>

                                </div>
                                @include('components.blog_sidebar')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ mix('js/comments.js') }}"></script>

@endsection
