<script setup>
import ApplicantLayout from '@/Layouts/ApplicantLayout.vue';
import { ref } from 'vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import SelectComponent from '@/Components/Select.vue';
import TextInput from '@/Components/TextInput.vue';
import Flash from '@/Components/Flash.vue';
import { Head, Link, useForm,router ,usePage} from '@inertiajs/vue3';
import { Inertia } from '@inertiajs/inertia';
const { props } = usePage();

// import Inertia from '@inertiajs/vue3';
// import SelectComponent from './SelectComponent.vue';

const programs = [
    {
        'id': 'Creative',
        'text': 'Creative',
        'sub':[
            {'text' : 'film', 'program': 0 ,'id': 'film'},
            {'text' : 'theatre', 'program': 0 ,'id': 'theatre'},
            {'text' :'music', 'program': 0,'id': 'music' },
            {'text' :'dance', 'program': 0 ,'id': 'dance'},
            {'text' :'literature', 'program': 0 ,'id': 'literature'},
            {'text' :'fashion', 'program': 0,'id': 'fashion' },
            {'text' :'television', 'program': 0,'id': 'television' },
            {'text' :'arts', 'program': 0 ,'id': 'arts'},
            {'text' :'sports', 'program': 0,'id': 'sports' },
            {'text' :'media', 'program': 0 ,'id': 'media'},
            {'text' :'advertising', 'program': 0,'id': 'advertising' },
            {'text' :'gaming', 'program': 0 ,'id': 'gaming'},
        ]
    },
    {
        'id': 'Innovative',
        'text': 'Innovative',
        'sub':[
            {'text' : 'Information Technology', 'program': 1 ,'id': 'Information Technology'},
            {'text' : 'FinTech', 'program': 1 ,'id': 'FinTech'},
            {'text' :'E-commerce', 'program': 1 ,'id': 'E-commerce'},
            {'text' :'Digital Health', 'program': 1 ,'id': 'Digital Health'},
            {'text' :'EdTech', 'program': 1 ,'id': 'EdTech'},
            {'text' :'Softwares', 'program': 1 ,'id': 'Softwares'},
            {'text' :'Cybersecurity', 'program': 1 ,'id': 'Cybersecurity'},
        ]
    }
]

const degrees = [
    {
        'id': 'BSC',
        'text': 'BSC',
        'sub':[
            {'text' : 'first class' ,'id': 'film'},
            {'text' : 'second class' ,'id': 'theatre'},
            {'text' :'third class','id': 'music' },
        ]
    },
    {
        'id': 'HND',
        'text': 'HND',
        'sub':[
            {'text' : 'distinction' ,'id': 'distinction'},
            {'text' : 'upper credit' ,'id': 'upper credit'},
            {'text' : 'lower credit' ,'id': 'lower credit'},
            {'text' : 'pass' ,'id': 'pass'},
            
        ]
    },
    {
        'id': 'NCE',
        'text': 'NCE',
        'sub':[
            {'text' : 'distinction' ,'id': 'distinction'},
            {'text' : 'upper credit' ,'id': 'upper credit'},
            {'text' : 'lower credit' ,'id': 'lower credit'},
            {'text' : 'pass' ,'id': 'pass'},
            
        ]
    },
    {
        'id': 'ND',
        'text': 'ND',
        'sub':[
            {'text' : 'distinction' ,'id': 'distinction'},
            {'text' : 'upper credit' ,'id': 'upper credit'},
            {'text' : 'lower credit' ,'id': 'lower credit'},
            {'text' : 'pass' ,'id': 'pass'},
            
        ]
    },
    {
        'id': 'O-level',
        'text': 'O-level',
        'sub':[
        ]
    },
]
const sub_program = ref({})
const sub = (value) =>{
    const index = programs.findIndex(program => program.text === value);
    sub_program.value = programs[index].sub;
}

const grades = ref({})
const grade = (value) =>{
    const index = degrees.findIndex(program => program.text === value);
    grades.value = degrees[index].sub;
}

let genders = [
    {"id":  "Female", "text": "Female"},
    {"id": "Male", "text": "Male"},
]
let categories = [
    {"id": 1, "text": "Beginner"},
    {"id": 2, "text": "intermidiate"},
    {"id": 3, "text": "Professional"},
]

