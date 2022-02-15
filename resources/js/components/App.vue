<template>
    <div>
        <header>
            <img id="logo" src="/images/logo.svg" alt="The Selfie Project Logo">
        </header>
        <section id="landing">
            <h1>Welcome to the Selfie Project</h1>
            <p>Our mission is to promote find self love to the world, by letting you share your beautiful faces without the worry of opinions</p>
        </section>

        <section>
            <image-form />
        </section>

        <footer>
            <p>DESIGNED AND DEVELOPED BY GRAHAM VICKERS&copy;</p>
        </footer>
    </div>
</template>

<script>
    import ImageForm from './partials/image-form.vue';

    export default {
        name: 'app',
        props: {
            image: {
                type: Object,
                required: true
            }
        },
        mounted() {
            //console.log(this.upload);
            this.$store.commit('image', this.image);
        },
        components: {
            ImageForm
        }
    };
</script>

<style lang="scss">
    main{
        padding: 30px 40px;
        height: 100vh;
        background-color: #f2f2f2;
    }
    .hidden{
        display: none;
    }
    #logo{
        max-width: 280px; 
        margin-bottom: 60px;
    }
    #landing{
        text-align: left;
    }
</style>