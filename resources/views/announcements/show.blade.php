<x-layout>
  <div class="container-fluid bg-gradient show_card mb-4">
      <div class="row">
          <div class="col-12 text-center text-light p-5">
              <h1 class="display-4">{{$announcement->title}}</h1>
          </div>
      </div>
  </div>
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-10">
              <div id="carouselExample" class="carousel slide">
                @if($announcement->images()->get()->isNotEmpty())
                <div class="carousel-inner">
                  @foreach($announcement->images()->get() as $image)
                  <div class="carousel-item @if($loop->first)active @endif">
                      <div class="d-flex justify-content-center align-items-center">
                          <img src="{{$image->getUrl(600,500)}}" class="img-fluid rounded" alt="..">
                      </div>
                  </div>
              @endforeach
                </div>
            @else
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="https://picsum.photos/id/12/1200/400" class="img-fluid rounded" alt=".." style="height: 400px;">
                    </div>
                    <div class="carousel-item">
                      <img src="https://picsum.photos/id/10/1200/400" class="img-fluid rounded" alt=".." style="height: 400px;">
                    </div>
                    <div class="carousel-item">
                      <img src="https://picsum.photos/id/11/1200/400" class="img-fluid rounded" alt=".." style="height: 400px;">
                    </div>
                  </div>
                @endif
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
              </div>
          </div>
      </div>
      <div class="row justify-content-center mt-4 text-center">
          <div class="col-md-7">
              <div class="card shadow p-4">
                  <p class="mb-0"><strong>{{__('ui.showTitle')}}</strong> {{$announcement->title}}</p>
                  <p class="mb-0"><strong>{{__('ui.showBody')}}</strong> {{$announcement->body}}</p>
                  <p class="mb-0"><strong>{{__('ui.showPrice')}}</strong> {{$announcement->price}}</p>
                  <p class="mb-0"><strong>{{__('ui.publishedOn')}}</strong> {{$announcement->created_at->format('d/m/Y')}} {{__('ui.author')}} <a class='text-decoration-none colorAltro' href="{{ route('profiloUtente', ['username' => $announcement->user->username]) }}"> {{$announcement->user->username ?? ''}}</a></p>
                  <a href="{{route('categoryShow',['category'=>$announcement->category])}}" class="btn btn-outline-secondary elegant-font custom-link btn-custom mt-3">{{__('ui.toCategory')}} {{$announcement->category->name}}</a>
              </div>
          </div>
      </div>
  </div>
</x-layout>