const bioForm = useForm({
    email: props?.auth?.user?.email ,
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
    // errors:{}
});


const submit = () => {
    bioForm.errors = {}
    bioForm.post('bio-data', { forceFormData: true }, {
        onFinish: (res) => {
          
            console.log(res);
        },
        onSuccess: () => {
            alert('Form submitted successfully!');
            bioForm.reset();
            currentTab(2)
        // Additional success actions
        },
        onError: (errors) => {
        console.log(errors);
        alert('Error everywhere')
        // Handle errors
        },
    });
};

//  const errors = ref([]);
 const submitForm =  async() => {
    const response = await fetch(route('bio.data'), {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                // 'X-CSRF-TOKEN': csrfToken, // Include CSRF token if needed
            },
            body: JSON.stringify(bioForm), // Convert the data to JSON
        });

        if (!response.ok) {
            throw new Error('Network response was not ok ' + response.statusText);
        }

        const result = await response.json();
        console.log(result);
        
    };

//  const submitForm = () => {
//     //   errors.value = []; // Clear previous errors

//       Inertia.post(route('bio.data'), bioForm.value)
//         .then(response => {
//           console.log('Response:', response);
//         })
//         .catch(error => {
//           console.error('Error during submission:', error);
//           // Handle validation errors
//           if (error.response && error.response.data.errors) {
//             bioForm.value.errors = Object.values(error.response.data.errors).flat();
//           }
//         });
//     };



const states = ref({})


const loadStates = async () => {
    const response = await fetch(route('load.states'));
    states.value = await response.json();
}
const originLga = ref({})

const loadOriginLga = async (value) => {
    const response = await fetch(route('load.state.lga',{id:value}));
    originLga.value = await response.json();
}
const residenceLga = ref({})

const loadResidentLga = async (value) => {
    const response = await fetch(route('load.state.lga',{id:value}));
    residenceLga.value = await response.json();
}

// loadSta()
loadStates()

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

// defineProps({flash:Object})

</script>


