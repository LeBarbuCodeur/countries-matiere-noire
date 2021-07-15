<template>
    <div class="container" v-if="countries">
        <div class="card" v-for="country in countries" :key="country.name">
            <router-link :to="'country/' + country.alpha3Code.toLowerCase()">
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img :src="country.flag" :alt="country.alpha3Code">
                    </figure>
                </div>

                <div class="card-content">
                    <div class="media">
                        <div class="media-content">
                            <p class="title is-5">{{ country.name }}</p>
                            <p class="subtitle is-6">{{ country.region }} | {{ country.subregion }}</p>
                        </div>
                    </div>
                </div>
            </router-link>
        </div>
    </div>
</template>

<script>
    import { mapState } from 'vuex'

    export default {
        name: 'home',
        computed: {
            ...mapState(['countries'])
        },
        mounted() {
            // Reset the stored country (avoid bug when changing country to country)
            this.$store.dispatch('resetCountry')
        }
    }
</script>