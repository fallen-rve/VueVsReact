// this is our Model
var exampleData = {
  name: 'Vue.js'
}

// create a Vue instance, or, a "ViewModel"
// which links the View and the Model
var exampleVM = new Vue({
  el: '#example-1',
  data: exampleData
});

var exampleVM2 = new Vue({
  el: '#example-2',
  data: {
    greeting: true
  }
});