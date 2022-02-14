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
            <h2>Image Gallery</h2>
            <image-form />
        </section>
    </div>
</template>

<script>
    import ImageForm from './partials/image-form.vue';

    export default {
        name: 'app',
        props: {
            upload: {
                type: Object,
                required: true
            }
        },
        mounted() {
            console.log(this.upload);
            //this.$store.commit('upload', this.upload);
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
    #logo{
        max-width: 280px; 
        margin-bottom: 60px;
    }
    #landing{
        text-align: left;
    }
</style>