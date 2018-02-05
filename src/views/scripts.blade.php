<script type="text/javascript">
var vm = new Vue({
  el: '#app',

  data: {
    title: null,
    tasks: {!! json_encode($tasks) !!},
    all_done: false,
    category_id: null,
    categories: {!! json_encode($categories) !!},
    selected_category: null,
  },
  methods: {
    savetask:function () {
      if(this.title != null) {
          var new_data = {
            title: this.title,
            category_id: this.category_id,
            done: false,
            //date: (new Date).getTime(),
        };
          this.$http.post("{{ route('savetodo') }}", new_data).then(response => {
              console.log(response.data);
              if(response.data.done) location.reload();
          });
          this.tasks.push(new_data);
      }
      //this.title = null;

    },

    fillinput: function() {
    },

    markDone: function(task) {
        this.$http.put("{{ route('edittask') }}", task).then(response => {
            console.log(response.data);
            if(response.data.done) task.completed = !task.completed; //location.reload();
        });

    },

    removetask: function(task) {
      var index = this.tasks.indexOf(task);
      this.$http.delete('/bosunski-delete-task/'+task.id).then(response => {
          if(response.data.done) this.tasks.splice(index, 1);
      });

    },

    doneAll: function() {
      for (task of this.tasks) {
        task.done = !this.all_done;
      }
      this.all_done = !this.all_done;
    },

    deleteAll: function() {
      this.tasks = [];
    }
  },

  computed: {
    completed: function() {
      var done = 0;
      for (task of this.tasks) {
        if(task.completed)
          done++;
      }
      return done;
    }
  }
})
</script>
