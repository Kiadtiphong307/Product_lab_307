<script setup>
import ProductLogo from '@/Components/Main/ProductLogo.vue';


</script>

<template>
    <div>
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
            <ProductLogo class="block h-20 w-auto" />

            <h1 class="mt-8 text-2xl font-medium text-gray-900">
                แสดงรายการสินค้า
            </h1>

            <p class="mt-6 text-gray-500 leading-relaxed">
                ยินดีต้อนรับสินค้าที่มีให้เลือกมากมาย
            </p>
        </div>

        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
            <div class="p-6 text-gray-900">
                <strong>แสดงรายการสินค้า</strong>
                <ul>
                    <li v-for="index in products" :key="index">
                        {{ index.product_code }} | {{ index.product_name }} | ราคา: {{ index.price }} | จำนวน: {{ index.quantity }}
                    </li>
                </ul>
            </div>
        </div>

    </div>

</template>
