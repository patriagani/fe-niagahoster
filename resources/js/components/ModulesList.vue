<template>
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
</template>

<script>
    import Button from './Button.vue';

    export default {
        components: {
            Button,
        }
    }
</script>