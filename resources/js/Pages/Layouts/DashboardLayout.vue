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
                        <img class="max-h-8" :src="'/assets/img/logo.png'" />
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
                        <!-- Navigasi -->
                        <navigasi></navigasi>
                        <!-- End Navigasi -->
                    </div>
                </div>
                <div class="col-span-10 h-screen">
                    <div class="p-8 bg-bg-primary h-full">
                        <slot> </slot>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Navigasi from "../Widgets/Navigasi.vue";
export default {
    components: {
        Navigasi,
    },
    props: {
        chart: Object,
    },
};
</script>

<style></style>
