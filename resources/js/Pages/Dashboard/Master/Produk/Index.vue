<template>
    <div class="p-3 rounded-xl bg-white flex flex-col gap-4">
        <!-- Title Pages -->
        <title-pages :backto="'/dashboard/master'"> Master Produk </title-pages>
        <!-- Endt Title Pages -->

        <!-- Main menu  -->
        <div class="mx-3 flex flex-col">
            <div
                class="h-12 bg-slate-100 rounded-lg flex flex-col justify-center"
            >
                <div class="mx-2 flex justify-between">
                    <div>
                        <input
                            type="search"
                            name=""
                            placeholder="Search Produk"
                            id=""
                            class="rounded-lg px-2 py-2 focus:outline-none text-sm"
                        />
                    </div>
                    <div class="flex gap-3">
                        <Link
                            class="bg-blue-400 my-auto text-xs rounded-lg text-white py-2 px-3 hover:bg-white hover:text-blue-400 hover:drop-shadow-sm"
                        >
                            Buat Kategori Produk
                        </Link>
                        <Link
                            class="bg-blue-400 my-auto text-xs rounded-lg text-white py-2 px-3 hover:bg-white hover:text-blue-400 hover:drop-shadow-sm"
                        >
                            Buat Produk
                        </Link>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table
                    class="w-full divide-y-2 divide-gray-200 bg-white text-sm"
                >
                    <thead class="ltr:text-left rtl:text-right">
                        <tr>
                            <th
                                class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"
                            >
                                Name
                            </th>
                            <th
                                class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"
                            >
                                Date of Birth
                            </th>
                            <th
                                class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"
                            >
                                Role
                            </th>
                            <th
                                class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"
                            >
                                Salary
                            </th>
                            <th class="px-4 py-2"></th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td
                                class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"
                            >
                                John Doe
                            </td>
                            <td
                                class="whitespace-nowrap px-4 py-2 text-gray-700"
                            >
                                24/05/1995
                            </td>
                            <td
                                class="whitespace-nowrap px-4 py-2 text-gray-700"
                            >
                                Web Developer
                            </td>
                            <td
                                class="whitespace-nowrap px-4 py-2 text-gray-700"
                            >
                                $120,000
                            </td>
                            <td class="whitespace-nowrap px-4 py-2">
                                <a
                                    href="#"
                                    class="inline-block rounded bg-blue-400 px-4 py-2 text-xs font-medium text-white hover:bg-blue-700"
                                >
                                    View
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td
                                class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"
                            >
                                Jane Doe
                            </td>
                            <td
                                class="whitespace-nowrap px-4 py-2 text-gray-700"
                            >
                                04/11/1980
                            </td>
                            <td
                                class="whitespace-nowrap px-4 py-2 text-gray-700"
                            >
                                Web Designer
                            </td>
                            <td
                                class="whitespace-nowrap px-4 py-2 text-gray-700"
                            >
                                $100,000
                            </td>
                            <td class="whitespace-nowrap px-4 py-2">
                                <a
                                    href="#"
                                    class="inline-block rounded bg-blue-400 px-4 py-2 text-xs font-medium text-white hover:bg-blue-700"
                                >
                                    View
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td
                                class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"
                            >
                                Gary Barlow
                            </td>
                            <td
                                class="whitespace-nowrap px-4 py-2 text-gray-700"
                            >
                                24/05/1995
                            </td>
                            <td
                                class="whitespace-nowrap px-4 py-2 text-gray-700"
                            >
                                Singer
                            </td>
                            <td
                                class="whitespace-nowrap px-4 py-2 text-gray-700"
                            >
                                $20,000
                            </td>
                            <td class="whitespace-nowrap px-4 py-2">
                                <a
                                    href="#"
                                    class="inline-block rounded bg-blue-400 px-4 py-2 text-xs font-medium text-white hover:bg-blue-700"
                                >
                                    View
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            #
        </div>
        <!-- End Main Menu -->
    </div>
</template>

<script>
import Navigasi from "../../../Widgets/Navigasi.vue";
import DashboardLayout from "../../../Layouts/DashboardLayout.vue";
import TitlePages from "../../../Widgets/TitlePages.vue";
import CardMasterData from "../../../Widgets/CardMasterData.vue";
import { Link } from "@inertiajs/vue3";

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
    },
    layout: DashboardLayout,
};
</script>

<style></style>
