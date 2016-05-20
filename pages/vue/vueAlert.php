<?php 
    // Set page information
    $this->title('Alert');
    $this->description ('Alert for Vue.js!');
    $this->link("https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css", false, false);
    $this->footer_link( "assets/js/vue_components/vueAlert.js" );
    echo '<h1><a href="https://gist.github.com/TahaSh/da262149f1ba0ba52ad8" target="_blank">Learning Alert with Vue.js!</a></h1>';
?>
<div id="app">
    <a href="#" v-on:click="showModal('firstModal', {'foo': 'FOO VALUE', 'bar': 'BAR VALUE'})" class="naked-link title">First Modal</a><br>
    <a href="#" v-on:click="showModal('secondModal')" class="naked-link title">Second Modal</a>

    <template id="modal-box-template">
        <div class="modal u-overlay animated" v-on:click="closeModal" v-show="isModalOpen" transition="fade">
            <div class="modal-container animated" v-on:click.stop="" v-show="isModalOpen" transition="fadeWithMove">
                <header class="modal-header">
                    <h1>
                        {{ title }}
                    </h1>
                </header>

                <div class="modal-content">
                    <slot></slot>
                </div>

                <footer class="modal-footer"></footer>
            </div>
        </div>
    </template>

    <modal-box id="firstModal" title="First Modal">
        <p>Here is the body. {{ modalData.foo }} and {{ modalData.bar }}</p>
    </modal-box>

    <modal-box id="secondModal" title="Second Modal">
        <p>The body of the second modal.</p>
    </modal-box>
</div>