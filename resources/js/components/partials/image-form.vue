<template>
    <div>
        <h3>Let's get started by uploading your most memorable selfie</h3>
        <div>
            <template v-if="uploadedImages">
                <div id="imagesCon">
                    <div  class="image" :style="{'background': `url(${image.img})`}">  
                    </div>
                </div>
                
            </template>
            <template v-else>
                <form ref="imageForm" enctype="multipart/form-data">
                    <input type="hidden" name="upload_image" value="1" />
                    <div class="form-group">
                        <label for="name">Your Name *</label>
                        <input type="text" name="name" id="name">
                        <label for="avatar">Your Selfie *</label>
                        <input type="file" name="avatar" id="avatar" />
                    </div>
                    <div v-if="errors" >
                        <p >
                            Sorry, but your selfie couldn't be uploaded. Please try again!
                        </p>
                        <p v-for="(error, key) in errors" :key="`errors-${key}`">
                            {{ error[0] }}
                        </p>
                    </div>
                    <button  @click="submit" :disabled="processing">
                        {{ processing ? 'Processing...' : 'SUBMIT SELFIE' }}
                    </button>
                </form>
            </template>
        </div>
    </div>
    
</template>

<script>
    export default {
         data() {
            return {
                processing: false,
                errors: null
            }
        },

        computed: {
            image() {
                return this.$store.state.image;
            }, 

            uploadedImages() {
                return this.image
                    ? this.image.uploaded_images
                    : false;
            }
        },

        methods: {
            submit() {
                this.processing = true;
                this.errors = null;

                const imgFormData = new ImgFormData(this.$refs.imageForm);
                imgFormData.append('_method', 'PATCH');

                axios.post(`/api/images/${this.image.id}`, imgFormData)
                    .then(response => {
                        this.$store.commit('image', response.data);
                    }).catch(error => {
                        this.errors = error.response.data.errors;
                    }).then(() => {
                        this.processing = false;
                    });
            }
        }
    };
</script>

<style lang="scss" scoped>
    .image {
        background-size:cover !important;
        background-position:center !important;
        height:250px;
        width:250px;
        margin:0 auto;
    }

    #imagesCon{
        margin-top: 40px;
        display: flex; 
        flex-direction: row;
        justify-content: center;
        flex-wrap: wrap;
    }
</style>