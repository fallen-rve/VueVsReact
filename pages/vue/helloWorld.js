new Vue({
    el: '#helloWorld',
    data: {
       message: 'Hello Vue.js!'
    }
});

new Vue({
    el: '#twoWayBinding',
    data: {
       message: 'Hello Vue.js!'
    }
});

new Vue({
  el: '#todos',
  data: {
    todos: [
      { text: 'Learn JavaScript' },
      { text: 'Learn Vue.js' },
      { text: 'Build Something Awesome' }
    ]
  }
});

new Vue({
  el: '#reverseMessage',
  data: {
    message: 'Hello Vue.js!'
  },
  methods: {
    reverseMessage: function () {
      this.message = this.message.split('').reverse().join('')
    }
  }
});

new Vue({
    el: '#addToDos',
    data: {
        newTodo: '',
        todos: [
            { text: 'Add some todos' }
        ]
    },
    methods: {
        addTodo: function () {
            var text = this.newTodo.trim()
            if (text) {
                this.todos.push({ text: text })
                this.newTodo = ''
            }
        },
        removeTodo: function (index) {
          this.todos.splice(index, 1)
        }
    }
});