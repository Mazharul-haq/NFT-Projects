@extends('frontend.layouts.master')

@section('title')
    Submit Projects
@endsection
@section('style')

    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.min.css" />
@endsection
@section('main')

    <div class="container lg:px-32 p-4">
        <div class="bg-gray-200  mx-4 md:mx-16 p-4 ">
            <h3 class="md:text-3xl text-xl space-y-2  font-bold">Upcoming NFT Sales Form</h3>

            <form class="text-base grid grid-cols-12 gap-4 " action="{{route('project.store')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="md:col-span-6 col-span-12 ">
                    <div class="form-group flex flex-col">
                        <label for="name" class="py-3">Project's Name *</label>
                        <input class="p-3  border border-gray-400" type="text" id="name" value="" name="name"
                               placeholder="Your Answer " required>
                        <small></small>
                    </div>

                </div>
                <div class="md:col-span-6 col-span-12 ">
                    <div class="form-group flex flex-col">
                        <label for="name" class="py-3">Project's Image *</label>
                        <input class="p-2 bg-white" style="border: 1px solid #ccc!important;" type="file" id="name"
                               value="" name="img" placeholder="Your Answer ">
                    </div>

                </div>
                <div class="col-span-12 p-2">
                    <div class="form-group flex flex-col">

                        <label for="details" class="py-3">Project's Description *</label>
                        <textarea class="w-full border border-gray-400" name="description" id="details" cols="60"
                                  rows="10"></textarea>

                    </div>

                </div>
                <div class="md:col-span-6 col-span-12  space-y-2">
                    <label for="category-select">Category</label>
                    <select name="" id="category-select" class="w-full p-2">
                        <option selected="selected" value=""> Select Category</option>
                        <option value="Auction">Auction</option>
                        <option value="NFT Giveaways">NFT Giveaways</option>
                        <option value="NFT Drop">NFT Drop</option>
                        <option value="NFT Launch">NFT Launch</option>
                    </select>
                </div>

                <div class="md:col-span-6 col-span-12  space-y-2">


                    <label for="select1" class="py-3"> Select Currency</label>
                    <select id="select1" name="currency" class="w-full p-2"
                           >
                        {{--<option  value="">Select Currency</option>--}}
                        <option selected="selected" value="Ξ(ETH)">Ξ(ETH)</option>
                        <option value="SOL">SOL</option>
                        <option value="Matic">Matic</option>
                        <option value="Polygon">Polygon</option>
                        <option value="SOL (Price TBD)">SOL (Price TBD)</option>
                        <option value="ADA">ADA</option>
                        <option value="WETH">WETH</option>
                        <option value="BNB">BNB</option>
                        <option value="AVAX">AVAX</option>
                        <option value="USD">USD</option>
                        <option value="NFT">NFT</option>
                        <option value="FTM">FTM</option>
                        <option value="Fantom">Fantom</option>
                        <option value="IMX">IMX</option>
                        <option value="WAX">WAX</option>
                        <option value="CRONOS">CRONOS</option>
                        <option value="Free">Free</option>
                        <option value="MOVR">MOVR</option>
                        <option value="CELO">CELO</option>
                        <option value="octane">octane</option>
                        <option value="GALA">GALA</option>
                        <option value="USDT">USDT</option>
                        <option value="XTM">XTM</option>
                        <option value="CMC/BNB">CMC/BNB</option>
                        <option value="TBA">TBA</option>
                        <option value="HZL">HZL</option>
                        <option value="Algorand">Algorand</option>
                        <option value="EGLD">EGLD</option>
                        <option value="LUNA">LUNA</option>
                        <option value="EGEM">EGEM</option>
                        <option value="CET">CET</option>
                        <option value="cac">cac</option>
                        <option value="BGN">BGN</option>
                        <option value="Pepin">Pepin</option>
                        <option value="DAI">DAI</option>
                        <option value="BTC">BTC</option>
                        <option value="pesos">pesos</option>
                        <option value="دينار تونسي">دينار تونسي</option>
                        <option value="Peso">Peso</option>
                        <option value="EUR">EUR</option>
                        <option value="Dinheiro">Dinheiro</option>
                        <option value="Brr">Brr</option>
                        <option value="Egyptian pound">Egyptian pound</option>
                        <option value="MXN">MXN</option>
                        <option value="GEMS">GEMS</option>
                        <option value="RUB">RUB</option>
                        <option value="FEA">FEA</option>
                        <option value="Rick">Rick</option>
                        <option value="XTZ">XTZ</option>
                        <option value="TOMO">TOMO</option>
                        <option value="CUMMIES">CUMMIES</option>
                        <option value="الدينار العراقي">الدينار العراقي</option>
                        <option value="Rupees">Rupees</option>
                        <option value="Peso colombiano">Peso colombiano</option>
                        <option value="Ringgit Malaysia">Ringgit Malaysia</option>
                        <option value="NEAR">NEAR</option>
                        <option value="English pound">English pound</option>
                        <option value="Guaraníes">Guaraníes</option>
                        <option value="BUSD">BUSD</option>
                        <option value="ريال سعودي">ريال سعودي</option>
                        <option value="Rupee">Rupee</option>
                        <option value="Kyats">Kyats</option>
                        <option value="Dirhame">Dirhame</option>
                        <option value="Nise">Nise</option>
                        <option value="Ayhim">Ayhim</option>
                        <option value="Naira">Naira</option>
                        <option value="Dólar ecuatoriano">Dólar ecuatoriano</option>
                        <option value="Rupiah">Rupiah</option>
                        <option value="DZD">DZD</option>
                        <option value="EGP">EGP</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="md:col-span-6 col-span-12  space-y-2">

                    <label for="tag" class="py-3">Tags</label>
                    <select id="tag" name="tags[]" class="js-example-tokenizer w-full p-2" multiple="multiple" >
                        <option >orange</option>
                        <option>white</option>
                        <option >purple</option>
                    </select>

                </div>
                <div class="md:col-span-6 col-span-12 ">
                    <div class="form-group flex flex-col">
                        <label for="collection" class="py-3">What is the maximum number of items in your collection? *</label>
                        <input class="p-3  border border-gray-400" type="number" id="collection" value="" name="collection"
                               placeholder="Enter Number ">
                    </div>

                </div>
                <div class="md:col-span-6 col-span-12 ">
                    <div class="form-group flex flex-col">
                        <label for="contact_address" class="py-3">Contract Address (If available)</label>
                        <input class="p-3  border border-gray-400" type="text" id="contact_address" value="" name="contact_address"
                               placeholder="Contract Address">
                    </div>

                </div>
                <div class="md:col-span-6 col-span-12  ">
                    <div class="form-group flex flex-col">
                        <label for="contact_address" class="py-3">Website ( e.g. : <a class="text-primary" href="{{route('home')}}">{{route('home')}}</a> )</label>
                        <input class="p-3  border border-gray-400" type="text" id="contact_address" value="" name="website"
                               placeholder="Contract Address">
                    </div>

                </div>
                <div class="md:col-span-6 col-span-12  ">
                    <div class="form-group flex flex-col">
                        <label for="contact_address" class="py-3">Twitter * ( e.g. : https://twitter.com/NftUpcoming )</label>
                        <input class="p-3  border border-gray-400" type="text" id="contact_address" value="" name="twitter"
                               placeholder="Enter URL">
                    </div>

                </div>
                <div class="md:col-span-6 col-span-12  ">
                    <div class="form-group flex flex-col">
                        <label for="contact_address" class="py-3">Discord</label>
                        <input class="p-3  border border-gray-400" type="text" id="contact_address" value="" name="discord"
                               placeholder="Enter URL">
                    </div>

                </div>
                <div class="md:col-span-6 col-span-12  ">
                    <div class="form-group flex flex-col">
                        <label for="contact_address" class="py-3">Email</label>
                        <input class="p-3  border border-gray-400" type="url" id="contact_address" value="" name="email"
                               placeholder="Your Email">
                    </div>

                </div>
                <div class="md:col-span-6 col-span-12  ">
                    <div class="form-group flex flex-col">
                        <label for="time_zone" class="py-3">Select Timezone</label>
                        <select name="timezone_offset" id="time_zone" class="span5 p-3">
                            <option value="-12:00">(GMT -12:00) Eniwetok, Kwajalein</option>
                            <option value="-11:00">(GMT -11:00) Midway Island, Samoa</option>
                            <option value="-10:00">(GMT -10:00) Hawaii</option>
                            <option value="-09:50">(GMT -9:30) Taiohae</option>
                            <option value="-09:00">(GMT -9:00) Alaska</option>
                            <option value="-08:00">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
                            <option value="-07:00">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
                            <option value="-06:00">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
                            <option value="-05:00">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
                            <option value="-04:50">(GMT -4:30) Caracas</option>
                            <option value="-04:00">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
                            <option value="-03:50">(GMT -3:30) Newfoundland</option>
                            <option value="-03:00">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
                            <option value="-02:00">(GMT -2:00) Mid-Atlantic</option>
                            <option value="-01:00">(GMT -1:00) Azores, Cape Verde Islands</option>
                            <option value="+00:00" selected="selected">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
                            <option value="+01:00">(GMT +1:00) Brussels, Copenhagen, Madrid, Paris</option>
                            <option value="+02:00">(GMT +2:00) Kaliningrad, South Africa</option>
                            <option value="+03:00">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
                            <option value="+03:50">(GMT +3:30) Tehran</option>
                            <option value="+04:00">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
                            <option value="+04:50">(GMT +4:30) Kabul</option>
                            <option value="+05:00">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
                            <option value="+05:50">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
                            <option value="+05:75">(GMT +5:45) Kathmandu, Pokhara</option>
                            <option value="+06:00">(GMT +6:00) Almaty, Dhaka, Colombo</option>
                            <option value="+06:50">(GMT +6:30) Yangon, Mandalay</option>
                            <option value="+07:00">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
                            <option value="+08:00">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
                            <option value="+08:75">(GMT +8:45) Eucla</option>
                            <option value="+09:00">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
                            <option value="+09:50">(GMT +9:30) Adelaide, Darwin</option>
                            <option value="+10:00">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
                            <option value="+10:50">(GMT +10:30) Lord Howe Island</option>
                            <option value="+11:00">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
                            <option value="+11:50">(GMT +11:30) Norfolk Island</option>
                            <option value="+12:00">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
                            <option value="+12:75">(GMT +12:45) Chatham Islands</option>
                            <option value="+13:00">(GMT +13:00) Apia, Nukualofa</option>
                            <option value="+14:00">(GMT +14:00) Line Islands, Tokelau</option>
                        </select>
                    </div>

                </div>
                <div class="md:col-span-8 col-span-12 grid grid-cols-10">
                <div class="md:col-span-8 col-span-12  space-y-2 ">
                    <label for="">Pre-Sale Start Date Time</label>
                    <div class="flex space-x-2">
                        <div class="relative w-50">

                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>

                            <input datepicker name="pre_start_date" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                        </div>
                        <div >
                            <input  name="pre_start_time" class="rounded-lg border-gray-400" type="time">
                        </div>
                        <button class="text-primary" id="preSaleBtn" onclick="toggleEndTimePresale()" type="button">Remove End Time</button>

                    </div>

                </div>
                <div class="md:col-span-8 col-span-12  transition-all  space-y-3" id="preSaleEnd">
                    <label for="">Pre-Sale End Date Time</label>
                    <div class="flex space-x-2" >
                        <div class="relative w-50">

                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </div>

                            <input datepicker name="pre_end_date" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                        </div>
                        <div >
                            <input name="pre_end_time" class="rounded-lg border-gray-400" type="time">
                        </div>


                    </div>

                </div>
                </div>
                <div class="col-span-8">
                    <label id="simpleLabel" for="">Public Sale Start Date Time</label>
                </div>
                <div class="col-span-8 grid grid-cols-10 animate__animated animate__fadeInUp" id="publicStartBox">

                    <div class="col-span-9 p-2 space-y-3 " >
                        <label  for="">Public Sale Start Date Time</label>
                        <div  class="flex space-x-2">
                            <div class="relative w-50">

                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </div>

                                <input name="public_start_date" datepicker type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                            </div>
                            <div >
                                <input name="public_start_time" class="rounded-lg border-gray-400" type="time">
                            </div>
                            <button class="text-primary" id="publicSaleBtn" onclick="toggleEndTimePublicSale()" type="button">Remove End Time</button>

                        </div>

                    </div>
                    <div class="col-span-9 p-2 transition-all  space-y-3" id="publicSaleEnd">
                        <label for="">Public Sale End Date Time</label>
                        <div class="flex w-full space-x-2" >
                            <div class="relative w-50">

                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </div>

                                <input datepicker name="public_end_date" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                            </div>
                            <div >
                                <input  name="public_end_time" class="rounded-lg border-gray-400" type="time">
                            </div>


                        </div>

                    </div>

                </div>
                <div class="col-span-12 flex items-center space-x-2">
                    <input class="p-3" type="checkbox" id="publicStatus" name="publicStatus" >
                    <label class="text-xl items-center mt-1" for="publicStatus">Don't know Launch date ?</label>
                </div>
                <div class="md:col-span-6 col-span-12   space-y-2">
                    <label for="presalePrice">
                        Pre-Sale Mint Price
                    </label>
                    <div class="relative border-1 w-2/4 bg-gray-500 border-black"  style="border: 1px solid black">
                        <input  name="pre_price" type="text" class="bg-white w-5/6"  name="presale_mint_price" >
                        <span  class="currency absolute text-lg font-bold ml-2 text-white  mt-2">ETH</span>
                    </div>




                </div>
                <div class="md:col-span-6 col-span-12   space-y-2">
                    <label for="presalePrice">
                        Public Sale Mint Price
                    </label>
                    <div class="relative border-1 w-2/4 bg-gray-500 border-black"  style="border: 1px solid black">
                        <input  name="public_price" type="text" class="bg-white w-5/6"  name="presale_mint_price" >
                        <span  class="currency absolute text-lg font-bold ml-2 text-white  mt-2">ETH</span>
                    </div>




                </div>
                <div class="md:col-span-6 col-span-12  p-4 space-y-2">
                   <button class="bg-primary  p-4 rounded-lg  text-base text-white font-bold" type="">
                       Submit Project
                   </button>




                </div>

            </form>
        </div>
    </div>


    <script>

        var preSaleEndStatus=true;
        var publicSaleEndStatus=true;

        const preSaleButton=$("#preSaleBtn");
        const publicSaleButton=$("#publicSaleBtn");

        function toggleEndTimePresale() {
            $("#preSaleEnd").toggle();
            preSaleEndStatus=!preSaleEndStatus;
            (!preSaleEndStatus) ? preSaleButton.text("Add End Time") : preSaleButton.text("Remove End Time");
            }

        function toggleEndTimePublicSale() {
            $("#publicSaleEnd").toggle();
            publicSaleEndStatus=!publicSaleEndStatus;
            (!publicSaleEndStatus) ? publicSaleButton.text("Add End Time") : publicSaleButton.text("Remove End Time");
        }

        $("#publicStatus").click(function (){

            $("#publicStartBox").toggle(!this.checked)
            $("#simpleLabel").toggle(this.checked);


        })
        //changing currency of price field on change of currency
        $("#select1").on("change",(function (){
            //alert()
            $(".currency").text($("#select1").val())
        }));


        $(document).ready(function() {
            $("#simpleLabel").hide();

            $(".js-example-tokenizer").select2({
                tags: true,
                tokenSeparators: [',', ' ']
            })
            $("#tag").on('change',()=>{
                console.log($("#tag").val())
            })



        });
    </script>
@endsection
