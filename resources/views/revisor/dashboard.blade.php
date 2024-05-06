<x-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 40vh;">
            <div class="col-md-8 text-center">
                <h1 class="display-1 mt-5 custom-header">{{__('ui.revisorDB')}}</h1>
            </div>
            @if(session('noAlertInsert'))
                <div class="justify-content-center allertimport d-flex ruleallert">
                    <div class="col-8 alert alert-danger" role="alert">
                        {{session('noAlertInsert')}}
                    </div>
                </div>
            @endif
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-4 mb-4">
                <div class="custom-card border border-black">
                    <div class="custom-body">
                        <livewire:revisor.index/>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-7 mb-4">
                <div class="custom-card border border-black">
                    <div class="custom-body">
                        <livewire:revisor.board/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>