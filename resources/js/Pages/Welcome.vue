
<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';



</script>

<template>
    <GuestLayout>
        <div> 
    
    <section class="hero-section">
        <div class="hero-content">
            <div class="hero-left">
                <h1 class="hero-heading">
                    Investment in <span style="color: #fcb310" >Digital</span> and <span style="color: #fcb310">Creative</span> Enterprises
                </h1>
                <p class="hero-description">
                    A Federal Government of Nigeria initiative promoting Investment in Digital and Creative Industries
                </p>
                <a href="#">MORE INFO</a>
            </div>
            <img src="/assets/placeholder.png" alt="">
        </div>
    </section>

    <section class="about">
        <div class="about-left">
            <div>
                <h3 class="section-title">About Us</h3>
                <p class="about-heading">Empowering Youth, Shaping Nigeria's Digital Future</p>
            </div>
            <div>
                <p class="about-content">The Investment in Digital and Creative Enterprises Program (iDICE) is a Federal Government of Nigeria initiative promoting investment in digital and creative industries. It is part of Nigeria's efforts to build back better, greener, and more inclusively,and to create more sustainable jobs for its youthful population.</p>
                <br />
                <p class="about-content">The $617.7 million program targets Nigerians aged 15 to 35 Years who are involved in innovative, early-stage, technology-enabled start-ups or in creative sector micro, small and medium sized enterprises. The program is co-financed by the Federal Government of Nigeria (through the Bank of Industry), African Development Bank (AfDB), the Agence Française de Développement (AFD) and the Islamic Development Bank (IsDB).</p>
            </div>
        </div>
        <div class="about-right">
            <div class="about-img">
                <img src="/assets/logo2.png" alt="">
            </div>
            <div class="about-right-card">
                <div class="about-stat-card">
                    <p class="about-stat-card-leading">3.5</p>
                    <p class="about-stat-card-trailing">Years of experience</p>
                </div>
                <div class="about-stat-card">
                    <p class="about-stat-card-leading">230</p>
                    <p class="about-stat-card-trailing">Recommendations</p>
                </div>
                <div class="about-stat-card">
                    <p class="about-stat-card-leading">830+</p>
                    <p class="about-stat-card-trailing">Positive reviews</p>
                </div>
                <div class="about-stat-card">
                    <p class="about-stat-card-leading">100k</p>
                    <p class="about-stat-card-trailing">Certified Students</p>
                </div>
            </div>
        </div>

    </section>

    
    <section class="w-full py-10 px-4 md:px-6 lg:px-10 bg-slate-50 flex flex-col items-center">
        <div class="center-header">
            <p class="heading-line"></p>
            <h3 class="center-heading-text">POWERED BY</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-[95%]">
            <div class="p-4 bg-white rounded-2xl shadow-md flex flex-col gap-2 pb-6">
                <img src="/assets/pbat.jpeg" alt="">
                <div class="agency-badge">
                    <p>Program Initiative</p>
                </div>
                <p class="agency-leading">Bola Ahmed Adekunle Tinubu GCFR</p>
                <p class="agency-trailing"></p>
            </div>
            <div class="p-4 bg-white rounded-2xl shadow-md flex flex-col gap-2 pb-6">
                <img src="/assets/shettima.jpeg" alt="">
                <div class="agency-badge">
                    <p>Under the office of the vice president</p>
                </div>
                <p class="agency-leading">Kashim Shettima Mustapha GCON</p>
                <p class="agency-trailing"> </p> 
            </div>
            <div class="p-4 bg-white rounded-2xl shadow-md flex flex-col gap-2 pb-6">
                <img src="/assets/inuwa.jpg" alt="">
                <div class="agency-badge">
                    <p> Gombe State Government</p>
                </div>
                <p class="agency-leading">Alh. Mohammed Inuwa Yahaya</p>
               <p class="agency-trailing"></p>
            </div>
           
        </div>

    </section>

    </div>
    </GuestLayout>                                                           
</template>


<style scoped>

.section-title {
  margin-bottom: 1rem;
  margin-top: 0px;
  border-width: 0px;
  border-left-width: 4px;
  border-style: solid;
  --tw-border-opacity: 1;
  border-color: rgb(252 179 16 / var(--tw-border-opacity));
  padding-left: 0.75rem;
  font-size: 1.5rem;
  line-height: 2rem;
  font-weight: 700;
  --tw-text-opacity: 1;
  color: rgb(252 179 16 / var(--tw-text-opacity))
}

.center-header {
  margin-bottom: 2.5rem;
  display: flex;
  width: 100%;
  flex-direction: column;
  align-items: center
}

