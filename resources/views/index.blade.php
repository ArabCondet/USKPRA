@extends('layouts.master')
@section('content')

   <div class="login hidden fixed z-50 w-fit h-3/4 bg-white -translate-x-1/2 left-1/2 shadow-lg overflow-hidden rounded-lg">
      <div class="wrappers flex h-full w-full">
        <div class="login-input-group relative w-full p-8">
            <div id="close-btn" class="close group absolute top-4 right-4">
                <svg class="group-hover:fill-red-500" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                  </svg>
            </div>
            <div class="login-header">
                <div class="login-title font-semibold text-center text-2xl">
                    <p>Login</p>

                </div>
            </div>
            <div class="login-error hidden text-center w-full mt-2 bg-red-200 py-2 rounded-md">
                <p>Username or Password Incorrect!</p>
            </div>
            <div class="login-forms mt-4">
                <form>
                    <div class="user-id">
                        <label for="">Email Or Username</label>
                        <input id="user-id" class="w-full mt-2 px-4 py-2 bg-gray-100 rounded-md focus:outline-none focus:border-[#003034] focus:border-2" type="text" placeholder="Enter Your Username/Email">
                    </div>
                    <div class="user-password mt-4">
                        <label for="">Password</label>
                        <input type="password" id="user-password" class="w-full mt-2 px-4 py-2 bg-gray-100 rounded-md focus:outline-none focus:border-[#003034] focus:border-2" type="text" placeholder="Enter Your Password">
                    </div>
                    <div class="user-remember flex items-center gap-2 mt-3">
                        <input type="checkbox">
                        <p>Remember Me</p>
                    </div>

                    <button id="submit-login" class="w-full bg-[#003034] text-white font-semibold p-2 rounded-md mt-4">Submit</button>

                </form>
                <div class="user-remember flex items-center gap-2 mt-6">
                    <p>Doesn't Have An Account?</p>
                    <button class="text-blue-500">Register Here</button>
                </div>
            </div>

        </div>
      </div>

   </div>
   <div class="sambutan">
       @if (Auth::user())
       <h1 class="text-xl font-mono font-bold">Selamat Datang, {{Auth::user()->name}} di fintech store</h1>
       <h2 class="text-lg font-mono">Pilih Product Menarik</h2>
       @else
           <h1 class="text-xl font-mono font-bold">Selamat Datang, di fintech store!</h1>
       @endif
   </div>

   <!--Saldo dan mutasi-->
   <div class="flex justify-end w-full mb-4">
       <div class="flex gap-4">
           <!--Top Up-->
           <div class="card h-[100px] w-[100px] bg-base-100 font-semibold text-xl mt-6 pb-8 flex-auto">
               @if (Auth::user())
                   
               
               <div class="absolute left-8 top-3">
                   <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
                    <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                    <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2z"/>
                </svg>
            </div>
            <div class="relative top-14 text-center text-white">
                <a href="{{ route('topup.index') }}">Top up</a>
            </div>
            @else
                <div class="relative top-8 text-xs left-2 text-white">
                    Masuk untuk top up
                </div>
            @endif
       </div>
       
       <!--Saldo-->
       <div class="card h-[100px] w-[200px] bg-base-100 font-semibold text-xl mt-6 pb-8 flex-auto">
           @if (Auth::user())
               
           
           <div class="absolute left-3 top-3">
               <p>Saldo Anda:</p>
            </div>
            {{-- <div class="relative top-14 text-center text-white">
                <a href="{{ route('topup.index') }}">Top up</a>
            </div> --}}
            @foreach ( Auth::user()->wallet as $user_wallet )
            @if ($user_wallet->status == "confirmed")
            <h1 class="relative top-11 left-6 text-white">
                Rp.{{ $user_wallet->credit }}
            </h1>
            @endif
            @endforeach

            @else
                <div class="relative top-5 left-7 text-white">
                    Masuk untuk melihat saldo!
                </div>
            @endif
    </div>
    
    <!--Saldo-->
    {{-- <div class="card h-fit bg-base-100 shadow-xl font-semibold text-xl mt-6 pb-8 relative">
        <div class="card-body">
          @if(Auth::user())
        <div class="title flex items-center gap-1 font-bold">
            <p>Saldo Anda:</p>
        </div>
        @foreach (Auth::user()->wallet as $user_wallet )
        @if($user_wallet->status == "confirmed")
        <h1 class="balance text-4xl mt-4 font-bold text-white dark:text-white">
            Rp.{{ $user_wallet->credit }}
        </h1>
        @endif
        @endforeach
      @else
      <div class="title">
            Masuk untuk melihat saldo Anda!
        </div>
      @endif
    </div>
</div> --}}

<!--Mutasi-->

{{-- <div class="card h-3/4 bg-base-100 shadow-xl font-semibold mt-6 pb-8">
    <div class="card-body">
        <div class="card-title font-bold text-xl ">
                <h1>Riwayat Mutasi:</h1>
            </div>
            <ul class="ul-list">
                @if(Auth::user())
                @foreach ($transactions as $transaction )
                <li class="list-none my-1 p-2 border-b-2">-[{{ $transaction->created_at }}] {{ $transaction->product->name }}  |  Qty: {{ $transaction->quantity }}  |  Rp. {{ $transaction->price }} | {{ $transaction->status }}</li>
                @endforeach
                @else
                <p>Masuk Untuk Melihat Mutasi Anda!</p>
                @endif
            </ul>
            
        </div>
      </div> --}}
    </div>
    </div>
    
    <!--Product PLace-->
    <div class="products-list-card bg-white shadow-lg p-6 rounded-lg">
    <h1 class="font-semibold text-xl">Products</h1>
    @if (Auth::user())
    <div class="product-list grid grid-cols-4 gap-4 mt-3">
        @foreach ($products as $product )
        <div class="product-card card bg-base-100 shadow-xl overflow-hidden">
            <div class="content-img">
                <img src="  " alt="">
            </div>
            <div class="card-body content  p-4">
                <h1>{{ $product->name }}</h1>
                <p class="font-semibold text-white">Rp{{ $product->price }}</p>
                
                <div class="product-action flex items-center justify-between h-full gap-2">
                    <div class="wishlist-button mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="red" class="bi bi-heart" viewBox="0 0 16 16" >
                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                        </svg>
                    </div>
                    <div class="action-right">
                        <form method="post" action="{{ route('cart.proceed') }}" class=" flex items-center gap-2">
                            @csrf
                            <input name="quantity" class="w-14 py-1 px-2 mt-2 bg-gray-100 shadow-lg border-2" type="number" min="1" value="1">
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <button type="submit" class="add-to-cart flex items-center bg-green-600 text-white py-2 px-4 text-sm mt-2 rounded-md">
                                Add To Cart
                            </button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <p>Masuk untuk melihat jualan!</p>
    @endif
</div>


@endsection
