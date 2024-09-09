const { createApp } = Vue;

createApp({
    data() {
        return {
            // recupero qui dentro gli oggetti della chiamata API
            todoData: [],
            // dichiaro la posizione dell'API
            url: 'server.php'
        }
    },

    methods: {
        //recupero $todoData da server.php
        getTodoData() {
            axios.get(this.url).then((data) => {
                console.log(data.data);
                this.todoData = data.data;
            });
        },

        toggleItem(item) {
            // if (item.done === false) {
            //     item.done = true
            // }
            // else if (item.done === true)
            //     item.done = false
            item.done = !item.done
        },
    },

    mounted() {
        //richiamo il metodo
        this.getTodoData();
    },

}).mount('#app');