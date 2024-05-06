    <div class="container annunce p-3">
        <div class="row justify-content-center">
            <div class="glass-container col-lg-8 col-md-10 col-sm-12 p-5">
                <h1 class="display-1 text-center mb-5">{{__('ui.announceCreate')}}</h1>
                @if(session()->has('ProductInsert'))
                <div class="col-12 text-center alert alert-success">
                    {{ session('ProductInsert') }}
                </div>
                @endif
                <form class="mb-3" wire:submit.prevent="store">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">{{__('ui.announceCreateTitle')}}</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" wire:model="title" id="title">
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">{{__('ui.announceCreateBody')}}</label>
                        <textarea class="form-control @error('body') is-invalid @enderror" wire:model="body" id="body" rows="3"></textarea>
                        @error('body')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">{{__('ui.announceCreatePrice')}}</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" wire:model="price" id="price">
                        @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">{{__('ui.announceCreateCategory')}}</label>
                        <select class="form-select" wire:model="category_id" id="category_id">
                            <option value="" selected>{{__('ui.announceCreateChooseCategory')}}</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">{{__('ui.images')}}</label>
                        <input wire:model='temporary_images' class="form-control" multiple name='images' type="file" id="formFile">
                        @error('temporary_images.*')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    @if(!empty($images))
                        <div class="row">
                            <div class="col-12">
                                <p>{{__('ui.imagesPreview')}}</p>
                                <div class="row shadow py-4 bordo-grigio">
                                    @foreach($images as $key=>$image)
                                    <div class="col my-3">
                                        <div class="immagine-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}});"></div>
                                        <button type='button' class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">{{__('ui.imagesDelete')}}</button>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="mb-3 mt-2 text-center">
                        <button type="submit" class="btn btn-outline-secondary btn-lg mb-2 elegant-font custom-link btn-custom">{{__('ui.announceCreateSubmit')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
