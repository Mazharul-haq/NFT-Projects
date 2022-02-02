@extends('frontend.layouts.master')
@section('style')
    <style>
      /*  .upcoming_event>img{
            height: 150px
        } */
      .card-details{
          display: flex;
          flex-direction: column;
      }
      .event-image{

          left: 15px;

          background-size: cover;
          background-position: center center;
          background-repeat: no-repeat;

          background-image: url("{{asset('img/logo/monkey.gif')}}");
      }
      @media only screen and (max-width: 900px) {
          .event-image{


              height: 200px;


                      }
      }

    </style>

@endsection
@section('main')



    <div class="container   lg:p-8 lg:px-12   rounded-lg">
        <div class="bg-gray-200 lg:px-8 py-4">
            <h1 class="font-bold text-3xl p-2">Sponsored Event</h1>
            <div class="grid grid-cols-1 lg:grid-cols-2  gap-8 p-2">
                @for($i=0;$i<8;$i++)
                    <div class="card grid grid-cols-12 rounded-lg  md:grid-cols-12 overflow-hidden bg-white shadow hover:shadow-lg transition-all">
                        <div class=" event-image col-span-12 md:col-span-4 bg-yellow-400  bg-[url('/img/hero-pattern.svg')]" >
                            <span class="text-white text-sm font-bold bg-primary p-2 m-2 rounded-lg  mt-3">Sold</span>
                        </div>
                        <div class="p-2 grid grid-rows-12 col-span-12 md:col-span-8" >
                            <div class="row-span-10 p-2">
                                <a href="{{route('frontend.details')}}" class="text-xl font-bold text-dark ">
                                    Timeless Ape Club – $350,000 Giveaways

                                </a>
                                <div class=" pt-1">
                          <span class="block">
                                <span class="font-semibold text-dark">Launch Date:</span> 04 Feb 2022 - 10:00 am (UTC)
                          </span>
                                    <span class="block">
                               <span class="font-semibold text-dark">Unit Price:</span> 0.03 Ξ(ETH)
                          </span>
                                    <span class="block">
                              <span class="font-semibold text-dark">Maximum Supply:</span> 999 Total
                          </span>
                                </div>

                            </div>
                            <div class="flex w-full my-2  pt-1  ">
                                <a href="#" class="mx-auto bg-gray-700  text-white hover:bg-blue-400    hover:text-white border transition-all flex justify-center items-center w-12 h-12 rounded-full"><i class="fab fa-discord "></i></a>

                                <a href="#" class=" mx-auto hover:bg-blue-400 bg-gray-700  text-white  hover:text-white border shadow   transition-all flex justify-center items-center w-12 h-12 rounded-full relative">

                                    <i class="fab fa-twitter   "></i>
                                    <span class="absolute  top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none bg-blue-600 text-white transform translate-x-1/2 -translate-y-1/2 cursor-pointer rounded-full">99.4k</span></a>

                                <a href="#" class="mx-auto hover:bg-blue-400 bg-gray-700  text-white  hover:text-white border transition-all flex justify-center items-center w-12 h-12 rounded-full"><i class="fas fa-globe-americas "></i></a>
                            </div>

                        </div>
                    </div>

                @endfor


            </div>
        </div>

    </div>

    <div class="container  lg:px-12 ">

        <div class="shadow  px-4 py-12 my-2 space-y-4 md:space-y-8 rounded-md">
            <h1 class=" md:text-3xl font-bold ">
                Search Upcoming NFT'S
            </h1>


        <div class=" flex">

            <input class="w-full rounded p-2" type="text" placeholder="Try 'Los Angeles'">
            <button class="bg-red-light hover:bg-red-lighter rounded text-white p-2 pl-4 pr-4">
                <button class="font-semibold bg-primary p-3 rounded-lg text-xl">Search</button>
            </button>
        </div>
        </div>
    </div>
    <div class="container lg:px-12 ">
    <div class="grid lg:grid-cols-3 space-x-1 md:space-x-8 md:gap-8 my-8">


        @for($j=0;$j<3;$j++)
        <div class="grid grid-cols-4 gap-4">
            <div class="col-span-4 font-bold p-2 text-3xl">
                <h2>Most Popular</h2>
            </div>

            @for($i=0;$i<10;$i++)
                <div class="md:col-span-2 lg:col-span-4 col-span-4  grid grid-cols-12 rounded-md overflow-hidden relative" style="background-color: #e2eef1">
                    <span class="absolute top-0 right-0 p-1 text-xxs  font-bold text-white bg-primary">
                            Pre sale in 30days
                    </span>
                    <span class="absolute bottom-0 right-0 p-1 text-sm  font-bold text-white ">
                          <span class="text-black">23k</span> <i class="rounded-full text-red-500 fab fa-instagram"></i>&nbsp; <i class="rounded-full text-red-500 fas fa-heart"></i> <span class="text-black">23k</span>
                    </span>
                    <div class="col-span-4  p-3 overflow-hidden">
                        <img class="border bg-blue-200 p-2 rounded-lg" style="height: 100px;width: 100px;object-fit: contain" src="{{asset('img/logo/bal.webp')}}" alt="">
                    </div>
                    <div class="col-span-8 mt-3 md:mt-1  p-2 space-y-3 flex flex-col px-4">
                        <span><b>Lives of Asuna</b></span>
                        <span> <b>Public Sales</b>:29 January</span>
                        <span> <b>Price</b>:0.08</span>
                    </div>
                </div>
            @endfor
            <div class="col-span-4 font-bold p-2 flex justify-center  items-center text-2xl">
                <button class="bg-primary text-white border p-2 rounded-lg hover:text-primary hover:bg-white font-bold">Vie All Most Popular</button>
            </div>
        </div>
        @endfor




</div>
    </div>


@endsection
