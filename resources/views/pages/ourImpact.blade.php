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

            </div>
            <div class="bg-right">
                <img class="img-fluid" style="margin-top: -70px;"
                    src="{{ asset('assets/images/banners/our-impact-bg.png') }}" alt="">
            </div>

        </div>
        <div class="container home-intro-three" style="margin-top: -320px;">
            <div class="d-flex  justify-content-between">
                <h1 class="fs-1">
                    Farmer Story
                </h1>
                <h1 class="fs-1">
                    Partner Story
                </h1>
                <h1 class="fs-1">
                    Impact Map
                </h1>
            </div>
            <div class="farmer-story">
                <h1>Farmer Story
                </h1>
                <p>At our core, we believe in the power of smallholder farmers to create a
                    sustainable future for Bangladesh and beyond. Our mission is to empower
                    these hardworking individuals by providing them with the tools, resources,
                    and support they need to succeed. We know that every farmer we help brings
                    us one step closer to achieving our goal of a self-sufficient Bangladesh that
                    can feed its people and contribute to global food security.
                    <br>
                    <br>
                    Join us in championing smallholder farmers and
                    building a brighter future for all. One farmer at a time, we can make a difference.
                </p>
                <div class="container-fluid  mt-4">
                    <iframe class="w-100" height="515"
                        src="https://www.youtube.com/embed/J3pF2jkQ4vc?si=dHX4e4qb8GEpFYR6" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                    <div class="d-flex justify-content-between align-items-center mt-3 gap-4">
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/J3pF2jkQ4vc?si=dHX4e4qb8GEpFYR6" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/J3pF2jkQ4vc?si=dHX4e4qb8GEpFYR6" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/J3pF2jkQ4vc?si=dHX4e4qb8GEpFYR6" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>

                </div>
            </div>
            <div class="farmer-story mt-5 pt-4 d-flex flex-column">
                <h1>Partner Story</h1>
                <p>
                    Our ambitious goal is to create a self-sufficient Bangladesh that not only feeds its
                    own population but also
                    contributes to the world's food supply. To make this
                    a reality, we recognize that we cannot do it alone.
                    Thus, we are continuously
                    searching for partners who can invest in and collaborate with us
                    on this journey to
                    support smallholder farmers, increase food production in Bangladesh,
                    and promote
                    global food security.
                    <br>

                    Would you like to become a partner in our mission? Thus far, we have already
                    collaborated with:
                </p>
                <img class="img-fluid my-4 align-self-center" src="{{ asset('assets/images/banners/partners-bg.svg') }}" alt="">


            </div>
            <div class="farmer-story mt-5 pt-4 d-flex flex-column">
                <h1>Impact Map</h1>
                <div class="d-flex flex-wrap align-items-start gap-5">

                    <img class="img-fluid my-3 align-self-center" src="{{ asset('assets/images/banners/bd-map.svg') }}" alt="">
                    <img class="img-fluid my-3 align-self-center" src="{{ asset('assets/images/banners/impact-location.svg') }}" alt="">
                </div>
                <h1>Impact Map</h1>
                <div class="d-flex flex-wrap align-items-start gap-5">

                    <img class="img-fluid my-3 align-self-center" src="{{ asset('assets/images/banners/bd-map.svg') }}" alt="">
                    <img class="img-fluid my-3 align-self-center" width="626" height="856" src="{{ asset('assets/images/banners/impact-sdg.png') }}" alt="">
                </div>


            </div>
            <div class="farmer-story my-5 py-4 d-flex flex-column">
                <h1 class="text-start">Education
                </h1>
                <p class="fw-light text-start">Quality education is the key to genuine development and empowerment, which 
                    extends beyond children and young adults to include individuals in rural communities. 
                    By providing education, individuals are equipped with the necessary skills and 
                    knowledge to enhance their lives and contribute to their families and communities.
                </p>
                <div class="d-flex flex-wrap align-items-start gap-5">

                    <img class="img-fluid my-3 align-self-center" src="{{ asset('assets/images/banners/impact-edu-child.svg') }}" alt="">
                    <img class="img-fluid my-3 align-self-center" width="626" height="856" src="{{ asset('assets/images/banners/impact-edu-text.svg') }}" alt="">
                </div>

                


            </div>
          

        </div>
    </div>

    </div>
@endsection
