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
                                class="h-10 w-10 rounded-full bg-gray-700 text-center flex flex-col justify-center"
                            >
                                <i
                                    v-if="$page.props.users.profile == ''"
                                    class="fas fa-user text-gray-50"
                                ></i>
                            </div>
                            <button @click="modalShow()">
                                <span class="my-auto"
                                    >{{ $page.props.users.name }}

                                    <i
                                        v-if="showModal"
                                        class="fas fa-arrow-down my-auto"
                                    ></i>
                                    <i
                                        v-else
                                        class="fas fa-arrow-up my-auto"
                                    ></i>
                                </span>
                            </button>
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
        <div
            v-if="showModal"
            class="absolute w-52 bg-white drop-shadow-md top-20 overflow-hidden right-0 mx-3 rounded-md"
        >
            <div class="p-2 flex flex-col gap-4">
                <span class="text-gray-700 font-semibold text-sm">
                    Settings
                </span>
                <hr />
                <a
                    href="/dashboard/profile"
                    class="h-9 rounded-md bg-white hover:bg-slate-100 drop-shadow-sm flex flex-col justify-center font-semibold text-gray-700"
                >
                    <div class="mx-3">
                        <div class="flex gap-2">
                            <i class="fas fa-cogs my-auto"></i>
                            <span>Profile</span>
                        </div>
                    </div>
                </a>
                <button
                    @click="logout()"
                    class="h-9 rounded-md bg-white hover:bg-slate-100 drop-shadow-sm flex flex-col justify-center font-semibold text-gray-700"
                >
                    <div class="mx-3">
                        <div class="flex gap-2">
                            <i class="fas fa-power-off my-auto"></i>
                            <span>Logout</span>
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>
</template>

<script>
import Navigasi from "../Widgets/Navigasi.vue";
import { router } from "@inertiajs/vue3";

export default {
    components: {
        Navigasi,
    },
    data() {
        return {
            showModal: false,
        };
    },
    props: {
        chart: Object,
    },
    methods: {
        modalShow() {
            this.showModal = !this.showModal;
        },
        logout() {
            router.post("/logout", {
                preserveScroll: true,
            });
        },
    },
};
</script>

<style></style>