.center-heading-text {
  width: -moz-fit-content;
  width: fit-content;
  font-size: 1.875rem;
  line-height: 2.25rem;
  --tw-text-opacity: 1;
  color: rgb(252 179 16 / var(--tw-text-opacity))
}


.hero-section {
  display: flex;
  min-height: 500px;
  width: 100%;
  justify-content: center;
  padding-top: 1rem;
  padding-bottom: 1rem;
  padding-left: 0px;
  padding-right: 0px
}

@media (min-width: 1024px) {
  .hero-section {
    padding-left: 1.5rem;
    padding-right: 1.5rem
  }
}

.hero-content {
  display: flex;
  width: 100%;
  flex-direction: column;
  align-items: center;
  --tw-bg-opacity: 1;
  background-color: rgb(31 31 75 / var(--tw-bg-opacity));
  padding-top: 5rem;
  padding-bottom: 5rem;
  padding-left: 1rem;
  padding-right: 1rem
}

@media not all and (min-width: 1024px) {
  .hero-content {
    gap: 2.5rem
  }
}

@media (min-width: 768px) {
  .hero-content {
    flex-direction: row;
    padding-left: 1.5rem;
    padding-right: 1.5rem
  }
}

@media (min-width: 1024px) {
  .hero-content {
    border-radius: 1.5rem;
    padding-top: 0px;
    padding-bottom: 0px;
    padding-left: 8rem;
    padding-right: 8rem
  }
}

.hero-left {
  display: flex;
  height: 100%;
  flex-direction: column;
  justify-content: center;
  gap: 1rem
}

@media (min-width: 1024px) {
  .hero-left {
    width: 50%
  }
}

.hero-heading {
  font-size: 30px;
  line-height: 50px;
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity))
}

@media (min-width: 1024px) {
  .hero-heading {
    font-size: 45px
  }
}

.hero-description {
  --tw-text-opacity: 1;
  color: rgb(156 163 175 / var(--tw-text-opacity))
}

@media (min-width: 1024px) {
  .hero-description {
    font-size: 18px
  }
}

.hero-content img {
  width: 100%
}

@media (min-width: 768px) {
  .hero-content img {
    width: 50%
  }
}

.hero-left a {
  margin-top: 1rem;
  width: -moz-fit-content;
  width: fit-content;
  border-radius: 1.5rem;
  --tw-bg-opacity: 1;
  background-color: rgb(252 179 16 / var(--tw-bg-opacity));
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  padding-left: 1.5rem;
  padding-right: 1.5rem;
  font-weight: 600;
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity))
}

.about {
  display: flex;
  width: 100%;
  flex-direction: column;
  --tw-bg-opacity: 1;
  background-color: rgb(248 250 252 / var(--tw-bg-opacity))
}

@media (min-width: 768px) {
  .about {
    flex-direction: row
  }
}

@media (min-width: 1024px) {
  .about {
    gap: 1rem;
    padding-left: 5rem;
    padding-right: 5rem;
    padding-top: 1.5rem;
    padding-bottom: 1.5rem
  }
}

.about-heading {
  margin-bottom: 1rem;
  font-size: 30px;
  font-weight: 700;
  --tw-text-opacity: 1;
  color: rgb(26 26 26 / var(--tw-text-opacity))
}

@media (min-width: 1024px) {
  .about-heading {
    margin-bottom: 0px;
    font-size: 45px;
    line-height: 60px
  }
}

.about-left {
  display: flex;
  width: 100%;
  flex-direction: column;
  justify-content: space-between;
  gap: 0.5rem;
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
  padding-left: 1rem;
  padding-right: 1rem;
  --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
}

@media (min-width: 768px) {
  .about-left {
    width: 60%;
    padding-left: 1.5rem;
    padding-right: 1.5rem
  }
}

@media (min-width: 1024px) {
  .about-left {
    width: 50%;
    border-radius: 1rem;
    padding-top: 2.5rem;
    padding-bottom: 2.5rem;
    padding-left: 2.5rem;
    padding-right: 2.5rem
  }
}

.about-right {
  display: flex;
  height: 100%;
  flex-direction: column
}

@media (min-width: 768px) {
  .about-right {
    width: 40%
  }
}

@media (min-width: 1024px) {
  .about-right {
    width: 50%;
    gap: 1rem
  }
}

.about-img {
  display: none;
  height: 250px;
  border-radius: 1rem;
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
  padding: 2.5rem
}

@media (min-width: 768px) {
  .about-img {
    display: block;
    height: 200px
  }
}

