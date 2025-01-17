@extends('packages::page')

@section('nav-title', 'Packages')

@section('packages-page')


<div class="col-sm-12">
    <div class="card  mt-5 flex ">
        <div class="card-body ">
            <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed rounded-3 p-6">
                <div class="d-flex flex-stack flex-grow-1 ">
                    <div class=" fw-semibold">
                        @if (empty(Auth::user()->subscription))
                        <h4 class="text-gray-900 fw-bold">This is your first subscription!</h4>
                        <div class="fs-6 text-gray-700 ">Try one of our amazing packages and enjoy its available features</div>
                        @elseif (isset(Auth::user()->subscription) && Auth::user()->subscription->expired) 
                        <h4 class="text-gray-900 fw-bold">Upgrade your subscription!</h4>
                        <div class="fs-6 text-gray-700 ">Upgrade your package to increase the limited available features</div>
                        @endif 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-12">
    <div class="card  mt-5 flex ">
        <div class="card-body flex ">
            <div class="w-full">
                <div class="w-full grid grid-cols-3 mb-5 mb-lg-0 text-center">

                    <div class="price-header max-w lis-rounded-top pt-20 lis-brd-light">
                        <img src="/data/icons/plan-1.svg" class="w-50px mb-6">
                        <h1 class="text-uppercase lis-latter-spacing-2 ">Select You Plan</h1>
                        <p class=" text-muted">Business Membership</p>
                        <p class="mb-0 text-muted">When you make subscription you should have a business first, because
                            your subscription is connected with the Business not the Users to give the features access 
                            for all staff team based on their Role permissions.</p>
                    </div>

                    @foreach ($packages as $package)
                    <div class="price-table">
                        <div class="price-header  lis-rounded-top pt-6 border border-bottom-0 lis-brd-light">
                            <img src="/data/icons/plan-2.svg" class="w-50px mb-6">
                            <h1 class="text-uppercase  lis-latter-spacing-2 ">{{$package->name}}</h1>
                            <p class="mb-0 text-muted ">{{$package->description}}</p>
                        </div>
                        <div class="p-10 py-0 border border-top-0 lis-brd-light bg-white lis-rounded-bottom">
                            <ul class="list-unstyled lis-line-height-3 flex flex-column gap-4 py-10">
                                @foreach ($package->features as $key => $feature)
                                @if ($key < 4)
                                <li>{{$feature->code}} <span class="text-danger fw-bold">{{$feature->value}}</span></li>
                                @endif
                                @endforeach
                            </ul>
                            <div class="price-header lis-rounded-top py-6 border border-bottom-0 lis-brd-light">
                                <h1 class="display-4 lis-font-weight-500  "><sup>{{$settings['currency_code']}}</sup> {{$package->cost_month}} <small>/mo</small></h1>
                            </div>
                            <a href="javascript:;" class="btn btn-primary btn-md lis-rounded-circle-50 px-4 "
                                data-abc="true"> <span class="gap-2 flex"><i class="fa fa-shopping-cart pt-1"></i>Order
                                    Now</span> </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


@endsection