<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Imperial+Script&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Funnel+Display:wght@300..800&display=swap');
    </style>
    <title>about</title>
</head>

<body>
    <header class="bg-rose-700">
        <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
            <a class="block text-teal-600" href="#">
                <span class="sr-only">Home</span>
                <img src="/icon/flowers.png" alt="" class="h-8" viewBox="0 0 28 24">
            </a>

            <div class="flex flex-1 items-center justify-end md:justify-between">
                <nav aria-label="Global" class="hidden md:block">
                    <ul class="flex items-center gap-6 text-sm">
                        <li>
                            <a class="text-white transition hover:text-white/75" href="/"> Home </a>
                        </li>

                        <li>
                            <a class="text-white transition hover:text-white/75" href="/catalog"> Catalog </a>
                        </li>

                        <li>
                            <a class="text-white transition hover:text-white/75" href="/about"> About </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="isi grid grid-cols-2 items-center">
        <div class="kiri">
            <section class="bg-white ml-5">
                <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center">
                    <div class="max-w-xl text-left">
                        <h1 class="text-3xl font-extrabold sm:text-5xl"
                            style='font-family: "Imperial Script", serif; font-weight: 400; font-style: normal;'>
                            About
                            <strong class="font-extrabold text-rose-700 sm:block"> Welcome to My Profile </strong>
                        </h1>
        
                        <p class="mt-4 sm:text-xl/relaxed"
                            style='font-family: "Funnel Display", serif; font-optical-sizing: auto; font-weight: 400; font-style: normal;'>
                            Selamat datang di Bouket Mounichan! Kami menyediakan beberapa Bouket cantik dengan harga pelajar. Temukan produk favorit Anda dan nikmati pengalaman belanja terbaik bersama kami😊👌
                            Halo, saya Cantika Gustiani, seorang Pemilik Toko Bouket Mounichan dengan ketertarikan besar pada
                            Bidang Market. Saat ini saya fokus pada Pengembangan Toko saya, dan selalu berusaha untuk belajar
                            hal baru setiap hari.
                        </p>
        
                        <div class="mt-8 flex flex-wrap gap-4">
                            <a class="block w-full rounded bg-rose-700 px-12 py-3 text-sm font-medium text-white shadow hover:bg-red-700 focus:outline-none focus:ring active:bg-red-500 sm:w-auto"
                                href="https://www.instagram.com/bouket_mounichan?igsh=MTZjcDJqbTRwaGxzcg==">
                                Instagram
                            </a>
        
                            <a class="block w-full rounded bg-rose-700 px-12 py-3 text-sm font-medium text-white shadow hover:text-red-700 focus:outline-none focus:ring active:text-red-500 sm:w-auto"
                                href="https://id.shp.ee/etrWs8g">
                                Shoppe
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="kanan">
            <ul class="relative top-0 right-0 mt-4 mr-4 gap-4">
                <li>
                    <a href="/pay" class="group block overflow-hidden">
                        <img src="/pic/bouket.jpeg" alt=""
                            class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />
                    </a>
                </li>
            </ul>
        </div>
    </div>



    <footer class="bg-rose-700">
        <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="flex justify-center text-white">
                <img src="/icon/flowers.png" alt="" class="h-8" viewBox="0 0 118 24">
                <h3 class="ml-3">Bouket Mounichan</h3>
            </div>

            <p class="mx-auto mt-6 max-w-md text-center leading-relaxed text-white">
                Terimakasih telah mengunjungi Bouket Mounichan pelayanan terbaik, hasil terbaik.
                dan jangan lupa kembali, semoga hari anda cerah. Kami tunggu kunjungan Anda kembali!
            </p>

            <ul class="mt-12 flex justify-center gap-6 md:gap-8">
                <li>
                    <a href="#" rel="noreferrer" target="_blank"
                        class="text-gray-700 transition hover:text-gray-700/75">
                        <span class="sr-only">WhatsApp</span>
                        <img src="https://cdn-icons-png.flaticon.com/512/1384/1384007.png" class="size-6" alt="">
                    </a>
                </li>

                <li>
                    <a href="#" rel="noreferrer" target="_blank"
                        class="text-gray-700 transition hover:text-gray-700/75">
                        <span class="sr-only">Shopee</span>
                        <img src="   https://cdn-icons-png.flaticon.com/512/17090/17090153.png " class="size-6" alt="">
                    </a>
                </li>

                <li>
                    <a href="#" rel="noreferrer" target="_blank"
                        class="text-gray-700 transition hover:text-gray-700/75">
                        <span class="sr-only">Instagram</span>
                        <img src="https://cdn-icons-png.flaticon.com/512/1384/1384015.png" class="size-6" alt="">
                    </a>
                </li>

            </ul>
        </div>
    </footer>
</body>

</html>