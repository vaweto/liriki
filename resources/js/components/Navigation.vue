<template>
    <div class="navbar is-fixed-top is-dark is-transparent">
        <div class="navbar-brand">
            <div class="mobile-menus-wrapper is-hidden-desktop">
                <!-- MOBILE & TABLET MENU -->
                <a role="button" class="navbar-burger" :class="[isActive ? 'is-active' : '']" @click=" isActive = !isActive " aria-label="Menu" aria-expanded="false">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
        </div>
        <div class="navbar-menu" :class="[isActive ? 'is-active' : '']">
            <!-- START MENU GENERATION FROM JSON -->
            <div class="navbar-start">
                <template v-for="(branch, key) in menuJson">
                    <a v-if="branch.type === 'LINK'" class="navbar-item" :href="branch.URL" :target="branch.opens">{{
                        branch.title }}</a>
                    <div v-else class="navbar-item has-dropdown is-hoverable" :key="branch.id">
                        <a class="navbar-link is-arrowless"
                           @click="toggleCollapse(branch)">
                            {{ branch.title }}
                            <span class="navbar-arrow"
                                  :class="expanded.includes(branch) && $windowIs('<=', 'tablet') ? 'is-open' : ''">
                                <i class="fas fa-chevron-down"></i>
                            </span>
                        </a>
                        <div class="navbar-dropdown is-boxed"
                             v-show="expanded.includes(branch) || $windowIs('>', 'tablet') ">
                            <a class="navbar-item"
                               v-for="link in branch.links"
                               :href="link.URL"
                               :target="link.opens">{{
                                link.title }}</a>
                        </div>
                    </div>
                </template>
            </div>
            <!-- END MENU GENERATION -->
        </div>
    </div>
</template>
<script>
    export default {
        name: 'Xero-Navigation',
        props: {
            menuJson: {
                type: Array,
                required: true,
            },
        },
        data() {
            return {
                isActive: false,
                expanded: [],
            }
        },
        methods: {
            toggleCollapse: function(target) {
                const index = this.expanded.indexOf(target);
                if (index >= 0)
                    this.expanded.splice(index,1);
                else {
                    this.expanded.push(target);
                }
            }
        },
    }
</script>
<style scoped lang="scss">
    .navbar-arrow {
        display: inline-block;
        margin-left: 0.5em;
        transition: all 0.25s ease;
    }
    .has-unread::after {
        content: '';
        position: absolute;
        bottom: 16px;
        right: 7px;
        height: 7px;
        width: 7px;
        background-color: red;
        border-radius: 50%;
    }
    .mobile-menus-wrapper {
        color: #fff;
        margin-left: auto;
        position: relative;
        display: flex;
    }
    .navbar-burger {
        display: inline-block;
    }
    @media screen and (min-width: 1024px) {
        .is-hoverable:hover .navbar-arrow {
            transform: rotate(180deg);
        }
    }
    @media screen and (max-width: 1023px) {
        .has-dropdown .navbar-dropdown {
            padding-top: 0;
            padding-bottom: 0;
        }
        .navbar-arrow {
            float:right;
            margin-right:0;
        }
        .navbar-arrow.is-open {
            transform: rotate(180deg);
        }
    }
</style>
