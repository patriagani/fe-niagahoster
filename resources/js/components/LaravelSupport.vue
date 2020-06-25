<template>
    <div class="container laravel-support">
            <h5 class="center-text font-mont font-size-23">Mendukung Penuh Framework Laravel</h5>
            <br>
            <div class="row">
                <div class="col-xs-6 col-md-6">
                    <p class="font-mont font-size-18">Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorit Anda</p>
                    <ul class="font-mont font-size-14 green-check">
                        <li>Install Laravel <strong>1 klik</strong> dengan Softaculous Installer.</li>
                        <li>Mendukung ekstensi <strong>PHP MCrypt, phar, mbstring, json</strong> dan <strong>fileinfo</strong>.</li>
                        <li>Tersedia <strong>Composer</strong> dan <strong>SSH</strong> untuk menginstall packages pilihan Anda</li>
                    </ul>
                    <p class="font-mont font-size-12">Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</p>
                    <Button :title="'Pilih Hosting Anda'" :flat="'button-nonflat'"/>
                </div>
                <div class="col-xs-6 col-md-6">
                    <img src="images/illustration banner support laravel hosting.svg" alt="Mendukung Penuh Framework Laravel">
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