<template>
    <div class="p-3 rounded-xl bg-white flex flex-col gap-4">
        <!-- Title Pages -->
        <title-pages :backto="'/dashboard/konfigurasi'">
            Konfigurasi Data Company Profile
        </title-pages>
        <!-- Endt Title Pages -->

        <!-- Mesasge -->
        <div
            v-if="$page.props.flash.message"
            class="mx-3 h-12 bg-green-400 rounded-lg flex flex-col justify-center"
        >
            <div class="mx-4 flex justify-between py-2">
                <div class="my-auto font-semibold text-white">
                    {{ $page.props.flash.message }}
                </div>
                <div class="flex gap-3">
                    <button
                        class="bg-white my-auto text-xs rounded-lg font-semibold py-2 px-3 text-green-400 hover:drop-shadow-sm"
                        @click="$page.props.flash.message = null"
                    >
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- End Message -->
        <!-- Main menu  -->
        <div class="mx-3 grid grid-flow-col grid-cols-7">
            <div class="col-span-2 p-5 bg-slate-600">
                <div class="flex flex-col justify-start">
                    <div v-if="this.data.company_logo" class="mx-auto">
                        <img
                            :src="
                                '/storage/img/company/' + this.data.company_logo
                            "
                            alt=""
                        />
                    </div>
                </div>
                <div class="flex justify-center">
                    <div
                        v-if="this.imageBaru != null"
                        class="flex justify-between gap-2"
                    >
                        <img
                            class="rounded-md max-w-sm mx-auto max-h-60"
                            :src="imagesShow(this.imageBaru)"
                            alt=""
                        />
                    </div>
                    <div v-else>
                        <img
                            class="rounded-md max-w-sm mx-auto max-h-60"
                            src=""
                            alt=""
                        />
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto col-span-5 bg-slate-500">
                <form
                    @submit.prevent="submitForm"
                    class="p-5 flex flex-col w-full gap-5"
                >
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-700">Company Name</label>
                        <input
                            class="drop-shadow-sm border py-2 px-3 rounded-md focus:outline-none text-sm"
                            type="text"
                            name=""
                            placeholder="Company Name"
                            v-model="form.company_name"
                        />
                        <div
                            class="text-xs px-1 text-red-600"
                            v-if="errors.company_name"
                        >
                            {{ errors.company_name }}
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-700">Company Email</label>

                        <input
                            class="drop-shadow-sm border py-2 px-3 rounded-md focus:outline-none text-sm"
                            type="email"
                            name=""
                            placeholder="Company Email"
                            v-model="form.company_email"
                        />
                        <div
                            class="text-xs px-1 text-red-600"
                            v-if="errors.company_email"
                        >
                            {{ errors.company_email }}
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-700">Company Phone</label>
                        <input
                            class="drop-shadow-sm border py-2 px-3 rounded-md focus:outline-none text-sm"
                            type="text"
                            name=""
                            maxlength="13"
                            placeholder="Company Phone"
                            v-model="form.company_phone"
                        />
                        <div
                            class="text-xs px-1 text-red-600"
                            v-if="errors.company_phone"
                        >
                            {{ errors.company_phone }}
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-gray-700">Company Phone 1</label>
                        <input
                            class="drop-shadow-sm border py-2 px-3 rounded-md focus:outline-none text-sm"
                            type="text"
                            name=""
                            maxlength="13"
                            placeholder="Company Phone"
                            v-model="form.company_phone1"
                        />
                        <div
                            class="text-xs px-1 text-red-600"
                            v-if="errors.company_phone1"
                        >
                            {{ errors.company_phone1 }}
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-700">Company N.P.W.P</label>
                        <input
                            class="drop-shadow-sm border py-2 px-3 rounded-md focus:outline-none text-sm"
                            type="text"
                            name=""
                            maxlength="13"
                            placeholder="Company Nomor Pokok Wajib Pajak"
                            v-model="form.company_npwp"
                        />
                        <div
                            class="text-xs px-1 text-red-600"
                            v-if="errors.company_npwp"
                        >
                            {{ errors.company_npwp }}
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-gray-700">Alamat Company</label>
                        <textarea
                            class="drop-shadow-sm border py-2 px-3 rounded-md focus:outline-none text-sm"
                            name=""
                            id=""
                            cols="30"
                            rows="5"
                            v-model="form.company_address"
                        ></textarea>
                        <div
                            class="text-xs px-1 text-red-600"
                            v-if="errors.company_address"
                        >
                            {{ errors.company_address }}
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-gray-700">Company Logo</label>
                        <input
                            class="text-sm"
                            type="file"
                            @input="
                                form.company_logo = $event.target.files[0];
                                uploadFoto();
                            "
                        />
                        <div
                            class="text-xs px-1 text-red-600"
                            v-if="errors.company_logo"
                        >
                            {{ errors.company_logo }}
                        </div>
                    </div>

                    <button
                        class="bg-blue-400 hover:bg-blue-700 text-white py-1 rounded-md drop-shadow-sm"
                        type="submit"
                    >
                        Buat Data Baru
                    </button>
                </form>
            </div>
        </div>
        <!-- End Main Menu -->
    </div>
</template>

<script>
import Navigasi from "../../../Widgets/Navigasi.vue";
import DashboardLayout from "../../../Layouts/DashboardLayout.vue";
import TitlePages from "../../../Widgets/TitlePages.vue";
import { Link } from "@inertiajs/vue3";
import { router, useForm } from "@inertiajs/vue3";

export default {
    data() {
        return {
            imageBaru: null,
        };
    },
    setup() {
        const form = useForm({
            company_name: "",
            company_phone: "",
            company_phone1: "",
            company_email: "",
            company_npwp: "",
            company_address: "",
            company_logo: "",
        });

        const deleteForm = useForm({
            idServis: [],
        });

        return { form, deleteForm };
    },
    components: {
        Navigasi,
        DashboardLayout,
        TitlePages,
        Link,
    },
    props: {
        data: Object,
        errors: Object,
    },
    layout: DashboardLayout,
    methods: {
        uploadFoto() {
            this.imageBaru = this.form.company_logo;
        },
        imagesShow(img) {
            return URL.createObjectURL(img);
        },
        loadData() {},
        submitForm() {
            {
                router.post(
                    "/dashboard/master/servis/update-servis/" +
                        this.singelData[0].id,
                    this.form,
                    {
                        preserveScroll: true,
                        onSuccess: () => {
                            this.form.reset();
                            this.updateMode = false;
                            this.imageBaru = null;
                            this.modalCreate = null;
                            this.closedModal();
                        },
                    }
                );
            }
        },
    },
    mounted() {
        console.log("tes");
    },
};
</script>
