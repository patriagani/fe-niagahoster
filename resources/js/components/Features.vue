<template>
    <div>
        <div class="container features-title">
            <h5 class="font-mont font-size-23">Semua Paket Hosting sudah Termasuk</h5>
        </div>
        <div class="container">
            <div class="row features">
                <Feature v-for="feature in features" :key="feature" :feature="feature"/>
            </div>
            <div class="separator"></div>
        </div>
    </div>
</template>

<script>
    import Feature from './Feature.vue';

    export default {
        components: {
            Feature
        },
        data() {
            return {
                features: [
                    {
                        img: "images/icon PHP Hosting_PHP Semua Versi.svg",
                        title: "PHP Semua Versi",
                        description: "Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!"
                    },
                    {
                        img: "images/icon PHP Hosting_My SQL.svg",
                        title: "MySQL Versi 5.6",
                        description: "Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur."
                    },
                    {
                        img: "images/icon PHP Hosting_CPanel.svg",
                        title: "Panel Hosting cPanel",
                        description: "Kelola website dengan panel canggih yang familiar di hati Anda."
                    },{
                        img: "images/icon PHP Hosting_garansi uptime.svg",
                        title: "Garansi Uptime 99.9%",
                        description: "Data center yang mendukung kelangsungan website Anda 24/7."
                    },
                    {
                        img: "images/icon PHP Hosting_InnoDB.svg",
                        title: "Database InnoDB Unlimited",
                        description: "Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda."
                    },
                    {
                        img: "images/icon PHP Hosting_My SQL remote.svg",
                        title: "Wildcard Remote MySQL",
                        description: "Mendukung s/d 25 max_user_connections dan 100 max_connections."
                    }
                ]
            }
        }
    }
</script>