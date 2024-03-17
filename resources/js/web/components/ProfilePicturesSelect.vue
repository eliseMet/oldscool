<template>
    <div v-if="!isLoading && !error">
        <img class="img" :src="'/image/' + images[0].url" :alt="images[0].alt">
        <input type="text" v-model="imageSelected" name="image_id">
    </div>
</template>

<script>
export default {
    name: "ProfilePictureSelect",

    data() {
        return {
            imageSelected: null,
            images: null,
            isLoading: false,
            error: null,
        }
    },

    methods: {
        getDefaultProfilePicture(){
            this.isLoading = true
            fetch('/user/default-profile-pictures')
            .then(response => {
                if (!response.ok) {
                    return response.json().then(error => {
                        throw error;
                    });
                }
                return response.json()
            })
            .then(data => {
                console.log(data)
                this.images = data
                this.imageSelected = this.images[0].id
                this.isLoading = false
            })
            .catch(error => {
                this.isLoading = false
                this.error = error.message
                console.log(error)
            });
        }
    },
    created(){
        this.getDefaultProfilePicture()
    }
}
</script>

<style scoped lang="scss">

.img{
    height: 50px;
    width: 50px;
}

</style>
