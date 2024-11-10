<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import BackToTop from '@/Components/BackToTop.vue';
import { Link,Head } from '@inertiajs/vue3';


</script>

<template>
    <Head>
            <link rel="icon" type="image/png" href="/files/internal_images/logo.png" />
        </Head>
    <div class="min-h-screen flex flex-col sm:justify-center pt-2 sm:pt-0 bg-[#72c4ad]">
        <div>
            <nav class="navbar flex justify-between">
            <Link href="/" class="">
                <ApplicationLogo src="/assets/logo.png" class="mr-2" alt=""/>
                
            </Link>
            <ul class="nav-links">
                <Link href="/">Home</Link>
                <Link :href="route('about')">About iDICE</Link>
                <Link :href="route('program')">Program Components</Link>
                <Link :href="route('agency')">Agencies</Link>
               <!-- <Link :href="route('about')">News & Events</Link> -->
                <Link :href="route('partners')">Partnerships</Link>
                <Link :href="route('faq')">FAQ</Link>
            </ul> 
            
            <div class="auth-actions">
                 <Link
                    :href="route('login')"
                    class="login-btn"
                >
                Log in
                </Link>
                 <Link
                    :href="route('register')"
                    class="sign-up-btn"
                >
                Sign up
                </Link>
                <!--<a href="#" class=""></a>
                <a href="#" class=""></a> -->
            </div>
        </nav>
        </div>

        <div
            class="w-full "
        >
            <slot />
        </div>
        
        <BackToTop/>
    <footer class="footer">
        <div class="footer-social">
            <img src="/assets/logo.png" alt="">
            <a href="#" class="footer-partner-link">partnership@idice.ng</a>
            <p class="footer-social-leading">Follow Us</p>
            <div class="socials">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-skype"></i></a>
            </div>
        </div>
        <div class="footer-links">
            <p class="footer-links-leading">Quick Links</p>
            <div class="footer-links-list">
                <a href="#">Support center</a>
                <a href="#">Customer Support</a>
                <a href="#">About Us</a>
                <a href="#">Copyright</a>
                <a href="#">Popular Campaign</a>
            </div>
        </div>
        <div class="footer-links">
            <p class="footer-links-leading">Relevant Links</p>
            <div class="footer-links-list">
                <a href="#">Support center</a>
                <a href="#">Customer Support</a>
                <a href="#">About Us</a>
                <a href="#">Copyright</a>
                <a href="#">Popular Campaign</a>
            </div>
        </div>

    </footer>
    
    </div>
</template>


<style scoped>

* {
  margin: 0px;
  box-sizing: border-box
}

body {
  margin: 0px;
  height: 100%;
  width: 100vw;
  overflow-x: hidden;
  font-family: "Inter"
}

body::-webkit-scrollbar {
  width: 0px;
  --tw-bg-opacity: 1;
  background-color: rgb(239 68 68 / var(--tw-bg-opacity))
}

a {
  text-decoration-line: none
}


.navbar {
  display: flex;
  width: 100%;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding-top: 1rem;
  padding-bottom: 1rem;
  padding-left: 1rem;
  padding-right: 1rem
}

@media (min-width: 768px) {
  .navbar {
    padding-left: 1.5rem;
    padding-right: 1.5rem
  }
}

@media (min-width: 1024px) {
  .navbar {
    padding-left: 3rem;
    padding-right: 3rem
  }
}

.nav-links {
  display: flex;
  list-style-type: none;
  flex-wrap: wrap;
  gap: 1rem
}

@media not all and (min-width: 1024px) {
  .nav-links {
    display: none
  }
}

.nav-links a {
  flex-wrap: wrap;
  font-size: 0.875rem;
  line-height: 1.25rem;
  font-weight: 600;
  --tw-text-opacity: 1;
  color: rgb(0 0 0 / var(--tw-text-opacity));
  text-decoration-line: none
}

.auth-actions {
  display: flex;
  gap: 1rem
}

@media not all and (min-width: 768px) {
  .auth-actions {
    display: none
  }
}

.auth-actions a {
  border-radius: 9999px;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1.5rem;
  padding-right: 1.5rem
}

