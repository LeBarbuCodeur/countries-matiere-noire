import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const store = new Vuex.Store({
    state: {
        countries: [],
        country: '',
        error: ''
    },
    actions: {
        // Fetch the countries from the server
        async fetchCountries({ commit }) {
            await axios
                .get('/api/countries')
                .then(res => {
                    if (res.data && res.data.status === 200)
                        commit('updateCountries', res.data.datas)
                    else
                        commit('returnError', res.data.message)
                })
                .catch(err => {
                    commit('returnError', err)
                })
        },
        // Get the country from the code
        async getCountry({ commit, dispatch, state }, code) {
            if (!state.countries.length)
                await dispatch('fetchCountries')
            commit('getCountry', code)
        },
        // Reset stored country to avoid displaying the previous country
        resetCountry({ commit }) {
            commit('resetCountry')
        }
    },
    mutations: {
        getCountry(state, code) {
            // Get the country by the code from the store
            let country = state.countries.find(country => country.code === code)

            // Set the found & prepared country to store
            state.country = country
        },
        resetCountry(state) {
            state.country = ''
        },
        returnError(state) {
            return state.error
        },
        updateCountries(state, countries) {
            // Set the fetched countries to store
            state.countries = countries
        }
    }
})

export default store
