<template>
    <div>
        <div class="container pricing-title">
            <h2 class="font-mont-bold font-size-32">Paket Hosting Singapura yang Tepat</h2>
            <h5 class="font-mont font-size-23">Diskon 40% + Domain dan SSL Gratis untuk Anda</h5>
        </div>
        <div class="container pricing-tables">
            <div class="table">
                <div class="package">
                    <h2>{{packages[0].name}}</h2>
                </div>
                <div class="price">
                    <div class="realprice font-mont">
                        <strike>{{packages[0].price}}</strike>
                    </div>
                    <div class="discounted">
                        <sup><span>Rp</span></sup>
                        <span class="font-mont-bold font-size-50">{{packages[0].discounted.substring(3,5)}}</span>
                        <sup><span class="font-mont-bold">{{packages[0].discounted.substring(5,9)}}/</span><span>bln</span></sup>
                    </div>
                </div>
                <div class="users font-mont font-size-13">
                    <strong>{{packages[0].users}}</strong> Pengguna Terdaftar
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
                    <h2>{{packages[1].name}}</h2>
                </div>
                <div class="price">
                    <div class="realprice font-mont">
                        <strike>{{packages[1].price}}</strike>
                    </div>
                    <div class="discounted">
                        <sup><span>Rp</span></sup>
                        <span class="font-mont-bold font-size-50">{{packages[1].discounted.substring(3,5)}}</span>
                        <sup><span class="font-mont-bold">{{packages[1].discounted.substring(5,9)}}/</span><span>bln</span></sup>
                    </div>
                </div>
                <div class="users font-mont font-size-13">
                    <strong>{{packages[1].users}}</strong> Pengguna Terdaftar
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
            <div class="table" style="border: 1px solid #298eea;">
                <div class="pop">
                    <img src="images/ribbon-best-seller.webp" alt="Best Seller">
                </div>
                <div>
                    <div class="package" style="background: #298eea; border-bottom: 1px solid #298eea;">
                        <h2 style="color: #ffffff;">{{packages[2].name}}</h2>
                    </div>
                    <div class="price" style="background: #298eea; color: #ffffff;">
                        <div class="realprice font-mont" style="color: #ffffff;">
                            <strike>{{packages[2].price}}</strike>
                        </div>
                        <div class="discounted">
                            <sup><span>Rp</span></sup>
                            <span class="font-mont-bold font-size-50" style="color: #ffffff;">{{packages[2].discounted.substring(3,5)}}</span>
                            <sup><span class="font-mont-bold" style="color: #ffffff;">{{packages[2].discounted.substring(5,9)}}/</span><span>bln</span></sup>
                        </div>
                    </div>
                    <div class="users font-mont font-size-13" style="background: #177eda; color: #ffffff; border-top: 1px solid #177eda; border-bottom: 1px solid #177eda;">
                        <strong>{{packages[2].users}}</strong> Pengguna Terdaftar
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
                    <h2>{{packages[3].name}}</h2>
                </div>
                <div class="price">
                    <div class="realprice font-mont">
                        <strike>{{packages[3].price}}</strike>
                    </div>
                    <div class="discounted">
                        <sup><span>Rp</span></sup>
                        <span class="font-mont-bold font-size-50">{{packages[3].discounted.substring(3,5)}}</span>
                        <sup><span class="font-mont-bold">{{packages[3].discounted.substring(5,9)}}/</span><span>bln</span></sup>
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
    import axios from 'axios';

    export default {
        components: {
            Button,
        },
        data() {
            return {
                packages: []
            }
        },
        created() {
            axios.get('api/pricing')
                .then((response) => {
                    this.packages = response.data
                })
                .catch((error) => {
                    console.log(error)
                })
        }
    }
</script>