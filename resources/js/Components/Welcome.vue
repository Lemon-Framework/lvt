<template>
    <transition
        enter-active-class="transition ease-in-out duration-1000 transform"
        enter-class="opacity-0 translate-y-80"
        leave-class="opacity-0 -traslate-y-80"
    >   
        <div class="drop-shadow-2xl text-8xl" v-if="shown">
            🍋🖖💨
        </div>
    </transition>
</template>

<script>
export default {
    data() {
        return {
            shown: false 
        }
    },
    mounted() {
        setTimeout(() => this.shown = true, 100)
    }
}
</script>
