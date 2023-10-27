<template>
    <!-- Body  -->
    <div
        class="w-full h-screen bg-slate-100 flex flex-col gap-10 text-gray-700"
    >
        <!-- Tranding Info -->
        <div class="h-10 w-full bg-white">
            <div
                class="max-w-screen-2xl mx-auto flex flex-col justify-center h-full"
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
        <div class="h-20 flex max-w-screen-2xl mx-auto justify-start w-full">
            <a href="#" class="my-auto flex gap-1">
                <img
                    class="max-h-16"
                    :src="'/storage/img/company/' + companyInfo.company_logo"
                    alt=""
                />
                <div class="flex flex-col justify-end">
                    <span class="text-4xl font-bold text-blue-900"
                        >ATRESNA</span
                    >
                </div>
            </a>
        </div>
        <!-- End Logo Placed -->
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
