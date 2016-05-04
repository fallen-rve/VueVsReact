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