@media (min-width: 1024px) {
  .about-img {
    --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
    --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
  }
}

.about-img img {
  height: 100%;
  width: 100%
}

.about-right-card {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 1rem;
  border-width: 0px;
  border-top-width: 1px;
  border-style: solid;
  --tw-border-opacity: 1;
  border-color: rgb(229 231 235 / var(--tw-border-opacity));
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
  padding: 1rem
}

@media (min-width: 1024px) {
  .about-right-card {
    border-radius: 1rem;
    padding: 2rem;
    --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
    --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
  }
}

.about-stat-card {
  --tw-bg-opacity: 1;
  background-color: rgb(250 250 250 / var(--tw-bg-opacity));
  padding-left: 1.5rem;
  padding-right: 1.5rem;
  padding-top: 1.5rem;
  padding-bottom: 1.5rem
}

@media (min-width: 1024px) {
  .about-stat-card {
    border-radius: 1rem;
    padding-left: 2.5rem;
    padding-right: 2.5rem
  }
}

.about-stat-card-leading {
  margin-bottom: 0.5rem;
  font-size: 30px;
  font-weight: 600
}

.about-stat-card-trailing {
  font-size: 0.875rem;
  line-height: 1.25rem
}

.objectives {
  display: flex;
  width: 100%;
  flex-direction: column;
  align-items: center;
  gap: 1rem;
  --tw-bg-opacity: 1;
  background-color: rgb(248 250 252 / var(--tw-bg-opacity))
}

@media (min-width: 1024px) {
  .objectives {
    flex-direction: row;
    padding-left: 5rem;
    padding-right: 5rem;
    padding-top: 1.5rem;
    padding-bottom: 1.5rem
  }
}

.objectives-left {
  display: flex;
  width: 100%;
  flex-direction: column;
  gap: 0.5rem;
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
  padding-left: 1rem;
  padding-right: 1rem
}

@media (min-width: 768px) {
  .objectives-left {
    padding-left: 1.5rem;
    padding-right: 1.5rem
  }
}

@media (min-width: 1024px) {
  .objectives-left {
    width: 50%;
    border-radius: 1rem;
    padding-top: 2.5rem;
    padding-bottom: 2.5rem;
    padding-left: 1.25rem;
    padding-right: 1.25rem;
    --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
    --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
  }
}

.objective {
  display: flex;
  flex-direction: column;
  align-items: center;
  border-radius: 1rem;
  padding-top: 1rem;
  padding-bottom: 1rem;
  padding-left: 1.5rem;
  padding-right: 1.5rem;
  text-align: center;
  --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
}

@media not all and (min-width: 1024px) {
  .objective {
    padding-bottom: 2.5rem
  }
}

@media (min-width: 768px) {
  .objective {
    width: 60%
  }
}

@media (min-width: 1024px) {
  .objective {
    width: 100%;
    flex-direction: row;
    padding-left: 0px;
    padding-right: 0px;
    padding-right: 1rem
  }
}

.objectives-list {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 2rem
}

.objective img {
  height: 100px;
  border-radius: 1rem
}

@media not all and (min-width: 1024px) {
  .objective img {
    margin-bottom: 0.5rem
  }
}

.objectives-right {
  display: none;
  height: 100%;
  width: 50%
}

@media (min-width: 1024px) {
  .objectives-right {
    display: block
  }
}

.programs {
  display: flex;
  width: 100%;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;
  gap: 2rem;
  --tw-bg-opacity: 1;
  background-color: rgb(248 250 252 / var(--tw-bg-opacity));
  padding-bottom: 1.5rem
}

@media (min-width: 1024px) {
  .programs {
    flex-direction: row;
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
    padding-left: 5rem;
    padding-right: 5rem
  }
}

.programs-left {
  height: 80%;
  width: calc(40% - 32px)
}

@media not all and (min-width: 1024px) {
  .programs-left {
    display: none
  }
}

.programs-right {
  display: flex;
  width: 100%;
  flex-direction: column;
  justify-content: space-between;
  gap: 0.5rem;
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
  padding: 2.5rem
}

@media (min-width: 1024px) {
  .programs-right {
    width: calc(60% - 32px);
    border-radius: 1rem;
    --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
    --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
  }
}

.programs-left img {
  height: 100%;
  width: 100%
}

.program {
  border-radius: 1rem;
  border-width: 1px;
  --tw-bg-opacity: 1;
  background-color: rgb(250 250 250 / var(--tw-bg-opacity));
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
  padding-left: 1.5rem;
  padding-right: 1.5rem;
  --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
  --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
}

