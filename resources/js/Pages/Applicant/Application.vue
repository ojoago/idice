
<script setup>
import ApplicantLayout from '@/Layouts/ApplicantLayout.vue';
import { ref } from 'vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import Select1 from '@/Components/Select.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm,router } from '@inertiajs/vue3';

let regions = [
    {"id":  "Jos Metro", "name": "Jos Metro"},
    {"id": "Gombe", "name": "Gombe"},
    {"id": "Bukuru", "name": "Bukuru"},
    {"id": "Bauchi", "name": "Bauchi"},
    {"id": "Azare", "name": "Azare"},
    {"id": "Makurdi", "name": "Makurdi"},
    {"id": "Otukpo", "name": "Otukpo"},
    {"id": "Gboko", "name": "Gboko"},
]


const programs = [
    {
        'id': 'Creative',
        'name': 'Creative',
        'sub':[
            {'name' : 'film', 'program': 0 ,'id': 'film'},
            {'name' : 'theatre', 'program': 0 ,'id': 'theatre'},
            {'name' :'music', 'program': 0,'id': 'music' },
            {'name' :'dance', 'program': 0 ,'id': 'dance'},
            {'name' :'literature', 'program': 0 ,'id': 'literature'},
            {'name' :'fashion', 'program': 0,'id': 'fashion' },
            {'name' :'television', 'program': 0,'id': 'television' },
            {'name' :'arts', 'program': 0 ,'id': 'arts'},
            {'name' :'sports', 'program': 0,'id': 'sports' },
            {'name' :'media', 'program': 0 ,'id': 'media'},
            {'name' :'advertising', 'program': 0,'id': 'advertising' },
            {'name' :'gaming', 'program': 0 ,'id': 'gaming'},
        ]
    },
    {
        'id': 'Innovative',
        'name': 'Innovative',
        'sub':[
            {'name' : 'Information Technology', 'program': 1 ,'id': 'Information Technology'},
            {'name' : 'FinTech', 'program': 1 ,'id': 'FinTech'},
            {'name' :'E-commerce', 'program': 1 ,'id': 'E-commerce'},
            {'name' :'Digital Health', 'program': 1 ,'id': 'Digital Health'},
            {'name' :'EdTech', 'program': 1 ,'id': 'EdTech'},
            {'name' :'Softwares', 'program': 1 ,'id': 'Softwares'},
            {'name' :'Cybersecurity', 'program': 1 ,'id': 'Cybersecurity'},
        ]
    }
]


let genders = [
    {"id":  "Female", "name": "Female"},
    {"id": "Male", "name": "Male"},
]
let categories = [
    {"id": 1, "name": "Beginer"},
    {"id": 2, "name": "intermidiate"},
    {"id": 3, "name": "Professional"},
]

const bioForm = useForm({
    nin: '' ,
    nin_path: '' ,
    passport: '' ,
    first_name: '',
    last_name: '' ,
    gender: '' ,
    dob: '',
    state_of_origin: '' ,
    lga_of_origin: '' ,
    residence_state: '' ,
    residence_lga: '',
    address: '',
    gsm: '',
});


const submit = () => {
    bioForm.errors = {}
    bioForm.post(route('bio.data'), { forceFormData: true }, {
        onFinish: (res) => {bioForm.reset();console.log(res);
        },
    });
};


const submitEdu = () => {
    // bioForm.errors = {}
    qualification.post(route('add.eduaction')), 
     {
        onFinish: (res) => {qualifications.reset();console.log(res);
        },
    }
};

const tab = ref(1);
const currentTab = (tabNumber) => (tab.value = tabNumber);

const qualifications = ref({
    quals:
     [{
        institution:'' ,
        field:'',
        year:'',
        degree:'',
        grade:'' ,
    }]}
);

const qualification = useForm({
quals: [{
     institution:'' ,
        field:'',
        year:'',
        degree:'',
        grade:'' ,
}]
})


const submitProgram = () => {
    program.errors = {}
    program.post(route('add.program')), 
     {
        onFinish: (res) => {program.reset();console.log(res);
        },
    }
};


const program = useForm({
    program:'',
    sub_program:'',
    category:'',
    skills:[{
        skill:'' ,
        certification:'',
        year:'',
        path:'',
    }]
});

const addQualification = () => {
    qualification.quals.push({
        institution:'' ,
        field:'',
        year:'',
        degree:'',
        grade:'' ,
    })
}
const removeQualification = (i) => {
    let len = qualification.quals.length;
    if (len === 1) {
        alert('One Qualification is required to proceed')
        // store.commit('notify', { message: 'One Qualification is required to proceed ', type: 'warning' })
        return;
    }
    qualification.quals.splice(i, 1);
}


