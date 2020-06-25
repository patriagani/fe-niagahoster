<template>
    <div>
        <div class="container pricing-title">
            <h2 class="font-mont-bold font-size-32">Paket Hosting Singapura yang Tepat</h2>
            <h5 class="font-mont font-size-23">Diskon 40% + Domain dan SSL Gratis untuk Anda</h5>
        </div>
        <div class="container pricing-tables">
            <div class="table">
                <div class="package">
                    <h2>Bayi</h2>
                </div>
                <div class="price">
                    <div class="realprice font-mont">
                        <strike>Rp 19.900</strike>
                    </div>
                    <div class="discounted">
                        <sup><span>Rp</span></sup>
                        <span class="font-mont-bold font-size-50">14</span>
                        <sup><span class="font-mont-bold">.900/</span><span>bln</span></sup>
                    </div>
                </div>
                <div class="users font-mont font-size-13">
                    <strong>938</strong> Pengguna Terdaftar
                </div>
                <div class="package-features">
                    <ul class="font-size-13">
                        <li><strong>0.5X Resource Power</strong></li>
                        <li><strong>500 MB</strong> Disk Space</li>
                        <li><strong>Unlimited</strong> Bandwidth</li>
                        <li><strong>Unlimited</strong> Databases</li>
                        <li><strong>1</strong> Domain</li>
                        <li><strong>Instant</strong> Backup</li>
                        <li><strong>Unlimited</strong> SSL Gratis Selamanya</li>
                    </ul>
                </div>
                <br>
                <Button :title="'Pilih Sekarang'" :flat="'button-flat'"/>
            </div>
             <div class="table">
                <div class="package">
                    <h2>Pelajar</h2>
                </div>
                <div class="price">
                    <div class="realprice font-mont">
                        <strike>Rp 46.900</strike>
                    </div>
                    <div class="discounted">
                        <sup><span>Rp</span></sup>
                        <span class="font-mont-bold font-size-50">23</span>
                        <sup><span class="font-mont-bold">.450/</span><span>bln</span></sup>
                    </div>
                </div>
                <div class="users font-mont font-size-13">
                    <strong>4.168</strong> Pengguna Terdaftar
                </div>
                <div class="package-features">
                    <ul class="font-size-13">
                        <li><strong>1X Resource Power</strong></li>
                        <li><strong>Unlimited</strong> Disk Space</li>
                        <li><strong>Unlimited</strong> Bandwidth</li>
                        <li><strong>Unlimited</strong> POP3 Email</li>
                        <li><strong>Unlimited</strong> Databases</li>
                        <li><strong>10</strong> Domain</li>
                        <li><strong>Instant</strong> Backup</li>
                        <li><strong>Domain Gratis</strong> Selamanya</li>
                        <li><strong>Unlimited</strong> SSL Gratis Selamanya</li>
                    </ul>
                </div>
                <br>
                <Button :title="'Pilih Sekarang'" :flat="'button-flat'"/>
            </div>
            <div>
                <div class="pop">
                    <img src="images/ribbon-best-seller.webp" alt="Best Seller">
                </div>
                <div class="table" style="border: 1px solid #298eea;">
                    <div class="package" style="background: #298eea; border-bottom: 1px solid #298eea;">
                        <h2 style="color: #ffffff;">Personal</h2>
                    </div>
                    <div class="price" style="background: #298eea; color: #ffffff;">
                        <div class="realprice font-mont" style="color: #ffffff;">
                            <strike>Rp 58.900</strike>
                        </div>
                        <div class="discounted">
                            <sup><span>Rp</span></sup>
                            <span class="font-mont-bold font-size-50" style="color: #ffffff;">38</span>
                            <sup><span class="font-mont-bold" style="color: #ffffff;">.900/</span><span>bln</span></sup>
                        </div>
                    </div>
                    <div class="users font-mont font-size-13" style="background: #177eda; color: #ffffff; border-top: 1px solid #177eda; border-bottom: 1px solid #177eda;">
                        <strong>10.017</strong> Pengguna Terdaftar
                    </div>
                    <div class="package-features">
                        <ul class="font-size-13">
                            <li><strong>2X Resource Power</strong></li>
                            <li><strong>Unlimited</strong> Disk Space</li>
                            <li><strong>Unlimited</strong> Bandwidth</li>
                            <li><strong>Unlimited</strong> POP3 Email</li>
                            <li><strong>Unlimited</strong> Databases</li>
                            <li><strong>Unlimited</strong> Domain</li>
                            <li><strong>Instant</strong> Backup</li>
                            <li><strong>Domain Gratis</strong> Selamanya</li>
                            <li><strong>Unlimited</strong> SSL Gratis Selamanya</li>
                            <li><strong>Private</strong> Name Server</li>
                            <li><strong>SpamAssasin</strong> Mail Protection</li>
                        </ul>
                    </div>
                    <br>
                    <Button :title="'Pilih Sekarang'" :flat="'button-nonflat'"/>
                </div>
            </div>
             <div class="table">
                <div class="package">
                    <h2>Bisnis</h2>
                </div>
                <div class="price">
                    <div class="realprice font-mont">
                        <strike>Rp 109.900</strike>
                    </div>
                    <div class="discounted">
                        <sup><span>Rp</span></sup>
                        <span class="font-mont-bold font-size-50">65</span>
                        <sup><span class="font-mont-bold">.900/</span><span>bln</span></sup>
                    </div>
                </div>
                <div class="users font-mont font-size-13">
                    <strong>3.552</strong> Pengguna Terdaftar
                </div>
                <div class="package-features">
                    <ul class="font-size-13">
                        <li><strong>3X Resource Power</strong></li>
                        <li><strong>Unlimited</strong> Disk Space</li>
                        <li><strong>Unlimited</strong> Bandwidth</li>
                        <li><strong>Unlimited</strong> POP3 Email</li>
                        <li><strong>Unlimited</strong> Databases</li>
                        <li><strong>Unlimited</strong> Domain</li>
                        <li><strong>Magic Auto</strong> Backup & Restore</li>
                        <li><strong>Domain Gratis</strong> Selamanya</li>
                        <li><strong>Unlimited</strong> SSL Gratis Selamanya</li>
                        <li><strong>Private</strong> Name Server</li>
                        <li><strong>Prioritas</strong> Layanan Support</li>
                        <li>*****</li>
                        <li><strong>SpamAssasin</strong> Mail Protection</li>
                    </ul>
                </div>
                <br>
                <Button :title="'Pilih Sekarang'" :flat="'button-flat'"/>
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