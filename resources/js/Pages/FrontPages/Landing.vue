<template>
    <!-- Body  -->
    <div class="w-full bg-slate-100 flex flex-col gap-10 text-gray-700 pb-32">
        <!-- Tranding Info -->
        <div class="h-10 w-full bg-white">
            <div
                class="max-w-screen-xl mx-auto flex flex-col justify-center h-full"
            >
                <div class="flex justify-between">
                    <div class="flex justify-start gap-3">
                        <div
                            class="bg-primary-color h-10 flex flex-col justify-center"
                        >
                            <span class="px-8 text-gray-100 font-semibold"
                                >Trending</span
                            >
                        </div>
                        <div class="flex gap-5">
                            <button class="flex justify-start gap-5">
                                <div
                                    class="h-8 bg-white hover:bg-primary-color hover:text-gray-100 flex flex-col justify-center w-8 border border-gray-500 p-2 my-auto"
                                >
                                    <i class="fas fa-arrow-left mx-auto"></i>
                                </div>
                            </button>
                            <button class="flex justify-start gap-5">
                                <div
                                    class="h-8 bg-white hover:bg-primary-color hover:text-gray-100 flex flex-col justify-center w-8 border border-gray-500 p-2 my-auto"
                                >
                                    <i class="fas fa-arrow-right mx-auto"></i>
                                </div>
                            </button>
                        </div>
                        <div class="my-auto">
                            <!-- makismal 14 kata -->
                            <a
                                class="text-gray-700 font-semibold hover:underline"
                                href="#"
                                >Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Voluptatem adipisci quidem
                                quam officiis quaerat!</a
                            >
                        </div>
                    </div>
                    <div class="my-auto font-semibold text-sm">
                        Monday, January 01, 2045
                    </div>
                </div>
            </div>
        </div>
        <!-- End Tranding Info -->
        <!-- Logo Places -->
        <div class="h-20 flex max-w-screen-xl mx-auto justify-start w-full">
            <a href="#" class="my-auto flex gap-1">
                <img
                    class="max-h-16"
                    :src="'/storage/img/company/' + companyInfo.company_logo"
                    alt=""
                />
                <div class="flex flex-col justify-end">
                    <div class="flex">
                        <span class="text-4xl font-bold text-secondary-color"
                            >ATRESNA</span
                        >
                        <span
                            class="text-sm font-bold text-primary-color mt-auto"
                            >CREATIVE</span
                        >
                    </div>
                </div>
            </a>
        </div>
        <!-- End Logo Placed -->
        <!-- Main Navigasi Info -->
        <div class="h-12 w-full bg-white">
            <div
                class="max-w-screen-xl mx-auto flex flex-col justify-center h-full"
            >
                <div class="flex justify-between">
                    <div class="flex justify-start gap-3">
                        <button
                            class="bg-primary-color h-12 flex flex-col justify-center"
                        >
                            <span class="px-8 text-gray-100 text-xl">Home</span>
                        </button>
                        <div class="flex">
                            <button
                                class="hover:bg-primary-color hover:text-gray-100 h-12 flex flex-col justify-center"
                            >
                                <span class="px-8 text-xl">Kategori</span>
                            </button>
                        </div>
                    </div>
                    <div class="my-auto">
                        <form action="#">
                            <input
                                placeholder="Pencarian Artikel"
                                class="border border-gray-700 py-1 px-2 focus:outline-none text-lg"
                                type="search"
                                name=""
                                id=""
                            />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Navigasi Info -->
        <!-- Main Banner -->
        <div
            class="max-w-screen-xl mx-auto grid grid-flow-col grid-cols-12 h-hero gap-2 w-full px-10"
        >
            <div class="col-span-8 bg-white h-hero">
                <!-- img slider w-full h-hero -->
                <div class="relative h-hero w-full bg-black">
                    <img
                        class="h-full w-full object-cover"
                        src="https://images.pexels.com/photos/1181317/pexels-photo-1181317.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt=""
                    />
                    <div class="absolute bottom-0">
                        <div class="p-9 text-white flex flex-col">
                            <div class="text-xl font-bold">
                                <span class="">Teknologi / 1 Januari 2023</span>
                            </div>
                            <div class="text-4xl font-semibold">
                                <span class=""
                                    >Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute top-0 h-full flex flex-col justify-center w-full"
                    >
                        <div class="flex justify-between w-full">
                            <button
                                class="h-10 w-10 bg-white bg-opacity-70 text-black hover:bg-primary-color hover:text-white"
                            >
                                <i class="fas fa-arrow-left"></i>
                            </button>
                            <button
                                class="h-10 w-10 bg-white bg-opacity-70 text-black hover:bg-primary-color hover:text-white"
                            >
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- end img slider -->
            </div>
            <div class="col-span-4 flex justify-between flex-col">
                <div
                    class="h-16 bg-white drop-shadow-md flex flex-col justify-center"
                >
                    <div class="px-2 text-lg flex justify-between">
                        <span class="text-gray-800 text-xl font-semibold"
                            >Kategori</span
                        >
                        <button>View All</button>
                    </div>
                </div>
                <div class="h-14 bg-slate-100 flex flex-col justify-center">
                    <div class="relative h-14">
                        <img
                            class="h-full w-full object-cover"
                            src="https://images.pexels.com/photos/2582937/pexels-photo-2582937.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt=""
                        />
                        <div
                            class="absolute text-white flex flex-col justify-center h-full top-0 text-center w-full font-semibold"
                        >
                            <a class="text-2xl" href="#">Kategori 1</a>
                        </div>
                    </div>
                </div>
                <div class="h-14 bg-slate-100 flex flex-col justify-center">
                    <div class="relative h-14">
                        <img
                            class="h-full w-full object-cover"
                            src="https://images.pexels.com/photos/2582937/pexels-photo-2582937.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt=""
                        />
                        <div
                            class="absolute text-white flex flex-col justify-center h-full top-0 text-center w-full font-semibold"
                        >
                            <a class="text-2xl" href="#">Kategori 1</a>
                        </div>
                    </div>
                </div>
                <div class="h-14 bg-slate-100 flex flex-col justify-center">
                    <div class="relative h-14">
                        <img
                            class="h-full w-full object-cover"
                            src="https://images.pexels.com/photos/2582937/pexels-photo-2582937.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt=""
                        />
                        <div
                            class="absolute text-white flex flex-col justify-center h-full top-0 text-center w-full font-semibold"
                        >
                            <a class="text-2xl" href="#">Kategori 1</a>
                        </div>
                    </div>
                </div>
                <div class="h-14 bg-slate-100 flex flex-col justify-center">
                    <div class="relative h-14">
                        <img
                            class="h-full w-full object-cover"
                            src="https://images.pexels.com/photos/2582937/pexels-photo-2582937.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt=""
                        />
                        <div
                            class="absolute text-white flex flex-col justify-center h-full top-0 text-center w-full font-semibold"
                        >
                            <a class="text-2xl" href="#">Kategori 1</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Banner -->

        <!-- Main Content -->
        <div
            class="max-w-screen-xl mx-auto grid grid-flow-col grid-cols-12 gap-2 w-full px-10"
        >
            <div class="col-span-9 flex flex-col gap-3">
                <div
                    class="h-12 bg-white drop-shadow-md flex flex-col justify-center"
                >
                    <div class="px-2 text-lg flex justify-between">
                        <span class="text-gray-800 text-xl font-semibold"
                            >Artikel Terbaru</span
                        >
                        <button>View All</button>
                    </div>
                </div>
                <div class="grid grid-flow-row grid-cols-2 gap-5">
                    <div class="h-72 w-full bg-white drop-shadow-lg"></div>
                    <div class="h-72 w-full bg-white drop-shadow-lg"></div>
                    <div class="h-72 w-full bg-white drop-shadow-lg"></div>
                    <div class="h-72 w-full bg-white drop-shadow-lg"></div>
                    <div class="h-72 w-full bg-white drop-shadow-lg"></div>
                    <div class="h-72 w-full bg-white drop-shadow-lg"></div>
                    <div class="h-72 w-full bg-white drop-shadow-lg"></div>
                    <div class="h-72 w-full bg-white drop-shadow-lg"></div>
                    <div class="h-72 w-full bg-white drop-shadow-lg"></div>
                    <div class="h-72 w-full bg-white drop-shadow-lg"></div>
                </div>
            </div>
            <div class="col-span-3 flex justify-start flex-col gap-5">
                <div
                    class="h-12 bg-white drop-shadow-md flex flex-col justify-center"
                >
                    <div class="px-2 text-lg flex justify-between">
                        <span class="text-gray-800 text-xl font-semibold"
                            >Trending Artikel</span
                        >
                        <button>View All</button>
                    </div>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="flex h-20 drop-shadow-lg bg-white gap-2">
                        <div class="h-20 w-20 bg-slate-500 my-auto">
                            <i
                                class="fas fa-image text-center my-auto h-20 w-20"
                            ></i>
                        </div>
                        <div class="flex flex-col justify-center">
                            <div class="text-sm font-semibold">
                                <a href="#">Technology</a> / Januari 2023
                            </div>
                            <div class="text-sm font-bold">
                                <a href="#">
                                    Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit.</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="flex h-20 drop-shadow-lg bg-white gap-2">
                        <div class="h-20 w-20 bg-slate-500 my-auto">
                            <i
                                class="fas fa-image text-center my-auto h-20 w-20"
                            ></i>
                        </div>
                        <div class="flex flex-col justify-center">
                            <div class="text-sm font-semibold">
                                <a href="#">Technology</a> / Januari 2023
                            </div>
                            <div class="text-sm font-bold">
                                <a href="#">
                                    Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit.</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="flex h-20 drop-shadow-lg bg-white gap-2">
                        <div class="h-20 w-20 bg-slate-500 my-auto">
                            <i
                                class="fas fa-image text-center my-auto h-20 w-20"
                            ></i>
                        </div>
                        <div class="flex flex-col justify-center">
                            <div class="text-sm font-semibold">
                                <a href="#">Technology</a> / Januari 2023
                            </div>
                            <div class="text-sm font-bold">
                                <a href="#">
                                    Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit.</a
                                >
                            </div>
                        </div>
                    </div>
                    <div class="flex h-20 drop-shadow-lg bg-white gap-2">
                        <div class="h-20 w-20 bg-slate-500 my-auto">
                            <i
                                class="fas fa-image text-center my-auto h-20 w-20"
                            ></i>
                        </div>
                        <div class="flex flex-col justify-center">
                            <div class="text-sm font-semibold">
                                <a href="#">Technology</a> / Januari 2023
                            </div>
                            <div class="text-sm font-bold">
                                <a href="#">
                                    Lorem ipsum dolor sit, amet consectetur
                                    adipisicing elit.</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Content -->
    </div>
    <!-- End Body -->
</template>

<script>
export default {
    props: {
        companyInfo: Object,
    },
};
</script>

<style></style>
