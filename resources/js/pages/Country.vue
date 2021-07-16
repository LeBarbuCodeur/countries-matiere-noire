<template>
    <div v-if="country">
        <section class="hero is-medium pb-5" :style="'background-image: url(' + country.flag + ')'">
            <div class="hero-body">
                <p class="title">{{ country.name }}</p>
                <p class="subtitle">{{ country.region }} | {{ country.subregion }}</p>
            </div>
        </section>

        <div class="container">
            <div class="content p-5">
                <p><b>Country :</b> {{ country.region }}</p>
                <p><b>Region :</b> {{ country.subregion }}</p>
                <p><b>Total population :</b> {{ country.population }} peoples</p>
                <p><b>Capital :</b> {{ country.capital }}</p>
                <p><b>Languages :</b> {{ country.languages }}</p>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapState } from 'vuex'

    export default {
        name: 'country',
        computed: {
            ...mapState(['country'])
        },
        mounted() {
            this.$store.dispatch('getCountry', this.$route.params.code)
        }
    }
</script>