<div id="latest-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-section">
                    <h2>Latest blog posts</h2>
                    <img src="/images/under-heading.png" alt="" >
                </div>
            </div>
        </div>
        <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-md-4 col-sm-6">
                        <div class="blog-post">
                            <div class="blog-thumb">
                                <img src="<?php echo $blog->img; ?>" alt="" />
                            </div>
                            <div class="blog-content">
                                <div class="content-show">
                                    <h4><a href="/blog/<?php echo $blog->id; ?>"><?php echo $blog->title; ?></a></h4>
                                    <span>29 Sep 2084</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

        </div>
    </div>
</div>
