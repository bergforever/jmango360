<style>
    brand-reverse {
        align-items: center;
        background: white;
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
    .brand-reverse-logo {
        background: transparent;
        box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125);
        height: 100px;
        margin: auto;
        overflow: hidden;
        position: relative;
        width: 100%;
    }
    .brand-reverse-logo::before, .brand-reverse-logo::after {
        /*background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);*/
        content: "";
        height: 100px;
        position: absolute;
        width: 200px;
        z-index: 2;
    }
    .brand-reverse-logo::after {
        right: 0;
        top: 0;
        transform: rotateZ(180deg);
    }
    .brand-reverse-logo::before {
        left: 0;
        top: 0;
    }
    .brand-reverse-logo .brand-reverse-logos {
        -webkit-animation: scroll 40s linear infinite;
        animation: scroll reverse 40s linear infinite;
        display: flex;
        width: calc(250px * 14);
    }
    .brand-reverse-logo .loging {
        height: 10%;
        width:10%;
    }
</style>

<section id="brand-reverse">
    <div class="brand-reverse-logo pt-8 pb-80">
        <div class="brand-reverse-logos gap">
            <div class="loging">
                <div class="ml-3 mt-3 py-14  border-2 border-black rounded-2xl shadow  ">
                    <img class="ml-8" src="{{asset('assets/images/company-logo/bigcommerce-home.png')}}" alt="">
                </div>
            </div>
            <div class="loging">
                <div class="ml-3 mt-3 py-14  border-2 border-black rounded-2xl shadow  ">
                    <img class="ml-8"  src="{{asset('assets/images/company-logo/lightspeed-1.png')}}" alt="">
                </div>
            </div>
            <div class="loging">
                <div class="ml-3 mt-3 py-14 border-2 border-black rounded-2xl shadow  ">
                    <img class="ml-8" src="{{asset('assets/images/company-logo/magento-home.png')}}" alt="">
                </div>
            </div>
            <div class="loging">
                <div class="ml-3 mt-3 py-14  border-2 border-black rounded-2xl shadow  ">
                    <img class="ml-10" src="{{asset('assets/images/company-logo/prestashop-home.png')}}" alt="">
                </div>
            </div>
            <div class="loging">
                <div class="ml-3 mt-3 py-14  border-2 border-black rounded-2xl shadow  ">
                    <img class="ml-10" src="{{asset('assets/images/company-logo/salesforce-commerce-cloud-home.png')}}" alt="">
                </div>
            </div>
            <div class="loging">
                <div class="ml-3 mt-3 py-14  border-2 border-black rounded-2xl shadow  ">
                    <img class="ml-10" src="{{asset('assets/images/company-logo/shopify-home.png')}}" alt="">
                </div>
            </div>
            <div class="loging">
                <div class="ml-3 mt-3 py-14 border-2 border-black rounded-2xl shadow  ">
                    <img class="ml-8" src="{{asset('assets/images/company-logo/magento-home.png')}}" alt="">
                </div>
            </div>
            <div class="loging">
                <div class="ml-3 mt-3 py-14  border-2 border-black rounded-2xl shadow  ">
                    <img class="ml-8"  src="{{asset('assets/images/company-logo/lightspeed-1.png')}}" alt="">
                </div>
            </div>
            <div class="loging">
                <div class="ml-3 mt-3 py-14  border-2 border-black rounded-2xl shadow  ">
                    <img class="ml-10" src="{{asset('assets/images/company-logo/prestashop-home.png')}}" alt="">
                </div>
            </div>


        </div>
    </div>
</section>



