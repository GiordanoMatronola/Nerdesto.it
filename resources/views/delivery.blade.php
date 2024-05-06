<x-layout>
    <div class="container deliveryTop">
        <h1 class="text-center ">{{__('ui.speditionTitle')}}</h1>
        <div class="row mt-4">
            <div class="col-md-6">
                <img src="https://www.eurosender.com/blog/wp-content/uploads/2020/12/Domestic-delivery.png" alt="spedizioni" class="img-fluid rounded-3">
            </div>
            <div class="col-md-6">
                <p style="text-align: justify;">{{__('ui.speditionDescription1')}}</p>
            </div>
        </div>
        <hr class="elegant-line2">
        <div class="row mt-4">
            <div class="col-md-5">
                <p style="text-align: justify;">{{__('ui.speditionDescription2')}}</p>
            </div>   
            <div class="col-md-5">
                <img src="https://www.odtap.com/wp-content/uploads/2019/03/delivery.png" alt="spedizioni" class="img-fluid rounded-3">
            </div>
        </div>
        <hr class="elegant-line2">
        <div class="container">
            <div class="row mt-4">
                <h1 class="text-center">{{__('ui.speditionCost')}}</h1>
            <div class="col-md-4 mt-5">
                <img src="{{__('ui.shippingITA')}}" alt="costo Italia" class="img-fluid rounded-3">
            </div>
            <div class="col-md-4 mt-5">
                <img src="{{__('ui.shippingENG')}}" alt="costo Inghilterra" class="img-fluid rounded-3">
            </div>
            <div class="col-md-4 mt-5">
                <img src="{{__('ui.shippingESP')}}" alt="costo Spagna" class="img-fluid rounded-3">
            </div>
            </div>
        </div>
    </div>

</x-layout>