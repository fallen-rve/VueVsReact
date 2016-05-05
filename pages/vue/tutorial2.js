var viewmodel = new Vue({
    el: '#myvueinstance',
    data: {
        textinput: 'Too hot, hot damn.'
    }
});

var viewmodel2 = new Vue({
    el: '#myvueinstance2',
 
    data: {
        libraries: ['angular.js', 'd3', 'node', 'jquery'],
        newlibrary: ''
    },

    methods: {
        addLibrary: function() {
            this.libraries.push(this.newlibrary);

            this.newlibrary = '';
        },
        deleteLibraries: function() {
            this.libraries = [];
        }
    }
});

var viewmodel3 = new Vue({
    el: '#myvueinstance3',
 
    data: {
        sortparam: '',
 
        fitlerkey: '',
        
        order: 1,
 
        frameworks: [
            {id: '001', framework: 'angular'},
            {id: '002', framework: 'd3'},
            {id: '003', framework: 'node'},
            {id: '004', framework: 'jquery'},
            {id: '005', framework: 'reveal.js'},
            {id: '006', framework: 'impress.js'},
            {id: '007', framework: 'backbone.js'},
            {id: '008', framework: 'meteor.js'},
            {id: '009', framework: 'express'},
            {id: '010', framework: 'moment'},
            {id: '011', framework: 'underscore'},
            {id: '012', framework: 'gulp'},
            {id: '013', framework: 'react'},
            {id: '014', framework: 'ghost'},
            {id: '015', framework: 'sweetalert'},
            {id: '016', framework: 'select2'},
        ]
    },
 
    methods: {
        sortvia: function (sortparam, order) {
        this.order = this.order * -1;
            this.sortparam = sortparam;
        }
    }
});

Vue.filter('upper', function (value) {
    return value.toUpperCase();
});
 
Vue.filter('lower', function (value) {
    return value.toLowerCase();
});

var viewmodel4 = new Vue({
    el: '#myvueinstance4',
 
    data:{
        string: 'Custom Filters'
    }
});

var anothermodel = new Vue({
    el: '#anotherdiv',
 
    data:{
        string: 'Spooky action from a distance.'
    }
});

Vue.component('alert', {
    template: '<div class="alert alert-success" role="alert"><b>Smashing!</b> Nice work.</div>'
});
 
var viewmodel = new Vue({
    el: '#myvueinstance5'
});

Vue.component('alert', {
    
    props: ['type', 'bold', 'msg'],
    
    template: '<div class="alert alert-{{ type }}" role="alert"><b>{{ bold }}</b> {{ msg }}</div>'
});
 
var viewmodel = new Vue({
    el: '#myvueinstance6'
});

Vue.directive('twitter', function (message) {
    
    this.el.addEventListener('click', function () {
        
        var width = 818,
            height = 400,
            left = (document.documentElement.clientWidth - width) / 2,
            top = (document.documentElement.clientHeight - height) / 2,
            url = 'https://twitter.com/intent/tweet?text=' + message + '&url=http://vegibit.com',
            opts = 'status=1' +
                ',width=' + width +
                ',height=' + height +
                ',top=' + top +
                ',left=' + left;
 
        window.open(url, 'twitter', opts);
        return false;
    });
});
 
var viewmodel2 = new Vue({
    el: '#myvueinstance7'
});