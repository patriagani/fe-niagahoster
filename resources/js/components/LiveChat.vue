<template>
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
</template>

<script>
    import Button from './Button.vue';

    export default {
        components: {
            Button,
        }
    }
</script>