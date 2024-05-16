<template>
    <div>
        <input type="text" v-model="search">
    </div>
</template>

<script>
export default {
    name: 'AddressSearch',
    data() {
        return {
            search: null,
        }
    },
    watch: {
        search() {
            this.searchAddress();
        }
    },
    methods: {
        searchAddress() {
            const urlSearchParam = new URLSearchParams()
            urlSearchParam.append('q', this.search)
            fetch(`https://api-adresse.data.gouv.fr/search/? ${urlSearchParam}`)
                .then(response => response.json())
                .then(response => {
                    console.log(response);
                })
                .catch(error => console.log(error))
        }
    }
}
</script>