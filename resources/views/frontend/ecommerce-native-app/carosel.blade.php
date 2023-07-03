<style>
    carosal-brand {
        align-items: center;
        background: black;
        display: flex;
        height: 100vh;
        justify-content: center;
    }

    @-webkit-keyframes scroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(calc(-250px * 7));
        }
    }

    @keyframes scroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(calc(-250px * 7));
        }
    }
    .slider-brand {
        background: #0d0d0d;
        box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125);
        height: 100px;
        margin: auto;
        overflow: hidden;
        position: relative;
        width: 100%;
    }
    .slider-brand::before, .slider-brand::after {
        /*background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);*/
        content: "";
        height: 100px;
        position: absolute;
        width: 200px;
        z-index: 2;
    }
    .slider-brand::after {
        right: 0;
        top: 0;
        transform: rotateZ(180deg);
    }
    .slider-brand::before {
        left: 0;
        top: 0;
    }
    .slider-brand .slide-brand {
        -webkit-animation: scroll 40s linear infinite;
        animation: scroll 40s linear infinite;
        display: flex;
        width: calc(250px * 14);
    }
    .slider-brand .slide-bran {
        height: 100px;
        width: 250px;
    }
</style>

<section id="carosal-brand">
    <div class="slider-brand pt-8 pb-48">
        <div class="slide-brand gap-10">
            <div class="slide-bran">
                <img src="{{asset('assets/slider-images/Balmain-Logo-Vector-1-300x89.png')}}" height="100" width="250" alt="" />
            </div>
            <div class="slide-bran">
                <img src="{{asset('assets/slider-images/caddys-300x85.png')}}" height="100" width="250" alt="" />
            </div>
            <div class="slide-bran">
                <img src="{{asset('assets/slider-images/gill-marine-300x85.png')}}" height="100" width="250" alt="" />
            </div>
            <div class="slide-bran">
                <img src="{{asset('assets/slider-images/glamira-300x85.png')}}" height="100" width="250" alt="" />
            </div>
            <div class="slide-bran">
                <img src="{{asset('assets/slider-images/homeexpresslogo-home-300x192.png')}}" height="100" width="250" alt="" />
            </div>
            <div class="slide-bran">
                <img src="{{asset('assets/slider-images/hue-300x85.png')}}" height="100" width="250" alt="" />
            </div>
            <div class="slide-bran">
                <img src="{{asset('assets/slider-images/junior-couture-300x85.png')}}" height="100" width="250" alt="" />
            </div>
            <div class="slide-bran">
                <img src="{{asset('assets/slider-images/leica-300x85.png')}}" height="100" width="250" alt="" />
            </div>
            <div class="slide-bran">
                <img src="{{asset('assets/slider-images/logosubdued-300x85.png')}}" height="100" width="250" alt="" />
            </div>
            <div class="slide-bran">
                <img src="{{asset('assets/slider-images/Rectangle-365-300x107.png')}}" height="100" width="250" alt="" />
            </div>
            <div class="slide-bran">
                <img src="{{asset('assets/slider-images/sagebrook2-300x85.png')}}" height="100" width="250" alt="" />
            </div>
            <div class="slide-bran">
                <img src="{{asset('assets/slider-images/isola-300x85.png')}}" height="100" width="250" alt="" />
            </div>
        </div>
        <br>
        <div class="grid grid-cols-3 gap-2">
            <div></div>
            <div class="lg:col-span-2 md:col-span-2 col-span-3">
                <h1 class="text-center text-white lg:text-xl md:text-xl font-inherit lg:mx-0 md:mx-0 mx-2"><b>FULLY INTEGRATED WITH YOUR FAVOURITE E-COMMERCE PLATFORM</b></h1>
            </div>
        </div>
    </div>
</section>
