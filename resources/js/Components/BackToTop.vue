<template>
    <div
        ref="scrollTopButton"
        class="sticky w-full flex justify-end bottom-0 pb-3 pr-5 transition"
    >
        <div
            class="text-gray-400 hover:text-blue-400 transition"
        >
            <button>
                Scroll to top
            </button>
        </div>
    </div>
</template>

<script setup>
  import { onMounted, onUnmounted, ref } from "vue";

  let scrollTopButton = ref(null);

  const handleScroll = () => {
    if (window.scrollY > 0) {
      scrollTopButton.value.classList.remove("invisible");
    } else {
      scrollTopButton.value.classList.add("invisible");
    }
  };

  onMounted(() => {
    window.addEventListener("scroll", handleScroll);
  });

  onUnmounted(() => {
    window.removeEventListener("scroll", handleScroll);
  });
</script>