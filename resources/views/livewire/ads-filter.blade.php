<div>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title display-5" id="offcanvasLabel">Filtri</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form wire:submit.prevent="searchByFilter">
                <div class="mb-3 fs-5">
                    <label for="inputTitle" class="form-label">Ricerca per parola</label>
                    <input type="search" class="form-control" id="inputTitle" wire:model="searchByWord">
                </div>
                <div class="mb-3 fs-5">
                    <label for="inputPrice" class="form-label ">Prezzo</label>
                    <input type="range" class="form-range " min="0" max="1000" id="inputPrice" wire:model="searchByPrice">
                    <span>Fino a </span><span id="priceValue">{{$price}}</span> €
                </div>
                <div class="mb-3 fs-5">
                    <label for="inputCountry" class="form-label">Country</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value='0' wire:model="searchByCountry" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            {{__('ui.nationAll')}}
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"  value='1' wire:model="searchByCountry">
                        <label class="form-check-label" for="flexRadioDefault2">
                            {{__('ui.nationItaly')}}
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value='2' wire:model="searchByCountry">
                        <label class="form-check-label" for="flexRadioDefault3">
                            {{__('ui.nationSpain')}}
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" value='3' wire:model="searchByCountry">
                        <label class="form-check-label" for="flexRadioDefault4">
                            {{__('ui.nationEngland')}}
                        </label>
                    </div>
                </div>
                    <div class="mb-3 fs-5 form-check " style="padding-left: 1px;">
                        <label for="inputCategory" class="form-label ">Categoria</label>
                        @foreach (App\Models\Category::all() as $category)
                        <div class="form-check" >
                            <input class="form-check-input " type="checkbox" value="{{$category->id}}" id="flexCheckDefault{{$category->id}}" wire:model="searchByCategory">
                            <label class="form-check-label" for="flexCheckDefault{{$category->id}}">
                                {{$category->name}}
                            </label>
                        </div>
                        @endforeach
                    </div>
                <button type="submit" class="btn btn-outline-secondary btn-custom btn-sm mb-2 elegant-font custom-link btn-custom" style="margin-left: 10px">Ricerca</button>
            </form>
        </div>
    </div>
    <div class="container margincompra">
        <div class="row">
            @forelse ($announcements as $announcement)
                <x-card :announcement='$announcement' :key="$announcement->id"/>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning py-3 shadow mt-5">
                        <p class="lead">{{__('ui.emptySearch')}}</p>
                    </div>
                </div>
            @endforelse
            {{$announcements->links()}}
        </div>
    </div>
    <button type="button" class="btn btn-outline-secondary buttonsidebar btn-custom" data-bs-toggle="offcanvas" data-bs-target="#offcanvas">
        <i class="fas fa-filter fa-lg"></i>
    </button>
</div>
