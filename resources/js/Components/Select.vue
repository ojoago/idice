<template>
        <!--<InputLabel :for="label" :value="label" /> -->
       
        <InputLabel :for="label" :value="label" />
        <select v-model="selected" @change="change" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" :class="error ? 'is-invalid' : ''">
        <option v-if="placeholder" value="">{{ placeholder }}</option>
        <option v-for="option in options" :key="option.id" :value="option.id">
            {{ option.text }}
        </option>
        </select>
  
</template>

<script setup>
import { ref ,watch} from 'vue';

import InputLabel from '@/Components/InputLabel.vue';


const props = defineProps({
    options: {
      type: Array,
      required: true,
    },
    modelValue: {
      type: [String,Number],
      default: '',
    },
    label: {
      type: String,
      default: '',
    },
    placeholder: {
      type: String,
      default: 'Select an option',
    },
});

 const selected = ref(props.modelValue);

    const change = () => {
      emit('update:modelValue', selected.value);
    };

    watch(() => props.modelValue, (newValue) => {
      selected.value = newValue;
    });

let emit = defineEmits(['update:model-value','change']);
</script>