<template>
      <Head title="Application" />

    <ApplicantLayout>
    
            <!--<h2 class="mb-4 font-bold text-center text-blue-900">Application </h2> -->
        <div class="container mx-auto">
            <fieldset class="m-4 p-4 border border-gray-300 rounded-lg">
                <nav class=" text-sm flex justify-center">
                <a @click="currentTab(1)" class="inline-block px-4 py-2 cursor-pointer" :class="tab  === 1 && `active`" >Bio Data</a>
                <a @click="currentTab(2)" class="inline-block px-4 py-2 cursor-pointer" :class="tab  === 2 && `active`">Education</a>
                <a @click="currentTab(3)" class="inline-block px-4 py-2 cursor-pointer" :class="tab  === 3 && `active`">Program</a>
            </nav>

            
            <div class="p-3 bgwhite">
                <Flash/>

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
                                            readonly
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
                                            <SelectComponent v-model="bioForm.gender" label="Select Gender" placeholder="Select Gender"
                                         :options="genders"/>
                                        <InputError class="mt-2" :message="program.errors.category" />   
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
                                    <InputLabel for="dob" value="State of Origin" />  
                                     <select v-model="bioForm.state_of_origin" @change="loadOriginLga($event.target.value)" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                        <option value="">Choose State</option>
                                        <option v-for="option in states" :key="option.id" :value="option.id">
                                            {{ option.text }}
                                        </option>
                                    </select> 
                                    <InputError class="mt-2" :message="bioForm.errors.state_of_origin" />  
                                </div>

                                <div class="flex flex-col ">
                                    
                                    <SelectComponent v-model="bioForm.lga_of_origin" label="Select LGA of Origin" placeholder="Select Option"
                                         :options="originLga"/>
                                            <InputError class="mt-2" :message="bioForm.errors.lga_of_origin" />   
                                </div>
                        

                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4  px-4 md:px-8 text-sm">
                            <div class="flex flex-col ">
                                <InputLabel for="dob" value="State of Residence" />
                                <select v-model="bioForm.residence_state" @change="loadResidentLga($event.target.value)" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" >
                                    <option value="">Choose State</option>
                                    <option v-for="option in states" :key="option.id" :value="option.id">
                                        {{ option.text }}
                                    </option>
                                </select> 
                                <InputError class="mt-2" :message="bioForm.errors.residence_state" />   
                            </div>

                            <div class="flex flex-col ">
                               
                                <SelectComponent v-model="bioForm.residence_lga" label="LGA of Origin" placeholder="Select LGA of Origin"
                                         :options="residenceLga"/>
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
                                        <!--<TextInput
                                            id="dob"
                                            type="text"
                                            class="mt-1 block w-full"
                                            v-model="qual.degree"
                                            placeholder="Degree"
                                            required
                                        /> -->
                                         <select v-model="qual.degree" @change="grade($event.target.value)" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" >
                                            <option value="">Choose Degree</option>
                                            <option v-for="option in degrees" :key="option.id" :value="option.id">
                                                {{ option.text }}
                                            </option>
                                        </select> 
                                        <InputError class="mt-2" :message="qualification.errors[`quals.${loop}.degree`]" />       
                                </div>
                                 <div class="flex flex-col ">
                                        <!--<InputLabel for="dob" value="Grade" />
                                        <TextInput
                                            id="grade"
                                            type="text"
                                            class="mt-1 block w-full"
                                            v-model="qual.grade"
                                            placeholder="Grade"
                                            required
                                        /> -->
                                        <SelectComponent v-model="qual.grade" label="Grade" placeholder="Select Grade"
                                         :options="grades"/>
                                        <InputError class="mt-2" :message="qualification.errors[`quals.${loop}.grade`]" />       
                                </div>
                                <div class="">
                                    <button class=" bg-blue-500 hover:bg-blue-700 btn-sm " @click="removeQualification(loop)">
                                    <font-awesome-icon icon="fa-solid fa-minus-circle" />
                                </button>
                                </div>
                        </div>
                        
                        
                    </fieldset>
                    <button class="bg-blue-500 hover:bg-blue-700 btn-sm pl-4" type="button" @click="addQualification">
                        <font-awesome-icon icon="fa-solid fa-plus-circle" />
                    </button>
                </fieldset>
                <button class="bg-blue-500 hover:bg-blue-700 btn-sm pl-6 px-3 py-1.5 " type="button" @click="submitEdu" :class="{ 'opacity-25': qualification.processing }" :disabled="qualification.processing">Submit</button>
                </div>
               
                <div v-if="tab === 3">
                   <fieldset class="border border-gray-300 rounded-lg p-4">
                        <legend class="text-lg font-medium text-left px-2">Program</legend>
                        
                        <form >
                          
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4  px-4 md:px-8 text-sm">
                            <div class="flex flex-col ">
                                    <InputLabel for="program" value="Choose a Program" />
                                    <select v-model="program.program" @change="sub($event.target.value)" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" >
                                        <option  value="">Choose a Program</option>
                                        <option v-for="option in programs" :key="option.id" :value="option.id">
                                            {{ option.text }}
                                        </option>
                                    </select>
                                    <InputError class="mt-2" :message="program.errors.program" />   
                            </div>

                            <div class="flex flex-col ">
                               <InputLabel for="program" value="Sub Program" />
                                    <select v-model="program.sub_program" @change="sub($event.target.value)" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                        <option value="">Choose a Sub Program</option>
                                        <option v-for="option in sub_program" :key="option.id" :value="option.id">
                                            {{ option.text }}
                                        </option>
                                    </select> 
                            </div>
                            <div class="flex flex-col ">
                                <SelectComponent label="Select Experience" placeholder="Experience"
                                        v-model="program.category" :options="categories"/>
                                        <InputError class="mt-2" :message="program.errors.category" />   
                            </div>

                             
                        </div>
                            
                        <template v-if="program.category > 1">
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
                        </template>
                    </form>
                    <button class="bg-blue-500 hover:bg-blue-700 btn-sm p-6 py-1.5 mt-3 mx-8" @click="submitProgram" :class="{ 'opacity-25': program.processing }" :disabled="program.processing" >Submit</button>
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