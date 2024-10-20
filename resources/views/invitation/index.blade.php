<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Undangan Untuk {{ $guest->name }}</title>
    @vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="overflow-x-hidden">

    <div id="loading-screen">
        <p></p>
        <div class="spinner"><div></div></div>
    </div>

    <div id="loading-page" class="hidden brightness-50 contrast-100">
        <p class="text-center">Loading...</p>
    </div> 

    <div id="cover" class="relative bg-center bg-cover bg-no-repeat h-screen brightness-50 contrast-100 overflow-hidden transition-all"
        style="background-image: url('{{ asset('images/DSC01643.JPG') }}');">
    </div>
    
    <div id="coverContent"
    class="absolute top-0 left-0 bottom-0 right-0 flex justify-between pt-[45px] pb-[7px] px-[25px] items-center flex-col z-[900] border border-solid rounded rounded-t-full m-5 border-[whitesmoke] shadow-lg transition-all">    
        <div class="flex flex-col justify-center items-center gap-1">
            <h1 id="title" class="text-[whitesmoke] text-[15px] capitalize">The Wedding Of</h1>
            <h1 id="nama-mempelai" class="text-[whitesmoke] text-[38px] font-bold tracking-wide">Rizon & Risma</h1>
        </div>

        <div class="flex flex-col justify-center items-center gap-1 mb-7">

            <div class="flex flex-col justify-center items-center gap-1 p-3" style="background-color: rgba(0,0,0, 0.5);">
                <p class="text-[whitesmoke] leading-[8px]">Dear,</p>
                <p class="text-[whitesmoke] mb-3 text-[18px]">Mr./Mrs./Ms.</p>
                <p id="nama-tamu" class="text-[whitesmoke] text-[22px] text-center mb-3 font-semibold">{{ $guest->name }} & Partner/Family</p>
            </div>

            <button onclick="openInvitation()"
                class="bg-[#65572a] text-[whitesmoke] px-5 py-2.5 rounded-lg font-semibold transition duration-300 hover:bg-[#4a3f20]">Open
                Invitation
            </button>

        </div>

    </div>

    <div id="page_1" class="page-hidden relative bg-cover bg-center bg-no-repeat" style="background-image: url({{ asset('atribut/15591481_5645337.jpg') }});">
        <div class="page-content text-center px-3 gap-y-1">

            <audio id="myAudio" loop>
                <source src="{{ asset('urangMinangBaralekGadang.mp3') }}" type="audio/mpeg" />
            </audio>
      
            <div class="audio-controls">
                <button id="mute" onclick="toggleMute()"><i class="fa-solid fa-volume-high"></i></button>
            </div>

            <img src="{{ asset('images/Gallery/1.jpg') }}" alt="" class="risma-dan-rizon-img w-[250px] object-cover rounded-t-[150px] animate__animated animate__zoomIn animate__slower">
            <p id="font-judul" class="text-[18px] font-bold mt-3 animate__animated animate__zoomIn animate__slower">
                بِسْــــــــــــــــــمِ اللهِ الرَّحْمَنِ الرَّحِيْم
            </p>
            <p class="text-[16px] mt-3 animate__animated animate__zoomIn animate__slower">
                وَمِنْ كُلِّ شَيْءٍ خَلَقْنَا زَوْجَيْنِ لَعَلَّكُمْ تَذَكَّرُونَ
            </p>
            <p class="text-[16px] mt-3 animate__animated animate__zoomIn animate__slower">
                "Dan segala sesuatu Kami ciptakan berpasang-pasangan supaya kamu mengingat kebesaran Allah."
            </p>
            <p id="font-judul" class="font-bold text-[18px] mt-3 animate__animated animate__zoomIn animate__slower">(QS Az-Zariyat:49).</p>
        </div>
    </div>

    <div id="page_2" class="page-hidden relative ">
        <div class="page-content text-center px-3 gap-y-1 bg-cover bg-center bg-no-repeat" style="background-image: url({{ asset('atribut/10122877_1667.jpg') }});">

            <div class="flex flex-col justify-start items-center m-[20px] p-0">
                <p id="font-judul" class="text-[20px] font-bold animate-on-scroll zoomIn">
                    Assalamualaikum Wr. Wb.
                </p>
                <p class="text-[16px] mt-3 animate-on-scroll zoomIn">
                    Maha suci Allah SWT yang telah menciptakan makhluk-Nya berpasang-pasangan. Dengan memohon Rahmat dan Ridho Allah SWT, dan dengan kerendahan hati, perkenankanlah kami mengundang Bapak/lbu/Saudara/i untuk dapat menghadiri acara pernikahan kami
                </p>

                <div class="flex flex-col items-center gap-y-3 mt-3"> 
                    <div class="flex flex-col items-center p-6 gap-y-3">
                        <img src="{{ asset('images/Rizon.jpg') }}" alt="" class="w-[300px] h-[380px] object-top object-cover border border-solid border-[#65572a] rounded-tl-[100px] rounded-br-[100px] shadow-md animate-on-scroll zoomIn">
                        <h1 id="nama-mempelai" class="text-[48px] font-bold animate-on-scroll zoomIn">Rizon</h1>
                        <h1 id="font-judul" class="text-[22px]  font-bold tracking-[1px] mb-2 bg-[#1b18181a] animate-on-scroll zoomIn">
                            Rhizon Dinovan, S.T.
                        </h1>
                        <div id="font-judul" class="flex flex-col justify-center items-center leading-[20px] text-[18px] font-bold">
                            <p class="animate-on-scroll zoomIn">Putra Dari Bapak Syafrizal & Ibu Ernita</p>
                        </div>
                    </div>
                <div class="flex flex-col items-center gap-y-3">
                    <div class="flex flex-col items-center p-6 gap-y-3">
                        <img src="{{ asset('images/Risma.jpg') }}" alt="" class="w-[300px] h-[380px] object-center object-cover border-2 border-solid border-[#65572a] rounded-tr-[100px] rounded-bl-[100px] shadow-md animate-on-scroll zoomIn">
                        <h1 id="nama-mempelai" class="text-[48px] font-bold animate-on-scroll zoomIn">Risma</h1>
                        <h1 id="font-judul" class="text-[22px]  font-bold tracking-[1px] mb-2 bg-[#1b18181a] animate-on-scroll zoomIn">
                            Risma Defitri, S.Tr.Par
                        </h1>
                        <div id="font-judul" class="flex flex-col justify-center items-center leading-[20px] text-[18px] font-bold">
                            <p class="animate-on-scroll zoomIn">Putri Dari Bapak Zaenal Abidin (Alm.) & Ibu Maiyulita</p>
                        </div>
                    </div>
                </div>
                <div class="slider-container text-[whitesmoke]">
                    <div class="slider-images">
                        <img src="{{ asset('images/Slides/1.jpg') }}" alt="Image 1">
                        <img src="{{ asset('images/Slides/2.jpg') }}" alt="Image 2">
                        <img src="{{ asset('images/Slides/3.jpg') }}" alt="Image 3">
                        <img src="{{ asset('images/Slides/4.jpg') }}" alt="Image 4">
                        <img src="{{ asset('images/Slides/5.jpg') }}" alt="Image 5">
                        <img src="{{ asset('images/Slides/6.jpg') }}" alt="Image 6">
                        <img src="{{ asset('images/Slides/7.jpg') }}" alt="Image 7">
                        <img src="{{ asset('images/Slides/8.jpg') }}" alt="Image 8">
                        <img src="{{ asset('images/Slides/9.jpg') }}" alt="Image 9">
                        <img src="{{ asset('images/Slides/10.jpg') }}" alt="Image 10">
                    </div>
                    <div class="content-slide">
                        <div class="flex flex-col justify-center items-center gap-y-2">
                            <h1 id="font-judul" class="font-bold text-[18px] tracking-widest animate-on-scroll zoomIn">Akad Nikah</h1>
                            <p class="text-[16px] animate-on-scroll zoomIn">Sabtu, 26 Oktober 2024</p>
                            <p class="text-[16px] animate-on-scroll zoomIn">15.30 WIB</p>
                            <div class="countdown animate-on-scroll zoomIn">
                                <div class="days-content">
                                <p id="daysA" class="days"></p>
                                <p class="text-[10px]">Days</p>
                                </div>
                                <div class="hours-content">
                                <p id="hoursA" class="hours"></p>
                                <p class="text-[10px]">Hours</p>
                                </div>
                                <div class="minutes-content">
                                <p id="minutesA" class="minutes"></p>
                                <p class="text-[10px]">Min</p>
                                </div>
                                <div class="seconds-content">
                                <p id="secondsA" class="seconds"></p>
                                <p class="text-[10px]">Sec</p>
                                </div>
                            </div>
                            <p class="text-[12px] italic animate-on-scroll zoomIn">Masjid Salman Al-Farisi, Jl. Komp. Bulog Jl. H. Ten Raya No.14 7 14, RT.14/RW.7, Kayu Putih, Kec. Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13210
                            </p>
                            <a href="https://maps.app.goo.gl/s1MhjZ3wn5ysNT3EA" class="bg-transparent rounded-xl px-10 py-2 border border-solid border-[whitesmoke]mt-3 animate-on-scroll zoomIn">Lihat Lokasi</a>
                        </div>
                        <div class="flex flex-col justify-center items-center gap-y-2">
                            <h1 id="font-judul" class="font-bold text-[18px] tracking-widest animate-on-scroll zoomIn">Resepsi</h1>
                            <p class="text-[16px] animate-on-scroll zoomIn">Sabtu, 26 Oktober 2024</p>
                            <p class="text-[16px] animate-on-scroll zoomIn">18:30 - 21:00 WIB</p>
                            <div class="countdown animate-on-scroll zoomIn">
                                <div class="days-content">
                                <p id="daysR" class="days"></p>
                                <p class="text-[10px]">Days</p>
                                </div>
                                <div class="hours-content">
                                <p id="hoursR" class="hours"></p>
                                <p class="text-[10px]">Hours</p>
                                </div>
                                <div class="minutes-content">
                                <p id="minutesR" class="minutes"></p>
                                <p class="text-[10px]">Min</p>
                                </div>
                                <div class="seconds-content">
                                <p id="secondsR" class="seconds"></p>
                                <p class="text-[10px]">Sec</p>
                                </div>
                            </div>
                            <p class="text-[12px] italic animate-on-scroll zoomIn">Aula Masjid Salman Al-Farisi, Jl. Komp. Bulog Jl. H. Ten Raya No.14 7 14, RT.14/RW.7, Kayu Putih, Kec. Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13210
                            </p>
                            <a href="https://maps.app.goo.gl/s1MhjZ3wn5ysNT3EA" class="bg-transparent rounded-xl px-10 py-2 border border-solid border-[whitesmoke]mt-3 animate-on-scroll zoomIn">Lihat Lokasi</a>
                        </div>
                    </div>
                </div>

                <div id="myModal" class="modal">
                    <span class="close" onclick="closeModal()">&times;</span>
                    <img class="modal-content" id="modalImg">
                </div>

                <div id="font-judul" class="text-[20px] font-bold mt-9 animate-on-scroll zoomIn">Denah Lokasi</div>

                <div class="denah w-[90%] border border-solid border-[#65572a] rounded-[20px] animate-on-scroll zoomIn">
                    <img src="{{ asset('atribut/denah.jpg') }}" alt="" class="w-[100%] h-[200px] object-cover border border-solid border-[#65572a] rounded-[20px]" onclick="showModal(this)">
                </div>

                <div id="font-judul" class="text-[20px] font-bold mt-9 animate-on-scroll zoomIn">Gallery</div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="grid gap-4">
                        <img src="{{ asset('images/Gallery/1.jpg') }}" alt="" class="rounded-lg object-cover" onclick="showModal(this)">
                        <img src="{{ asset('images/Gallery/2.jpg') }}" alt="" class="rounded-lg object-cover" onclick="showModal(this)">
                        <img src="{{ asset('images/Gallery/3.jpg') }}" alt="" class="rounded-lg object-cover" onclick="showModal(this)">
                        <img src="{{ asset('images/Gallery/4.jpg') }}" alt="" class="rounded-lg object-cover" onclick="showModal(this)">
                    </div>
                    <div class="grid gap-4">
                        <img src="{{ asset('images/Gallery/8.jpg') }}" alt="" class="rounded-lg object-cover" onclick="showModal(this)">
                        <img src="{{ asset('images/Gallery/7.jpg') }}" alt="" class="rounded-lg object-cover" onclick="showModal(this)">
                        <img src="{{ asset('images/Gallery/6.jpg') }}" alt="" class="rounded-lg object-cover" onclick="showModal(this)">
                        <img src="{{ asset('images/Gallery/5.jpg') }}" alt="" class="rounded-lg object-cover" onclick="showModal(this)">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="page_3" class="page-hidden relative bg-cover bg-center bg-no-repeat" style="background-image: url({{ asset('atribut/15591481_5645337.jpg') }});">
        <div class="page-content text-center px-3 gap-y-1">
            <div class="max-w-sm rounded-[20px] overflow-hidden shadow-lg mt-3">
                <div class="px-6 py-4 bg-[#ffffff34]">
                  <div id="font-judul" class="text-[20px] font-bold animate-on-scroll zoomIn">Turut Mengundang</div>

                  <div id="font-judul" class="text-[16px] animate-on-scroll zoomIn">Niniak Mamak :</div>

                  <div class="text-[15px] font-semibold text-start mt-3 animate-on-scroll zoomIn">Pihak Perempuan :</div>
                  <div class="text-start text-[11px] leading-6 grid grid-cols-2 gap-5 mt-1 px-4">
                    <ul class="grid list-disc ">
                        <li class="animate-on-scroll zoomIn">H. Khaidir (Inyiak)</li>
                        <li class="animate-on-scroll zoomIn">H. Fauzi (Apak)</li>
                        <li class="animate-on-scroll zoomIn">Ali Buzar (Mamak)</li>
                        <li class="animate-on-scroll zoomIn">Merizal (Mamak)</li>
                        <li class="animate-on-scroll zoomIn">H. Mai Abeto (Inyiak)</li>
                        <li class="animate-on-scroll zoomIn">Samri (Apak)</li>
                        <li class="animate-on-scroll zoomIn">H. Sawirnalis (Apak)</li>
                        <li class="animate-on-scroll zoomIn">Azmi (Apak)</li>
                        <li class="animate-on-scroll zoomIn">Sawirman (Apak)</li>
                        <li class="animate-on-scroll zoomIn">Muhammad Ali (Apak)</li>
                    </ul>
                    <ul class="grid list-disc">
                        <li class="animate-on-scroll zoomIn">Firdaus (Apak)</li>
                        <li class="animate-on-scroll zoomIn">Mulharnis (Apak)</li>
                        <li class="animate-on-scroll zoomIn">Ruspadli (Apak)</li>
                        <li class="animate-on-scroll zoomIn">Sapirman (Inyiak)</li>
                        <li class="animate-on-scroll zoomIn">Herman Guci (Inyiak)</li>
                        <li class="animate-on-scroll zoomIn">Ismail S (Abang)</li>
                        <li class="animate-on-scroll zoomIn">Ahmad M (Abang)</li>
                        <li class="animate-on-scroll zoomIn">Lukman (Apak)</li>
                        <li class="animate-on-scroll zoomIn">Zulinurdin (Apak)</li>
                    </ul>
                  </div>
                  <div class="text-[15px] font-semibold text-start mt-3 animate-on-scroll zoomIn">Pihak Laki Laki :</div>
                  <div class="text-start text-[11px] leading-6 grid grid-cols-2 gap-5 mt-1 px-4">
                    <ul class="grid list-disc ">
                        <li class="animate-on-scroll zoomIn">Syafril - SERMA DINAS ARMED 7 (Mamak)</li>
                        <li class="animate-on-scroll zoomIn">Mansar (Mamak)</li>
                        <li class="animate-on-scroll zoomIn">Dasirman (Urang Sumando)</li>
                        <li class="animate-on-scroll zoomIn">Hadi P (Urang Sumando)</li>
                    </ul>
                    <ul class="grid list-disc ">
                        <li class="animate-on-scroll zoomIn">Delfri Aldi (Kakak)</li>
                        <li class="animate-on-scroll zoomIn">Anton (Mamak)</li>
                        <li class="animate-on-scroll zoomIn">Tamal (Apak)</li>
                        <li class="animate-on-scroll zoomIn">Adrizal (Apak)</li>
                    </ul>
                  </div>

                  <div id="font-judul" class="text-[16px] mt-3 animate-on-scroll zoomIn">Keluarga Besar IMPPAK</div>
                </div>
              </div>
        </div>
    </div>

    <div id="page_4" class="page-hidden relative ">
        <div class="page-content text-center px-3 gap-y-1 bg-cover bg-center bg-no-repeat" style="background-image: url({{ asset('atribut/10122877_1667.jpg') }});">

            <div id="successMessage" class="hidden text-[whitesmoke] bg-green-600 fixed top-0 text-center w-full z-[999] p-3 left-0 right-0 font-bold "></div>
            
            <div id="errorMessage" class="hidden text-[whitesmoke] bg-red-600 fixed top-0 text-center w-full z-[999] p-3 left-0 right-0 font-bold"></div>

            <div class="flex flex-col justify-start items-center m-[20px] p-0">

                <h2 id="font-judul" class="text-[20px] font-semibold animate-on-scroll zoomIn">Wedding Gifts</h2> 

                <p class="text-[16px] mt-3 animate-on-scroll zoomIn">
                    Bagi yang ingin memberikan tanda kasih, dapat mengirimkan melalui fitur di bawah ini:
                </p>
                <div class="container-bca mt-3 animate-on-scroll zoomIn">
                    <div class="card-bca">
                        <div class="card-inner-bca">
                            <span class="tooltiptext-bca font-bold" id="myTooltipBCA"></span>
                            <div class="front-bca">
                                <img src="https://i.ibb.co/PYss3yv/map.png" class="map-img-bca">
                                <div class="col-bca">
                                    <div class="row-bca">
                                        <img src="https://i.ibb.co/G9pDnYJ/chip.png" width="40px">
                                        <img src="{{ asset('atribut/Logo BCA_Putih.png') }}" width="80px">
                                    </div>
                                    <div class="row-bca card-no-bca">
                                        <p>035</p>
                                        <p>2981</p>
                                        <p>808</p>
                                    </div>
                                    <div class="row-bca card-holder-bca">
                                        <p>Tap Here</p>
                                        <p>Save The Date</p>
                                    </div>
                                    <div class="row-bca name-bca">
                                        <p>Risma Defitri</p>
                                        <p>26 / 10</p>
                                    </div>
                                </div>
                            </div>
                            <div class="back-bca">
                                <img src="https://i.ibb.co/PYss3yv/map.png" class="map-img-bca">
                                <div class="bar-bca"></div>
                                    <div class="row-bca card-cvv-bca">
                                        <div>
                                            <img src="https://i.ibb.co/S6JG8px/pattern.png">
                                        </div>
                                        <p>***</p>
                                    </div>
                                    <div class="row-bca card-text-bca text-start">
                                        <p>Klik "copy" dibawah kanan untuk nomor rekening.</p>
                                    </div>
                                    <div class="row-bca signature-bca">
                                        <img src="{{ asset('atribut/Logo BCA_Putih.png') }}" width="80px">
                                        <button onclick="copyFunctionBCA()" class="border border-solid border-[whitesmoke] bg-transparent rounded-[20px] py-2 px-4">
                                            Copy
                                        </button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-mandiri mt-3 animate-on-scroll zoomIn">
                    <div class="card-mandiri">
                        <div class="card-inner-mandiri">
                            <span class="tooltiptext-mandiri font-bold" id="myTooltipMandiri"></span>
                            <div class="front-mandiri">
                                <img src="https://i.ibb.co/PYss3yv/map.png" class="map-img-mandiri">
                                <div class="col-mandiri">
                                    <div class="row-mandiri">
                                        <img src="https://i.ibb.co/G9pDnYJ/chip.png" width="40px">
                                        <img src="https://freepngdesign.com/content/uploads/images/p-2813-2-bank-mandiri-logo-png-transparent-logo-699390155888.png" width="80px">
                                    </div>
                                    <div class="row-mandiri card-no-mandiri">
                                        <p>123</p>
                                        <p>001</p>
                                        <p>204</p>
                                        <p>4642</p>
                                    </div>
                                    <div class="row-mandiri card-holder-mandiri">
                                        <p>Tap Here</p>
                                        <p>Save The Date</p>
                                    </div>
                                    <div class="row-mandiri name-mandiri">
                                        <p>Risma Defitri</p>
                                        <p>26 / 10</p>
                                    </div>
                                </div>
                            </div>
                            <div class="back-mandiri">
                                <img src="https://i.ibb.co/PYss3yv/map.png" class="map-img-mandiri">
                                <div class="bar-mandiri"></div>
                                    <div class="row-mandiri card-cvv-mandiri">
                                        <div>
                                            <img src="https://i.ibb.co/S6JG8px/pattern.png">
                                        </div>
                                        <p>***</p>
                                    </div>
                                    <div class="row-mandiri card-text-mandiri text-start">
                                        <p>Klik "copy" dibawah kanan untuk nomor rekening.</p>
                                    </div>
                                    <div class="row-mandiri signature-mandiri">
                                        <img src="https://freepngdesign.com/content/uploads/images/p-2813-2-bank-mandiri-logo-png-transparent-logo-699390155888.png" width="80px">
                                        <button onclick="copyFunctionMandiri()" class="border border-solid border-[whitesmoke] bg-transparent rounded-[20px] py-2 px-4">
                                            Copy
                                        </button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full h-max border border-solid border-[#65572a] mt-3 bg-[#f9f1e2] shadow-lg rounded-[20px] flex flex-col justify-center items-center p-4 animate-on-scroll zoomIn">
                    <h1 id="font-judul" class="text-[20px] font-bold">Alamat Kado Fisik</h1>
                    <p class="text-[18px] mt-3">
                        Jalan Rawa Tengah Gg. V No. 11, RT. 002 RW. 006, Galur, Johar Baru, Jakarta Pusat
                    </p>
                </div>

                <p class="text-[16px] mt-9 animate-on-scroll zoomIn">
                    Merupakan suatu kehormatan dan kebahagiaan bagi kami sekeluarga apabila Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan doa restu kepada kedua mempelai. Atas kehadiran serta doa restu, kami ucapkan terima kasih.
                </p>
                
                <div class="">
                    <section" class="h-[700px] rounded-lg border-2 border-[#65572a] p-4 my-8 mx-auto w-[100%] flex flex-col justify-between shadow-xl bg-transparent">
                        
                        <div id="commentsSection" class="w-[100%] flex flex-col h-[100%]">
                            <h3 id="font-judul" class="text-[20px] text-center font-bold animate-on-scroll zoomIn">Ucapan & Doa</h3>
                            
                            @forelse ($comments as $comment)
                                <div class="flex flex-col items-start justify-start text-start mt-4 w-[100%] animate-on-scroll zoomIn">                
                                    <div class="px-3">
                                        <div class="font-bold text-[#65572a]">{{ $comment->guest->name }} :</div>
                                        <p class="text-[#65572a] rounded-tl-none rounded-tr-[20px] rounded-b-[20px] p-3 break-words bg-[whitesmoke] shadow-lg max-w-[280px] border-2 border-solid border-[#65572a]">
                                            {{ $comment->comment }}
                                        </p>
                                        
                                    </div>
                                </div>
                            @empty
                                <p class="animate-on-scroll zoomIn">Belum ada komentar.</p>
                            @endforelse
                        </div>
                    
                        <form id="commentForm" class="mt-4 flex flex-col gap-y-2 justify-start items-start">
                            @csrf
                            
                            <label for="comment" class="block text-[#65572a] font-medium animate-on-scroll zoomIn">Comment</label>
                            <textarea id="comment" name="comment" class="border-2 border-[#65572a] p-2 w-full rounded" placeholder="Tulis Komentar Anda..." required></textarea>
                    
                            <button type="submit"
                            class="bg-[#65572a] text-white font-medium py-2 px-4 rounded hover:bg-[#7e6e3a] animate-on-scroll zoomIn">Kirim
                            </button>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div id="page_5" class="page-hidden relative bg-cover bg-center bg-no-repeat" style="background-image: url({{ asset('atribut/15591481_5645337.jpg') }});">
        <div class="page-content text-center px-3 gap-y-1">
            <div class="rounded-[20px] overflow-hidden shadow-lg mt-3">
                <div class="px-6 py-4 bg-[#ffffff34]">

                    <p class="text-[16px] mt-3 animate-on-scroll zoomIn">
                        بَارَكَ اللهُ لَكَ وَبَارَكَ عَلَيْكَ وَجَمَعَ بَيْنَكُمَا فِي خَيْرٍ

                    </p>

                    <p class="text-[16px] mt-3 animate-on-scroll zoomIn">
                        "Semoga Allah memberkahimu, semoga Allah memberkahi engkau dan semoga Allah mengumpulkan kalian berdua dalam kebaikan"
                    </p>

                    <p id="font-judul" class="font-bold text-[18px] mt-3 animate-on-scroll zoomIn">( HR. Abu Daud).</p>

                    <img src="{{ asset('atribut/rumahGadang.png') }}" alt="" class="animate-on-scroll zoomIn mt-3">

                    <p class="text-[16px] mt-3 animate-on-scroll zoomIn">
                        Merupakan suatu kehormatan dan kebahagiaan bagi kami sekeluarga apabila Bapak/Ibu/Saudara/i berkenan hadir
                    </p>
                    <p id="font-judul" class="text-[12px] mt-3 animate-on-scroll zoomIn font-bold">
                        Terima kasih atas segala ucapan, doa, dan perhatian yang diberikan
                    </p>

                    <p id="font-judul" class="text-[16px] mt-3 animate-on-scroll zoomIn font-bold">
                        Kami Yang Berbahagia
                    </p>

                    <div class="text-start text-[14px] leading-6 grid grid-cols-2 gap-5 mt-1 px-4">
                        <div class="grid text-center">
                            <p class="animate-on-scroll zoomIn">Kel. Bpk. Zaenal Abidin (Alm.) & Ibu Maiyulita </p>
                        </div>
                        <div class="grid text-center">
                            <p class="animate-on-scroll zoomIn">Kel. Bpk. Syafrizal & Ibu Ernita </p>
                        </div>
                      </div>

                </div>
              </div>
        </div>
    </div>

    <script src="{{ asset('lazyLoading.js') }}" async></script>
    <script src="{{ asset('animate.js') }}" async></script>
    <script>
        document
        .getElementById("commentForm")
        .addEventListener("submit", function (event) {
            event.preventDefault(); 

            let formData = new FormData(this); 

            fetch("{{ route('comment.guest', $guest->name) }}", {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": document
                        .querySelector('meta[name="csrf-token"]')
                        .getAttribute("content"), 
                    Accept: "application/json",
                },
                body: formData,
            })
                .then((response) => response.json())
                .then((data) => {
                    if (data.success) {
                        document.getElementById("successMessage").innerText = data.message;

                        document
                        .getElementById("successMessage")
                        .classList.remove("hidden");
                            
                        setTimeout(() => {
                            document.getElementById("successMessage").classList.add("hidden");
                        }, 3000);    

                        document.querySelector('textarea[name="comment"]').value =
                            "";

                        let newCommentHtml = `
                                <div class="flex flex-col items-start justify-start text-start mt-4 w-[100%]">                
                                    <div class="px-3">
                                        <div class="font-bold text-[#65572a]">${data.comment.guest_name}</div>
                                        <p class="text-[#65572a] rounded-tl-none rounded-tr-[20px] rounded-b-[20px] p-3 break-words bg-[whitesmoke] shadow-lg max-w-[280px] border-2 border-solid border-[#65572a]">
                                            ${data.comment.text}
                                        </p>
                                        
                                    </div>
                                </div>`;
                        document
                            .getElementById("commentsSection")
                            .insertAdjacentHTML("beforeend", newCommentHtml);

                    } else {
                        document.getElementById("errorMessage").innerText = data.message;

                        document
                        .getElementById("errorMessage")
                        .classList.remove("hidden");
                            
                        setTimeout(() => {
                            document.getElementById("errorMessage").classList.add("hidden");
                        }, 3000); 
                    }
                })
                .catch((error) => {
                    console.error("Error:", error);
                });
        });


        window.onload = function () {
            const loadingScreen = document.getElementById('loading-screen');
            loadingScreen.classList.add('hidden');
        };

        function openInvitation() {
            const cover = document.getElementById('cover');
            const coverContent = document.getElementById('coverContent');
            const pageOne = document.getElementById('page_1');
            const pageTwo = document.getElementById('page_2');
            const pageThree = document.getElementById('page_3');
            const pageFour = document.getElementById('page_4');
            const pageFive = document.getElementById('page_5');

            cover.classList.add('fade-out');
            cover.classList.add('slide-up');
            coverContent.classList.add('slide-up');
            
            setTimeout(() => {
                const loadingPage = document.getElementById('loading-page');
                loadingPage.classList.remove('hidden');
                loadingPage.classList.add('flex-loading');
                setTimeout(() => {
                    loadingPage.classList.add('hidden');
                    loadingPage.classList.remove('flex-loading');
                    cover.classList.add('hidden');
                    coverContent.classList.add('hidden');
                    pageOne.classList.remove('page-hidden');
                    pageOne.classList.add('page1');
                    pageTwo.classList.remove('page-hidden');
                    pageTwo.classList.add('page2');
                    pageThree.classList.remove('page-hidden');
                    pageThree.classList.add('page3');
                    pageFour.classList.remove('page-hidden');
                    pageFour.classList.add('page4');
                    pageFive.classList.remove('page-hidden');
                    pageFive.classList.add('page5');
                }, 1000);
            }, 1000);
        }
    </script>
    <script src="{{ asset('gallery.js') }}" async></script>
    <script src="{{ asset('countDownTimeAkad.js') }}" async></script>
    <script src="{{ asset('countDownTimeResepsi.js') }}" async></script>
    <script src="{{ asset('flipCardBca.js') }}" async></script>
    <script src="{{ asset('flipCardMandiri.js') }}" async></script>
    <script src="{{ asset('bca.js') }}" async></script>
    <script src="{{ asset('mandiri.js') }}" async></script>
    <script src="{{ asset('comment.js') }}" async></script>
    <script src="{{ asset('modalGallery.js') }}" async></script>
    <script src="{{ asset('audio.js') }}" async></script>
</body>

</html>
