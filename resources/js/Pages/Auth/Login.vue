<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Log in" />
    <GuestLayout>
         <div class='login-page'>
        <div class='login-div'>
            <div class="login-view">
                
                <div class="login-header">
                    <p>Sign in to <span class="text-[#72c4ad]" >iDICE</span></p>
                    <Link
                    :href="route('register')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Dont't Have an Account ? 
                </Link>
                   
                </div>
                <form class='form-login' @submit.prevent="submit">
                    <div>
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>
                    <div class="forgot-password">
                        <a href='#'>Forgot Password?</a>
                    </div>
                    <button 
                        type='submit' 
                        class="login-btn"
                    >
                        Sign in
                    </button>
                </form>
            </div>
        </div>
        <div class='left-div'>
            <img src='/assets/placeholder.png' alt='Place holder'/>
            <p class='text-5xl font-extrabold mt-0 text-slate-800'>iDICE</p>
            <p class='w-[80%] text-center text-gray-700'>A Federal Government of Nigeria initiative promoting Investment in Digital and Creative Industries</p>
        </div>
        
      
    </div>
</GuestLayout>
</template>

<style scoped>

.login-page {
  display: flex;
  height: 100vh;
  width: 100%;
  --tw-bg-opacity: 1;
  background-color: #fff;
}

.left-div {
  display: none;
  height: 100%;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding-top: 5rem;
  padding-bottom: 5rem;
  padding-left: 4rem;
  padding-right: 4rem;
}

@media (min-width: 1024px) {
  .left-div {
    display: flex;
    width: 55%;
  }
}

@media (min-width: 1280px) {
  .left-div {
    width: 65%;
  }
}

.left-div img {
  height: 450px;
  width: 100%;
}

.login-div {
  display: flex;
  width: 100%;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 1rem;
}

@media (min-width: 640px) {
  .login-div {
    padding: 1rem;
  }
}

@media (min-width: 1024px) {
  .login-div {
    width: 45%;
    padding: 1.5rem;
    padding-left: 3.5rem;
  }
}

@media (min-width: 1280px) {
  .login-div {
    width: 35%;
  }
}

.login-view {
  display: flex;
  height: 100%;
  width: 100%;
  max-width: 500px;
  flex-direction: column;
  justify-content: center;
  gap: 2.5rem;
  --tw-bg-opacity: 1;
  background-color: rgb(250 250 250 / var(--tw-bg-opacity));
  padding: 2rem;
  --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

@media not all and (min-width: 768px) {
  .login-view {
    padding-top: 3.5rem;
    padding-bottom: 3.5rem;
  }
}

@media (min-width: 640px) {
  .login-view {
    height: -moz-fit-content;
    height: fit-content;
    border-radius: 0.75rem;
  }
}

@media (min-width: 768px) {
  .login-view {
    max-height: 600px;
  }
}

@media (min-width: 1024px) {
  .login-view {
    border-radius: 1.5rem;
  }
}

.login-header p {
  font-size: 25px;
  font-weight: 700;
  --tw-text-opacity: 1;
  color: #72c4ad;
}

.login-header small {
  font-size: 15px;
  font-weight: 600;
  --tw-text-opacity: 1;
  color: #72c4ad;
}

.login-header a {
  margin-left: 0.25rem;
  --tw-text-opacity: 1;
  color: rgb(252 179 16 / var(--tw-text-opacity));
  text-decoration-line: underline;
}

.form-login {
  display: flex;
  flex-direction: column;
  gap: 0.5rem;
}

.input-group {
  margin-bottom: 0.75rem;
  display: flex;
  width: 100%;
  flex-direction: column;
  gap: 0.5rem;
  background-image: none;
  --tw-drop-shadow: drop-shadow(0 1px 1px rgb(0 0 0 / 0.05));
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}

.input-group label {
  display: block;
  font-size: 0.875rem;
  line-height: 1.25rem;
  --tw-text-opacity: 1;
  color: rgb(55 65 81 / var(--tw-text-opacity));
}

.input-group input {
  height: 55px;
  width: 100%;
  border-radius: 0.375rem;
  border-width: 1px;
  --tw-border-opacity: 1;
  border-color: rgb(229 231 235 / var(--tw-border-opacity));
  --tw-bg-opacity: 1;
  background-color: rgb(248 253 253 / var(--tw-bg-opacity));
  padding-left: 1rem;
  padding-right: 1rem;
  outline: 2px solid transparent;
  outline-offset: 2px;
}

.input-group span {
  width: 100%;
  font-size: 14px;
}

.input-group input::-moz-placeholder {
  --tw-text-opacity: 1;
  color: rgb(75 85 99 / var(--tw-text-opacity));
}

.input-group input::placeholder {
  --tw-text-opacity: 1;
  color: rgb(75 85 99 / var(--tw-text-opacity));
}

.forgot-password {
  display: flex;
  width: 100%;
  justify-content: flex-end;
}

.forgot-password a {
  --tw-text-opacity: 1;
  color: rgb(15 23 42 / var(--tw-text-opacity));
  text-decoration-line: underline;
}

.login-btn {
  margin-top: 1rem;
  margin-bottom: 0.5rem;
  width: 100%;
  border-radius: 0.375rem;
  --tw-bg-opacity: 1;
  background-color: #72c4ad;
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  font-weight: 600;
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
}

.login-disabled-btn {
  cursor: not-allowed;
  --tw-bg-opacity: 1;
  background-color: rgb(186 194 194 / var(--tw-bg-opacity));
}

.create-div {
  margin-top: 1.5rem;
  margin-bottom: 1.5rem;
}

.create-div a {
  --tw-text-opacity: 1;
  color: rgb(15 23 42 / var(--tw-text-opacity));
  text-decoration-line: underline;
}

</style>