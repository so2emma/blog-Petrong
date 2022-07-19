
<div class="p-3 p-md-4">
  <div class="row m-0 p-0">
    <div class="col-md-2 pt-3">
      <div class="accordion" id="side-groups">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Categories
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#side-groups">
            <div class="accordion-body">
              @forelse (App\Models\Category::all() as $category)
              <a href="" >
                <div class="box mb-2">
                {{$category->name}}
                </div>
              </a>
              @empty
              <div class="text-center p-3">
                No Categories has been created
              </div>
              @endforelse
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Accordion
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#side-groups">
            <div class="accordion-body">
              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-10">
      <div class="row bg-light">
        @forelse($posts as $post)
        <div class="col-md-4 pt-3">
          <div class="card">
          <a href="{{route('post.show', $post->id)}}" class="thumbnail">
            <img src="{{asset('storage/'.$post->postImage)}}" alt="{{$post->title}}" class="img-fluid">
          </a>
          <div class=" card-body my-3 d-flex flex-column justify-content-center pe-3">
            <div class="meta">
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
        </div>
        @empty
        <p class='text-center p-5 bg-light'>
          No Posts has been created.
        </p>
        @endforelse
      </div>
      <div class="text-center py-4">
        <div class="text-justify-center">
          <nav class="text-center pt-3" aria-label="">
            <ul class="pagination justify-content-center">
              {!! $posts->links() !!}
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>