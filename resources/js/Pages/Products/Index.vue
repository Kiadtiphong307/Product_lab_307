<script setup>
import ProductLogo from '@/Components/Logo/ProductLogo.vue';
import AppLayout from '@/Layouts/AppLayout.vue';

import { defineProps } from 'vue';

const props = defineProps({
    products: {
        type: Array,
        required: true,
    },
});


</script>

<template>
    <AppLayout title="Products">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Products
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

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

        
        <div class="bg-gray-200 bg-opacity-25 grid grid-cols- md:grid-cols-1 gap-6 lg:gap-78p-6 lg:p-10"> 
            <div><h3> <strong>แสดงรายการสินค้า</strong> </h3></div>
            
            <div class="mt-5 text-gray-500 text-sm leading-relaxed" v-for=" (product,index ) in products" :key="index"><h6 >
                <div>
                        <strong>ลำดับ  {{ index+1 }}</strong>  <br>
                        <strong>
                            รหัสสินค้า : {{ product.product_code }} <br>
                            ชื่อสินค้า : {{ product.product_name }} <br>
                        </strong> 
        
                        รายละเอียด : {{ product.description }} <br>
                        ราคา: {{ product.price }} บาท
                        จำนวน: {{ product.quantity }} ชิ้น
                </div>
                    </h6>
                </div>
             </div>

        </div>
    </div>
</div>
</div>

        
    </AppLayout>
</template>
