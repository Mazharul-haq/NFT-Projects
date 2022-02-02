@extends('frontend.layouts.master')
@section('title')
    NFT Details
@endsection

@section('main')
    <div class="container lg:px-8 space-y-3">
        <div class="breadcrumb py-3 font-bold md:text-lg">
            <a class="text-primary" href="{{route('home')}}">Home</a> <i class="fas fa-angle-double-right"></i><span> Happy Astronauts</span>
        </div>
        <div class="details grid grid-cols-12 space-y-3 space-x-2 gap-4">
            <div class="lg:col-span-4  col-span-12 px-3 lg:py-14     py-8  bg-gray-200 shadow  rounded-lg">
                <img src="{{asset('img/logo/monkey.gif')}}" alt="">
            </div>
            <div class="lg:col-span-8 space-y-3 col-span-12 ">
                <div class="bg-gray-200 border border-black p-3 rounded-lg ">
                    <div class="p-8 bg-white md:text-xl  font-bold space-y-2 rounded-lg">
                        <div>
                            <i class="fas fa-calendar-week"></i><span>18 Jan 2022</span> <span class="status">Onwards</span>
                        </div>

                        <div class="font-bold event_live text-4xl">
                           <h1 class="relative"> Minting is Live
                               <div class="left-0 absolute pulsating-circle"></div>
                           </h1>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-200 border border-black p-3 space-y-3 rounded-lg ">
                    <div class="bg-white p-2">
                    <div class="flex bg-white  justify-between text-lg">
                        <h2 class="font-bold">Project's Details:</h2>
                        <div>
                            <i class="fas fa-heart bg-red-500 p-1 text-white rounded-md"></i>
                            <i class="fas fa-share-alt-square p-1 fa-xl text-blue-600 "></i>

                        </div>
                    </div>
                    <div class="details-social p-4 bg-white">
                        <ul class=" flex space-x-4 product_social">
                            <li class="">
                                <a class="flex overflow-hidden" target="_blank" href=""> <img width="30" style="object-fit: cover" src="{{asset('themes/assets/img/twitter.svg')}}" alt=""><span class="twitter px-2 pt-1">7.1k</span> </a>
                            </li>
                            <li class="">
                                <a class="flex overflow-hidden" target="_blank" href=""> <img width="30" style="object-fit: cover" src="{{asset('themes/assets/img/discord.svg')}}" alt=""><span class="twitter px-2 pt-1">Discord</span> </a>
                            </li>
                            <li class="">
                                <a class="flex overflow-hidden" target="_blank" href=""> <img width="30" style="object-fit: cover" src="{{asset('themes/assets/img/website.svg')}}" alt=""><span class="twitter px-2 pt-1">Website</span> </a>
                            </li>

                            </ul>
                    </div>
                    <div class="bg-white grid text-xl p-2 space-y-4 grid-cols-12">
                        <div class="col-span-6">
                            <h3>Pre-sale Date:</h3>
                            <!-- Date Goes here -->
                            <span>18 Jan 2022-12:00 am (UTC)</span>
                        </div>
                        <div class="col-span-6">
                            <h3>Pre-sale Price:</h3>
                            <!-- Date Goes here -->
                            <span class="font-bold">Ξ(ETH): -</span>
                        </div>
                        <div class="col-span-6">
                            <h3>Public Mint Date:</h3>
                            <!-- Date Goes here -->
                            <span class="font-bold">Ξ(ETH): -</span>
                        </div>
                        <div class="col-span-6">
                            <h3>Public Mint Price:</h3>
                            <!-- Date Goes here -->
                            <span class="font-bold">Ξ(ETH): -</span>
                        </div>

                        <div class="col-span-6">
                            <h3>Maximum Supply:</h3>
                            <!-- Date Goes here -->
                            <span class="font-bold">10000 Total</span>
                        </div>
                        <div class="col-span-6">
                            <h3>Event Category:</h3>
                            <!-- Date Goes here -->
                            <span class="font-bold">NFT Launch</span>
                        </div>


                    </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="bg-gray-200 p-4 space-y-2 rounded-lg">
            <h2 class="text-2xl font-bold"> Description</h2>
            <p class="text-xl">
                Happy Astronauts is a collection of 10k OG Astronauts. We are developing an open world game on the Unreal Engine 5 that the Astronaut NFTs will fully integrate into. All the purchases in game will be NFTs including additional skins, weapon wraps, loot crates, and more. The game will be releases on Xbox, Playstation, PC and eventually Nintendo.
                <br>
                We are also developing the technology that will fully integrate NFTs and Crypto into all gaming engines like Unreal and Unity.
                <br>

                By owning one of the OG Happy Astronauts they will act as a VIP Key to give the holder first access to everything we are building including our Metaverse Ecosystem called Zolodia which is launching soon.
                <br>
                Jump in, buckle up and great ready to take this exciting journey with us!
            </p>
            <h2 class="text-xl font-bold pt-4"> Event Tags:</h2>
            <div class="text-blue-600 space-x-2 font-bold text-xl">
                <span>#Metaverse</span> #NFTGame<span></span><span>#P2Egaming </span>
            </div>
        </div>
    </div>

@endsection
