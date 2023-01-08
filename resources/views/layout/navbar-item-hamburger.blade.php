<button
    @click="navbarOpen = !navbarOpen"
    :class="navbarOpen && 'navbarTogglerActive' "
    id="navbarToggler"
    class="ring-primary absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] focus:ring-2 lg:hidden"
    >
    <span
        class="bg-body-color relative my-[6px] block h-[2px] w-[30px]"
    ></span>
    <span
        class="bg-body-color relative my-[6px] block h-[2px] w-[30px]"
    ></span>
    <span
        class="bg-body-color relative my-[6px] block h-[2px] w-[30px]"
    ></span>
</button>