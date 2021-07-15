<template>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <router-link class="navbar-item" :to="{ name: 'home' }">
                <p class="title is-4 is-uppercase">
                    <img src="/favicon.ico" />
                    European countries
                </p>
            </router-link>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbar">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbar" class="navbar-menu">
            <div class="navbar-end">
                <router-link class="navbar-item" :to="{ name: 'home' }">
                    Home
                </router-link>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
        name: 'navbar'
    }
</script>