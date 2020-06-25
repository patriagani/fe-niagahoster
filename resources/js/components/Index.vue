<template>
    <div>
        <Navbar/>
        <PHPHosting/>
        <PHPModules/>
        <PricingTables/>
        <PowerfulPHP/>
        <Features/>
        <LaravelSupport/>
        <ModulesList/>
        <LinuxHosting/>
        <SocialShare/>
        <LiveChat/>
        <Footer/>
    </div>
</template>


<script>
    import Navbar from './Navbar.vue';
    import PHPHosting from './PHPHosting.vue';
    import PHPModules from './PHPModules.vue';
    import PricingTables from './PricingTables.vue';
    import PowerfulPHP from './PowerfulPHP.vue';
    import Features from './Features.vue';
    import LaravelSupport from './LaravelSupport.vue';
    import ModulesList from './ModulesList.vue';
    import LinuxHosting from './LinuxHosting.vue';
    import SocialShare from './SocialShare.vue';
    import LiveChat from './LiveChat.vue';
    import Button from './Button.vue';
    import Footer from './Footer.vue';

    export default {
        components: {
            Navbar,
            PHPHosting,
            PHPModules,
            PowerfulPHP,
            PricingTables,
            Features,
            LaravelSupport,
            ModulesList,
            LinuxHosting,
            SocialShare,
            LiveChat,
            Button,
            Footer
        },
        data() {
            return {
                
            }
        },
        created() {
            
        }
    }
</script>