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
    <title>Catalog</title>
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

<div class="flex justify-center">
    <div>
        <a href="/catalog/snack" class="group relative block bg-black" style="width: 450pxpx; height: auto; overflow: hidden;">>
        <img
            alt=""
            src="/pic/bouketsnack.jpg"
            class="absolute inset-0 h-full w-full object-cover opacity-100 transition-opacity group-hover:opacity-50"
        />
    
        <div class="relative p-4 sm:p-6 lg:p-8">
            <p class="text-sm font-medium uppercase tracking-widest text-pink-500">Bouket</p>
    
            <p class="text-xl font-bold text-white sm:text-2xl">Snack</p>
    
            <div class="mt-32 sm:mt-48 lg:mt-64">
            <div
                class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100"
            >
                <p class="text-sm text-white">
                Mau hadiah yang unik dan lezat? Pilih buket snack, penuh cinta dan camilan favorit!
                Bukan cuma hadiah, tapi juga cemilan bareng! Buket snack untuk setiap kesempatan.
                Rayakan hari spesial dengan cara yang lezat. Buket snack, pilihan semua usia!
                </p>
            </div>
            </div>
        </div>
        </a>
    </div>
    
    <div>
        <a href="/catalog/flower" class="group relative block bg-black" style="width: 450pxpx; height: auto; overflow: hidden;">>
        <img
            alt=""
            src="/pic/bouketflower.jpg"
            class="absolute inset-0 h-full w-full object-cover opacity-100 transition-opacity group-hover:opacity-50"
        />
    
        <div class="relative p-4 sm:p-6 lg:p-8">
            <p class="text-sm font-medium uppercase tracking-widest text-pink-500">Bouket</p>
    
            <p class="text-xl font-bold text-white sm:text-2xl">Flower</p>
    
            <div class="mt-32 sm:mt-48 lg:mt-64">
            <div
                class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100"
            >
                <p class="text-sm text-white">
                Setiap kelopak menceritakan cinta. Buket bunga kami, simbol kasih sayang yang abadi.
                Berikan keindahan dalam bentuk sempurna. Buket bunga segar untuk orang tersayang!
                Ekspresikan perasaanmu dengan keindahan alami. Buket bunga untuk setiap cerita.
                </p>
            </div>
            </div>
        </div>
        </a>
    </div>

    <div>
        <a href="/catalog/money" class="group relative block bg-black" style="width: 450pxpx; height: auto; overflow: hidden;">>
        <img
            alt=""
            src="/pic/bouketmoney.jpg"
            class="absolute inset-0 h-full w-full object-cover opacity-100 transition-opacity group-hover:opacity-50"
        />
    
        <div class="relative p-4 sm:p-6 lg:p-8">
            <p class="text-sm font-medium uppercase tracking-widest text-pink-500">Bouket</p>
    
            <p class="text-xl font-bold text-white sm:text-2xl">Money</p>
    
            <div class="mt-32 sm:mt-48 lg:mt-64">
            <div
                class="translate-y-8 transform opacity-0 transition-all group-hover:translate-y-0 group-hover:opacity-100"
            >
                <p class="text-sm text-white">
                Rayakan momen dengan gaya. Buket uang, kejutan yang penuh arti.
                Kejutan elegan dan berkelas! Buket uang untuk hadiah istimewa yang tak terlupakan.
                Bukan sekadar hadiah, tapi bentuk cinta yang penuh manfaat. Buket uang, pilihan tepat!
                </p>
            </div>
            </div>
        </div>
        </a>
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
        <a
          href="#"
          rel="noreferrer"
          target="_blank"
          class="text-gray-700 transition hover:text-gray-700/75"
        >
          <span class="sr-only">WhatsApp</span>
            <img src="https://cdn-icons-png.flaticon.com/512/1384/1384007.png" class="size-6" alt="">
        </a>
      </li>
      
      <li>
        <a
          href="#"
          rel="noreferrer"
          target="_blank"
          class="text-gray-700 transition hover:text-gray-700/75"
        >
          <span class="sr-only">Shopee</span>
            <img src="   https://cdn-icons-png.flaticon.com/512/17090/17090153.png " class="size-6" alt="">
        </a>
      </li>

      <li>
        <a
          href="#"
          rel="noreferrer"
          target="_blank"
          class="text-gray-700 transition hover:text-gray-700/75"
        >
          <span class="sr-only">Instagram</span>
            <img src="https://cdn-icons-png.flaticon.com/512/1384/1384015.png" class="size-6" alt="">
        </a>
      </li>

    </ul>
  </div>
</footer>
</body>
</html>