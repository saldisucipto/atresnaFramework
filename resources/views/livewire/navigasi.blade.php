<div>
    <div class="phone:hidden tab:hidden">
        <div v-if="!this.loading" class="h-20 flex flex-col justify-center bg-white px-7">
            <div class="flex justify-between">
                <div>
                    <a href="/" class="flex justify-start">
                        <img class="max-h-24 py-5 px-2" />
                        <h1 class="my-auto text-primary-color-mtma font-bold text-1xl">

                        </h1>
                    </a>
                </div>
                <div class="flex flex-col justify-center">
                    <form action="#" class="flex justify-end gap-1">
                        <input
                            class="px-3 py-2 text-xs border-primary-color-mtma border-2 text-primary-color-mtma active:border-none focus:outline-none w-96 rounded-md"
                            type="text" v-model="search_produk" id="" placeholder="Cari Produk"
                            @keypress="searchPages()" />
                        <button
                            class="text-xs bg-primary-color-mtma text-white px-4 hover:bg-secondary-color-mtma hover:text-white rounded-md">
                            Search
                        </button>
                    </form>
                </div>
                <div class="flex flex-col justify-center">
                    <div class="flex justify-between gap-4 text-md">
                        <a href="/produk">
                            <div class="border-primary-color-mtma h-8 flex flex-col justify-center hover:text-white hover:bg-secondary-color-mtma"
                                :class="[
                                    this.uri === 'produk' ? activeNav : '',
                                ]">
                                <h1 class="px-3">Produk</h1>
                            </div>
                        </a>
                        <a href="tentang-kami">
                            <div class="border-primary-color-mtma h-8 flex flex-col justify-center hover:text-white hover:bg-secondary-color-mtma"
                                :class="[
                                    this.uri === 'tentang-kami' ?
                                    activeNav :
                                    '',
                                ]">
                                <h1 class="px-3">Tentang Kami</h1>
                            </div>
                        </a>
                        <a href="hubungi-kami">
                            <div class="border-primary-color-mtma h-8 flex flex-col justify-center hover:text-white hover:bg-secondary-color-mtma"
                                :class="[
                                    this.uri === 'hubungi-kami' ?
                                    activeNav :
                                    '',
                                ]">
                                <h1 class="px-3">Hubungi Kami</h1>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- after loading -->
        <div v-else class="h-20 flex flex-col justify-center bg-white px-7 rounded-full pulse-bg"></div>
        <!-- search compnenet -->
        <div v-if="this.searchTogle" class="bg-white drop-shadow-lg rounded-lg h-auto w-full -mt-5 max-w-2xl mx-auto">
            <div class="p-2">
                <div class="flex justify-end">
                    <button @click="this.searchTogle = false"
                        class="rounded-full bg-gray-200 text-gray-900 hover:bg-primary-color-mtma hover:text-white text-xa px-2 font-bold">
                        x
                    </button>
                </div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Natus ut soluta perspiciatis est voluptatibus recusandae id
                corrupti ab fugiat? Commodi provident placeat quos numquam,
                officia ut ab veritatis rem perferendis.
            </div>
        </div>
        <!-- end search components -->
    </div>
    <!-- responsive nav -->
    <div class="tab:bg-primary-color-mtma h-14 hidden tab:flex">
        <div class="mx-2 h-full flex flex-col justify-center w-full py-2">
            <div class="flex justify-between">
                <div class="my-auto">
                    <i class="fas fa-bars fa-2x text-gray-200"></i>
                </div>
                <div class="my-auto text-gray-200 text-lg font-semibold">
                    <h1></h1>
                </div>

                <div>
                    <a href="/" class="flex justify-start">
                        <img class="max-h-10 bg-gray-200 py-2 px-4 rounded-full" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
