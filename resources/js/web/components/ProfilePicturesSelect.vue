<template>
    <div v-if="images">
        <input type="checkbox" class="picture-checkbox" id="image_id">
        <label class="picture-bg-label" for="image_id"></label>

        <label for="image_id">
            <div>
                <img class="img" :src="'/image/' + findImage(imageSelected).url" :alt="findImage(imageSelected).alt">
            </div>
        </label>

        <div class="picture-content">
            <div v-for="image in images" :key="image.id">
                <input class="picture-radio" type="radio" :id="'image' + image.id" name="image_id" :value="image.id"
                    v-model="imageSelected" />
                <label :for="'image' + image.id">
                    <img class="picture-item" :src="'/image/' + image.url" :alt="image.alt" />
                </label>
            </div>
        </div>
    </div>
    <div v-else-if="isLoading">
        chargement
    </div>
    <div v-else>
        erreur
    </div>
</template>

<script>
export default {
    name: "ProfilePictureSelect",

    props: {
        value: { type: Number, }
    },

    data() {
        return {
            imageSelected: null,
            images: null,
            isLoading: false,
            error: null,
        }
    },

    methods: {
        getDefaultProfilePicture() {
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
                    this.images = data
                    this.imageSelected = this.value ?? this.images[0].id
                    this.isLoading = false
                })
                .catch(error => {
                    this.isLoading = false
                    this.error = error.message
                    console.log(error)
                });
        },
        findImage(id) {
            return this.images.find((image) => image.id == id);
        },
    },
    created() {
        this.getDefaultProfilePicture()
    }
}
</script>

<style scoped lang="scss">
.img {
    height: 100px;
    width: 100px;
}

.picture {
    &-content {
        display: grid;
        grid-template-columns: repeat(3, 1fr);

        position: absolute;

        background-color: white;
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.14);
        border-radius: 0.5rem;
        opacity: 0;

        overflow: hidden;

        pointer-events: none;
    }

    &-item {
        height: 80px;
        width: 80px;
    }

    &-checkbox {
        display: none;
    }

    &-checkbox:checked~.picture-content {
        opacity: 1;
        pointer-events: all;
    }

    &-bg-label {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        height: 100vh;
        width: 100vw;

        display: none;
    }

    &-checkbox:checked~.picture-bg-label {
        display: block;
    }

    &-radio {
        display: none;
    }
}
</style>
