<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My ToDo</title>
    @include('todo::styles')
    <link rel="stylesheet" href=" https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css ">
  </head>
  <body id="body">
    <div id="app">
      <div id="todo-container">
        <h1 class="todo-head">Bosunski's ToDo</h1>
        <div class="form-place">
            <form class="" action="{{ route('addcategory') }}" method="post">
                <input name="title" type="text"  class="new-todo-input" placeholder="Add Task Category"/>
                <button class="todo-button" type="submit"> Add category </button>
            </form>
        </div>
            <div class="form-place">
                <form class="" action="{{ route('editcategory') }}" method="post">
                    <label for="">Select Category:</label>
                    <select placeholder="Category" class="new-todo-category" name="category_id" required>
                        @foreach ($categories as $key => $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                    <label for="">New category name:</label>
                    <input name="title" type="text"  class="new-todo-category" placeholder="New Category name" required/>
                    <button class="todo-button" type="submit"> Update Category</button>
                </form>
            </div>


        <div class="form-place">
                <button class="todo-button" type="submit"> <span class="fa fa-check-square-o"></span> </button>
                <input name="title" type="text" @keyup.enter="savetask" v-model="title" class="new-todo-input" placeholder="What do you wanna to do?"/>
                <select placeholder="Category" class="new-todo-category" v-model="category_id" name="category_id" required>
                    @foreach ($categories as $key => $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
                <button class="todo-button" @click="savetask()" type="submit"> <span class="fa fa-plus"></span> </button>


          <button class="todo-button" type="button"> <span class="fa fa-minus-circle"></span> </button>
        </div>

        <div class="stats-place">
          <div class="stats"> <span class="fa fa-line-chart"></span> @{{ tasks.length }} in ToDo List &nbsp; | &nbsp; <span class="fa fa-check-square-o"></span> @{{ completed }} Completed</div>
        </div>

        <div v-for="task in tasks" class="todos">
          <div class="each-todo">
            <button :class="{'done' : task.completed, 'each-todo-button-done': !task.completed }" class="each-todo-button-done" @click="markDone(task)" type="button"> <span class="fa fa-check-square-o"></span> </button>
              <p :class="{'done-p' : task.completed, '': !task.completed }" class="todo-text">@{{ task.title }} | @{{ task.category.title }}</p>
              <button class="each-todo-button-delete" @click="removetask(task)" type="button"> <span class="fa fa-minus-circle"></span> </button>
          </div>
        </div>
      </div>

      <!--<div class="todo-list">
        <pre>@{{ $data | json }}</pre>
    </div>-->
    </div>

    <script type="text/javascript" src="https://unpkg.com/vue@2.4.2/dist/vue.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-resource@1.3.5"></script>

    @include('todo::scripts')
  </body>
</html>
