<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="./gambar/Naik.Kapal.svg">
  <title>Naik.Kapal</title>
  <!-- Fonts -->
  <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <style>
      @tailwind base;
      @tailwind components;
      @tailwind utilities;
      @import url('https://fonts.googleapis.com/css2?family=K2D:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;500;600;700&display=swap');
  
      * {
        margin: 0;
        padding: 0;
      }
  
      .statistik {
        width: 200px;
        height: 100px;
        border-top-left-radius: 110px;
        border-top-right-radius: 110px;
        border: 30px solid #BFC4FF;
        border-bottom: 0;
      }
  
      .statistik1 {
        width: 200px;
        height: 100px;
        border-top-left-radius: 110px;
        border-top-right-radius: 110px;
        border: 30px solid #8992FA;
        border-bottom: 0;
      }
      body {
          font-family: 'Nunito', sans-serif;
      }
  </style>
  <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              logo: '#8992FA',
              button: '#8992FA',
              content: '#a4a4a4',
              highlight: '#FFD31D'
            },
            fontFamily: {
              content: ['Open Sans', 'sans-serif'],
              logo: ['K2D']
            }
          }
        }
      }
    </script>
</head>

<body class="overflow-x-hidden bg-white scroll-smooth">
  
  <nav class="lg:mx-20 md:mx-10 mx-8 py-5 flex items-center">
    <div>
      <a href="#" class="text-logo font-logo text-[1.5rem] font-bold">Naik.<span class="text-white">kapal</span></a>
    </div>
    <ul
      class="ml-auto lg:flex lg:space-x-8 lg:space-y-0 text-white lg:items-center lg:z-auto lg:static lg:bg-transparent lg:h-0 lg:w-auto lg:pl-0 lg:opacity-100 space-x-0 space-y-8 z-10 absolute bg-white/20 backdrop-blur-md w-full py-10 lg:py-0 text-[1.2rem] lg:text-[1rem] px-7 opacity-0 top-[-400px] transition-all ease-in duration-500 left-0">
      <li class="list-none">
        <a href="{{ url('/') }}" class="hover:text-button">Home</a>
      </li>
      <li class="list-none">
        <a href="{{ url('/') }}" class="hover:text-button">Destination</a>
      </li>
      <li class="list-none">
        <a href="{{ url('/') }}" class="hover:text-button">Choose Class</a>
      </li>
      <li class="list-none">
        <a href="{{ url('/') }}" class="hover:text-button">Manage</a>
      </li>
      <li class="list-none">
        <a href="{{ url('/') }}" class="hover:text-button">About Us</a>
      </li>
      @if (Route::has('login'))
      <div class="lg:flex block lg:items-center lg:pl-10 space-x-8">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="hover:text-button">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="hover:text-button">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bg-button py-2 px-5 rounded-sm">Sign Up</a>
                        @endif
                    @endauth
      </div>
      @endif
    </ul>
    <div id="toggle" class="text-white text-[2rem] lg:hidden absolute right-10 mt-2">
      <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
    </div>
  </nav>

  <div class="hero-section md:mt-[-110px] mt-[-100px] mb-40 w-full h-[80vh] z-[-20] relative"
    style="background: url('./assets/bg-hero.jpg'); background-position: center; background-size: cover;">
    <div class="w-full h-[80vh] absolute top-0 left-0" style="background: linear-gradient(90deg, #000000 -46.92%, rgba(0, 0, 0, 0) 100%)"></div>
    <div class="content py-[16rem] lg:mx-20 mx-8 font-content text-white relative z-30 space-y-6">
      <h1 data-aos="fade-up"
      data-aos-duration="1000" class="text-[2.5rem] md:text-[3rem] font-bold lg:w-[40%] md:w-[60%] w-[95%]">Let's explore the World with us
      </h1>
      <p data-aos="fade-up" data-aos-duration="1200" class="text-[.9rem] text-[#d8d8d8] md:w-[40%] lg:w-[30%]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in purus eget tellus aliquam egestas.</p> 
      
    </div>
  </div>

