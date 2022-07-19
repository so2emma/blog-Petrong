
<div class="p-3 p-md-5">
  <div class="row m-0 p-0">
    <div class="col-md-9">
      @forelse($posts as $post)
      <div class="d-md-flex post-entry-2 half bg-light">
        <a href="{{route('post.show', $post->id)}}" class="me-4 thumbnail">
          <img src="{{asset('storage/'.$post->postImage)}}" alt="{{$post->title}}" class="img-fluid">
        </a>
        <div class="my-3 d-flex flex-column justify-content-center pe-3">
          <div class="post-meta">
            <span>{{$post->created_at->format('M d Y')}}</span>
            <span class="mx-1">&bullet;</span>
            <span>{{$post->user->name}}</span>
          </div>

          <h4>{{$post->title}}</h4>
          <p class='m-0 p-0'>
            {{ Str::words($post->content, 30, '...')}}
            <a href="{{ route('post.show', $post->id) }}" class="text-dark"><small>READ MORE</small></a>
          </p>
        </div>
      </div>
      @empty
      <p class='text-center p-5 bg-light'>
        No Posts has been created.
      </p>
      @endforelse
      <div class="text-center py-4">
        <div class="text-justify-center">
          <nav class="text-center pt-3" aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              {!! $posts->links() !!}
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="aside-block">
        <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-trending-tab" data-bs-toggle="pill" data-bs-target="#pills-trending" type="button" role="tab" aria-controls="pills-trending" aria-selected="true">Trending</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill" data-bs-target="#pills-latest" type="button" role="tab" aria-controls="pills-latest" aria-selected="false">Latest</button>
          </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
          <!-- Trending -->
          <div class="tab-pane fade show active" id="pills-trending" role="tabpanel" aria-labelledby="pills-trending-tab">
            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
              <h2 class="mb-2"><a href="#">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
              <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>
          </div>
          <!-- End Trending -->

          <!-- Latest -->
          <div class="tab-pane fade" id="pills-latest" role="tabpanel" aria-labelledby="pills-latest-tab">
            <div class="post-entry-1 border-bottom">
              <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
              <h2 class="mb-2"><a href="#">Life Insurance And Pregnancy: A Working Mom’s Guide</a></h2>
              <span class="author mb-3 d-block">Jenny Wilson</span>
            </div>
          </div>
          <!-- End Latest -->
        </div>
      </div>

      <!-- Start Video -->
      <div class="aside-block">
        <h3 class="aside-title">Video</h3>
        <div class="video-post">
          <a href="https://www.youtube.com/watch?v=AiFfDjmd0jU" class="glightbox link-video">
            <span class="bi-play-fill"></span>
            <img src="{{asset('frontend/img/post-landscape-5.jpg')}}" alt="" class="img-fluid">
          </a>
        </div>
      </div>
      <!-- End Video -->

      <div class="aside-block">
        <h3 class="aside-title">Categories</h3>
        <ul class="aside-tags list-unstyled">
          @forelse (App\Models\Category::all() as $category)
          <li class='text-capitalize'>
            <a href="{{ route('post.category', $category->id) }}">{{$category->name}}</a>
          </li>
          @empty
          <div class="text-center p-3 bg-light">
            No categories yet
          </div>
          @endforelse
        </ul>
      </div>
    </div>
  </div>
</div>