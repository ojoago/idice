<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head,Link } from '@inertiajs/vue3';
defineProps({
    data:Array
})
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
      

        <div class="py-12 px-4">
             <div class="overflow-auto rounded-lg shadow">
                
                <table class="w-full">
                    <thead class="bg-gray-50 border-b-2 border-gray-200">
                        <tr>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left">S/N</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left">Names</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left">NIN</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left">gsm</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left">Email</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left">Gender</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left">Date Of Birth</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left">State of Origin</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left">LGA of Origin</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left">Residence State</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left">Residence LGA</th>
                            <th class="p-3 text-sm font-semibold tracking-wide text-left"> 
                                <i class="fa fa-cog"></i>
                                <font-awesome-icon icon="fa-solid fa-cog" />
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white" v-for="(row,loop) in data.data" :key="loop">
                            <td class="p-3 text-sm font-semibold tracking-wide text-left">{{ loop+1 }}</td>
                            <td class="p-3 text-sm font-semibold tracking-wide text-left">{{ row?.first_name }} {{ row?.last_name }}</td>
                            <td class="p-3 text-sm font-semibold tracking-wide text-left">{{ row?.nin }}</td>
                            <td class="p-3 text-sm font-semibold tracking-wide text-left">{{ row?.gsm }}</td>
                            <td class="p-3 text-sm font-semibold tracking-wide text-left">{{ row?.user?.email }}</td>
                            <td class="p-3 text-sm font-semibold tracking-wide text-left">{{ row?.gender }}</td>
                            <td class="p-3 text-sm font-semibold tracking-wide text-left">{{ row?.dob }}</td>
                            <td class="p-3 text-sm font-semibold tracking-wide text-left">{{ row?.state_of_origin }}</td>
                            <td class="p-3 text-sm font-semibold tracking-wide text-left">{{ row?.lga_of_origin }}</td>
                            <td class="p-3 text-sm font-semibold tracking-wide text-left">{{ row?.residence_state }}</td>
                            <td class="p-3 text-sm font-semibold tracking-wide text-left">{{ row?.residence_lga }}</td>
                            <td class="p-3 text-sm font-semibold tracking-wide text-left">
                                
                                <Link :href="route('preview',{ pid: row?.user_pid })">
                                             <button class="p-1 oy-1 text-sm bg-green-500 text-white me-2 rounded inline-block">Preview</button>
                                </Link>
                            </td>
                            
                            
                        </tr>
                    </tbody>
                </table>
                
            </div>

        </div>
    </AuthenticatedLayout>
</template>
