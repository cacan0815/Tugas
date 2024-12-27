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
  <title>BouketSnack</title>
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

  <section>
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
      <header>
        <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Bouket Snack</h2>

        <p class="mt-4 text-justify text-gray-500">
          🎉 Camilan Cantik, Hadiah Asyik! 🎉
          Lagi cari hadiah yang bikin senyum lebar? Buket snack dari kami siap jadi pilihan sempurna! Dengan aneka snack
          favorit yang dirangkai cantik, hadiah ini pasti bikin siapa saja bahagia. Cocok untuk ulang tahun,
          anniversary, atau sekadar tanda kasih.
          Pesan sekarang dan buat momen lebih berkesan! 🌟🍫
        </p>
      </header>

      <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
        <li>
          <a href="/pay" class="group block overflow-hidden">
            <img src="/pic/snack1.jpg" alt=""
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

            <div class="relative bg-white pt-3">
              <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                Bouket Beng-Beng & Bouket SlayOlay
              </h3>

              <p class="mt-2">
                <span class="sr-only"> Regular Price </span>

                <span class="tracking-wider text-gray-900"> Rp. 30.000 </span>
              </p>
            </div>
          </a>
        </li>

        <li>
          <a href="/pay" class="group block overflow-hidden">
            <img src="/pic/snack2.jpg" alt=""
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

            <div class="relative bg-white pt-3">
              <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                Bouket Pocky
              </h3>

              <p class="mt-2">
                <span class="sr-only"> Regular Price </span>

                <span class="tracking-wider text-gray-900"> Rp. 55.000 </span>
              </p>
            </div>
          </a>
        </li>

        <li>
          <a href="/pay" class="group block overflow-hidden">
            <img src="/pic/snack3.jpg" alt=""
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

            <div class="relative bg-white pt-3">
              <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                Bouket Nexstar
              </h3>

              <p class="mt-2">
                <span class="sr-only"> Regular Price </span>

                <span class="tracking-wider text-gray-900"> Rp. 60.000</span>
              </p>
            </div>
          </a>
        </li>

        <li>
          <a href="/pay" class="group block overflow-hidden">
            <img src="/pic/snack4.jpg" alt=""
              class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

            <div class="relative bg-white pt-3">
              <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                Bouket Chocolatos
              </h3>

              <p class="mt-2">
                <span class="sr-only"> Regular Price </span>

                <span class="tracking-wider text-gray-900"> Rp. 25.000 </span>
              </p>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </section>

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
          <a href="#" rel="noreferrer" target="_blank" class="text-gray-700 transition hover:text-gray-700/75">
            <span class="sr-only">WhatsApp</span>
            <img src="https://cdn-icons-png.flaticon.com/512/1384/1384007.png" class="size-6" alt="">
          </a>
        </li>

        <li>
          <a href="#" rel="noreferrer" target="_blank" class="text-gray-700 transition hover:text-gray-700/75">
            <span class="sr-only">Shopee</span>
            <img src="   https://cdn-icons-png.flaticon.com/512/17090/17090153.png " class="size-6" alt="">
          </a>
        </li>

        <li>
          <a href="#" rel="noreferrer" target="_blank" class="text-gray-700 transition hover:text-gray-700/75">
            <span class="sr-only">Instagram</span>
            <img src="https://cdn-icons-png.flaticon.com/512/1384/1384015.png" class="size-6" alt="">
          </a>
        </li>

      </ul>
    </div>
  </footer>

</body>

</html>