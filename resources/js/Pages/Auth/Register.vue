<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Register" />

        <div>
             <div class='register-page'>
        <div class='welcome-section'>
          
            <div class='welcome-info'>
                <p class='welcome-register'>Welcome </p>
                <p class='register-description'>A Federal Government of Nigeria initiative promoting Investment in Digital and Creative Industries</p>
                <Link
                    :href="route('login')"
                    class=" back-to-login"
                >
                    Sign in
                </Link>
            </div>
            
        </div>
        <div class="register-view">
            <div class="register-header">
                    <!-- <img class='logo' src='./assets/logo.png' alt='logo'/> -->
                    <div class="w-full flex flex-col items-center">
                        <p>Create Account</p>
                        <small>Already have an account? <a href="#">Login</a></small>  
                    </div>     
            </div>

                <form class='form-register' @submit.prevent="submit">
                    <div class="mt-4">
                        <InputLabel for="email" value="Email" />

                        <TextInput
                            id="email"
                            type="email"
                            class="mt-1 block w-full"
                            v-model="form.email"
                            required
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
                            autocomplete="new-password"
                        />

                        <InputError class="mt-2" :message="form.errors.password" />
                    </div>

                    <div class="mt-4">
                        <InputLabel for="password_confirmation" value="Confirm Password" />

                        <TextInput
                            id="password_confirmation"
                            type="password"
                            class="mt-1 block w-full"
                            v-model="form.password_confirmation"
                            required
                            autocomplete="new-password"
                        />

                        <InputError class="mt-2" :message="form.errors.password_confirmation" />
                    </div>
                    
                   
                    <button 
                        type='submit' 
                        class="register-btn" :class="{ 'opacity-25': form.processing }" :disabled="form.processing"
                    >
                        Sign in
                    </button>
                </form>
        </div>
        
      
    </div>
        </div>
    </GuestLayout>
</template>
<style scoped>

.register-page {
  display: flex;
  min-height: 70vh;
  width: 100%;
  align-items: center;
  justify-content: center;
  --tw-bg-opacity: 1;
  background-color: #fff

  /* background-color: rgb(67 43 102 / var(--tw-bg-opacity)); */
}

@media (min-width: 1024px) {
  .register-page {
    height: 100vh;
  }
}

.welcome-section {
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
  display: none;
  height: 100%;
  width: 40%;
  flex-direction: column;
  --tw-text-opacity: 1;
  color: #72c4ad;
}

@media (min-width: 1024px) {
  .welcome-section {
    display: flex;
  }
}

.register-logo img {
  height: 50px;
  width: auto;
}

.register-logo {
  padding-left: 2rem;
  padding-right: 2rem;
}

.welcome-info {
  display: flex;
  height: 100%;
  flex-direction: column;
  align-items: center;
  gap: 2rem;
  padding-left: 2rem;
  padding-right: 2rem;
  padding-top: 5rem;
  padding-bottom: 5rem;
}

.welcome-register {
  font-size: 3rem;
  line-height: 1;
  font-weight: 700;
  --tw-text-opacity: 1;
  color: #72c4ad;
}

.register-description {
  margin-bottom: 1.5rem;
  text-align: center;
  font-size: 1.125rem;
  line-height: 1.75rem;
  --tw-text-opacity: 1;
  color: rgb(209 213 219 / var(--tw-text-opacity));
}

.back-to-login {
  border-radius: 1.5rem;
  border-width: 1px;
  --tw-border-opacity: 1;
  border-color: rgb(255 255 255 / var(--tw-border-opacity));
  background-color: transparent;
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  padding-left: 4rem;
  padding-right: 4rem;
}

.register-view {
  display: flex;
  height: 100%;
  width: 100%;
  flex-direction: column;
  gap: 2.5rem;
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
  padding-left: 2rem;
  padding-right: 2rem;
  padding-top: 3.5rem;
  padding-bottom: 3.5rem;
  --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

@media not all and (min-width: 1024px) {
  .register-view {
    max-width: 500px;
  }
}

@media (min-width: 640px) {
  .register-view {
    height: -moz-fit-content;
    height: fit-content;
    border-radius: 1rem;
  }
}

@media (min-width: 1024px) {
  .register-view {
    height: 100%;
    width: 60%;
    align-items: center;
    justify-content: center;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
    padding-top: 2rem;
    padding-bottom: 2rem;
    padding-left: 5rem;
    padding-right: 5rem;
  }
}

.register-header {
  display: flex;
  width: 100%;
  flex-direction: column;
  gap: 1rem;
}

@media (min-width: 1024px) {
  .register-header {
    width: -moz-fit-content;
    width: fit-content;
  }

  .register-header img {
    display: none;
  }
}

.register-header p {
  margin-bottom: 0.5rem;
  font-size: 1.5rem;
  line-height: 2rem;
  font-weight: 700;
  --tw-text-opacity: 1;
  color: rgb(67 43 102 / var(--tw-text-opacity));
}

@media (min-width: 640px) {
  .register-header p {
    font-size: 1.875rem;
    line-height: 2.25rem;
  }
}

@media (min-width: 1024px) {
  .register-header p {
    font-size: 3rem;
    line-height: 1;
  }
}

.register-header small {
  width: 100%;
  text-align: center;
  font-size: 15px;
  font-weight: 600;
  --tw-text-opacity: 1;
  color: rgb(71 85 105 / var(--tw-text-opacity));
}

@media (min-width: 1024px) {
  .register-header small {
    text-align: center;
  }
}

.register-header a {
  margin-left: 0.25rem;
  --tw-text-opacity: 1;
  color: rgb(252 179 16 / var(--tw-text-opacity));
  text-decoration-line: underline;
}

.form-register {
  display: flex;
  width: 100%;
  max-width: 450px;
  flex-direction: column;
  gap: 0.5rem;
}

.register-input-group {
  margin-bottom: 0.75rem;
  display: flex;
  width: 100%;
  flex-direction: column;
  gap: 0.25rem;
  background-image: none;
  --tw-drop-shadow: drop-shadow(0 1px 1px rgb(0 0 0 / 0.05));
  filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}

.register-input-group label {
  display: block;
  font-size: 0.875rem;
  line-height: 1.25rem;
  --tw-text-opacity: 1;
  color: rgb(55 65 81 / var(--tw-text-opacity));
}

.register-input-group input {
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

.register-input-group span {
  width: 100%;
  font-size: 14px;
}

.register-input-group input::-moz-placeholder {
  --tw-text-opacity: 1;
  color: rgb(156 163 175 / var(--tw-text-opacity));
}

.register-input-group input::placeholder {
  --tw-text-opacity: 1;
  color: rgb(156 163 175 / var(--tw-text-opacity));
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

.register-btn {
  margin-top: 2rem;
  margin-bottom: 2rem;
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

.register-disabled-btn {
  cursor: pointer;
  --tw-bg-opacity: 1;
  background-color: rgb(186 194 194 / var(--tw-bg-opacity));
}

/* .create-div{
    @apply my-6
} */

.create-div a {
  --tw-text-opacity: 1;
  color: rgb(15 23 42 / var(--tw-text-opacity));
  text-decoration-line: underline;
}

</style>