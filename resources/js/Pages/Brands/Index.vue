<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    brands: {
        type: Object,
        required: true,
    },
});
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Brands
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto sm:px-6 lg:px-8">
                <ul
                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-6"
                >
                    <Link
                        v-for="brand in brands"
                        :key="brand.slug"
                        :href="route('brands.show', brand.slug)"
                    >
                        <li class="relative aspect-square border">
                            <div
                                class="absolute p-10 inset-0 flex items-center justify-center bg-gray-100 hover:bg-white/25 transition"
                            >
                                <img
                                    class="mb-6 max-w-full max-h-full object-contain filter brightness-0 grayscale-100 hover:scale-125 transition-all"
                                    :src="brand.icon.icon_path"
                                    :alt="brand.title"
                                />
                            </div>
                            <div
                                class="absolute p-px inset-x-0 bottom-0 bg-slate-900 text-lg lg:text-xl text-white capitalize text-center"
                            >
                                {{ brand.title }}
                            </div>
                        </li>
                    </Link>
                </ul>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
