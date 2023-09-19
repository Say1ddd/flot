<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    brand: {
        type: Object,
        required: true,
    },
    products: {
        type: Object,
        required: true,
    },
    images: {
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
                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-5 gap-10"
                >
                <p>{{ brand.title }}</p>
                <div class=" whitespace-pre-line">{{ brand.description }}</div>
                <img :src="brand.icon.icon_path" :alt="brand.title" />
                    <Link
                        v-for="product in products"
                        :key="product.slug"
                        :href="route('products.show', product.slug)"
                    >
                        <li class="relative aspect-square border">
                            <div
                                class="absolute p-10 inset-0 flex items-center justify-center bg-gray-100"
                            >
                                <img
                                    class="mb-6 max-w-full max-h-full object-contain filter brightness-0 grayscale-100"
                                    :src="product.icon.icon_path"
                                    :alt="product.name"
                                />
                            </div>
                            <div
                                class="absolute p-px inset-x-0 bottom-0 bg-slate-900 text-lg lg:text-xl text-white capitalize text-center"
                            >
                                {{ product.name }}
                            </div>
                        </li>
                    </Link>
                </ul>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
