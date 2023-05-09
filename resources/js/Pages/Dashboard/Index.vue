<template>
    <div class="h-screen w-full">
        <div
            class="grid grid-flow-col grid-cols-12 bg-white border border-gray-200"
        >
            <div class="col-span-2">
                <div
                    class="h-10 py-8 overflow-hidden flex flex-col justify-center"
                >
                    <div class="mx-auto flex justify-center h-max gap-1">
                        <img class="max-h-8" src="/assets/img/logo.png" />
                        <span
                            class="font-base text-gray-800 text-2xl font-semibold"
                            >Atresna.</span
                        >
                    </div>
                </div>
            </div>
            <div class="col-span-10">
                <div
                    class="py-8 overflow-hidden h-10 flex flex-col justify-center"
                >
                    <div class="flex justify-between text-gray-600 mx-3">
                        <div class="flex gap-4 my-auto">
                            <div>
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div><i class="fas fa-bell"></i></div>
                        </div>
                        <div class="flex gap-2 text-black font-semibold">
                            <div
                                class="h-10 w-10 rounded-full bg-gray-700"
                            ></div>
                            <span class="my-auto"
                                >Saldi Sucipto
                                <i class="fas fa-arrow-down my-auto"></i
                            ></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="grid grid-flow-col grid-cols-12 bg-white">
                <div class="col-span-2 border-r h-screen border-gray-300">
                    <div class="overflow-hidden flex flex-col justify-center">
                        <div class="p-5 flex flex-col gap-6">
                            <div class="flex flex-col gap-4">
                                <div class="text-sm text-gray-600">
                                    <h1>HOMES</h1>
                                </div>
                                <button
                                    class="flex gap-2 text-sm text-gray-900 hover:text-blue-800 hover:text-bold"
                                >
                                    <i class="fas fa-columns my-auto"></i>
                                    <span>Analytics Dashboard</span>
                                </button>
                            </div>

                            <div class="flex flex-col gap-4">
                                <div class="text-sm text-gray-600">
                                    <h1>MAIN MENU</h1>
                                </div>
                                <button
                                    class="flex gap-2 text-sm text-gray-900 hover:text-blue-800 hover:text-bold"
                                >
                                    <i class="fas fa-server my-auto"></i>
                                    <span>Master Data</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-10 h-screen">
                    <div class="p-8 bg-bg-primary h-full">
                        <div
                            class="p-3 rounded-xl bg-white flex flex-col gap-4"
                        >
                            <div class="grid grid-flow-col grid-cols-4 gap-4">
                                <div
                                    class="h-32 bg-bg-primary rounded-md flex flex-col justify-center"
                                >
                                    <div class="flex justify-center gap-3">
                                        <div class="my-auto">
                                            <i
                                                class="fas fa-boxes fa-2x text-blue-900"
                                            ></i>
                                        </div>
                                        <div class="flex flex-col">
                                            <div
                                                class="font-semibold text-gray-500 text-4xl"
                                            >
                                                372
                                            </div>
                                            <div class="text-xs text-gray-400">
                                                <span>Produk</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="h-32 bg-bg-primary rounded-md flex flex-col justify-center"
                                >
                                    <div class="flex justify-center gap-3">
                                        <div class="my-auto">
                                            <i
                                                class="fas fa-users fa-2x text-secondary-color"
                                            ></i>
                                        </div>
                                        <div class="flex flex-col">
                                            <div
                                                class="font-semibold text-gray-500 text-4xl"
                                            >
                                                372
                                            </div>
                                            <div class="text-xs text-gray-400">
                                                <span>Visitors</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="h-32 bg-bg-primary rounded-md flex flex-col justify-center"
                                >
                                    <div class="flex justify-center gap-3">
                                        <div class="my-auto">
                                            <i
                                                class="fas fa-box fa-2x text-red-400"
                                            ></i>
                                        </div>
                                        <div class="flex flex-col">
                                            <div
                                                class="font-semibold text-gray-500 text-4xl"
                                            >
                                                372
                                            </div>
                                            <div class="text-xs text-gray-400">
                                                <span>Services</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="h-32 bg-bg-primary rounded-md flex flex-col justify-center"
                                >
                                    <div class="flex justify-center gap-3">
                                        <div class="my-auto">
                                            <i
                                                class="fas fa-shopping-cart fa-2x text-blue-900"
                                            ></i>
                                        </div>
                                        <div class="flex flex-col">
                                            <div
                                                class="font-semibold text-gray-500 text-4xl"
                                            >
                                                372
                                            </div>
                                            <div class="text-xs text-gray-400">
                                                <span>Produk</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap-4">
                                <div
                                    class="flex-1 h-56 rounded-md bg-blue-400 text-white font-semibold flex flex-col justify-center"
                                >
                                    <div class="flex justify-center gap-2 mx-3">
                                        <img
                                            class="drop-shadow-xl max-h-36 shadow-white"
                                            src="/assets/img/welcome.png"
                                            alt=""
                                        />
                                        <div class="flex flex-col my-auto">
                                            <h1 class="text-2xl py-3">
                                                Hallo.. Saldi Sucipto
                                            </h1>
                                            <p class="text-sm font-thin">
                                                Selamat Datang di Dashboard
                                                Website Anda
                                            </p>
                                            <p class="text-sm font-thin">
                                                Anda bisa mengatur, Menambahkan
                                                dan Memperbaharui Konten pada
                                                website anda.
                                            </p>
                                            <button
                                                class="text-xs bg-slate-200 py-1 px-3 rounded-md text-gray-900 my-5 w-32"
                                            >
                                                Tutorial
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex-1 h-56 rounded-md bg-bg-primary"
                                ></div>
                            </div>

                            <div>
                                <div
                                    class="rounded-md bg-bg-primary h-80 relative overflow-scroll overflow-x-scroll overflow-y-hidden"
                                >
                                    <apexchart
                                        class="w-full asbolute"
                                        :width="chart.width"
                                        :height="chart.height"
                                        :type="chart.type"
                                        :options="chart.options"
                                        :series="chart.series"
                                    ></apexchart>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        chart: Object,
    },
};
</script>

<style></style>
