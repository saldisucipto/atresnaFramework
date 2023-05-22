<template>
    <div class="p-3 rounded-xl bg-white flex flex-col gap-4">
        <!-- Title Pages -->
        <title-pages :backto="'/dashboard/master/produk'">
            Master Kategori Produk
        </title-pages>
        <!-- Endt Title Pages -->
        <!-- Main menu  -->
        <div class="mx-3 flex flex-col">
            <div
                class="h-12 bg-slate-100 rounded-lg flex flex-col justify-center"
            >
                <div class="mx-2 flex justify-between py-2">
                    <div>
                        <input
                            type="search"
                            name=""
                            placeholder="Search Kategori Produk"
                            id=""
                            class="rounded-lg px-2 py-2 focus:outline-none text-sm"
                        />
                    </div>
                    <div class="flex gap-3">
                        <button
                            class="bg-blue-400 my-auto text-xs rounded-lg text-white py-2 px-3 hover:bg-white hover:text-blue-400 hover:drop-shadow-sm"
                            @click="openCreateModal()"
                        >
                            <i class="fas fa-plus"></i>
                            Buat Data Baru
                        </button>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table
                    class="w-full divide-y-2 divide-gray-200 bg-white text-sm"
                >
                    <thead class="ltr:text-left rtl:text-right text-left">
                        <tr>
                            <th
                                class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"
                            >
                                Nama Kategori
                            </th>
                            <th
                                class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"
                            >
                                Tanggal Pembuatan
                            </th>
                            <th
                                class="whitespace-nowrap px-4 py-2 font-medium text-gray-900 text-center"
                            >
                                Action
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        <tr v-if="this.produk.data == []"></tr>
                        <tr
                            v-else
                            v-for="itemProduk in produk.data"
                            class="hover:bg-gray-200"
                        >
                            <td
                                class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"
                            >
                                {{ itemProduk.nama_kategori }}
                            </td>
                            <td
                                class="whitespace-nowrap px-4 py-2 text-gray-700"
                            >
                                {{ itemProduk.created_at }}
                            </td>

                            <td
                                class="whitespace-nowrap py-2 flex gap-1 justify-center"
                            >
                                <a
                                    href="#"
                                    class="inline-block rounded bg-blue-400 px-4 py-2 text-xs font-medium text-white hover:bg-blue-700"
                                >
                                    View
                                </a>
                                <a
                                    href="#"
                                    class="inline-block rounded bg-yellow-400 px-4 py-2 text-xs font-medium text-white hover:bg-yellow-700"
                                >
                                    Edit
                                </a>
                                <a
                                    href="#"
                                    class="inline-block rounded bg-red-400 px-4 py-2 text-xs font-medium text-white hover:bg-red-700"
                                >
                                    Delete
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div
                    v-if="modalCreate"
                    class="absolute backdrop-blur-sm top-0 h-screen w-full overflow-hidden left-0 flex flex-col justify-center"
                >
                    <div
                        class="mx-auto w-2/4 bg-white drop-shadow-lg rounded-lg"
                    >
                        <div class="p-5">
                            <div class="flex justify-between h-6">
                                <div
                                    class="text-gray-600 font-semibold text-lg"
                                >
                                    Buat Kategori Baru {{ modalCreate }}
                                </div>
                                <button
                                    class="bg-red-400 text-white rounded-md p-4 flex flex-col justify-center hover:bg-red-700"
                                    @click="
                                        this.modalCreate = !this.modalCreate
                                    "
                                >
                                    <span class="">Tutup</span>
                                </button>
                            </div>
                        </div>
                        <hr />
                        <form
                            @submit.prevent="submitForm"
                            class="p-5 flex flex-col w-full gap-5"
                        >
                            <div class="flex flex-col gap-2">
                                <label class="text-gray-700" for=""
                                    >Nama Kategori Produk</label
                                >
                                <input
                                    class="drop-shadow-sm border py-2 px-3 rounded-md focus:outline-none text-sm"
                                    type="text"
                                    name="Nama Kategori Produk"
                                    placeholder="Nama Kategori Produk"
                                    v-model="form.nama_kategori"
                                />
                                <div
                                    class="text-xs px-1 text-red-600"
                                    v-if="errors.nama_kategori"
                                >
                                    {{ errors.nama_kategori }}
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-gray-700" for=""
                                    >Deskripsi Kategori Produk</label
                                >
                                <textarea
                                    class="drop-shadow-sm border py-2 px-3 rounded-md focus:outline-none text-sm"
                                    name=""
                                    id=""
                                    cols="10"
                                    rows="3"
                                    placeholder="Dekskripsi Kategori"
                                    v-model="form.deskripsi_kategori"
                                ></textarea>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-gray-700" for=""
                                    >Gambar Kategori</label
                                >

                                <input
                                    class="text-sm"
                                    type="file"
                                    src=""
                                    alt=""
                                    @input="
                                        form.gambar_produk =
                                            $event.target.files[0]
                                    "
                                />
                                <div
                                    class="text-xs px-1 text-red-600"
                                    v-if="errors.gambar_produk"
                                >
                                    {{ errors.gambar_produk }}
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
            </div>
            #
        </div>
        <!-- End Main Menu -->
    </div>
</template>

<script>
import Navigasi from "../../../../Widgets/Navigasi.vue";
import DashboardLayout from "../../../../Layouts/DashboardLayout.vue";
import TitlePages from "../../../../Widgets/TitlePages.vue";
import CardMasterData from "../../../../Widgets/CardMasterData.vue";
import { Link } from "@inertiajs/vue3";
// import formatRupiah from "../../../../Utils/format-rupiah";

export default {
    components: {
        Navigasi,
        DashboardLayout,
        TitlePages,
        CardMasterData,
        Link,
    },
    props: {
        chart: Object,
        produk: Object,
        errors: Object,
    },
    layout: DashboardLayout,
    methods: {
        formRupiahSaya(value) {
            var numberToString = value.toString(),
                sisa = numberToString.length % 3,
                rupiah = numberToString.substr(0, sisa),
                ribuan = numberToString.substr(sisa).match(/\d{3}/gi);
            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
                var separator = sisa ? "." : " ";
                rupiah += separator + ribuan.join(".");
            }
            let finalFormat = "Rp. " + rupiah;
            return finalFormat;
        },
        openCreateModal() {
            this.modalCreate = true;
        },
    },
};
</script>

<script setup>
import { router, useForm } from "@inertiajs/vue3";
import { ref } from "vue";

let modalCreate = ref(false);

const form = useForm({
    nama_kategori: null,
    deskripsi_kategori: null,
    gambar_produk: null,
});

function submitForm() {
    router.post("/dashboard/master/produk/create-kategori-produk", form, {
        preserveScroll: true,
        onSuccess: () => {
            form.reset();
            location.reload();
        },
    });
}
</script>

<style></style>
