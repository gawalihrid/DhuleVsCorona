@extends('base')

@section('content')
    <section class="p-3">
        <div class="container text-center">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12 col-xl-12">
                    <h1>Please Enter Your Details</h1>
                    <div class="text-small text-muted text-center">* fields are mandatory</div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-3">
        <div class="container">
          <form class="wizard sw-main sw-theme-default">
             @livewire('links')
              <div class="sw-container tab-content" style="min-height: 158px;">
               
                @livewire('data')
               
                @livewire('data2')

               
              </div>
  
                </div>
            
    </section>
   
@endsection