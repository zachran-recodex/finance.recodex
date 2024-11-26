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
                Dashboard
            </a>
            <a href="" class="w-12 h-12 bg-gray-500 rounded-full flex items-center justify-center">

            </a>
        </div>
    </x-slot>

    <div class="px-8 flex flex-col gap-8">
        <div class="w-full h-[169px] bg-blue-500 rounded-[14px] p-4 flex flex-col justify-center items-center gap-4">
            <!-- Total Balance -->
            <div class="text-center">
                <p class="opacity-70 text-white text-xs font-medium uppercase tracking-wide">
                    Total Balance
                </p>
                <p class="text-white text-4xl font-medium tracking-wide">
                    $5200.00
                </p>
            </div>
            <!-- Income and Expenses -->
            <div class="w-full grid grid-cols-2 gap-4">
                <!-- Income -->
                <div class="flex flex-col items-center">
                    <p class="opacity-70 text-white text-xs font-medium uppercase tracking-wide">
                        Income
                    </p>
                    <p class="text-white text-xl font-medium tracking-wide">
                        $3500.00
                    </p>
                </div>
                <!-- Expenses -->
                <div class="flex flex-col items-center">
                    <p class="opacity-70 text-white text-xs font-medium uppercase tracking-wide">
                        Expenses
                    </p>
                    <p class="text-white text-xl font-medium tracking-wide">
                        $1248.00
                    </p>
                </div>
            </div>
        </div>
        <div class="w-full h-[465px] flex flex-col items-center gap-4">
            <div class="w-full h-[19px] justify-between items-center inline-flex">
                <h3 class="text-[#39393e] text-base font-medium font-['SF Pro Text'] tracking-wide">
                    Transactions
                </h3>
                <a href=""
                    class="text-right text-[#39393e] text-xs font-normal font-['SF Pro Text'] tracking-wide">
                    See All
                </a>
            </div>
            <div class="w-full h-[74px] bg-white rounded-[14px] shadow p-4 flex items-center">
                <div class="w-full flex items-center justify-between">
                    <div class="flex gap-4 items-center">
                        <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z" />
                            </svg>
                        </div>
                        <div class="">
                            <div class="text-[#39393e] text-sm font-medium font-['SF Pro Text'] tracking-wide">
                                Shopping</div>
                            <div class="text-[#85848b] text-xs font-normal font-['SF Pro Text'] tracking-wide">
                                Today</div>
                        </div>
                    </div>
                    <div class="text-right text-[#39393e] text-xl font-medium font-['SF Pro Text'] tracking-wide">
                        -$27.50</div>
                </div>
            </div>
        </div>
    </div>

    <div class="relative">
        <div class="absolute right-0 pe-8">
            <a href="" class="w-12 h-12 rounded-full bg-blue-500 flex items-center justify-center shadow">
                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 12h14m-7 7V5" />
                </svg>
            </a>
        </div>
    </div>
</x-app-layout>
