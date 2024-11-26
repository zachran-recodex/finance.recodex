<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-lg sm:text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="w-full h-12 pr-px flex-col justify-center items-start gap-2 inline-flex">
        <h3 class="text-[#39393e] text-xl font-medium font-['SF Pro Text'] tracking-wide">Hi, Admin
        </h3>
        <p class="text-[#85848b] text-sm font-normal font-['SF Pro Text'] tracking-wide">Welcome Back!</p>
    </div>
    <div class="w-[386px] h-[169px] bg-blue-500 rounded-[14px] p-4 flex flex-col justify-center items-center gap-4">
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
    <div class="w-[386px] h-[465px] flex flex-col items-center gap-4">
        <div class="w-[386px] h-[19px] justify-center items-center gap-[230px] inline-flex">
            <h3 class="text-[#39393e] text-base font-medium font-['SF Pro Text'] tracking-wide">
                Transactions
            </h3>
            <a href="" class="text-right text-[#39393e] text-xs font-normal font-['SF Pro Text'] tracking-wide">
                See All
            </a>
        </div>
        <div class="w-[386px] h-[74px] bg-white rounded-[14px] shadow p-4 flex items-center">
            <div class="w-full flex items-center justify-between">
                <div class="flex gap-4 items-center">
                    <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
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
</x-app-layout>