@include('layouts.destination')

  <div class="about-section md:flex block lg:space-x-5 space-x-0 mt-20 lg:mx-20 mx-8 mb-72">
    <div>
      <div class="space-y-3">
        <h4 data-aos="fade-up" data-aos-duration="1000" class="uppercase text-highlight text-[1.1rem]">JUST FOR THOSE WHO USE US</h4>
        <h1 data-aos="fade-up" data-aos-duration="1200" class="lg:text-[3rem] text-[2.5rem] font-bold lg:w-[100%] md:w-[85%]">Some advantages for You to Choose our
          flights</h1>
        <p data-aos="fade-up" data-aos-duration="1400" class="text-[.9rem] text-content lg:w-[90%] md:w-[85%]">Lorem, ipsum dolor sit amet consectetur adipisicing
          elit.
          Repellendus nemo temporibus eum maiores quod repudiandae, itaque sunt perspiciatis consectetur eius?</p>
      </div>
      <div class="flex space-x-3 items-center pt-8">
        <img data-aos="zoom-in" data-aos-duration="1600" src="./assets/profile.svg" alt="">
        <div data-aos="fade-up" data-aos-duration="1600">
          <h4 class="font-semibold text-[1.1rem]">Wicaksana.Adi</h4>
          <p class="text-content text-[.9rem]">UI/UX Designer</p>
        </div>
      </div>
      <div data-aos="fade-up" data-aos-duration="1600" class="flex items-center space-x-12 pt-10">
        <div>
          <h4 class="text-logo text-[1.8rem] font-bold md-12">+2,000</h4>
          <p class="text-center text-content text-[.9rem]">App User</p>
        </div>
        <div>
          <h4 class="text-logo text-[1.8rem] font-bold">+1,000</h4>
          <p class="text-center text-content text-[.9rem]">Destination</p>
        </div>
      </div>
    </div>
    <div data-aos="fade-up" data-aos-duration="1600"
      class="grid lg:grid-cols-2 grid-cols-1 lg:gap-y-20 gap-y-10 lg:gap-x-10 gap-x-0 md:px-20 px-32 justify-items-center md:mt-0 mt-20 relative">
      <div class="bg-white shadow-md space-y-2 px-5 py-7 lg:h-[15rem] rounded-xl h-auto md:w-auto w-[20rem] relative">
        <img src="./assets/safety.svg" alt="">
        <h4 class="font-semibold text-[1.2rem]">Safety First</h4>
        <p class="text-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit a odio in officia
          maiores sapiente. Rem.</p>
        <div
          class="border-[2px] border-button md:w-[18rem] w-[20rem] h-[13rem] rounded-xl absolute -z-10 lg:top-12 md:top-4 top-2 -left-5">
        </div>
      </div>
      <div
        class="bg-white shadow-md space-y-2 px-5 py-7 lg:h-[15rem] h-auto rounded-xl md:w-auto w-[20rem] relative lg:mt-[10rem] mt-0">
        <img src="./assets/destination.svg" alt="">
        <h4 class="font-semibold text-[1.2rem]">Many Destination</h4>
        <p class="text-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit a odio in officia
          maiores sapiente. Rem.</p>
        <div
          class="border-[2px] border-button md:w-[18rem] w-[20rem] h-[13rem] rounded-xl absolute -z-10 lg:top-12 md:top-4 top-2 -left-5">
        </div>
      </div>
      <div
        class="bg-white shadow-md space-y-2 px-5 py-7 lg:h-[15rem] h-auto rounded-xl md:w-auto w-[20rem] relative lg:mt-[-10rem] mt-0">
        <img src="./assets/transaction.svg" alt="">
        <h4 class="font-semibold text-[1.2rem]">Easy transaction</h4>
        <p class="text-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit a odio in officia
          maiores sapiente. Rem.</p>
        <div
          class="border-[2px] border-button md:w-[18rem] w-[20rem] h-[13rem] rounded-xl absolute -z-10 lg:top-12 md:top-4 top-2 -left-5">
        </div>
      </div>
    </div>
  </div>

  <div class="md:flex block md:items-center lg:mx-20 md:mx-10 mx-8 lg:space-x-10 space-x-0 mb-40 font-content">
    <div data-aos="fade-up" data-aos-duration="1600" class="inline-block">
      <div class="bg-white shadow-lg px-5 py-5 mr-[16rem] lg:w-auto w-[20rem]">
        <h2  class="text-[1.3rem] font-bold w-full">Progress in our application</h2>
        <img  src="./assets/statistik.svg" alt="" class="py-4">
        <p  class="text-[.9rem] text-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt adipisci
          explicabo aspernatur iusto distinctio placeat laudantium quibusdam obcaecati modi nam.</p>
        <div class="pt-10">
          <h4 class="text-[1rem] font-bold">Progress in our application</h4>
          <div>
            <div class="bg-[#BFC4FF] rounded-xl mt-5">
              <div class="bg-button lg:w-[18rem] md:w-[12.5rem] w-[12rem] h-2 rounded-xl"></div>
            </div>
            <div class="bg-button w-[5px] h-[5px] rounded-full mt-2 ml-auto lg:mr-28 md:mr-[5rem] mr-[5.5rem]"></div>
            <p class="text-[.9rem] lg:ml-[17rem] md:ml-[11.5rem] ml-[11rem] pt-1">85%</p>
          </div>
        </div>
        <div class="flex items-center space-x-5">
          <div class="flex pt-10">
            <img src="./assets/org.svg" alt="">
            <img src="./assets/org1.svg" alt="" class="ml-[-1rem]">
            <img src="./assets/org2.svg" alt="" class="ml-[-1rem]">
          </div>
            <p class="mt-10 text-content text-[.9rem]">+12 people</p>
        </div>
      </div>
      <div class="grid lg:grid-cols-1 gap-x-5 space-y-5 lg:-mt-[26rem] lg:ml-[20rem] -mt-[28rem] md:ml-[12rem] ml-[16rem] ">
        <div data-aos="zoom-in" data-aos-duration="1000" class="bg-white shadow-xl px-5 py-5 mx-auto">
          <svg width="184" height="176" viewBox="0 0 184 176" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M10.4328 93.3159C10.4328 82.5838 12.5467 71.9567 16.6537 62.0415C20.7607 52.1263 26.7804 43.1172 34.3692 35.5284C41.9579 27.9396 50.9671 21.9199 60.8823 17.8129C70.7975 13.7059 81.4246 11.592 92.1567 11.592C102.889 11.592 113.516 13.7059 123.431 17.8129C133.346 21.9199 142.355 27.9397 149.944 35.5284C157.533 43.1172 163.553 52.1264 167.66 62.0416C171.767 71.9568 173.881 82.5838 173.881 93.3159L145.21 93.3159C145.21 86.3488 143.838 79.4499 141.172 73.0132C138.506 66.5764 134.598 60.7278 129.671 55.8013C124.745 50.8748 118.896 46.9669 112.459 44.3007C106.023 41.6345 99.1238 40.2622 92.1567 40.2622C85.1896 40.2622 78.2907 41.6345 71.8539 44.3007C65.4171 46.9669 59.5686 50.8748 54.6421 55.8013C49.7156 60.7278 45.8077 66.5764 43.1415 73.0131C40.4753 79.4499 39.103 86.3488 39.103 93.3159L10.4328 93.3159Z"
              fill="#F4F4F4" />
            <path
              d="M84.7407 86.0669C84.7407 86.7695 84.577 87.3665 84.2494 87.8578C83.9272 88.3438 83.4887 88.7136 82.934 88.9672C82.3846 89.2208 81.7639 89.3476 81.0718 89.3476C80.3798 89.3476 79.7564 89.2208 79.2017 88.9672C78.647 88.7136 78.2085 88.3438 77.8863 87.8578C77.564 87.3665 77.4029 86.7695 77.4029 86.0669C77.4029 85.6073 77.4901 85.1873 77.6644 84.807C77.844 84.4213 78.0949 84.0859 78.4172 83.8006C78.7447 83.5153 79.1304 83.2961 79.5741 83.1429C80.0232 82.9844 80.5171 82.9051 81.056 82.9051C81.7639 82.9051 82.3952 83.0425 82.9499 83.3172C83.5046 83.5866 83.9404 83.9591 84.2574 84.4345C84.5796 84.91 84.7407 85.4541 84.7407 86.0669ZM83.2668 86.0352C83.2668 85.6073 83.1744 85.2296 82.9895 84.9021C82.8046 84.5692 82.5457 84.3104 82.2129 84.1255C81.8801 83.9406 81.4944 83.8481 81.056 83.8481C80.6069 83.8481 80.2186 83.9406 79.8911 84.1255C79.5688 84.3104 79.3179 84.5692 79.1383 84.9021C78.9587 85.2296 78.8689 85.6073 78.8689 86.0352C78.8689 86.479 78.956 86.8593 79.1304 87.1763C79.31 87.488 79.5636 87.7284 79.8911 87.8974C80.2239 88.0612 80.6175 88.1431 81.0718 88.1431C81.5261 88.1431 81.9171 88.0612 82.2446 87.8974C82.5721 87.7284 82.8231 87.488 82.9974 87.1763C83.177 86.8593 83.2668 86.479 83.2668 86.0352ZM84.4713 80.6547C84.4713 81.2146 84.3234 81.7191 84.0276 82.1682C83.7317 82.6172 83.3276 82.9712 82.8151 83.23C82.3027 83.4889 81.7216 83.6183 81.0718 83.6183C80.4115 83.6183 79.8224 83.4889 79.3047 83.23C78.7923 82.9712 78.3908 82.6172 78.1002 82.1682C77.8097 81.7191 77.6644 81.2146 77.6644 80.6547C77.6644 79.9837 77.8097 79.4132 78.1002 78.943C78.3961 78.4729 78.8002 78.1136 79.3126 77.8653C79.8251 77.617 80.4088 77.4929 81.0639 77.4929C81.7242 77.4929 82.3106 77.617 82.8231 77.8653C83.3355 78.1136 83.737 78.4729 84.0276 78.943C84.3234 79.4132 84.4713 79.9837 84.4713 80.6547ZM83.0053 80.6784C83.0053 80.2928 82.9234 79.952 82.7597 79.6562C82.5959 79.3604 82.3687 79.1279 82.0782 78.9589C81.7876 78.7845 81.4495 78.6974 81.0639 78.6974C80.6782 78.6974 80.3401 78.7793 80.0496 78.943C79.7643 79.1015 79.5398 79.3287 79.376 79.6245C79.2175 79.9203 79.1383 80.2717 79.1383 80.6784C79.1383 81.0746 79.2175 81.4207 79.376 81.7165C79.5398 82.0123 79.767 82.2421 80.0575 82.4059C80.3481 82.5697 80.6862 82.6516 81.0718 82.6516C81.4575 82.6516 81.7929 82.5697 82.0782 82.4059C82.3687 82.2421 82.5959 82.0123 82.7597 81.7165C82.9234 81.4207 83.0053 81.0746 83.0053 80.6784ZM88.4493 83.6976L87.2765 83.3964L87.855 77.6514H93.7744V79.0064H89.0991L88.7504 82.1444C88.9617 82.0229 89.2285 81.9093 89.5508 81.8037C89.8783 81.698 90.2534 81.6452 90.676 81.6452C91.2096 81.6452 91.6877 81.7376 92.1103 81.9225C92.5329 82.1022 92.8921 82.361 93.188 82.6991C93.4891 83.0372 93.7189 83.444 93.8774 83.9194C94.0359 84.3949 94.1151 84.9258 94.1151 85.5122C94.1151 86.0669 94.0385 86.5767 93.8853 87.0416C93.7374 87.5065 93.5129 87.9133 93.2118 88.2619C92.9106 88.6053 92.5303 88.8721 92.0707 89.0623C91.6163 89.2525 91.0801 89.3476 90.462 89.3476C89.9972 89.3476 89.556 89.2842 89.1387 89.1574C88.7266 89.0253 88.3568 88.8272 88.0293 88.5631C87.707 88.2936 87.4429 87.9608 87.2369 87.5646C87.0361 87.1631 86.9093 86.6929 86.8565 86.1541H88.2512C88.3146 86.5873 88.4414 86.9518 88.6315 87.2476C88.8217 87.5435 89.07 87.768 89.3764 87.9212C89.6881 88.0691 90.05 88.1431 90.462 88.1431C90.8107 88.1431 91.1198 88.0823 91.3892 87.9608C91.6586 87.8393 91.8858 87.665 92.0707 87.4378C92.2556 87.2107 92.3956 86.9359 92.4906 86.6137C92.591 86.2914 92.6412 85.9296 92.6412 85.5281C92.6412 85.1636 92.591 84.8255 92.4906 84.5138C92.3903 84.2021 92.2397 83.93 92.039 83.6976C91.8435 83.4651 91.6031 83.2855 91.3179 83.1587C91.0326 83.0266 90.7051 82.9606 90.3353 82.9606C89.844 82.9606 89.4715 83.0266 89.2179 83.1587C88.9696 83.2908 88.7134 83.4704 88.4493 83.6976ZM95.597 80.4803V79.8702C95.597 79.4317 95.692 79.0328 95.8822 78.6736C96.0724 78.3144 96.3445 78.0265 96.6984 77.8099C97.0524 77.5933 97.4724 77.485 97.9584 77.485C98.455 77.485 98.8776 77.5933 99.2263 77.8099C99.5802 78.0265 99.8523 78.3144 100.042 78.6736C100.233 79.0328 100.328 79.4317 100.328 79.8702V80.4803C100.328 80.9082 100.233 81.3018 100.042 81.661C99.8576 82.0203 99.5881 82.3082 99.2342 82.5248C98.8855 82.7414 98.4655 82.8497 97.9742 82.8497C97.4829 82.8497 97.0577 82.7414 96.6984 82.5248C96.3445 82.3082 96.0724 82.0203 95.8822 81.661C95.692 81.3018 95.597 80.9082 95.597 80.4803ZM96.6984 79.8702V80.4803C96.6984 80.7233 96.7433 80.9531 96.8331 81.1697C96.9282 81.3863 97.0709 81.5633 97.261 81.7007C97.4512 81.8327 97.689 81.8988 97.9742 81.8988C98.2595 81.8988 98.4946 81.8327 98.6795 81.7007C98.8644 81.5633 99.0017 81.3863 99.0915 81.1697C99.1814 80.9531 99.2263 80.7233 99.2263 80.4803V79.8702C99.2263 79.6219 99.1787 79.3894 99.0836 79.1728C98.9938 78.9509 98.8538 78.774 98.6636 78.6419C98.4787 78.5045 98.2437 78.4359 97.9584 78.4359C97.6784 78.4359 97.4433 78.5045 97.2531 78.6419C97.0682 78.774 96.9282 78.9509 96.8331 79.1728C96.7433 79.3894 96.6984 79.6219 96.6984 79.8702ZM101.215 86.9782V86.3601C101.215 85.9269 101.31 85.5307 101.501 85.1715C101.691 84.8122 101.963 84.5243 102.317 84.3077C102.671 84.0911 103.091 83.9828 103.577 83.9828C104.073 83.9828 104.496 84.0911 104.845 84.3077C105.198 84.5243 105.471 84.8122 105.661 85.1715C105.851 85.5307 105.946 85.9269 105.946 86.3601V86.9782C105.946 87.4114 105.851 87.8076 105.661 88.1668C105.476 88.5261 105.206 88.814 104.852 89.0306C104.504 89.2472 104.084 89.3555 103.593 89.3555C103.101 89.3555 102.679 89.2472 102.325 89.0306C101.971 88.814 101.696 88.5261 101.501 88.1668C101.31 87.8076 101.215 87.4114 101.215 86.9782ZM102.317 86.3601V86.9782C102.317 87.2212 102.362 87.4537 102.451 87.6755C102.547 87.8921 102.689 88.0691 102.879 88.2065C103.07 88.3385 103.307 88.4046 103.593 88.4046C103.878 88.4046 104.113 88.3385 104.298 88.2065C104.488 88.0691 104.628 87.8921 104.718 87.6755C104.808 87.4589 104.852 87.2265 104.852 86.9782V86.3601C104.852 86.1118 104.805 85.8794 104.71 85.6628C104.62 85.4462 104.48 85.2719 104.29 85.1398C104.105 85.0024 103.867 84.9338 103.577 84.9338C103.297 84.9338 103.062 85.0024 102.871 85.1398C102.687 85.2719 102.547 85.4462 102.451 85.6628C102.362 85.8794 102.317 86.1118 102.317 86.3601ZM103.941 79.2917L98.307 88.3095L97.4829 87.7865L103.117 78.7687L103.941 79.2917Z"
              fill="#0B0F18" />
            <circle cx="2" cy="90.0995" r="2" fill="#8992FA" />
            <circle cx="92.4177" cy="2" r="2" fill="#8992FA" />
            <circle cx="181.677" cy="90.0995" r="2" fill="#8992FA" />
            <circle cx="6.63672" cy="64.597" r="2" fill="#8992FA" />
            <circle cx="178.199" cy="64.597" r="2" fill="#8992FA" />
            <circle cx="18.2288" cy="41.413" r="2" fill="#8992FA" />
            <circle cx="166.607" cy="41.413" r="2" fill="#8992FA" />
            <circle cx="30.98" cy="25.1841" r="2" fill="#8992FA" />
            <circle cx="153.856" cy="25.1841" r="2" fill="#8992FA" />
            <circle cx="57.6416" cy="8.9552" r="2" fill="#8992FA" />
            <circle cx="127.194" cy="8.9552" r="2" fill="#8992FA" />
            <path
              d="M10.4328 93.3159C10.4328 78.3822 14.5247 63.734 22.2641 50.9623C30.0035 38.1907 41.0945 27.7838 54.3324 20.872C67.5704 13.9603 82.4491 10.8079 97.3525 11.7574C112.256 12.7068 126.614 17.7218 138.868 26.2575L122.481 49.7828C114.526 44.2416 105.205 40.9859 95.5297 40.3696C85.8547 39.7532 76.1957 41.7996 67.6019 46.2866C59.008 50.7736 51.808 57.5296 46.7837 65.8207C41.7594 74.1119 39.103 83.6212 39.103 93.3159L10.4328 93.3159Z"
              fill="#8992FA" />
          </svg>
          <h4 class="text-center w-[50%] mt-[-3rem] mx-auto">Proggres Application</h4>
        </div>
        <div data-aos="zoom-in" data-aos-duration="1200" class="bg-white shadow-xl px-5 py-5 mx-auto">
          <svg width="171" height="171" viewBox="0 0 171 171" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M170.403 85.2015C170.403 132.257 132.257 170.403 85.2015 170.403C38.146 170.403 0 132.257 0 85.2015C0 38.146 38.146 0 85.2015 0C132.257 0 170.403 38.146 170.403 85.2015ZM29.8902 85.2015C29.8902 115.749 54.6539 140.513 85.2015 140.513C115.749 140.513 140.513 115.749 140.513 85.2015C140.513 54.6539 115.749 29.8902 85.2015 29.8902C54.6539 29.8902 29.8902 54.6539 29.8902 85.2015Z"
              fill="#F4F4F4" />
            <path
              d="M85.2015 3.6256C85.2015 1.62323 86.8257 -0.00805152 88.8262 0.0771165C104.407 0.740409 119.532 5.66948 132.537 14.359C146.548 23.7211 157.469 37.0278 163.917 52.5963C170.366 68.1648 172.053 85.296 168.766 101.823C165.478 118.351 157.364 133.532 145.448 145.448C133.532 157.364 118.351 165.478 101.823 168.766C85.296 172.053 68.1648 170.366 52.5963 163.917C37.0278 157.469 23.7211 146.548 14.359 132.537C5.66947 119.532 0.740408 104.407 0.0771164 88.8262C-0.00805157 86.8257 1.62323 85.2015 3.6256 85.2015L26.2646 85.2015C28.267 85.2015 29.8778 86.8266 30.009 88.8247C30.6434 98.4897 33.8071 107.842 39.2118 115.931C45.2895 125.027 53.928 132.116 64.0348 136.302C74.1416 140.489 85.2628 141.584 95.9922 139.45C106.722 137.316 116.577 132.048 124.312 124.312C132.048 116.577 137.316 106.722 139.45 95.9922C141.584 85.2629 140.489 74.1416 136.302 64.0348C132.116 53.928 125.027 45.2895 115.931 39.2118C107.842 33.8071 98.4897 30.6434 88.8247 30.009C86.8266 29.8778 85.2015 28.267 85.2015 26.2646L85.2015 3.6256Z"
              fill="#8992FA" />
            <path
              d="M77.3312 88.0203C77.3312 88.7339 77.1646 89.3354 76.8312 89.825C76.4979 90.3094 76.0396 90.6766 75.4562 90.9266C74.8781 91.1714 74.2219 91.2938 73.4875 91.2938C72.7531 91.2938 72.0943 91.1714 71.5109 90.9266C70.9276 90.6766 70.4667 90.3094 70.1281 89.825C69.7896 89.3354 69.6203 88.7339 69.6203 88.0203C69.6203 87.5412 69.7167 87.1089 69.9094 86.7234C70.1021 86.3328 70.3703 85.9995 70.7141 85.7234C71.063 85.4422 71.4719 85.2287 71.9406 85.0828C72.4094 84.9318 72.9198 84.8563 73.4719 84.8563C74.2114 84.8563 74.8729 84.9865 75.4562 85.2469C76.0396 85.5073 76.4979 85.8745 76.8312 86.3484C77.1646 86.8224 77.3312 87.3797 77.3312 88.0203ZM75.0656 87.8719C75.0656 87.5229 74.9979 87.2234 74.8625 86.9734C74.7323 86.7182 74.5474 86.5229 74.3078 86.3875C74.0682 86.2521 73.7896 86.1844 73.4719 86.1844C73.1542 86.1844 72.8755 86.2521 72.6359 86.3875C72.3963 86.5229 72.2088 86.7182 72.0734 86.9734C71.9432 87.2234 71.8781 87.5229 71.8781 87.8719C71.8781 88.2156 71.9432 88.5125 72.0734 88.7625C72.2088 89.0125 72.3963 89.2052 72.6359 89.3406C72.8807 89.4708 73.1646 89.5359 73.4875 89.5359C73.8104 89.5359 74.0891 89.4708 74.3234 89.3406C74.563 89.2052 74.7453 89.0125 74.8703 88.7625C75.0005 88.5125 75.0656 88.2156 75.0656 87.8719ZM77.0891 82.7781C77.0891 83.3563 76.9354 83.8693 76.6281 84.3172C76.3208 84.7599 75.8937 85.1063 75.3469 85.3563C74.8052 85.6063 74.1854 85.7313 73.4875 85.7313C72.7844 85.7313 72.1594 85.6063 71.6125 85.3563C71.0656 85.1063 70.6385 84.7599 70.3312 84.3172C70.0239 83.8693 69.8703 83.3563 69.8703 82.7781C69.8703 82.0906 70.0239 81.5125 70.3312 81.0438C70.6437 80.5698 71.0708 80.2104 71.6125 79.9656C72.1594 79.7208 72.7792 79.5984 73.4719 79.5984C74.175 79.5984 74.7974 79.7208 75.3391 79.9656C75.8859 80.2104 76.313 80.5698 76.6203 81.0438C76.9328 81.5125 77.0891 82.0906 77.0891 82.7781ZM74.8391 82.8797C74.8391 82.5724 74.7844 82.3068 74.675 82.0828C74.5656 81.8537 74.4094 81.6766 74.2062 81.5516C74.0083 81.4266 73.7635 81.3641 73.4719 81.3641C73.1906 81.3641 72.9484 81.424 72.7453 81.5438C72.5474 81.6636 72.3937 81.838 72.2844 82.0672C72.1802 82.2912 72.1281 82.562 72.1281 82.8797C72.1281 83.187 72.1802 83.4578 72.2844 83.6922C72.3937 83.9214 72.55 84.1011 72.7531 84.2313C72.9562 84.3615 73.201 84.4266 73.4875 84.4266C73.7739 84.4266 74.0161 84.3615 74.2141 84.2313C74.4172 84.1011 74.5708 83.9214 74.675 83.6922C74.7844 83.4578 74.8391 83.187 74.8391 82.8797ZM86.5109 84.45V86.4188C86.5109 87.2729 86.4198 88.0099 86.2375 88.6297C86.0552 89.2443 85.7922 89.7495 85.4484 90.1453C85.1099 90.5359 84.7062 90.825 84.2375 91.0125C83.7687 91.2 83.2479 91.2938 82.675 91.2938C82.2167 91.2938 81.7896 91.2365 81.3937 91.1219C80.9979 91.0021 80.6411 90.8172 80.3234 90.5672C80.0109 90.3172 79.7401 90.0021 79.5109 89.6219C79.287 89.2365 79.1151 88.7781 78.9953 88.2469C78.8755 87.7156 78.8156 87.1063 78.8156 86.4188V84.45C78.8156 83.5958 78.9068 82.8641 79.0891 82.2547C79.2766 81.6401 79.5396 81.1375 79.8781 80.7469C80.2219 80.3563 80.6281 80.0698 81.0969 79.8875C81.5656 79.7 82.0864 79.6063 82.6594 79.6063C83.1177 79.6063 83.5422 79.6662 83.9328 79.7859C84.3286 79.9005 84.6854 80.0802 85.0031 80.325C85.3208 80.5698 85.5917 80.8849 85.8156 81.2703C86.0396 81.6505 86.2114 82.1063 86.3312 82.6375C86.451 83.1636 86.5109 83.7677 86.5109 84.45ZM84.2531 86.7156V84.1453C84.2531 83.7339 84.2297 83.3745 84.1828 83.0672C84.1411 82.7599 84.076 82.4995 83.9875 82.2859C83.8989 82.0672 83.7896 81.8901 83.6594 81.7547C83.5292 81.6193 83.3807 81.5203 83.2141 81.4578C83.0474 81.3953 82.8625 81.3641 82.6594 81.3641C82.4042 81.3641 82.1776 81.4136 81.9797 81.5125C81.787 81.6115 81.6229 81.7703 81.4875 81.9891C81.3521 82.2026 81.2479 82.4891 81.175 82.8484C81.1073 83.2026 81.0734 83.6349 81.0734 84.1453V86.7156C81.0734 87.1271 81.0943 87.4891 81.1359 87.8016C81.1828 88.1141 81.2505 88.3823 81.3391 88.6063C81.4328 88.825 81.5422 89.0047 81.6672 89.1453C81.7974 89.2807 81.9458 89.3797 82.1125 89.4422C82.2844 89.5047 82.4719 89.5359 82.675 89.5359C82.925 89.5359 83.1463 89.4865 83.3391 89.3875C83.537 89.2833 83.7036 89.1219 83.8391 88.9031C83.9797 88.6792 84.0838 88.3875 84.1516 88.0281C84.2193 87.6688 84.2531 87.2313 84.2531 86.7156ZM88.0109 82.5516V81.95C88.0109 81.5177 88.1047 81.1245 88.2922 80.7703C88.4797 80.4162 88.7557 80.1323 89.1203 79.9188C89.4849 79.7052 89.9328 79.5984 90.4641 79.5984C91.0109 79.5984 91.4667 79.7052 91.8312 79.9188C92.201 80.1323 92.4771 80.4162 92.6594 80.7703C92.8469 81.1245 92.9406 81.5177 92.9406 81.95V82.5516C92.9406 82.9734 92.8469 83.3615 92.6594 83.7156C92.4771 84.0698 92.2036 84.3537 91.8391 84.5672C91.4745 84.7807 91.0239 84.8875 90.4875 84.8875C89.9458 84.8875 89.4901 84.7807 89.1203 84.5672C88.7557 84.3537 88.4797 84.0698 88.2922 83.7156C88.1047 83.3615 88.0109 82.9734 88.0109 82.5516ZM89.5031 81.95V82.5516C89.5031 82.7339 89.537 82.9083 89.6047 83.075C89.6776 83.2365 89.787 83.3693 89.9328 83.4734C90.0838 83.5724 90.2661 83.6219 90.4797 83.6219C90.7036 83.6219 90.8859 83.5724 91.0266 83.4734C91.1672 83.3693 91.2713 83.2365 91.3391 83.075C91.4068 82.9083 91.4406 82.7339 91.4406 82.5516V81.95C91.4406 81.7573 91.4042 81.5802 91.3312 81.4188C91.2635 81.2521 91.1568 81.1193 91.0109 81.0203C90.8703 80.9162 90.688 80.8641 90.4641 80.8641C90.2557 80.8641 90.0786 80.9162 89.9328 81.0203C89.787 81.1193 89.6776 81.2521 89.6047 81.4188C89.537 81.5802 89.5031 81.7573 89.5031 81.95ZM93.4484 88.95V88.3484C93.4484 87.9214 93.5422 87.5307 93.7297 87.1766C93.9224 86.8224 94.201 86.5386 94.5656 86.325C94.9354 86.1115 95.3885 86.0047 95.925 86.0047C96.4667 86.0047 96.9198 86.1115 97.2844 86.325C97.6489 86.5386 97.925 86.8224 98.1125 87.1766C98.3 87.5307 98.3937 87.9214 98.3937 88.3484V88.95C98.3937 89.3771 98.3 89.7677 98.1125 90.1219C97.9302 90.4761 97.6568 90.7599 97.2922 90.9734C96.9276 91.187 96.4771 91.2938 95.9406 91.2938C95.3989 91.2938 94.9432 91.187 94.5734 90.9734C94.2036 90.7599 93.9224 90.4761 93.7297 90.1219C93.5422 89.7677 93.4484 89.3771 93.4484 88.95ZM94.9484 88.3484V88.95C94.9484 89.1375 94.9901 89.3146 95.0734 89.4813C95.1568 89.6479 95.2713 89.7807 95.4172 89.8797C95.5682 89.9787 95.7427 90.0281 95.9406 90.0281C96.1906 90.0281 96.3859 89.9787 96.5266 89.8797C96.6672 89.7807 96.7635 89.6479 96.8156 89.4813C96.8729 89.3146 96.9016 89.1375 96.9016 88.95V88.3484C96.9016 88.1609 96.8651 87.9865 96.7922 87.825C96.7193 87.6583 96.6099 87.5255 96.4641 87.4266C96.3234 87.3224 96.1437 87.2703 95.925 87.2703C95.7062 87.2703 95.5239 87.3224 95.3781 87.4266C95.2375 87.5255 95.1307 87.6583 95.0578 87.825C94.9849 87.9865 94.9484 88.1609 94.9484 88.3484ZM96.4797 81.3875L90.925 90.2781L89.8312 89.7L95.3859 80.8094L96.4797 81.3875Z"
              fill="#0B0F18" />
          </svg>
          <h4 class="text-center pt-5">People view</h4>
        </div>
      </div>
    </div>
    <div class="lg:mt-0 mt-20">
      <div class="space-y-3">
        <h4 data-aos="fade-up" data-aos-duration="1000" class="uppercase text-highlight text-[1.1rem]">JUST FOR THOSE WHO USE US</h4>
        <h1 data-aos="fade-up" data-aos-duration="1200" class="lg:text-[3rem] text-[2.5rem] font-bold lg:w-[100%] md:w-[85%]">Progress in our Application</h1>
        <p data-aos="fade-up" data-aos-duration="1400" class="text-[.9rem] text-content lg:w-[90%] md:w-[85%]">Lorem, ipsum dolor sit amet consectetur adipisicing
          elit.
          Repellendus nemo temporibus eum maiores quod repudiandae, itaque sunt perspiciatis consectetur eius?</p>
        </div>
      <div data-aos="fade-up" data-aos-duration="1600" class="flex items-center space-x-12 pt-10">
        <div>
          <h4 class="text-logo text-[1.8rem] font-bold">+2,000</h4>
          <p class="text-center text-content text-[.9rem]">App User</p>
        </div>
        <div>
          <h4 class="text-logo text-[1.8rem] font-bold">+1,000</h4>
          <p class="text-center text-content text-[.9rem]">Destination</p>
        </div>
        <div>
          <h4 class="text-logo text-[1.8rem] font-bold">+2,500</h4>
          <p class="text-center text-content text-[.9rem]">Comment</p>
        </div>
      </div>
    </div>
  </div>

  <div class="overflow-hidden mb-40"> 
    <div class="bg-[#EFF0FF]">
      <div class="text-center py-32 relative z-10">
        <div class="z-20 space-y-3">
          <h4 data-aos="fade-up" data-aos-duration="1000" class="uppercase text-highlight text-[1.1rem]">JUST FOR THOSE WHO USE US</h4>
          <h1 data-aos="fade-up" data-aos-duration="1200" class="lg:text-[3rem] text-[2.5rem] mx-auto font-bold lg:w-[100%] md:w-[85%]">Progress in our Application</h1>
          <p data-aos="fade-up" data-aos-duration="1400" class="text-[.9rem] text-content lg:w-[30%] mx-auto md:w-[85%] pb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
          @if (Route::has('register'))
          <a href="{{ route('register') }}" data-aos="fade-up" data-aos-duration="1400" class="bg-button px-7 py-2.5 text-white mt-5">Sign Up</a>
          @endif
        </div>
        <img src="./assets/Ellipse1.svg" alt="" class="absolute left-0 lg:top-[15rem] top-[22rem] lg:w-auto w-[40%]">
        <img src="./assets/Ellipse.svg" alt="" class="absolute right-0 lg:top-[-5rem] top-[-5rem] mr-[-5rem] lg:w-auto w-[40%] -z-10">
      </div>
    </div>
  </div>

  <div class="mb-40">
    <div class="text-center space-y-2">
      <h4 data-aos="fade-up" data-aos-duration="1000" class="uppercase text-highlight text-[1.1rem]">JUST FOR THOSE WHO USE US</h4>
      <h1 data-aos="fade-up" data-aos-duration="1200" class="lg:text-[2.6rem] text-[2.5rem] font-bold lg:w-[100%] md:w-[85%]">Comments on this App</h1>
      <div data-aos="fade-up" data-aos-duration="1400" class="grid md:grid-cols-3 grid-cols-1  gap-10 lg:mx-40 md:mx-10 mx-20 pt-20">
        
        <div class=" bg-white shadow-lg px-5 py-5 text-center">
          @include('layouts.review')
          <div class="flex items-center space-x-4 justify-center">
            <img src="./assets/Star.svg" alt="">
            <img src="./assets/Star.svg" alt="">
            <img src="./assets/Star.svg" alt="">
            <img src="./assets/Star.svg" alt="" >
            <img src="./assets/Star.svg" alt="">
          </div>
        </div>
        <div class=" bg-white shadow-lg px-5 py-5 text-center">
          @include('layouts.review')
          <div class="flex items-center space-x-4 justify-center">
            <img src="./assets/Star.svg" alt="">
            <img src="./assets/Star.svg" alt="">
            <img src="./assets/Star.svg" alt="">
            <img src="./assets/Star.svg" alt="">
            <img src="./assets/Star.svg" alt="">
          </div>
        </div>
        <div class=" bg-white shadow-lg px-5 py-5 text-center">
          @include('layouts.review')
          <div class="flex items-center space-x-4 justify-center">
            <img src="./assets/Star.svg" alt="">
            <img src="./assets/Star.svg" alt="">
            <img src="./assets/Star.svg" alt="">
            <img src="./assets/Star.svg" alt="" >
            <img src="./assets/Star1.png" alt="" class="w-[2rem]">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>
    <div class="bg-[#0B0F18] py-10 lg:px-32 px-8 text-white relative">
      <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 lg:mr-32">
        <div>
          <h1 data-aos="fade-up" data-aos-duration="1000" class="text-logo font-logo text-[1.5rem] font-bold">Naik.<span class="text-white">kapal</span></h1>
          <p data-aos="fade-up" data-aos-duration="1200" class="text-content text-[.9rem] lg:w-[60%] w-[70%] pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi eaque pariatur tenetur! Eum officia saepe ducimus earum ex eligendi aliquid.</p>
        </div>
        <div class="grid md:grid-cols-4 grid-cols-2 gap-5 md:gap-y-0 gap-y-10 lg:mt-0 mt-10">
          <div data-aos="fade-up" data-aos-duration="1400" class="space-y-3">
            <h4 class="text-[1.1rem] font-semibold">About</h4>
            <div class="space-y-2">
              <li class="list-none text-[.9rem] text-content">
                <a href="#" class="hover:text-logo">Proggres</a>
              </li>
              <li class="list-none text-[.9rem] text-content">
                <a href="#" class="hover:text-logo">Comment</a>
              </li>
            </div>
          </div>
          <div data-aos="fade-up" data-aos-duration="1600" class="space-y-3">
            <h4 class="text-[1.1rem] font-semibold">Destination</h4>
            <div class="space-y-2">
              <li class="list-none text-[.9rem] text-content">
                <a href="#" class="hover:text-logo">Waters</a>
              </li>
              <li class="list-none text-[.9rem] text-content">
                <a href="#" class="hover:text-logo">Mainland</a>
              </li>
            </div>
          </div>
          <div data-aos="fade-up" data-aos-duration="1800" class="space-y-3">
            <h4 class="text-[1.1rem] font-semibold">Choose Class</h4>
            <div class="space-y-2">
              <li class="list-none text-[.9rem] text-content">
                <a href="#" class="hover:text-logo">Economy</a>
              </li>
              <li class="list-none text-[.9rem] text-content">
                <a href="#" class="hover:text-logo">Execute</a>
              </li>
              <li class="list-none text-[.9rem] text-content">
                <a href="#" class="hover:text-logo">VVIP</a>
              </li>
            </div>
          </div>
          <div data-aos="fade-up" data-aos-duration="2000" class="space-y-3">
            <h4 class="text-[1.1rem] font-semibold">Contact Us</h4>
            <div class="space-y-2">
              <li class="list-none text-[.9rem] text-content">
                <a href="Wa.me/+6285770317597" class="hover:text-logo">Contact Us</a>
              </li>
              <li class="list-none text-[.9rem] text-content">
                <a href="#" class="hover:text-logo">Privacy Policy</a>
              </li>
              <li class="list-none text-[.9rem] text-content">
                <a href="{{ route('login') }}" class="hover:text-logo">Login</a>
              </li>
            </div>
          </div>
        </div>
      </div>
      <div class="md:flex flex-row-reverse block items-center mt-20 md:mr-32">
        <div  class="md:ml-auto flex space-x-8 items-center">
          <a href="https://www.facebook.com">
            <img src="./assets/facebook.svg" alt="">
          </a>
          <a href="https://twitter.com/?lang=en-id">
            <img src="./assets/twitter.svg" alt="">
          </a>
          <a href="https://www.instagram.com/">
            <img src="./assets/instagram.svg" alt="">
          </a>
          <a href="https://www.youtube.com/">
            <img src="./assets/youtobe.svg" alt="">
          </a>
        </div>
        <footer class="md:mt-0 mt-10 text-center lg:text-left text-[.9rem]">
          <p>&copy; Naik.Kapal All Rights Reserved</p>
        </footer>
      </div>
      <div>
        <img src="./assets/Ellipse-footer.svg" alt="" class="absolute top-0 left-0">
        <img src="./assets/Ellipse-footer1.svg" alt="" class="absolute lg:top-[17rem] -mt-[4.2rem] right-0">
      </div>
    </div>
  </div>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
    function Menu(e) {
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close", list.classList.add('top-[80px]'), list.classList.add('opacity-100')) : (e
        .name = "menu", list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'))
    }
  </script>
</body>

</html>