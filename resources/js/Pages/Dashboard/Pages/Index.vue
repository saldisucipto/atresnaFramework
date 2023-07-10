<template>
    <div class="p-3 rounded-xl bg-white flex flex-col gap-4">
        <!-- Title Pages -->
        <title-pages> Konfigurasi Static Konten </title-pages>
        <!-- Endt Title Pages -->

        <!-- Main menu  -->
        <div class="grid grid-flow-row grid-cols-5 gap-5 mb-10">
            <!-- Card Staic Pages -->
            <div
                class="h-52 bg-slate-100 rounded-md flex flex-col drop-shadow-md"
            >
                <div>
                    <img
                        class="object-cover rounded-tr-md rounded-tl-md"
                        src="/assets/img/img-banner.jpg"
                        alt=""
                    />
                </div>
                <div class="p-2 flex flex-col gap-2">
                    <span class="text-sm font-semibold text-gray-800"
                        >Judul Pages</span
                    >
                    <div
                        class="text-xs text-white bg-blue-600 px-2 rounded-md h-5 w-20 text-center"
                    >
                        <span class="my-auto">pages</span>
                    </div>
                    <button
                        class="text-xs text-white bg-primary-color px-2 rounded-md h-5 text-center hover:bg-secondary-color"
                    >
                        <span class="my-auto">Show</span>
                    </button>
                </div>
            </div>
            <!-- End Card Staic Pages -->
        </div>
        <!-- End Main Menu -->
    </div>
</template>

<script>
import Navigasi from "../../Widgets/Navigasi.vue";
import DashboardLayout from "../../Layouts/DashboardLayout.vue";
import TitlePages from "../../Widgets/TitlePages.vue";
import CardKonfData from "../../Widgets/CardKonfData.vue";

export default {
    components: {
        Navigasi,
        DashboardLayout,
        TitlePages,
        CardKonfData,
    },
    props: {
        chart: Object,
    },
    layout: DashboardLayout,
};
</script>

<style></style>
