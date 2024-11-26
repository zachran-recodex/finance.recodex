<x-app-layout>
    <x-slot name="header">
        <div class="px-8 my-4 h-12 flex items-center justify-between">
            <a href="" class="w-12 h-12 flex items-center justify-center">
                <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10.779 17.779 4.36 19.918 6.5 13.5m4.279 4.279 8.364-8.643a3.027 3.027 0 0 0-2.14-5.165 3.03 3.03 0 0 0-2.14.886L6.5 13.5m4.279 4.279L6.499 13.5m2.14 2.14 6.213-6.504M12.75 7.04 17 11.28" />
                </svg>
            </a>
            <a href="" class="text-center text-gray-800 text-base font-semibold">
                Wallet
            </a>
            <a href="" class="w-12 h-12 flex items-center justify-center">
                <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 12h14m-7 7V5" />
                </svg>
            </a>
        </div>
        <div class="sticky top-0 border-y">
            <div class="px-8 h-20 flex justify-between items-center">
                <div class="text-center">
                    <h4>Assets</h4>
                    <p class="text-blue-500">0,00</p>
                </div>
                <div class="text-center">
                    <h4>Liabilities</h4>
                    <p class="text-red-500">0,00</p>
                </div>
                <div class="text-center">
                    <h4>Total</h4>
                    <p>0,00</p>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="w-full flex flex-col gap-4">
        <div class="flex flex-col">
            <div class="flex px-8 justify-between items-center mb-2">
                <h2>Cash</h2>
                <p>Rp 0,00</p>
            </div>
            <ul class="">
                <li class="bg-white px-8 py-3 border">
                    <a href="" class="flex justify-between items-center">
                        <h3>Cash</h3>

                        <p>Rp 0,00</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="flex flex-col">
            <div class="flex px-8 justify-between items-center mb-2">
                <h2>Card</h2>
                <p>Rp 0,00</p>
            </div>
            <ul class="">
                <li class="bg-white px-8 py-3 border">
                    <a href="" class="flex justify-between items-center">
                        <h3>BCA</h3>

                        <p>Rp 0,00</p>
                    </a>
                </li>
                <li class="bg-white px-8 py-3 border">
                    <a href="" class="flex justify-between items-center">
                        <h3>Mandiri</h3>

                        <p>Rp 0,00</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="flex flex-col">
            <div class="px-8 flex justify-between items-center mb-2">
                <h2>E-Wallet</h2>
                <p>Rp 0,00</p>
            </div>
            <ul class="">
                <li class="bg-white px-8 py-3 border">
                    <a href="" class="flex justify-between items-center">
                        <h3>DANA</h3>

                        <p>Rp 0,00</p>
                    </a>
                </li>
                <li class="bg-white px-8 py-3 border">
                    <a href="" class="flex justify-between items-center">
                        <h3>GoPay</h3>

                        <p>Rp 0,00</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</x-app-layout>