.programs-list {
  display: flex;
  flex-direction: column;
  gap: 2rem
}

.program-leading {
  margin-bottom: 1rem;
  font-size: 1.25rem;
  line-height: 1.75rem;
  font-weight: 600;
  line-height: 30px
}

.agencies {
  display: flex;
  width: 100%;
  flex-direction: column;
  align-items: center;
  --tw-bg-opacity: 1;
  background-color: rgb(248 250 252 / var(--tw-bg-opacity));
  padding-top: 2.5rem;
  padding-bottom: 2.5rem;
  padding-left: 1rem;
  padding-right: 1rem
}

@media (min-width: 768px) {
  .agencies {
    padding-left: 1.5rem;
    padding-right: 1.5rem
  }
}

@media (min-width: 1024px) {
  .agencies {
    padding-left: 2.5rem;
    padding-right: 2.5rem
  }
}

.heading-line {
  margin-bottom: 0.25rem;
  height: 5px;
  width: 70px;
  --tw-bg-opacity: 1;
  background-color: rgb(252 179 16 / var(--tw-bg-opacity))
}

.agencies-list {
  display: grid;
  width: 95%;
  grid-template-columns: repeat(1, minmax(0, 1fr));
  gap: 1.5rem
}

@media (min-width: 768px) {
  .agencies-list {
    grid-template-columns: repeat(2, minmax(0, 1fr))
  }
}

@media (min-width: 1024px) {
  .agencies-list {
    grid-template-columns: repeat(3, minmax(0, 1fr))
  }
}

.agency {
  display: flex;
  flex-direction: column;
  gap: 0.5rem;
  border-radius: 1rem;
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
  padding: 1rem;
  padding-bottom: 1.5rem;
  --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
  --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
}

.agency img {
  height: 200px;
  width: 100%
}

@media (min-width: 1024px) {
  .last-agency {
    grid-column-start: 2
  }
}

.agency-badge {
  margin-top: 1rem;
  width: -moz-fit-content;
  width: fit-content;
  border-radius: 0.125rem;
  --tw-bg-opacity: 1;
  background-color: rgb(250 250 250 / var(--tw-bg-opacity));
  padding: 0.5rem;
  font-size: 0.875rem;
  line-height: 1.25rem
}

.agency-leading {
  margin-bottom: 0.5rem;
  font-size: 1.25rem;
  line-height: 1.75rem;
  font-weight: 600
}

.agency-trailing {
  line-height: 25px
}

.more-agencies-btn {
  margin-top: 1.5rem;
  border-radius: 0.375rem;
  --tw-bg-opacity: 1;
  background-color: rgb(252 179 16 / var(--tw-bg-opacity));
  padding-left: 1.5rem;
  padding-right: 1.5rem;
  padding-top: 1rem;
  padding-bottom: 1rem;
  font-weight: 600;
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity))
}

.news {
  display: flex;
  width: 100%;
  flex-direction: column;
  align-items: center;
  --tw-bg-opacity: 1;
  background-color: rgb(209 213 219 / var(--tw-bg-opacity));
  padding-top: 4rem;
  padding-bottom: 4rem;
  padding-left: 2.5rem;
  padding-right: 2.5rem
}

.news-text {
  margin-top: 1.75rem
}

.contact {
  display: flex;
  width: 100%;
  flex-direction: column;
  --tw-bg-opacity: 1;
  background-color: rgb(248 250 252 / var(--tw-bg-opacity))
}

@media (min-width: 768px) {
  .contact {
    flex-direction: row
  }
}

@media (min-width: 1024px) {
  .contact {
    gap: 1rem;
    padding-left: 5rem;
    padding-right: 5rem;
    padding-top: 2.5rem;
    padding-bottom: 2.5rem
  }
}

.contact-heading {
  font-size: 45px;
  font-weight: 700;
  line-height: 60px;
  --tw-text-opacity: 1;
  color: rgb(26 26 26 / var(--tw-text-opacity))
}

.contact-right {
  display: flex;
  width: 100%;
  flex-direction: column;
  gap: 0.5rem;
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity))
}

@media not all and (min-width: 1024px) {
  .contact-right {
    padding-left: 1rem;
    padding-right: 1rem;
    padding-top: 1.5rem;
    padding-bottom: 1.5rem
  }
}

@media (min-width: 768px) {
  .contact-right {
    width: 55%;
    padding-left: 1.5rem;
    padding-right: 1.5rem
  }
}

