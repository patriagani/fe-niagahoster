<template>
    <div class="container linux-hosting">
        <div class="row">
            <div class="col-xs-6 col-md-6 linux-hosting-text">
                <h5 class="font-mont font-size-32">Linux Hosting yang Stabil dengan Teknologi LVE</h5>
                <br>
                <p class="font-mont font-size-14">SuperMicro <strong>Intel Xeon 24-Cores</strong> server dengan RAM <strong>128GB</strong> dan teknologi <strong>LVE CloudLinux</strong> untuk stabilitas server Anda. Dilengkapi dengan <strong>SSD</strong> untuk kecepatan <strong>MySQL</strong> dan caching. Apache load balancer berbasis LiteSpeed Technologies, <strong>CageFS</strong> security, <strong>Raid-10</strong> protection dan auto backup untuk keamanan website PHP Anda.</p>
                <br>
                <Button :title="'Pilih Hosting Anda'" :flat="'button-nonflat'"/>
            </div>
            <div class="col-xs-6 col-md-6 linux-hosting-img">
                <img src="images/Image support.png" style="width: 100%; height: auto;" alt="Linux Hosting yang Stabil dengan Teknologi LVE">
            </div>
        </div>
    </div>
</template>

<script>
    import Button from './Button.vue';

    export default {
        components: {
            Button,
        }
    }
</script>