.login-btn {
  --tw-bg-opacity: 1;
  background-color: rgb(252 179 16 / var(--tw-bg-opacity));
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity))
}

.sign-up-btn {
  --tw-bg-opacity: 1;
  background-color: rgb(67 43 102 / var(--tw-bg-opacity));
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity))
}


/* footer  */


.footer {
  display: grid;
  width: 100%;
  grid-template-columns: repeat(1, minmax(0, 1fr));
  --tw-bg-opacity: 1;
  background-color: #72c4ad;
  padding-top: 3rem;
  padding-bottom: 3rem;
  padding-left: 2.5rem;
  padding-right: 2.5rem
}

@media not all and (min-width: 1024px) {
  .footer {
    gap: 2.5rem
  }
}

@media (min-width: 768px) {
  .footer {
    grid-template-columns: repeat(2, minmax(0, 1fr))
  }
}

@media (min-width: 1024px) {
  .footer {
    grid-template-columns: repeat(3, minmax(0, 1fr))
  }
}

.footer-social,.footer-links {
  display: flex;
  flex-direction: column;
  gap: 1.5rem
}

.footer-social img {
  height: -moz-fit-content;
  height: fit-content;
  width: -moz-fit-content;
  width: fit-content
}

.socials {
  display: flex;
  gap: 1rem
}

.socials a {
  border-radius: 0.375rem;
  background-color: hsla(0,0%,100%,0.1);
  padding: 0.5rem;
  font-size: 1.25rem;
  line-height: 1.75rem;
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity))
}

.footer-social-leading {
  font-size: 1.5rem;
  line-height: 2rem;
  font-weight: 600;
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity))
}

.footer-partner-link {
  --tw-text-opacity: 1;
  color: rgb(252 179 16 / var(--tw-text-opacity))
}

.footer-links-leading {
  font-size: 1.25rem;
  line-height: 1.75rem;
  font-weight: 700;
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity))
}

.footer-links-list {
  display: flex;
  flex-direction: column;
  gap: 1rem
}

.footer-links-list a {
  font-size: 0.875rem;
  line-height: 1.25rem;
  color: hsla(0,0%,100%,.6)
}

.faqs {
  display: flex;
  width: 100%;
  flex-direction: column-reverse;
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
  padding-bottom: 1.5rem
}

@media (min-width: 768px) {
  .faqs {
    align-items: center
  }
}

@media (min-width: 1024px) {
  .faqs {
    flex-direction: row;
    align-items: flex-start;
    gap: 2rem;
    --tw-bg-opacity: 1;
    background-color: rgb(248 250 252 / var(--tw-bg-opacity));
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
    padding-left: 5rem;
    padding-right: 5rem
  }
}

.faqs-right {
  height: 80%;
  width: 100%;
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity))
}

@media not all and (min-width: 1024px) {
  .faqs-right {
    height: 500px;
    padding-top: 2.5rem;
    padding-bottom: 2.5rem
  }
}

@media (min-width: 768px) {
  .faqs-right {
    height: 600px;
    width: 60%
  }
}

@media (min-width: 1024px) {
  .faqs-right {
    height: 80%;
    width: calc(40% - 32px)
  }
}

.faqs-left {
  display: flex;
  width: 100%;
  flex-direction: column;
  gap: 0.5rem;
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
  padding-left: 1rem;
  padding-right: 1rem;
  padding-top: 1.5rem;
  padding-bottom: 1.5rem
}

@media (min-width: 768px) {
  .faqs-left {
    padding-left: 1.5rem;
    padding-right: 1.5rem
  }
}

@media (min-width: 1024px) {
  .faqs-left {
    width: calc(60% - 32px);
    border-radius: 1rem;
    padding: 2.5rem;
    --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
    --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
  }
}

.faqs-right img {
  height: 100%;
  width: 100%
}

.faq {
  border-radius: 1rem;
  border-width: 1px;
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  padding-left: 1.5rem;
  padding-right: 1.5rem;
  --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
}

.faqs-list {
  display: flex;
  flex-direction: column;
  gap: 2rem
}

.faq-leading {
  font-weight: 600;
  --tw-text-opacity: 1;
  color: rgb(83 105 118 / var(--tw-text-opacity))
}


</style>
