<template>
    <div class="w-full overflow-auto">

        <div class="top-0 py-2 w-full px-4 bg-gray-50 mt-0 sticky rounded" style="z-index:9">
            <div class="w-full flex gap-6">
                <h3 class="text-base lg:text-lg whitespace-nowrap" v-text="translate('Dashboard Reports')"></h3>

            </div>
        </div>

        <div class="block w-full overflow-x-auto py-2" v-if="content">
            <div class="w-full overflow-y-auto overflow-x-hidden px-2 mt-6">
                <div class="w-full gap-6 flex ">
                    <div class="flex gap-10 mb-10 w-full">
                        <div class="card card-flush min-h-100 mb-xl-10">
                            <div class="card-header pt-5">
                                <div class="card-title d-flex flex-column">
                                    <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2"
                                        v-text="content.total_media_views"></span>
                                    <span class="text-gray-500 pt-1 fw-semibold fs-6"
                                        v-text="translate('Media Views at date range')"></span>
                                </div>
                            </div>

                            <div class="card-body d-flex flex-column justify-content-end pe-0">
                                <span class="fs-6 fw-bolder text-gray-800 d-block mb-2"
                                    v-text="translate('Total media views')"></span>
                            </div>
                        </div>
                        
                        <div class="card card-flush min-h-100 mb-xl-10">
                            <div class="card-header pt-5">
                                <div class="card-title d-flex flex-column">
                                    <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2"
                                        v-text="content.customers_count"></span>
                                    <span class="text-gray-500 pt-1 fw-semibold fs-6"
                                        v-text="translate('Registered customers at date range')"></span>
                                </div>
                            </div>

                            <div class="card-body d-flex flex-column justify-content-end pe-0">
                                <span class="fs-6 fw-bolder text-gray-800 d-block mb-2"
                                    v-text="translate('Registered Customers')"></span>
                                <div class="symbol-group symbol-hover flex-nowrap">
                                    
                                    <a :href="'/artist/'+customer.customer_id" @mouseover="customer.showTip = true" @mouseleave="customer.showTip = false" class="relative symbol symbol-35px symbol-circle" v-for="customer in content.new_customers">
                                        <img alt="Pic" :src="customer.picture">
                                        <tooltip v-if="customer.showTip" :key="customer.showTip" :title="customer.name" ></tooltip></a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="h-100 w-full">
                        <div class="d-flex flex-column h-100 w-full">
                            <div class="w-full flex gap-4">
                                <div class="mb-7 w-full">
                                    <div class="d-flex flex-stack mb-6">
                                        <div class="flex-shrink-0 me-5">
                                            <span class="text-gray-500 fs-7 fw-bold me-2 d-block lh-1 pb-1"
                                                v-text="translate('Welcome')"></span>
                                            <span class="text-gray-800 fs-1 fw-bold" v-text="auth.name"></span>
                                            <span
                                                class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-4 fs-7"
                                                v-text="translate('Active')"></span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap d-grid gap-2">
                                        <div class="d-flex align-items-center me-5 me-xl-13">
                                            <img :src="system_setting['logo'] ?? '/uploads/images/default_logo.png'"
                                                class="h-20" alt="">
                                        </div>
                                    </div>
                                </div>
                                <img :src="'/uploads/img/dashboard-placeholder.svg'" />
                            </div>
                        </div>
                        <div class="flex w-full">
                
                            <div class="border border-dashed border-gray-300 w-full rounded my-3 p-4 me-6" @mouseover="content.totalTip = true" @mouseleave="content.totalTip = false">                    
                                <span class="fs-2x fw-bold text-gray-800 lh-1">
                                    <span data-kt-countup="true" data-kt-countup-value="6,840" data-kt-countup-prefix="$" class="counted" data-kt-initialized="1" v-text="'$'+content.total_earnings" ></span>
                                </span>
                                <div class="w-full relative symbol symbol-35px symbol-circle" >
                                    <span class="fs-6 fw-semibold text-gray-500 d-block lh-1 pt-2" v-text="translate('Total Earnings')"></span>
                                </div>
                            </div>
                            
                            <div class="border border-dashed border-gray-300 w-full rounded my-3 p-4 me-6" @mouseover="content.countTip = true" @mouseleave="content.countTip = false" >   
                                <span class="fs-2x fw-bold text-gray-800 lh-1">
                                    <span class="counted" data-kt-countup="true" data-kt-countup-value="80" data-kt-initialized="1" v-text="content.transactions_count"></span>
                                </span>
                                <div class="w-full relative symbol symbol-35px symbol-circle" >
                                    <span class="flex-none fs-6 fw-semibold text-gray-500 d-block lh-1 pt-2" v-text="translate('Subscriptions')"></span>
                                </div>
                            </div>
                            

                            
                            <div class="border border-dashed border-gray-300 w-full rounded my-3 p-4 me-6" @mouseover="content.pendingTip = true" @mouseleave="content.pendingTip = false">
                                <span class="fs-2x fw-bold text-gray-800 lh-1">
                                    <span data-kt-countup="true" data-kt-countup-value="1,240" data-kt-countup-prefix="$" class="counted" data-kt-initialized="1" v-text="content.pending_invoices_count"></span>
                                </span>
                                <div  class="w-full relative symbol symbol-35px symbol-circle" >
                                    <span class="w-full fs-6 fw-semibold text-gray-500 d-block lh-1 pt-2" v-text="translate('Pending')"></span>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</template>
<script>
import { ref } from 'vue';
import moment from 'moment';
import { translate, handleGetRequest } from '@/utils.vue';

export default
    {
        components: {
            // MapChart,
        },
        name: 'categories',
        setup(props) {

            const orderStatus = ref('0');

            const url = ref(props.path + '?load=json');

            const line_options = ref();
            const merge_line_options = ref();
            const pie_options = ref();

            const content = ref({});

            const activeDate = ref();
            const projects = ref([]);

            const events = ref([]);

            const load = (path) => {
                handleGetRequest(path).then(response => {
                    content.value = JSON.parse(JSON.stringify(response));
                    setDataTabs(JSON.parse(JSON.stringify(response)))
                });
            }


            const dateValue = ref({
                startDate: "",
                endDate: "",
            });

            const formatter = ref({
                date: "YYYY-MM-DD",
                month: "MMM",
            });

            const handleSelectedDate = (event) => {
                handleGetRequest(props.conf.url + props.path + '?start_date=' + event.startDate + '&end_date=' + event.endDate + '&load=json').then(response => {
                    content.value = JSON.parse(JSON.stringify(response))
                    setDataTabs(content);
                });
            }

            return {
                handleSelectedDate,
                translate,
                content,

            }
        },
        props: [
            'langs',
            'setting',
            'system_setting',
            'conf',
            'path',
            'auth',
            'currency'
        ]
    };
</script>
<style lang="css">
.rtl #side-cart-container {
    right: auto;
    left: 0;
}

canvas {
    max-width: 100%;
}
</style>