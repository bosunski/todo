<style media="screen">
body {
  background: #f6f6f6;
  font-family: Encode Sans, sans-serif;
}

#todo-container {
  max-width: 800px;
  margin: auto;
  /*text-align: center;*/
}

.new-todo-input {
  padding-left: 15px;
   border: 1px solid #e3e3e3;
  height: 30px;
  width:70%;
  font-family: inherit;
}

.new-todo-category {
  padding-left: 15px;
   border: 1px solid #e3e3e3;
  height: 30px;
  font-family: inherit;
}

.form-place {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 10px;
  background: #d4d4d4;
  margin-bottom: 20px;
}

.new-todo-input:focus {
  border-radius: 0px;
  border: 1px solid #97d6eb;
}

.todo-button, .each-todo-button-delete, .each-todo-button-done {
  height:30px;
  background: #838a90;
  border:0px;
  color: white;
  text-transform: capitalize;
  cursor: pointer;
}

.todo-button:hover {
  background-color:#f6f6f6;
  color:#838a90;
}

.todo-head {
  position: relative;
  top:10px;
  margin-top:50px;
  color: rgba(36, 160, 199, 0.49);
  font-weight: normal;
  text-align: center;
}

.each-todo {
  margin:auto;
  width:80%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 20px;
  background: #d4d4d4;
  margin-bottom: 10px;
}

.stats {
  text-align: center;
    margin:auto;
    width:80%;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 10px;
    background: #d4d4d4;
    margin-bottom: 8px;
    margin-top: -20px;
}

.todo-text {
  display: inline;
  font-weight: normal;
  color: rgba(36, 160, 199, 0.49);
  font-size: 15px;
  text-align: left;
  margin: 0 30px 0 10px;
  max-width: 30%;
  word-wrap: break-word;
}

.each-todo-button-delete {
  float: right;
}

.each-todo-button-delete:hover {
  background: #de2c20;
}

.each-todo-button-done {
  float: left;
}

.each-todo-button-done:hover {
  background: #25b061;
}

.done {
  float: left;
  background: #25b061;
}

.done-p {
  text-decoration: line-through;
}



</style>
