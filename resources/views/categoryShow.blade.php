<x-layout>
    <div class="mt-5 margincompra">
        <div class="container-fluid p-5 bg-gradient mb-4">
            <div class="row" style="height: 150px">
                <div class="col-12 textlight p-5">
                    <h1 class="display-2" style="text-align: center" >{{__('ui.allAnnouncements')}}</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12" >
                    <div class="row">
                        {{-- della categoria prendiamo tutti gli annunci e  li cicliamo--}}
                        {{-- utilizziamo forelse e non foreach perchè possiamo ciclare quello che otteniamo e anche definire un comportamento aggiuntivo se la collection è vuota, definendolo nel @empty--}}
                    @forelse ($category->announcements->where('is_accepted', true) as $announcement) 
                    <x-card :announcement='$announcement'/>
                    @empty
                    <div class="col-12 text-center">
                        <p class="h1">{{__('ui.emptyAnnounce')}}</p>
                        <p class="h2">{{__('ui.emptyAnnouncePublish')}}<a href="{{route('announcements.create')}}" class="btn btn-success shadow" >{{__('ui.emptyAnnounceNew')}}</a></p>
                    </div>
                    @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