@media (min-width: 1024px) {
  .contact-right {
    border-radius: 1rem;
    padding: 2.5rem;
    --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
    --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
  }
}

.contact-left {
  display: flex;
  width: 100%;
  flex-direction: column
}

@media not all and (min-width: 768px) {
  .contact-left {
    flex-direction: column-reverse
  }
}

@media (min-width: 768px) {
  .contact-left {
    width: 45%
  }
}

@media (min-width: 1024px) {
  .contact-left {
    gap: 1rem
  }
}

.contact-img {
  height: 300px;
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity))
}

@media not all and (min-width: 1024px) {
  .contact-img {
    padding-top: 1rem
  }
}

@media (min-width: 1024px) {
  .contact-img {
    border-radius: 1rem;
    --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
    --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
  }
}

.contact-img img {
  height: 100%;
  width: 100%
}

.contact-left-card {
  height: 50%;
  border-width: 0px;
  border-top-width: 1px;
  border-style: solid;
  --tw-border-opacity: 1;
  border-color: rgb(229 231 235 / var(--tw-border-opacity));
  --tw-bg-opacity: 1;
  background-color: rgb(255 255 255 / var(--tw-bg-opacity));
  padding-left: 1rem;
  padding-right: 1rem;
  padding-top: 2rem;
  padding-bottom: 2rem
}

@media (min-width: 768px) {
  .contact-left-card {
    padding-left: 1.5rem;
    padding-right: 1.5rem
  }
}

@media (min-width: 1024px) {
  .contact-left-card {
    border-radius: 1rem;
    padding: 2rem;
    --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
    --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
  }
}

.partner-leading {
  margin-top: 1.5rem;
  margin-bottom: 0.5rem;
  font-size: 1.125rem;
  line-height: 1.75rem;
  font-weight: 600
}

.partner-trailing span {
  cursor: pointer;
  font-weight: 600;
  --tw-text-opacity: 1;
  color: rgb(252 179 16 / var(--tw-text-opacity))
}

.contact-form {
  display: grid;
  grid-template-columns: repeat(2, minmax(0, 1fr));
  gap: 1rem
}

.contact-input-group {
  display: flex;
  flex-direction: column;
  gap: 0.5rem
}

@media not all and (min-width: 768px) {
  .contact-input-group {
    grid-column: span 2 / span 2
  }
}

.contact-input-group label {
  font-size: 0.875rem;
  line-height: 1.25rem;
  --tw-text-opacity: 1;
  color: rgb(55 65 81 / var(--tw-text-opacity))
}

.contact-input-group input {
  height: 40px;
  border-radius: 0.125rem;
  border-width: 1px;
  border-style: solid;
  --tw-border-opacity: 1;
  border-color: rgb(229 231 235 / var(--tw-border-opacity));
  padding-left: 0.75rem;
  padding-right: 0.75rem;
  --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
  --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
  outline: 2px solid transparent;
  outline-offset: 2px
}

.contact-input-group input:focus {
  outline: 2px solid transparent;
  outline-offset: 2px
}

.contact-input-group textarea {
  height: 60px;
  border-radius: 0.125rem;
  border-width: 1px;
  border-style: solid;
  --tw-border-opacity: 1;
  border-color: rgb(229 231 235 / var(--tw-border-opacity));
  padding-left: 0.75rem;
  padding-right: 0.75rem;
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
  --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
  box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
  outline: 2px solid transparent;
  outline-offset: 2px
}

.contact-input-group textarea:focus {
  outline: 2px solid transparent;
  outline-offset: 2px
}

.contact-input-group input::-moz-placeholder {
  --tw-text-opacity: 1;
  color: rgb(156 163 175 / var(--tw-text-opacity))
}

.contact-input-group input::placeholder {
  --tw-text-opacity: 1;
  color: rgb(156 163 175 / var(--tw-text-opacity))
}

.contact-full-input {
  grid-column: span 2 / span 2
}

.contact-submit {
  margin-top: 1rem;
  cursor: pointer;
  border-radius: 0.375rem;
  border-style: none;
  --tw-bg-opacity: 1;
  background-color: rgb(252 179 16 / var(--tw-bg-opacity));
  padding-top: 1rem;
  padding-bottom: 1rem;
  padding-left: 1.5rem;
  padding-right: 1.5rem;
  font-size: 16px;
  font-weight: 600;
  --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity))
}

.footer {
  display: grid;
  width: 100%;
  grid-template-columns: repeat(1, minmax(0, 1fr));
  --tw-bg-opacity: 1;
  background-color: rgb(33 37 41 / var(--tw-bg-opacity));
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