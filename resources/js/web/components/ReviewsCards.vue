<template>
    <div class="flex gap-4 my-4">
        <div class="card reviews-card" v-for="review in reviews">
            <div class="card-header">
                <div class="flex gap-4">
                    <img :src="review.img" alt="" width="35" height="35" class="rounded-full">
                    <p>{{ review.name }}, {{ review.age }}</p>
                </div>
            </div>
            <p class="card-main">{{ review.msg }}</p>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ReviewsCards",
        data(){
            return {
                reviews: [
                    {img:"/img/web/avatars/avatar.png", name: "nom", age: 12, msg: "avis avis avis avis avis"},
                    {img:"/img/web/avatars/avatar2.png", name: "nom", age: 12, msg: "avis avis avis avis avis"},
                    {img:"/img/web/avatars/avatar3.png", name: "nom", age: 12, msg: "avis avis avis avis avis"},
                    {img:"/img/web/avatars/avatar4.png", name: "nom", age: 12, msg: "avis avis avis avis avis"},
                    {img:"/img/web/avatars/avatar4.png", name: "nom", age: 12, msg: "avis avis avis avis avis"},
                    {img:"/img/web/avatars/avatar4.png", name: "nom", age: 12, msg: "avis avis avis avis avis"},
                    {img:"/img/web/avatars/avatar4.png", name: "nom", age: 12, msg: "avis avis avis avis avis"},
                    {img:"/img/web/avatars/avatar4.png", name: "nom", age: 12, msg: "avis avis avis avis avis"},
                ]

            }
        }
    }
</script>

<style lang="scss" scoped>
    .reviews-card {
        width: 500px;
    }
</style>