<style>
  @media (min-width: 870px) {
    .carousel .carousel-item {
      height: 80vh;
    }

    .carousel-item img {
      min-height: 80vh;
    }
  }
</style>
 
<div id="hero_carousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#hero_carousel" data-bs-slide-to="0" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#hero_carousel" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#hero_carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item">
      <img src="{{asset('changeable/white_snow_moutain.jpeg')}}" class="d-block w-100" alt="Blog Images">
    </div>
    <div class="carousel-item active">
      <img src="{{asset('changeable/green_tree_moutain.jpeg')}}" class="d-block w-100" alt="Blog Images">
    </div>
    <div class="carousel-item">
      <img src="{{asset('changeable/blue_water_mountain.jpeg')}}" class="d-block w-100" alt="Blog Images">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#hero_carousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#hero_carousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container pb-5">
  <div class="py-3">
    <h3 class="py-3">Important</h3>
    <div class="row">
      <div class="col-md-4">
        <div class="card card-body">
          <div class="card-header">
            <h4 class="card-title">Quick</h4>
            <div class="card-tools"></div>
          </div>
          <div class="card-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, consectetur autem? Aspernatur, dolorum. Quos nesciunt in, eveniet, accusantium officiis est veniam ipsum at expedita magnam enim unde minima eos quibusdam.
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-body">
          <div class="card-header">
            <h4 class="card-title">Quick</h4>
            <div class="card-tools"></div>
          </div>
          <div class="card-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, consectetur autem? Aspernatur, dolorum. Quos nesciunt in, eveniet, accusantium officiis est veniam ipsum at expedita magnam enim unde minima eos quibusdam.
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-body">
          <div class="card-header">
            <h4 class="card-title">Quick</h4>
            <div class="card-tools"></div>
          </div>
          <div class="card-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, consectetur autem? Aspernatur, dolorum. Quos nesciunt in, eveniet, accusantium officiis est veniam ipsum at expedita magnam enim unde minima eos quibusdam.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>