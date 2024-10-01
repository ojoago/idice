<template>
    <div >
        
        <div v-if="$page.props.flash.message" class="text-center py-4 lg:px-4 mx-8">
            <div class="p-2 bg-blue-500 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                <span class="font-semibold mr-2 text-left flex-auto">{{ $page.props.flash.message }}</span>
            </div>
        </div>
        <div class="text-center py-4 lg:px-4 mx-8" v-if="$page.props.flash.error">
            <div class="bg-red-500 items-center text-indigo-100 px-4 py-3 rounded relative lg:rounded-full flex lg:inline-flex" role="alert">
                <span class="font-semibold mr-2 text-left flex-auto">{{ $page.props.flash.error }}</span>
            </div>
        </div>
        <div class="text-center py-4 lg:px-4 mx-8" v-if="$page.props.flash.success">
            <div class="p-2 bg-green-500 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                <span class="font-semibold mr-2 text-left flex-auto">{{ $page.props.flash.success }}</span>
            </div>
        </div>

       
    </div>
</template>

<script setup>

</script>