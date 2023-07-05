<template>
    <div class="p-3 rounded-xl bg-white flex flex-col gap-4">
        <!-- Title Pages -->
        <title-pages> Master Pages </title-pages>
        <!-- Endt Title Pages -->

        <!-- Main menu  -->
        <div class="grid grid-flow-row grid-cols-4 gap-5 mb-10">
            <!-- Card Master Data -->
            <card-master-data :linkTujuan="'produk'" :iconData="'fa-boxes'"
                >Master Produk</card-master-data
            >
            <card-master-data :linkTujuan="'servis'" :iconData="'fa-users-cog'"
                >Master Jasa & Sevices</card-master-data
            >
            <card-master-data :linkTujuan="'produk'" :iconData="'fa-boxes'"
                >Master Produk</card-master-data
            >
            <card-master-data :linkTujuan="'produk'" :iconData="'fa-boxes'"
                >Master Produk</card-master-data
            >
            <card-master-data :linkTujuan="'produk'" :iconData="'fa-boxes'"
                >Master Produk</card-master-data
            >
            <!-- End Card Master Data -->
        </div>
        <!-- End Main Menu -->
    </div>
</template>

<script>
import Navigasi from "../../Widgets/Navigasi.vue";
import DashboardLayout from "../../Layouts/DashboardLayout.vue";
import TitlePages from "../../Widgets/TitlePages.vue";
import CardMasterData from "../../Widgets/CardMasterData.vue";

export default {
    components: {
        Navigasi,
        DashboardLayout,
        TitlePages,
        CardMasterData,
    },
    props: {
        chart: Object,
    },
    layout: DashboardLayout,
};
</script>

<style></style>
