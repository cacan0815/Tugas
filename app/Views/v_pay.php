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
    <title>Pay</title>
</head>

<body>

    <section class="bg-gray-100">
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">
                <div class="lg:col-span-2 lg:py-12">
                    <p class="max-w-xl text-lg">
                        Untuk menyelesaikan pembayaran, silakan transfer ke rekening berikut: DANA a.n. Cantika
                        Gustiani, No. Rekening: 081546867301. Mohon sertakan bukti transfer setelah pembayaran
                        dilakukan😉
                        Setelah melakukan pembayaran, jangan lupa kirimkan bukti transfer ke bawah ini agar kami bisa
                        segera memproses pesanan Anda.
                    </p>

                    <div class="mt-8">
                        <a href="#" class="text-2xl font-bold text-pink-600"> 0838-7330-1297 // Cantika Gustiani</a>

                        <address class="mt-2 not-italic">Jln. Muwardi Gg Hj.Ahmad rt 02/rw 05 </address>
                    </div>
                </div>

                <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
                    <form action="<?= base_url('form/store') ?>" method="post" class="space-y-4">
                        <?php if (session()->getFlashdata('errors')): ?>
                            <div class="alert alert-danger">
                                <?= session()->getFlashdata('errors') ?>
                            </div>
                        <?php endif; ?>

                        <div>
                            <label class="sr-only" for="name">Name</label>
                            <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Name" type="text"
                                id="name" />
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label class="sr-only" for="email">Email</label>
                                <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Email address"
                                    type="email" id="email" />
                            </div>

                            <div>
                                <label class="sr-only" for="phone">Phone</label>
                                <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Phone Number"
                                    type="tel" id="phone" />
                            </div>
                        </div>

                        <div>
                            <label class="sr-only" for="message">Address</label>

                            <textarea class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Address"
                                rows="4" id="message"></textarea>
                        </div>


                        <div class="Ukuran">
                            <div class="grid grid-cols-1 gap-4 text-center sm:grid-cols-3">
                                <div>
                                    <label for="Kecil"
                                        class="block w-full cursor-pointer rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black has-[:checked]:border-black has-[:checked]:bg-black has-[:checked]:text-white"
                                        tabindex="0">
                                        <input class="sr-only" id="Kecil" type="radio" tabindex="-1" name="Ukuran" />

                                        <span class="text-sm"> Small </span>
                                    </label>
                                </div>

                                <div>
                                    <label for="Sedang"
                                        class="block w-full cursor-pointer rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black has-[:checked]:border-black has-[:checked]:bg-black has-[:checked]:text-white"
                                        tabindex="0">
                                        <input class="sr-only" id="Sedang" type="radio" tabindex="-1" name="Ukuran" />

                                        <span class="text-sm"> Medium </span>
                                    </label>
                                </div>

                                <div>
                                    <label for="Besar"
                                        class="block w-full cursor-pointer rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black has-[:checked]:border-black has-[:checked]:bg-black has-[:checked]:text-white"
                                        tabindex="0">
                                        <input class="sr-only" id="Besar" type="radio" tabindex="-1" name="Ukuran" />

                                        <span class="text-sm"> Large </span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="Jenis">
                            <div class="grid grid-cols-1 gap-4 text-center sm:grid-cols-3">
                                <div>
                                    <label for="Snack"
                                        class="block w-full cursor-pointer rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black has-[:checked]:border-black has-[:checked]:bg-black has-[:checked]:text-white"
                                        tabindex="0">
                                        <input class="sr-only" id="Snack" type="radio" tabindex="-1" name="Jenis" />

                                        <span class="text-sm"> Snack </span>
                                    </label>
                                </div>

                                <div>
                                    <label for="Flower"
                                        class="block w-full cursor-pointer rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black has-[:checked]:border-black has-[:checked]:bg-black has-[:checked]:text-white"
                                        tabindex="0">
                                        <input class="sr-only" id="Flower" type="radio" tabindex="-1" name="Jenis" />

                                        <span class="text-sm"> Flower </span>
                                    </label>
                                </div>

                                <div>
                                    <label for="Money"
                                        class="block w-full cursor-pointer rounded-lg border border-gray-200 p-3 text-gray-600 hover:border-black has-[:checked]:border-black has-[:checked]:bg-black has-[:checked]:text-white"
                                        tabindex="0">
                                        <input class="sr-only" id="Money" type="radio" tabindex="-1" name="Jenis" />

                                        <span class="text-sm"> Money </span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="sr-only" for="message">information</label>

                            <textarea class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="information"
                                rows="8" id="message"></textarea>
                        </div>

                        <div class="mt-4">
                            <button type="submit"
                                class="inline-block w-full rounded-lg bg-black px-5 py-3 font-medium text-white sm:w-auto">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>