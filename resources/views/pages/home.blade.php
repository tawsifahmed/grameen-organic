@extends('layouts.master')

@section('content')
    <div class="homepage-section">
        <div class="web-home-intro d-flex">
            <div class="bg-left d-flex" style="flex-direction: column;">
                <svg xmlns="http://www.w3.org/2000/svg" width="63" height="786" viewBox="0 0 63 786" fill="none">
                    <path
                        d="M33.723 356.889C116.867 420.551 -9.28689 467.356 -10.6908 555.68C-12.0948 644.004 -215.127 621.595 -215.127 621.595C-215.127 621.595 -170.474 747.671 -186.27 765.215C-202.066 782.758 -264.793 809.605 -341.701 740.358C-418.608 671.11 -336.456 655.336 -336.456 655.336C-336.456 655.336 -235.626 536.424 -234.76 488.423C-234.281 461.842 -337.318 -151.669 -68.5723 36.5024C200.173 224.674 -49.4214 293.228 33.723 356.889Z"
                        fill="url(#paint0_radial_30_2334)" />
                    <defs>
                        <radialGradient id="paint0_radial_30_2334" cx="0" cy="0" r="1"
                            gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(-155.662 445.936) rotate(42) scale(211.506 292.109)">
                            <stop stop-color="#43A047" />
                            <stop offset="0.202" stop-color="#53AA57" />
                            <stop offset="1" stop-color="#81C784" />
                        </radialGradient>
                    </defs>
                </svg>
                <svg class="second-leaf" xmlns="http://www.w3.org/2000/svg" width="168" height="396"
                    viewBox="0 0 168 396" fill="none">
                    <path
                        d="M22.0789 155.736C41.2219 147.791 60.9134 141.238 80.9999 136.128C111.8 128.278 132.056 126.556 136.106 126.277C118.725 171.124 92.1739 221.789 51.6329 268.066L-17.6981 275.22C-17.6981 275.22 6.74489 293.3 18.7289 301.574C-25.1251 341.466 -81.7441 375.481 -154.764 395.728C-141.388 377.07 -43.5001 240.814 22.0789 155.736ZM-84.9971 204.52C-84.0501 210.571 -81.1631 228.301 -77.4801 244.251C-73.9301 259.657 -71.3031 268.779 -70.3421 272.013C-111.086 327.593 -146.77 377.299 -156.839 391.351C-151.861 369.76 -130.492 285.07 -84.9971 204.52ZM-73.4531 244.12C-77.9791 224.533 -81.2601 202.52 -81.2721 202.452L-82.9101 202.704C-71.7985 183.08 -59.2843 164.284 -45.4651 146.463C26.0959 55.0527 136.184 10.3087 162.653 0.52771C146.368 14.2277 88.4859 64.8977 29.1429 140.998C1.21289 176.81 -34.3791 224.626 -67.0881 269.174C-68.3451 264.781 -70.5891 256.507 -73.4531 244.118V244.12ZM31.7379 143.102C95.3059 61.7717 157.138 9.65471 167.738 0.94671C166.485 13.2277 160.197 63.2337 136.661 124.572L136.585 122.946C136.522 122.952 114.793 124.072 79.9589 132.946C61.6302 137.629 43.6176 143.471 26.0299 150.439C27.9609 147.944 29.8759 145.488 31.7379 143.102Z"
                        fill="url(#paint0_radial_30_2333)" />
                    <defs>
                        <radialGradient id="paint0_radial_30_2333" cx="0" cy="0" r="1"
                            gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(102.822 -33.0643) scale(268.101 326.435)">
                            <stop stop-color="#F7F7F7" />
                            <stop offset="0.227" stop-color="#C3DEA5" />
                            <stop offset="0.681" stop-color="#9EC872" />
                            <stop offset="1" stop-color="#7CB342" />
                        </radialGradient>
                    </defs>
                </svg>
            </div>
            <div class="mid-part">
                <h3> Agriculture investment with</h3>
                <h2>Grameen Organic</h2>
                <p>Providing access to agribusiness anytime, anywhere, by
                    enabling individuals to invest in farmers and agricultural products. </p>
                <button class="banner-btn">Invest Now</button>
            </div>
            <div class="bg-right">
                <img class="img-fluid" src="{{ asset('assets/images/banners/bg-banners1.png') }}" alt="">
            </div>

        </div>
        <div class="container home-intro-two">
            <h3 class="text-center">A New Way To Invest In Agriculture Opportunities</h3>
            <p class="text-center">We are crowdfunding platform enabling you to help
                providing agricultural input to our farmers. </p>
            <div class="intro-two-cards d-flex align-items-center justify-content-center flex-wrap gap-5">
                <div class="card-wrapper">
                    <div class="card shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="93" height="77" viewBox="0 0 93 77"
                            fill="none">
                            <path
                                d="M90.684 75.5909H47.776V59.0469C47.7758 56.3877 48.6329 53.7994 50.2201 51.6658C51.8073 49.5323 54.04 47.9672 56.587 47.2029L69.23 43.4099L81.876 47.2029C84.4233 47.9669 86.6565 49.5317 88.2441 51.6653C89.8316 53.7989 90.689 56.3875 90.689 59.0469L90.684 75.5909Z"
                                fill="#66BB6A" />
                            <path
                                d="M90.684 75.5909H47.776V59.0469C47.7758 56.3877 48.6329 53.7994 50.2201 51.6658C51.8073 49.5323 54.04 47.9672 56.587 47.2029L69.23 43.4099L81.876 47.2029C84.4233 47.9669 86.6565 49.5317 88.2441 51.6653C89.8316 53.7989 90.689 56.3875 90.689 59.0469L90.684 75.5909Z"
                                stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M80.493 26.247L77.677 15.52H60.782L57.966 26.247L46.703 32.684H91.756L80.493 26.247Z"
                                fill="#66BB6A" />
                            <path d="M80.493 26.247L77.677 15.52H60.782L57.966 26.247L46.703 32.684H91.756L80.493 26.247Z"
                                stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M80.493 26.2471H57.966" stroke="white" stroke-width="2" stroke-miterlimit="10" />
                            <path
                                d="M69.229 51.9928C67.8202 51.9928 66.4252 51.7153 65.1237 51.1762C63.8222 50.6371 62.6396 49.8468 61.6435 48.8506C60.6474 47.8544 59.8573 46.6718 59.3182 45.3702C58.7792 44.0686 58.5019 42.6736 58.502 41.2648V32.6838H79.957V41.2648C79.9571 42.6737 79.6797 44.0688 79.1406 45.3704C78.6015 46.6721 77.8113 47.8548 76.8151 48.851C75.8189 49.8472 74.6362 50.6374 73.3346 51.1765C72.0329 51.7156 70.6378 51.993 69.229 51.9928Z"
                                fill="#66BB6A" />
                            <path
                                d="M69.229 51.9928C67.8202 51.9928 66.4252 51.7153 65.1237 51.1762C63.8222 50.6371 62.6396 49.8468 61.6435 48.8506C60.6474 47.8544 59.8573 46.6718 59.3182 45.3702C58.7792 44.0686 58.5019 42.6736 58.502 41.2648V32.6838H79.957V41.2648C79.9571 42.6737 79.6797 44.0688 79.1406 45.3704C78.6015 46.6721 77.8113 47.8548 76.8151 48.851C75.8189 49.8472 74.6362 50.6374 73.3346 51.1765C72.0329 51.7156 70.6378 51.993 69.229 51.9928Z"
                                stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M55.908 75.5909H3.40799V55.3449C3.40763 52.0908 4.45653 48.9232 6.399 46.3124C8.34148 43.7016 11.074 41.7867 14.191 40.8519L29.66 36.2119L45.13 40.8519C48.2461 41.7876 50.9775 43.7029 52.919 46.3136C54.8605 48.9243 55.9087 52.0914 55.908 55.3449V75.5909Z"
                                fill="#66BB6A" />
                            <path
                                d="M55.908 75.5909H3.40799V55.3449C3.40763 52.0908 4.45653 48.9232 6.399 46.3124C8.34148 43.7016 11.074 41.7867 14.191 40.8519L29.66 36.2119L45.13 40.8519C48.2461 41.7876 50.9775 43.7029 52.919 46.3136C54.8605 48.9243 55.9087 52.0914 55.908 55.3449V75.5909Z"
                                stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M43.443 15.21L39.995 2.08398H19.323L15.878 15.21L2.095 23.084H57.226L43.443 15.21Z"
                                fill="#66BB6A" />
                            <path d="M43.443 15.21L39.995 2.08398H19.323L15.878 15.21L2.095 23.084H57.226L43.443 15.21Z"
                                stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M43.442 15.21H15.877" stroke="white" stroke-width="2" stroke-miterlimit="10" />
                            <path
                                d="M29.66 46.713C27.9361 46.713 26.2291 46.3734 24.6364 45.7136C23.0438 45.0538 21.5967 44.0868 20.3778 42.8677C19.1589 41.6487 18.1921 40.2014 17.5326 38.6087C16.8731 37.0159 16.5337 35.3089 16.534 33.585V23.085H42.786V33.585C42.7863 35.3089 42.4469 37.0159 41.7874 38.6087C41.1279 40.2014 40.1611 41.6487 38.9422 42.8677C37.7233 44.0868 36.2762 45.0538 34.6836 45.7136C33.0909 46.3734 31.3839 46.713 29.66 46.713Z"
                                fill="#66BB6A" />
                            <path
                                d="M29.66 46.713C27.9361 46.713 26.2291 46.3734 24.6364 45.7136C23.0438 45.0538 21.5967 44.0868 20.3778 42.8677C19.1589 41.6487 18.1921 40.2014 17.5326 38.6087C16.8731 37.0159 16.5337 35.3089 16.534 33.585V23.085H42.786V33.585C42.7863 35.3089 42.4469 37.0159 41.7874 38.6087C41.1279 40.2014 40.1611 41.6487 38.9422 42.8677C37.7233 44.0868 36.2762 45.0538 34.6836 45.7136C33.0909 46.3734 31.3839 46.713 29.66 46.713Z"
                                stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <mask id="mask0_30_2358" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="93" height="77">
                                <path d="M0.908997 76.7769H92.942V0.897949H0.908997V76.7769Z" fill="white" />
                            </mask>
                            <g mask="url(#mask0_30_2358)">
                                <path d="M11.283 75.5889H48.037V54.5889H11.283V75.5889Z" stroke="white" stroke-width="2"
                                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.908 54.5889V41.4619" stroke="white" stroke-width="2" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M45.412 54.5889V41.4619" stroke="white" stroke-width="2" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M42.786 62.4649C42.786 62.9843 42.632 63.492 42.3434 63.9239C42.0548 64.3558 41.6446 64.6923 41.1647 64.8911C40.6848 65.0898 40.1567 65.1417 39.6473 65.0403C39.1379 64.9389 38.67 64.6887 38.3028 64.3214C37.9356 63.954 37.6855 63.486 37.5843 62.9766C37.4831 62.4671 37.5353 61.9391 37.7342 61.4592C37.9331 60.9794 38.2698 60.5694 38.7018 60.2809C39.1338 59.9925 39.6416 59.8387 40.161 59.8389C40.5058 59.8389 40.8472 59.9068 41.1658 60.0388C41.4843 60.1708 41.7737 60.3642 42.0175 60.6081C42.2613 60.8519 42.4546 61.1414 42.5865 61.46C42.7183 61.7786 42.7861 62.1201 42.786 62.4649Z"
                                    fill="white" />
                                <path
                                    d="M21.784 62.4649C21.784 62.9842 21.63 63.492 21.3414 63.9238C21.0529 64.3556 20.6427 64.6922 20.1629 64.891C19.6831 65.0897 19.1551 65.1417 18.6457 65.0404C18.1363 64.9391 17.6684 64.689 17.3011 64.3217C16.9339 63.9545 16.6838 63.4866 16.5824 62.9772C16.4811 62.4678 16.5331 61.9398 16.7319 61.4599C16.9306 60.9801 17.2672 60.57 17.6991 60.2814C18.1309 59.9929 18.6386 59.8389 19.158 59.8389C19.5029 59.8387 19.8444 59.9066 20.1631 60.0385C20.4817 60.1704 20.7713 60.3638 21.0151 60.6077C21.259 60.8516 21.4524 61.1411 21.5844 61.4598C21.7163 61.7784 21.7841 62.12 21.784 62.4649Z"
                                    fill="white" />
                                <path
                                    d="M23 35.001C23.4148 36.4151 24.2676 37.6611 25.4357 38.5596C26.6038 39.4581 28.0268 39.9628 29.5 40.001C30.9732 39.9628 32.3962 39.4581 33.5643 38.5596C34.7324 37.6611 35.5852 36.4151 36 35.001"
                                    fill="#66BB6A" />
                                <path
                                    d="M23 35.001C23.4148 36.4151 24.2676 37.6611 25.4357 38.5596C26.6038 39.4581 28.0268 39.9628 29.5 40.001C30.9732 39.9628 32.3962 39.4581 33.5643 38.5596C34.7324 37.6611 35.5852 36.4151 36 35.001"
                                    stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                        </svg>
                        <h4>Connect with our
                            farmers </h4>
                        <h5>Invest in farmers, invest in your future.
                            Join our crowdfunding campaign today.</h5>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="card-two shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="96" height="41" viewBox="0 0 96 41"
                            fill="none">
                            <path d="M30 40V2H95V40H30Z" stroke="#D1EAD3" stroke-width="2" stroke-miterlimit="10" />
                            <path d="M1.47001 39.806H48.894V31.239H1.47001V39.806Z" stroke="#D1EAD3" stroke-width="2"
                                stroke-miterlimit="10" />
                            <path d="M1.47001 39.806H48.894V31.239H1.47001V39.806Z" fill="#66BB6A" stroke="#D1EAD3"
                                stroke-width="2" stroke-miterlimit="10" />
                            <path d="M10.955 30.016H57.194V21.449H10.955V30.016Z" stroke="#D1EAD3" stroke-width="2"
                                stroke-miterlimit="10" />
                            <path d="M10.955 30.016H57.194V21.449H10.955V30.016Z" fill="#66BB6A" stroke="#D1EAD3"
                                stroke-width="2" stroke-miterlimit="10" />
                            <path d="M20.44 20.225H67.864V11.658H20.44V20.225Z" stroke="#D1EAD3" stroke-width="2"
                                stroke-miterlimit="10" />
                            <path d="M20.44 20.225H67.864V11.658H20.44V20.225Z" fill="#66BB6A" stroke="#D1EAD3"
                                stroke-width="2" stroke-miterlimit="10" />
                            <path d="M29.925 10.4339H76.164V1.86694H29.925V10.4339Z" stroke="#D1EAD3" stroke-width="2"
                                stroke-miterlimit="10" />
                            <path d="M29.925 10.4339H76.164V1.86694H29.925V10.4339Z" fill="#66BB6A" stroke="#D1EAD3"
                                stroke-width="2" stroke-miterlimit="10" />
                        </svg>
                        <h4 class="text-white">Grow your business
                            with us</h4>
                        <h5 class="text-white">Invest in agriculture, reap the rewards.
                            Let us help your business grow with
                            our agri investments.</h5>
                    </div>
                </div>
                <div class="card-wrapper">
                    <div class="card shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="93" height="77" viewBox="0 0 93 77"
                            fill="none">
                            <path
                                d="M90.684 75.5909H47.776V59.0469C47.7758 56.3877 48.6329 53.7994 50.2201 51.6658C51.8073 49.5323 54.04 47.9672 56.587 47.2029L69.23 43.4099L81.876 47.2029C84.4233 47.9669 86.6565 49.5317 88.2441 51.6653C89.8316 53.7989 90.689 56.3875 90.689 59.0469L90.684 75.5909Z"
                                fill="#66BB6A" />
                            <path
                                d="M90.684 75.5909H47.776V59.0469C47.7758 56.3877 48.6329 53.7994 50.2201 51.6658C51.8073 49.5323 54.04 47.9672 56.587 47.2029L69.23 43.4099L81.876 47.2029C84.4233 47.9669 86.6565 49.5317 88.2441 51.6653C89.8316 53.7989 90.689 56.3875 90.689 59.0469L90.684 75.5909Z"
                                stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M80.493 26.247L77.677 15.52H60.782L57.966 26.247L46.703 32.684H91.756L80.493 26.247Z"
                                fill="#66BB6A" />
                            <path d="M80.493 26.247L77.677 15.52H60.782L57.966 26.247L46.703 32.684H91.756L80.493 26.247Z"
                                stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M80.493 26.2471H57.966" stroke="white" stroke-width="2" stroke-miterlimit="10" />
                            <path
                                d="M69.229 51.9928C67.8202 51.9928 66.4252 51.7153 65.1237 51.1762C63.8222 50.6371 62.6396 49.8468 61.6435 48.8506C60.6474 47.8544 59.8573 46.6718 59.3182 45.3702C58.7792 44.0686 58.5019 42.6736 58.502 41.2648V32.6838H79.957V41.2648C79.9571 42.6737 79.6797 44.0688 79.1406 45.3704C78.6015 46.6721 77.8113 47.8548 76.8151 48.851C75.8189 49.8472 74.6362 50.6374 73.3346 51.1765C72.0329 51.7156 70.6378 51.993 69.229 51.9928Z"
                                fill="#66BB6A" />
                            <path
                                d="M69.229 51.9928C67.8202 51.9928 66.4252 51.7153 65.1237 51.1762C63.8222 50.6371 62.6396 49.8468 61.6435 48.8506C60.6474 47.8544 59.8573 46.6718 59.3182 45.3702C58.7792 44.0686 58.5019 42.6736 58.502 41.2648V32.6838H79.957V41.2648C79.9571 42.6737 79.6797 44.0688 79.1406 45.3704C78.6015 46.6721 77.8113 47.8548 76.8151 48.851C75.8189 49.8472 74.6362 50.6374 73.3346 51.1765C72.0329 51.7156 70.6378 51.993 69.229 51.9928Z"
                                stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M55.908 75.5909H3.40799V55.3449C3.40763 52.0908 4.45653 48.9232 6.399 46.3124C8.34148 43.7016 11.074 41.7867 14.191 40.8519L29.66 36.2119L45.13 40.8519C48.2461 41.7876 50.9775 43.7029 52.919 46.3136C54.8605 48.9243 55.9087 52.0914 55.908 55.3449V75.5909Z"
                                fill="#66BB6A" />
                            <path
                                d="M55.908 75.5909H3.40799V55.3449C3.40763 52.0908 4.45653 48.9232 6.399 46.3124C8.34148 43.7016 11.074 41.7867 14.191 40.8519L29.66 36.2119L45.13 40.8519C48.2461 41.7876 50.9775 43.7029 52.919 46.3136C54.8605 48.9243 55.9087 52.0914 55.908 55.3449V75.5909Z"
                                stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M43.443 15.21L39.995 2.08398H19.323L15.878 15.21L2.095 23.084H57.226L43.443 15.21Z"
                                fill="#66BB6A" />
                            <path d="M43.443 15.21L39.995 2.08398H19.323L15.878 15.21L2.095 23.084H57.226L43.443 15.21Z"
                                stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M43.442 15.21H15.877" stroke="white" stroke-width="2" stroke-miterlimit="10" />
                            <path
                                d="M29.66 46.713C27.9361 46.713 26.2291 46.3734 24.6364 45.7136C23.0438 45.0538 21.5967 44.0868 20.3778 42.8677C19.1589 41.6487 18.1921 40.2014 17.5326 38.6087C16.8731 37.0159 16.5337 35.3089 16.534 33.585V23.085H42.786V33.585C42.7863 35.3089 42.4469 37.0159 41.7874 38.6087C41.1279 40.2014 40.1611 41.6487 38.9422 42.8677C37.7233 44.0868 36.2762 45.0538 34.6836 45.7136C33.0909 46.3734 31.3839 46.713 29.66 46.713Z"
                                fill="#66BB6A" />
                            <path
                                d="M29.66 46.713C27.9361 46.713 26.2291 46.3734 24.6364 45.7136C23.0438 45.0538 21.5967 44.0868 20.3778 42.8677C19.1589 41.6487 18.1921 40.2014 17.5326 38.6087C16.8731 37.0159 16.5337 35.3089 16.534 33.585V23.085H42.786V33.585C42.7863 35.3089 42.4469 37.0159 41.7874 38.6087C41.1279 40.2014 40.1611 41.6487 38.9422 42.8677C37.7233 44.0868 36.2762 45.0538 34.6836 45.7136C33.0909 46.3734 31.3839 46.713 29.66 46.713Z"
                                stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <mask id="mask0_30_2358" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="93" height="77">
                                <path d="M0.908997 76.7769H92.942V0.897949H0.908997V76.7769Z" fill="white" />
                            </mask>
                            <g mask="url(#mask0_30_2358)">
                                <path d="M11.283 75.5889H48.037V54.5889H11.283V75.5889Z" stroke="white" stroke-width="2"
                                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.908 54.5889V41.4619" stroke="white" stroke-width="2" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M45.412 54.5889V41.4619" stroke="white" stroke-width="2" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M42.786 62.4649C42.786 62.9843 42.632 63.492 42.3434 63.9239C42.0548 64.3558 41.6446 64.6923 41.1647 64.8911C40.6848 65.0898 40.1567 65.1417 39.6473 65.0403C39.1379 64.9389 38.67 64.6887 38.3028 64.3214C37.9356 63.954 37.6855 63.486 37.5843 62.9766C37.4831 62.4671 37.5353 61.9391 37.7342 61.4592C37.9331 60.9794 38.2698 60.5694 38.7018 60.2809C39.1338 59.9925 39.6416 59.8387 40.161 59.8389C40.5058 59.8389 40.8472 59.9068 41.1658 60.0388C41.4843 60.1708 41.7737 60.3642 42.0175 60.6081C42.2613 60.8519 42.4546 61.1414 42.5865 61.46C42.7183 61.7786 42.7861 62.1201 42.786 62.4649Z"
                                    fill="white" />
                                <path
                                    d="M21.784 62.4649C21.784 62.9842 21.63 63.492 21.3414 63.9238C21.0529 64.3556 20.6427 64.6922 20.1629 64.891C19.6831 65.0897 19.1551 65.1417 18.6457 65.0404C18.1363 64.9391 17.6684 64.689 17.3011 64.3217C16.9339 63.9545 16.6838 63.4866 16.5824 62.9772C16.4811 62.4678 16.5331 61.9398 16.7319 61.4599C16.9306 60.9801 17.2672 60.57 17.6991 60.2814C18.1309 59.9929 18.6386 59.8389 19.158 59.8389C19.5029 59.8387 19.8444 59.9066 20.1631 60.0385C20.4817 60.1704 20.7713 60.3638 21.0151 60.6077C21.259 60.8516 21.4524 61.1411 21.5844 61.4598C21.7163 61.7784 21.7841 62.12 21.784 62.4649Z"
                                    fill="white" />
                                <path
                                    d="M23 35.001C23.4148 36.4151 24.2676 37.6611 25.4357 38.5596C26.6038 39.4581 28.0268 39.9628 29.5 40.001C30.9732 39.9628 32.3962 39.4581 33.5643 38.5596C34.7324 37.6611 35.5852 36.4151 36 35.001"
                                    fill="#66BB6A" />
                                <path
                                    d="M23 35.001C23.4148 36.4151 24.2676 37.6611 25.4357 38.5596C26.6038 39.4581 28.0268 39.9628 29.5 40.001C30.9732 39.9628 32.3962 39.4581 33.5643 38.5596C34.7324 37.6611 35.5852 36.4151 36 35.001"
                                    stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                        </svg>
                        <h4>Social Impact Invesment</h4>
                        <h5>Invest in agri with social impact. Grow
                            your business while making a positive
                            difference in the world. Join us today.</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="container home-intro-three">
            <h1>
                Invest on your convenience
            </h1>
            <p>We are transforming the agriculture industry through innovative solutions that increase efficiency,
                sustainability, and
                profitability. So, go ahead, join us, dream big, and make a difference!
            </p>
            <div class="container intro-three-cards my-5">
                <div class="row gx-5 gy-5">
                    <div class="col-12 col-md-6">
                        <div class="intro-three-card"
                            style="background-image:linear-gradient(180deg, rgba(97, 118, 127, 0.00) 0%, #324148 100%), url({{ asset('assets/images/banners/intro-three-card1.png') }})">
                            <h4>NEW FARM <br> TODAY</h2>
                                <svg xmlns="http://www.w3.org/2000/svg" width="66" height="6" viewBox="0 0 66 6"
                                    fill="none">
                                    <path
                                        d="M2.06963 0.676514H64.0398C64.4963 0.676514 64.9342 0.857874 65.257 1.1807C65.5798 1.50352 65.7612 1.94136 65.7612 2.39791V4.1193C65.7612 4.57584 65.5798 5.01368 65.257 5.33651C64.9342 5.65933 64.4963 5.84069 64.0398 5.84069H2.06963C1.61309 5.84069 1.17524 5.65933 0.85242 5.33651C0.529597 5.01368 0.348236 4.57584 0.348236 4.1193V2.39791C0.348236 1.94136 0.529597 1.50352 0.85242 1.1807C1.17524 0.857874 1.61309 0.676514 2.06963 0.676514Z"
                                        fill="white" />
                                </svg>
                                <h2>Short terms
                                    Investment
                                </h2>
                                <p>Invest in farms that will be ready for harvest in 03-08 months</p>
                                <button class="rounded">
                                    <a href="{{route('short.term')}}">Browse Farm</a>
                                </button>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="intro-three-card"
                            style="background-image:linear-gradient(180deg, rgba(97, 118, 127, 0.00) 0%, #324148 100%), url({{ asset('assets/images/banners/intro-three-card2.png') }})">
                            <h4>FULLY <br> FUNDED</h2>
                                <svg xmlns="http://www.w3.org/2000/svg" width="66" height="6" viewBox="0 0 66 6"
                                    fill="none">
                                    <path
                                        d="M2.06963 0.676514H64.0398C64.4963 0.676514 64.9342 0.857874 65.257 1.1807C65.5798 1.50352 65.7612 1.94136 65.7612 2.39791V4.1193C65.7612 4.57584 65.5798 5.01368 65.257 5.33651C64.9342 5.65933 64.4963 5.84069 64.0398 5.84069H2.06963C1.61309 5.84069 1.17524 5.65933 0.85242 5.33651C0.529597 5.01368 0.348236 4.57584 0.348236 4.1193V2.39791C0.348236 1.94136 0.529597 1.50352 0.85242 1.1807C1.17524 0.857874 1.61309 0.676514 2.06963 0.676514Z"
                                        fill="white" />
                                </svg>
                                <h2>Long terms
                                    Investment</h2>
                                <p>Consider farms that have long term investment program with higher return</p>
                                <button class="rounded">
                                    <a href="{{route('long.term')}}">Browse Farm</a>
                                </button>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 ">
                        <div class="intro-three-card"
                            style="background-image:linear-gradient(180deg, rgba(97, 118, 127, 0.00) 0%, #324148 100%), url({{ asset('assets/images/banners/intro-three-card3.png') }})">
                            <h4>NEW FARM <br> TODAY</h2>
                                <svg xmlns="http://www.w3.org/2000/svg" width="66" height="6" viewBox="0 0 66 6"
                                    fill="none">
                                    <path
                                        d="M2.06963 0.676514H64.0398C64.4963 0.676514 64.9342 0.857874 65.257 1.1807C65.5798 1.50352 65.7612 1.94136 65.7612 2.39791V4.1193C65.7612 4.57584 65.5798 5.01368 65.257 5.33651C64.9342 5.65933 64.4963 5.84069 64.0398 5.84069H2.06963C1.61309 5.84069 1.17524 5.65933 0.85242 5.33651C0.529597 5.01368 0.348236 4.57584 0.348236 4.1193V2.39791C0.348236 1.94136 0.529597 1.50352 0.85242 1.1807C1.17524 0.857874 1.61309 0.676514 2.06963 0.676514Z"
                                        fill="white" />
                                </svg>
                                <h2>Seasonal 
                                    Investment</h2>
                                <p>Invest in farms that will be ready for harvest in 03- 06 Months </p>
                                <button class="rounded">
                                    <a href="{{route('seasonal.investment')}}">Browse Farm</a>
                                </button>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 ">
                        <div class="intro-three-card"
                            style="background-image:linear-gradient(180deg, rgba(97, 118, 127, 0.00) 0%, #324148 100%), url({{ asset('assets/images/banners/intro-three-card4.png') }})">
                            <h4>FULLY <br> FUNDED</h2>
                                <svg xmlns="http://www.w3.org/2000/svg" width="66" height="6" viewBox="0 0 66 6"
                                    fill="none">
                                    <path
                                        d="M2.06963 0.676514H64.0398C64.4963 0.676514 64.9342 0.857874 65.257 1.1807C65.5798 1.50352 65.7612 1.94136 65.7612 2.39791V4.1193C65.7612 4.57584 65.5798 5.01368 65.257 5.33651C64.9342 5.65933 64.4963 5.84069 64.0398 5.84069H2.06963C1.61309 5.84069 1.17524 5.65933 0.85242 5.33651C0.529597 5.01368 0.348236 4.57584 0.348236 4.1193V2.39791C0.348236 1.94136 0.529597 1.50352 0.85242 1.1807C1.17524 0.857874 1.61309 0.676514 2.06963 0.676514Z"
                                        fill="white" />
                                </svg>
                                <h2>Agri Trade
                                    investment</h2> 
                                <p>Consider farms that have long term investment program. </p>
                                <button class="rounded">
                                    <a href="{{route('agri.investment')}}">Browse Farm</a>
                                </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="d-flex justify-content-center home-intro-four">
            <img class="img-fluid" src="{{ asset('assets/images/banners/how-it-works.svg') }}" alt="">
        </div>
        <div class="container home-intro-five position-relative">
            <svg xmlns="http://www.w3.org/2000/svg" width="155" height="109" viewBox="0 0 155 109" fill="none">
                <path
                    d="M112.728 103.506V75.182C112.728 74.4481 112.907 73.7252 113.25 73.0765C113.593 72.4277 114.09 71.8728 114.697 71.46L123.697 65.344H89.045C87.8515 65.344 86.7069 64.8699 85.863 64.026C85.0191 63.1821 84.545 62.0375 84.545 60.844V4.5C84.545 3.30653 85.0191 2.16193 85.863 1.31802C86.7069 0.474106 87.8515 0 89.045 0L150.5 0C151.693 0 152.838 0.474106 153.682 1.31802C154.526 2.16193 155 3.30653 155 4.5V80.883C155 81.6168 154.821 82.3394 154.477 82.988C154.134 83.6365 153.638 84.1913 153.031 84.604L119.758 107.226C119.018 107.736 118.14 108.01 117.241 108.012C116.648 108.014 116.061 107.898 115.514 107.673C114.966 107.447 114.468 107.115 114.048 106.696C113.629 106.278 113.297 105.78 113.07 105.233C112.843 104.685 112.727 104.099 112.728 103.506ZM28.182 103.506V75.182C28.1819 74.448 28.3614 73.7251 28.7047 73.0763C29.0481 72.4276 29.545 71.8727 30.152 71.46L39.152 65.344H4.5C3.30653 65.344 2.16193 64.8699 1.31802 64.026C0.474106 63.1821 0 62.0375 0 60.844L0 4.5C0 3.30653 0.474106 2.16193 1.31802 1.31802C2.16193 0.474106 3.30653 0 4.5 0L65.955 0C67.1485 0 68.2931 0.474106 69.137 1.31802C69.9809 2.16193 70.455 3.30653 70.455 4.5V80.883C70.4549 81.6169 70.2754 82.3395 69.932 82.9881C69.5887 83.6367 69.0919 84.1914 68.485 84.604L35.212 107.227C34.4718 107.737 33.5942 108.011 32.695 108.013C32.1024 108.015 31.5152 107.899 30.9673 107.674C30.4194 107.448 29.9215 107.116 29.5021 106.697C29.0828 106.278 28.7503 105.781 28.5238 105.233C28.2972 104.686 28.1811 104.099 28.182 103.506Z"
                    fill="#66BB6A" fill-opacity="0.25" />
            </svg>
            <p>What investors like you <br>
                are saying about Grameen Organic</p>
        </div>
        <div class="caros">
            <div id="myCarousel" class="carousel slide position-relative" data-bs-ride="carousel">
                <div class="carousel-inner w-100">
                    <div class="carousel-item active">
                        <div class="col-md-3">
                            <div class="card card-body">
                                <div class="card-profile d-flex align-items-center gap-3">
                                    <img class="img-fluid" src="{{ asset('assets/images/users/demo-user2.png') }}">
                                    <div>
                                        <h4>Ilone Pickford</h4>
                                        <h5>Head of Agrogofund Group</h5>
                                    </div>
                                </div>
                                <div class="card-statement">
                                    “ At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body">
                                <div class="card-profile d-flex align-items-center gap-3">
                                    <img class="img-fluid" src="{{ asset('assets/images/users/demo-user2.png') }}">
                                    <div>
                                        <h4>Ilone Pickford</h4>
                                        <h5>Head of Agrogofund Group</h5>
                                    </div>
                                </div>
                                <div class="card-statement">
                                    “ At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body">
                                <div class="card-profile d-flex align-items-center gap-3">
                                    <img class="img-fluid" src="{{ asset('assets/images/users/demo-user2.png') }}">
                                    <div>
                                        <h4>Ilone Pickford</h4>
                                        <h5>Head of Agrogofund Group</h5>
                                    </div>
                                </div>
                                <div class="card-statement">
                                    “ At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body">
                                <div class="card-profile d-flex align-items-center gap-3">
                                    <img class="img-fluid" src="{{ asset('assets/images/users/demo-user2.png') }}">
                                    <div>
                                        <h4>Ilone Pickford</h4>
                                        <h5>Head of Agrogofund Group</h5>
                                    </div>
                                </div>
                                <div class="card-statement">
                                    “ At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body">
                                <div class="card-profile d-flex align-items-center gap-3">
                                    <img class="img-fluid" src="{{ asset('assets/images/users/demo-user2.png') }}">
                                    <div>
                                        <h4>Ilone Pickford</h4>
                                        <h5>Head of Agrogofund Group</h5>
                                    </div>
                                </div>
                                <div class="card-statement">
                                    “ At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body d-flex flex-col justify-content-center">
                                <div class="card-profile d-flex align-items-center gap-3">
                                    <img class="img-fluid" src="{{ asset('assets/images/users/demo-user2.png') }}">
                                    <div>
                                        <h4>Ilone Pickford</h4>
                                        <h5>Head of Agrogofund Group</h5>
                                    </div>
                                </div>
                                <div class="card-statement">
                                    “ At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body">
                                <div class="card-profile d-flex align-items-center gap-3">
                                    <img class="img-fluid" src="{{ asset('assets/images/users/demo-user2.png') }}">
                                    <div>
                                        <h4>Ilone Pickford</h4>
                                        <h5>Head of Agrogofund Group</h5>
                                    </div>
                                </div>
                                <div class="card-statement">
                                    “ At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                            <div class="card card-body">
                                <div class="card-profile d-flex align-items-center gap-3">
                                    <img class="img-fluid" src="{{ asset('assets/images/users/demo-user2.png') }}">
                                    <div>
                                        <h4>Ilone Pickford</h4>
                                        <h5>Head of Agrogofund Group</h5>
                                    </div>
                                </div>
                                <div class="card-statement">
                                    “ At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
        <div class="container home-intro-six">
            <h1>Proud Partners</h1>
            <p>Partnerships bring complementary strengths, collaborators provide diverse perspectives, and patrons offer
                crucial support for the growth of <span style="color: #00BD6A;">Grameen Organic</span> </p>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-around align-items-center">
                            <img class="img-fluid" src="{{ asset('assets/images/logos/sponsor-logo1.png') }}">
                            <img class="img-fluid" src="{{ asset('assets/images/logos/sponsor-logo2.png') }}">
                            <img class="img-fluid" src="{{ asset('assets/images/logos/sponsor-logo3.png') }}">
                        </div>


                    </div>
                    <div class="carousel-item ">

                        <div class="d-flex justify-content-around align-items-center">
                            <img class="img-fluid" src="{{ asset('assets/images/logos/sponsor-logo1.png') }}">
                            <img class="img-fluid" src="{{ asset('assets/images/logos/sponsor-logo2.png') }}">
                            <img class="img-fluid" src="{{ asset('assets/images/logos/sponsor-logo3.png') }}">
                        </div>


                    </div>
                    <div class="carousel-item ">

                        <div class="d-flex justify-content-around align-items-center">
                            <img class="img-fluid" src="{{ asset('assets/images/logos/sponsor-logo1.png') }}">
                            <img class="img-fluid" src="{{ asset('assets/images/logos/sponsor-logo2.png') }}">
                            <img class="img-fluid" src="{{ asset('assets/images/logos/sponsor-logo3.png') }}">
                        </div>

                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="container home-intro-seven">
            <h2 class="text-center">The future of <span style="color: #00BD6A">Farm Investing is Grameen Organic</span>
            </h2>
            <div class="d-flex justify-content-center btn-wrapper">
                <button class="rounded">Invest Now</button>
            </div>
            <h1>Subscribe to Our Newsletter</h1>
            <p>Join us on our journey to discover innovative solutions and make a positive impact.
                Subscribe to stay updated on our work and be part of a community that cares about creating a better future.
            </p>
            <div class="subscribe-wrapper d-flex justify-content-center">
                <form class="center">
                    <button type="button">Subscribe!</button>
                    <input placeholder="Enter your email address"></input>
                </form>
            </div>
            <div class="stories-wrapper d-flex flex-column align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="84" height="68" viewBox="0 0 84 68"
                    fill="none">
                    <path
                        d="M44.2339 37.0392C41.3742 28.0035 35.8073 20.0647 28.2869 14.2972C20.2679 8.01017 10.9719 5.26817 1.65294 1.59717C0.0529386 15.9902 -2.28105 34.2642 5.14595 47.4902C9.54927 55.2581 16.3963 61.3532 24.6219 64.8272C27.5682 66.0765 30.6587 66.9536 33.8219 67.4382C34.3605 67.5184 34.9036 67.5645 35.4479 67.5762C31.6311 53.0115 24.8237 39.401 15.4589 27.6112C15.1826 27.2149 15.0676 26.7283 15.1372 26.2503C15.2069 25.7722 15.456 25.3387 15.834 25.0378C16.2119 24.7369 16.6903 24.5913 17.1718 24.6306C17.6533 24.6698 18.1017 24.891 18.4259 25.2492C28.2003 37.5553 35.2824 51.7763 39.2139 66.9922C40.6855 66.4433 41.9932 65.5289 43.0139 64.3352C49.8689 56.3972 44.2929 37.2352 44.2339 37.0392Z"
                        fill="#00BD6A" />
                    <path
                        d="M82.8959 0C82.8959 0 75.9959 2.913 75.3959 3.179C66.7959 6.979 56.2219 11.979 52.4299 20.954C49.8729 27.004 49.0769 34.032 50.0629 41.844C50.0909 42.071 50.1179 42.306 50.1469 42.544C50.4609 45.237 50.8909 48.925 54.0169 50.801C54.1279 50.868 54.2459 50.933 54.3709 51.001C55.0378 40.2459 59.2964 30.0262 66.4639 21.98C66.8147 21.5971 67.2987 21.3631 67.8166 21.3259C68.3346 21.2887 68.8471 21.4512 69.2489 21.78C69.4448 21.9373 69.6065 22.1329 69.7241 22.3548C69.8416 22.5768 69.9126 22.8205 69.9327 23.0708C69.9527 23.3212 69.9214 23.5731 69.8406 23.8109C69.7598 24.0488 69.6313 24.2676 69.4629 24.454C62.7422 31.9996 58.8 41.6142 58.2889 51.706C59.0864 51.6263 59.8716 51.4521 60.6279 51.187C65.3629 49.4535 69.6497 46.6821 73.1739 43.076C73.6789 42.585 74.1739 42.076 74.6479 41.555C85.3059 29.863 82.8959 0 82.8959 0Z"
                        fill="#00BD6A" />
                </svg>
                <h1>Read Our Stories</h1>
                <div class="py-5 stories-wrapper">
                   
                        <div class="row hidden-md-up">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="card-title">Blog Post One</h4>
                                        <h6 class="card-subtitle text-muted">Lorem ipsum dolor sit amet, </h6>
                                        <button>Read More</button>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="51" height="3"
                                            viewBox="0 0 51 3" fill="none">
                                            <path d="M0 1.11914H50.586" stroke="white" stroke-width="2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="card-title">Blog Post Two</h4>
                                        <h6 class="card-subtitle text-muted">Lorem ipsum dolor sit amet, </h6>
                                        <button>Read More</button>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="51" height="3"
                                            viewBox="0 0 51 3" fill="none">
                                            <path d="M0 1.11914H50.586" stroke="white" stroke-width="2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-block">
                                        <h4 class="card-title">Blog Post Three</h4>
                                        <h6 class="card-subtitle text-muted">Lorem ipsum dolor sit amet, </h6>
                                        <button>Read More</button>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="51" height="3"
                                            viewBox="0 0 51 3" fill="none">
                                            <path d="M0 1.11914H50.586" stroke="white" stroke-width="2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                   
                </div>

            </div>


        </div>
    </div>

    </div>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Target the first carousel
        $('#myCarousel .carousel-item').each(function() {
            var minPerSlide = 4;
            var next = $(this).next();

            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));

            for (var i = 0; i < minPerSlide; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));
            }
        });
    });
</script>
