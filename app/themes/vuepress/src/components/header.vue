<template>
    <nav class="navbar" role="navigation" aria-label="dropdown navigation">
        <router-link :to="'/'" class="navbar-item">
            <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox"
                 width="112" height="28">
        </router-link>
        <router-link :to="'/about'" class="navbar-item">
            About
        </router-link>
    </nav>
</template>