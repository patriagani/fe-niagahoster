<template>
    <div>
        <Navbar/>
        <div id="home" class="container">
            <div class="row">
                <div class="col-xs-6 col-md-6 text">
                    <h1>
                        PHP Hosting<br>
                        <span>
                            Cepat, handal, penuh dengan<br>
                            modul PHP yang anda butuhkan
                        </span>
                    </h1>
                    <br>
                    <ul>
                        <li>Solusi PHP untuk performa query yang lebih cepat</li>
                        <li>Konsumsi memori yang lebih rendah</li>
                        <li>Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7</li>
                        <li>Fitur enskripsi IonCube dan Zend Guard Loaders</li>
                    </ul>
                </div>
                <div class="col-xs-6 col-md-6 image">
                    <img src="images/illustration banner PHP hosting-01.svg" alt="PHP Hosting">
                </div>
            </div>
        </div>
        <div class="php-modules">
            <div class="item">
                <img src="images/icon_PHP_Hosting_zendguard.svg" alt="Zend Guard Loader">
            </div>
            <div class="item">
                <img src="images/icon_PHP_Hosting_composer.svg" alt="Composer">
            </div>
            <div class="item">
                <img src="images/icon_PHP_Hosting_ioncube.svg" alt="IonCube Loader">
            </div>
        </div>
        <div class="php-modules-text">
            <div class="item">
                <p>PHP Zend Guard Loader</p>
            </div>
            <div class="item">
                <p>PHP IonCube Loader</p>
            </div>
            <div class="item">
                <p>PHP Composer</p>
            </div>
        </div>
    </div>
</template>


<script>
    import Navbar from './Navbar.vue';

    export default {
        components: {
            Navbar
        },
        data() {
            return {
                posts: []
            }
        },
        created() {
            
        }
    }
</script>