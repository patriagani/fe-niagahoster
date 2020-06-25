<template>
    <div>
        <Navbar/>
        <div id="home" class="container">
            <div class="row">
                <div class="col-xs-6 col-md-6 text">
                    <h1>
                        <span class="font-mont-bold font-size-32">
                            PHP Hosting
                        </span>
                        <br>
                        <span class="font-mont font-size-32">
                            Cepat, handal, penuh dengan<br>
                            modul PHP yang anda butuhkan
                        </span>
                    </h1>
                    <br>
                    <ul class="font-mont font-size-14 green-check">
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
        <div class="php-modules-text font-mont font-size-14">
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
        <div class="container pricing-title">
            <h2>Paket Hosting Singapura yang Tepat</h2>
            <h5>Diskon 40% + Domain dan SSL Gratis untuk Anda</h5>
        </div>
        <div class="container powerful-php">
            <h5 class="font-mont font-size-23">Powerful dengan Limit PHP yang Lebih Besar</h5>
            <div class="powerful-php-features">
                <div class="powerful-php-tables green-check">
                    <div class="powerful-php-item">
                        <p class="font-mont font-size-14">max execution time 300s</p>
                    </div>
                    <div class="powerful-php-item-grey">
                        <p class="font-mont font-size-14">max execution time 300s</p>
                    </div>
                    <div class="powerful-php-item">
                        <p class="font-mont font-size-14">php memory limit 1024 MB</p>
                    </div>
                </div>
                <div class="powerful-php-tables green-check">
                    <div class="powerful-php-item">
                        <p class="font-mont font-size-14">post max size 128 MB</p>
                    </div>
                    <div class="powerful-php-item-grey">
                        <p class="font-mont font-size-14">upload max filesize 12 8MB</p>
                    </div>
                    <div class="powerful-php-item">
                        <p class="font-mont font-size-14">max input vars 2500</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="separator"></div>
        </div>
        <div class="container features-title">
            <h5 class="font-mont font-size-23">Semua Paket Hosting sudah Termasuk</h5>
        </div>
        <div class="container">
            <div class="row features">
                <Feature v-for="feature in features" :key="feature" :feature="feature"/>
            </div>
            <div class="separator"></div>
        </div>
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
         <div class="container">
            <h5 class="modules-list font-mont font-size-23">Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.</h5>
            <div class="row modules-list-items">
                <div class="col-xs-3 col-md-3">
                    <ul class="font-mont">
                        <li>IcePHP</li>
                        <li>apc</li>
                        <li>apcu</li>
                        <li>apm</li>
                        <li>ares</li>
                        <li>bcmath</li>
                        <li>bcompiler</li>
                        <li>big_int</li>
                        <li>bitset</li>
                        <li>bloomy</li>
                        <li>bz2_filter</li>
                        <li>clamav</li>
                        <li>coin_acceptor</li>
                        <li>crack</li>
                        <li>dba</li>
                    </ul>
                </div>
                <div class="col-xs-3 col-md-3">
                    <ul class="font-mont">
                        <li>http</li>
                        <li>huffman</li>
                        <li>idn</li>
                        <li>igbinary</li>
                        <li>imagick</li>
                        <li>imap</li>
                        <li>inclued</li>
                        <li>inotify</li>
                        <li>interbase</li>
                        <li>intl</li>
                        <li>ioncube_loader</li>
                        <li>ioncube_loader_4</li>
                        <li>jsmin</li>
                        <li>json</li>
                        <li>idap</li>
                    </ul>
                </div>
                <div class="col-xs-3 col-md-3">
                    <ul class="font-mont">
                        <li>nd_pdo_mysql</li>
                        <li>oauth</li>
                        <li>oci8</li>
                        <li>adbc</li>
                        <li>opcache</li>
                        <li>pdf</li>
                        <li>pdo</li>
                        <li>pdo_dblib</li>
                        <li>pdo_firebird</li>
                        <li>pdo_mysql</li>
                        <li>pdo_odbc</li>
                        <li>pdo_pgsql</li>
                        <li>pdo_sqlite</li>
                        <li>pgsql</li>
                        <li>phalcon</li>
                    </ul>
                </div>
                <div class="col-xs-3 col-md-3">
                    <ul class="font-mont">
                        <li>stats</li>
                        <li>stem</li>
                        <li>stomp</li>
                        <li>suhosin</li>
                        <li>sybase_ct</li>
                        <li>sysvmsg</li>
                        <li>sysvsem</li>
                        <li>sysvshm</li>
                        <li>tidy</li>
                        <li>timezonedb</li>
                        <li>trader</li>
                        <li>translit</li>
                        <li>uploadprogress</li>
                        <li>uri_template</li>
                        <li>uuid</li>
                    </ul>
                </div>
            </div>
            <div class="center-element">
                <Button :title="'Selengkapnya'" :flat="'button-flat'"/>
            </div>
        </div>
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
                    <img src="images/Image support.png" alt="Linux Hosting yang Stabil dengan Teknologi LVE">
                </div>
            </div>
        </div>
        <div class="social-share">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6 col-md-6 social-share-text">
                        <p class="font-mont font-size-14">Bagikan jika Anda menyukai halaman ini.</p>
                    </div>
                    <div class="col-xs-6 col-md-6 social-share-list">
                        <div>facebook</div>
                        <div>twitter</div>
                        <div>google+</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="live-chat">
            <div class="container">
                <div class="row">
                    <div class="col-xs-10 col-md-10 font-mont font-size-32 live-chat-text">
                        <h2>Perlu <strong>BANTUAN?</strong> Hubungi Kami : <strong>0274-5305505</strong></h2>
                    </div>
                    <div class="col-xs-2 col-md-2 live-chat-button">
                        <Button :title="'Live Chat'" :flat="'button-flat-white'"/>
                    </div>
                </div>
            </div>
        </div>
        <Footer/>
    </div>
</template>


<script>
    import Navbar from './Navbar.vue';
    import Feature from './Feature.vue';
    import Button from './Button.vue';
    import Footer from './Footer.vue';

    export default {
        components: {
            Navbar,
            Feature,
            Button,
            Footer
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
        },
        created() {
            
        }
    }
</script>