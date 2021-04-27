<template>
    <div class="square" @click="goTo(app)" >
        <div>
            <h4>{{app.title}}</h4>
            <p>{{app.description}}</p>
        </div>
        <div>
            <!-- <Button :href="app.link"  text="App" color="#2E74C8" /> -->
        </div>
    </div>
</template>

<script>
import Button from './Button'
export default {
    name: 'AppSquare',
    props: {
        app: Object,
    },
    components: {
        Button,
    },
    methods: {
        goTo() {
            // console.log(this.app.link)
            window.open(this.app.link, '_blank')
        },
    },
}
</script>

<style scoped>
.square {
    position: relative;
    display: inline-flex;
    flex-direction: column;
    min-width: 160px;
    max-width: 160px;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 2px solid #2E74C8;
    border-radius: 0.25rem;
    margin: 1rem;
}

.demo {
-webkit-box-shadow: 4px -4px 15px 0px #FF1F1F, 12px -11px 7px 0px #FF9376, 20px -5px 7px 0px #FFE264, 20px 6px 7px 0px #F6FF33, 13px 12px 17px 0px #FF9527, 2px 17px 17px 0px #FF0000, -9px 21px 18px 0px #FFF212, -9px 6px 11px 0px #FF0808, -11px -9px 11px 0px #FFFA17, -11px -9px 11px 0px #FFFA17, 5px 5px 15px 5px rgba(0,0,0,0); 
box-shadow: 4px -4px 15px 0px #FF1F1F, 12px -11px 7px 0px #FF9376, 20px -5px 7px 0px #FFE264, 20px 6px 7px 0px #F6FF33, 13px 12px 17px 0px #FF9527, 2px 17px 17px 0px #FF0000, -9px 21px 18px 0px #FFF212, -9px 6px 11px 0px #FF0808, -11px -9px 11px 0px #FFFA17, -11px -9px 11px 0px #FFFA17, 5px 5px 15px 5px rgba(0,0,0,0);
}
</style>