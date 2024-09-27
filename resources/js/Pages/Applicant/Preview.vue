<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

import { Head, Link } from '@inertiajs/vue3';
defineProps({
    data:Array
})
</script>

<template>
      <Head title="Preview Application" />
    <AuthenticatedLayout>
        
        <div class="max-w-4xl mx-auto mt-10 bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="flex items-center p-6">
                <img class="w-24 h-24 rounded-full object-cover border-2 border-gray-300" src="https://via.placeholder.com/150" alt="Profile Picture">
                <div class="ml-4">
                    <h1 class="text-2xl font-semibold">Name: {{ data.first_name }} {{ data.last_name }} </h1>
                    <p class="text-gray-600">NIN: {{ data.nin }}</p>
                    <p class="text-gray-500">Email: {{ data.gsm }}</p>
                    <p class="text-gray-500">Gender: {{ data.gender }}</p>
                    <p class="text-gray-500">Date Of Birth: {{ data.dob }}</p>
                </div>
                <div class="ml-4">
                    <h1 class="text-2xl font-semibold">State of Origin: {{ data.state_of_origin }} </h1>
                    <p class="text-gray-600">LGA of Origin: {{ data.lga_of_origin }}</p>
                    <p class="text-gray-500">Residence State: {{ data.residence_state }}</p>
                    <p class="text-gray-500">Residence LGA: {{ data.residence_lga }}</p>
                    <p class="text-gray-500">Address: {{ data.address }}</p>
                </div>
            </div>

           <!-- <div class="px-6 pb-6">
                <h2 class="text-lg font-semibold mb-2">About Me</h2>
                <p class="text-gray-700">I am a passionate software engineer with experience in building web applications. I love working with modern technologies and continuously learning new skills.</p>
            </div> -->

            <div class="px-6 pb-6 border-t border-gray-200">
              <!--  {{ data.skills }} -->
                <h2 class="text-lg font-semibold mb-2">Skills</h2>
                <fieldset  v-for="(skill,loop) in data.skills" :key="loop" class="border border-gray-300 rounded-lg p-4">
                        <legend class="text-lg font-medium text-left px-2">{{ skill.skill }}</legend>
                    <p >
                        {{ skill.certification }}
                    </p>
                    <p >
                        {{ skill.year }}
                    </p>
                     
                </fieldset>
            </div>
            <div class="px-6 pb-6 border-t border-gray-200">
                <h2 class="text-lg font-semibold mb-2">Education</h2>
               
                <fieldset  v-for="(edu,loop) in data.qualification" :key="loop" class="border border-gray-300 rounded-lg p-4">
                        <legend class="text-lg font-medium text-left px-2">{{ edu.degree }}</legend>
                    <p >
                      Institution:  {{ edu.institution }}
                    </p>
                    <p >
                       Course of Study: {{ edu.field }}
                    </p>
                    <p >
                       Grade: {{ edu.grade }}
                    </p>
                     
                </fieldset>
            </div>
            <Link :href="route('dashboard')"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                Back to List
             </Link>
            
        </div>

         
    </AuthenticatedLayout>
</template>


<style scoped>

</style>