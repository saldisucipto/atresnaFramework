<template>
    <!-- Body  -->
    <div
        class="w-full bg-slate-100 flex flex-col gap-10 text-gray-700 pb-32 h-screen justify-center"
    >
        <div
            class="max-w-screen-md bg-white mx-auto h-1/2 drop-shadow-lg rounded-lg flex flex-col"
        >
            <div
                class="m-2 overflow-hidden h-full flex flex-col justify-center gap-3"
            >
                <img
                    class="max-h-36 mx-auto"
                    src="/assets/img/logo.png"
                    alt=""
                />
                <h1 class="text-lg max-w-md text-justify">
                    Ini adalah module dashboard dari aplikasi shoes app dengan
                    flutter
                </h1>
                <a
                    href="/login"
                    type="button"
                    class="h-10 bg-primary-color rounded-lg text-white text-center flex flex-col justify-center"
                    ><span class="">Login Untuk Akses Dashboard</span></a
                >
            </div>
        </div>
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