const addSkill = () => {
    program.skills.push({
        skill:'' ,
        certification:'',
        year:'',
        path:'',
    })
}
const removeSkill = (i) => {
    let len = program.skills.length;
    if (len === 1) {
        alert('One Qualification is required to proceed')
        // store.commit('notify', { message: 'One Qualification is required to proceed ', type: 'warning' })
        return;
    }
    program.skills.splice(i, 1);
}

</script>


<template>
      <Head title="Application" />

    <ApplicantLayout>
       
             <h2 class="mb-4 font-bold text-center text-blue-900">Application
        </h2>
        <div class="container mx-auto">
            <fieldset class="m-4 p-4 border border-gray-300 rounded-lg">
                <nav class=" text-sm flex justify-center">
                <a @click="currentTab(1)" class="inline-block  px-4 py-2 cursor-pointer" :class="tab  === 1 && `active`" >Bio Data</a>
                <a @click="currentTab(2)" class="inline-block px-4 py-2 cursor-pointer" :class="tab  === 2 && `active`">Education</a>
                <a @click="currentTab(3)" class="inline-block px-4 py-2 cursor-pointer" :class="tab  === 3 && `active`">Program</a>
            </nav>

            
            <div class="p-3 bgwhite">

                <div v-if="tab === 1">
                    <fieldset class="border border-gray-300 rounded-lg p-4">
                        <legend class="text-lg font-medium text-left px-2">BIO DATA</legend>
                        <div class="py-4">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            
                        <form @submit.prevent="submit">
                            <!--- <div class="flex justify-around items-start md:items-center p-2">
                                <h2 class="text-2xl font-semibold">Generate RRR</h2>
                            </div> -->
  
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 py-4 px-4 md:py-8 md:px-8 text-sm">
                                <div class="flex flex-col ">
                                    <InputLabel for="first_name" value="First Name" />
                                        <TextInput
                                            id="first_name"
                                            type="text"
                                            class="mt-1 block w-full"
                                            v-model="bioForm.first_name"
                                            placeholder="First Name"
                                            required
                                        />
                                        <InputError class="mt-2" :message="bioForm.errors.first_name" />
                                </div>
                                <div class="flex flex-col ">
                                    <InputLabel for="last_name" value="Last Name" />
                                        <TextInput
                                            id="last_name"
                                            type="text"
                                            class="mt-1 block w-full"
                                            v-model="bioForm.last_name"
                                            placeholder="Last Name"
                                            required
                                        />
                                        <InputError class="mt-2" :message="bioForm.errors.last_name" />
                                </div>

                                <div class="flex flex-col ">
                                        <InputLabel for="nin" value="NIN" />
                                        <TextInput
                                            id="nin"
                                            type="text"
                                            class="mt-1 block w-full"
                                            v-model="bioForm.nin"
                                            placeholder="NIN"
                                            required
                                        />
                                        <InputError class="mt-2" :message="bioForm.errors.nin" />
                                </div>

                                

                                <div class="flex flex-col ">
                                        <InputLabel for="email" value="Email address" />
                                        <TextInput
                                            id="email"
                                            type="email"
                                            class="mt-1 block w-full"
                                            v-model="bioForm.email"
                                            placeholder="Email address"
                                            required
                                        />
                                        <InputError class="mt-2" :message="bioForm.errors.email" />       
                                </div>

                                <div class="flex flex-col ">
                                        <InputLabel for="gsm" value="Phone Number" />
                                        <TextInput
                                            id="gsm"
                                            type="text"
                                            class="mt-1 block w-full"
                                            v-model="bioForm.gsm"
                                            placeholder="Phone Number"
                                            required
                                        />
                                        <InputError class="mt-2" :message="bioForm.errors.gsm" />       
                                </div>

                                <div class="flex flex-col ">
                                        <Select1 label="Gender" placeholder="Select Gender"
                                            v-model="bioForm.gender" :options="genders"/>
                                            <InputError class="mt-2" :message="bioForm.errors.gender" />   
                                </div>

                                <div class="flex flex-col ">
                                        <InputLabel for="dob" value="Date of Birth" />
                                        <TextInput
                                            id="dob"
                                            type="date"
                                            class="mt-1 block w-full"
                                            v-model="bioForm.dob"
                                            placeholder="Date of Birth"
                                            required
                                        />
                                        <InputError class="mt-2" :message="bioForm.errors.dob" />       
                                </div>

                                <div class="flex flex-col ">
                                    <Select1 label="State of Origin" placeholder="Select State"
                                            v-model="bioForm.state_of_origin" :options="regions"/>
                                            <InputError class="mt-2" :message="bioForm.errors.state_of_origin" />   
                                </div>

                                <div class="flex flex-col ">
                                    <Select1 label="LGA of Origin" placeholder="Select LGA of Origin"
                                            v-model="bioForm.lga_of_origin" :options="regions"/>
                                            <InputError class="mt-2" :message="bioForm.errors.lga_of_origin" />   
                                </div>
                        

                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4  px-4 md:px-8 text-sm">
                            <div class="flex flex-col ">
                                <Select1 label="State of Origin" placeholder="Select State"
                                        v-model="bioForm.residence_state" :options="regions"/>
                                        <InputError class="mt-2" :message="bioForm.errors.residence_state" />   
                            </div>

                            <div class="flex flex-col ">
                                <Select1 label="LGA of Origin" placeholder="Select LGA of Origin"
                                        v-model="bioForm.residence_lga" :options="regions"/>
                                        <InputError class="mt-2" :message="bioForm.errors.residence_lga" />   
                            </div>
                             <div class="flex flex-col ">
                                        <InputLabel for="dob" value="Passport" />
                                        <TextInput
                                            id="dob"
                                            type="file"
                                            class="mt-1 block w-full"
                                            @input="bioForm.passport = $event.target.files[0]"
                                            placeholder="Date of Birth"
                                            required
                                        />
                                        <InputError class="mt-2" :message="bioForm.errors.passport" />       
                                </div>
                                 <div class="flex flex-col ">
                                        <InputLabel for="dob" value="NIN Image" />
                                        <TextInput
                                            id="dob"
                                            type="file"
                                            class="mt-1 block w-full"
                                            @input="bioForm.nin_path = $event.target.files[0]"
                                            placeholder="Date of Birth"
                                            required
                                        />
                                        <InputError class="mt-2" :message="bioForm.errors.nin_path" />       
                                </div>
                        </div>

                        <div class="flex flex-col gap-4  px-4 md:px-8 text-sm">
                            <InputLabel for="email" value="Contact Address" />
                            
                            <textarea class="bioForm-control border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"  v-model="bioForm.address" placeholder="Address"></textarea>
                            <InputError class="mt-2" :message="bioForm.errors.address" />
                        </div>
                            

                            <div class="gap-4 py-4 px-4">
                                <button class="ms-4 flex justify-center rounded-md  px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm  focus-visible:outline focus-visible:outline-2 
                                            focus-visible:outline-offset-2  bg-indigo-600  hover:bg-indigo-500 focus-visible:outline-indigo-600" :class="{ 'opacity-25': bioForm.processing }" :disabled="bioForm.processing">
                                    Submit
                                </button>
                            </div>

                        </form>

                            </div>
                        </div>
    
                    </fieldset>
                </div>

                <!-- step 2 education -->
                <div v-if="tab === 2">
                    
                    <fieldset class="border border-gray-300 rounded-lg p-4">
                        <legend class="text-lg font-medium text-left px-2">Education</legend>
                        
                        <fieldset v-for="(qual,loop) in qualification.quals" :key="loop" class="border border-gray-300 rounded-lg p-4 mb-1">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4  px-4 md:px-8 text-sm">
                             <div class="flex flex-col ">
                                        <InputLabel for="dob" value="Institution" />
                                        <TextInput
                                            id="dob"
                                            type="text"
                                            class="mt-1 block w-full"
                                            v-model="qual.institution"
                                            placeholder="Institution"
                                            required
                                        />
                                        <InputError class="mt-2" :message="qualification.errors[`quals.${loop}.institution`]" />       
                                </div>
                                 <div class="flex flex-col ">
                                        <InputLabel for="dob" value="Course of Study" />
                                        <TextInput
                                            id="dob"
                                            type="text"
                                            class="mt-1 block w-full"
                                            v-model="qual.field"
                                            placeholder="Course of Study"
                                            required
                                        />
                                        <InputError class="mt-2" :message="qualification.errors[`quals.${loop}.field`]" />       
                                </div>
                        </div>
                                
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4  px-4 md:px-8 text-sm">
                             <div class="flex flex-col ">
                                        <InputLabel for="dob" value="Year" />
                                        <TextInput
                                            id="dob"
                                            type="text"
                                            class="mt-1 block w-full"
                                            v-model="qual.year"
                                            placeholder="Year"
                                            required
                                        />
                                        <InputError class="mt-2" :message="qualification.errors[`quals.${loop}.year`]" />       
                                </div>

                                 <div class="flex flex-col ">
                                        <InputLabel for="dob" value="Degree" />
                                        <TextInput
                                            id="dob"
                                            type="text"
                                            class="mt-1 block w-full"
                                            v-model="qual.degree"
                                            placeholder="Degree"
                                            required
                                        />
                                        <InputError class="mt-2" :message="qualification.errors[`quals.${loop}.degree`]" />       
                                </div>
                                 <div class="flex flex-col ">
                                        <InputLabel for="dob" value="Grade" />
                                        <TextInput
                                            id="grade"
                                            type="text"
                                            class="mt-1 block w-full"
                                            v-model="qual.grade"
                                            placeholder="Grade"
                                            required
                                        />
                                        <InputError class="mt-2" :message="qualification.errors[`quals.${loop}.grade`]" />       
                                </div>
                                <div class="">
                                    <button class="btn-sm bg-blue-500 hover:bg-blue-700 btn-sm" @click="removeQualification(loop)">
                                    <font-awesome-icon icon="fa-solid fa-minus-circle" />
                                </button>
                                </div>
                        </div>
                        
                        
                    </fieldset>
                    <button class="bg-blue-500 hover:bg-blue-700 btn-sm pl-4" type="button" @click="addQualification">
                        <font-awesome-icon icon="fa-solid fa-plus-circle" />
                    </button>
                </fieldset>
                <button class="bg-blue-500 hover:bg-blue-700 btn-sm pl-6 px-3 py-1.5 " type="button" @click="submitEdu">Submit</button>
                </div>
               
                <div v-if="tab === 3">
                   <fieldset class="border border-gray-300 rounded-lg p-4">
                        <legend class="text-lg font-medium text-left px-2">Program</legend>
                       

                        
                        <form >
                          
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4  px-4 md:px-8 text-sm">
                            <div class="flex flex-col ">
                                <Select1 label="Program" placeholder="Program"
                                        v-model="program.program" :options="programs"/>
                                        <InputError class="mt-2" :message="program.errors.program" />   
                            </div>

                            <div class="flex flex-col ">
                                <Select1 label="Sub Program" placeholder="Sub Program"
                                        v-model="program.sub_program" :options="regions"/>
                                        <InputError class="mt-2" :message="program.errors.sub_program" />   
                            </div>
                            <div class="flex flex-col ">
                                <Select1 label="Experience" placeholder="Experience"
                                        v-model="program.category" :options="categories"/>
                                        <InputError class="mt-2" :message="program.errors.category" />   
                            </div>

                             
                        </div>
                            
                             <fieldset v-for="(skill,loop) in program.skills" :key="loop" class="m-4 p-4 border border-gray-300 rounded-lg">
                                

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4  px-4 md:px-8 text-sm">
                             <div class="flex flex-col ">
                                        <InputLabel for="dob" value="Skill" />
                                        <TextInput
                                            id="dob"
                                            type="text"
                                            class="mt-1 block w-full"
                                            v-model="skill.skill"
                                            placeholder="Skill"
                                            required
                                        />
                                        <InputError class="mt-2" :message="program.errors[`skills.${loop}.skill`]" />       
                                </div>
                                 <div class="flex flex-col ">
                                        <InputLabel for="dob" value="Certification" />
                                        <TextInput
                                            id="dob"
                                            type="text"
                                            class="mt-1 block w-full"
                                            v-model="skill.certification"
                                            placeholder="Certification"
                                            required
                                        />
                                        <InputError class="mt-2" :message="program.errors[`skills.${loop}.certification`]" />       
                                </div>
                        </div>
                                
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4  px-4 md:px-8 text-sm">
                             <div class="flex flex-col ">
                                        <InputLabel for="year" value="Year" />
                                        <TextInput
                                            id="year"
                                            type="text"
                                            class="mt-1 block w-full"
                                            v-model="skill.year"
                                            placeholder="Year"
                                            required
                                        />
                                        <InputError class="mt-2" :message="program.errors[`skills.${loop}.year`]" />       
                                </div>

                                 <div class="flex flex-col ">
                                        <InputLabel for="dob" value="image" />
                                        <TextInput
                                            id="dob"
                                            type="file"
                                            class="mt-1 block w-full"
                                            @input="skill.path = $event.target.files[0]"
                                            placeholder="Image"
                                            required
                                        />
                                        <InputError class="mt-2" :message="program.errors[`skills.${loop}.path`]" />       
                                </div>
                                 
                        </div>
                           
                            <button class="bg-blue-500 hover:bg-blue-700 btn-sm"  type="button" @click="removeSkill(loop)">
                               <font-awesome-icon icon="fa-solid fa-minus-circle" />
                            </button>
                        </fieldset>  
                        
                        <button @click="addSkill" type="button" class="bg-blue-500 hover:bg-blue-700 btn-sm mb-2">
                            <font-awesome-icon icon="fa-solid fa-plus-circle" />
                        </button>
                        <hr>
                    </form>
                    <button class="bg-blue-500 hover:bg-blue-700 btn-sm px-3 py-1.5 " @click="submitProgram" >Submit</button>
                   </fieldset>
                </div>
            </div>
            </fieldset>
            
        </div>
    </ApplicantLayout>
</template>

<style scoped>
    .active{
        @apply  border-indigo-600 text-indigo-600 font-semibold border-b-2;    
    }
    .btn-sm{
        @apply   text-white font-bold py-1 px-2 rounded text-sm
    }
</style>