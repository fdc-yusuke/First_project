<form method="post">
  <h1>REGISTRATION </h1>
  <input name="name" type="text" placeholder="Username"/>
  <input name="pass"type="password" placeholder="Password"/>
  <button type="submit">CLICK</button>
</form>

<style>
	@text: #111;
@base: #f4f4f4;
@link: #2a3644;
@button: #64e6f2;
@bottom: #ab4b47;

.rounded (@radius: 6px) {
  -webkit-border-radius: @radius;
     -moz-border-radius: @radius;
      -ms-border-radius: @radius;
       -o-border-radius: @radius;
          border-radius: @radius;
}

.trans (@transition: .1s) {
  -webkit-transition: all @transition ease-in-out;
     -moz-transition: all @transition ease-in-out;
          transition: all @transition ease-in-out;
 
}

* {
  margin:0;
  padding:0;
  border:none;
  list-style:none;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
}

body {
  font:15px/1.25 'Alef';
  color:@text;
}

form {
  margin:70px auto;
  background:@link;
  width:347px;
  text-align:center;
  padding:40px;
  .rounded;
}

form > h1 {
  color:@base;
  text-shadow:1px 1px 0px rgba(0, 0, 0, 0.7);
  font-weight:700;
  margin-bottom:20px;
  font-size:1.2em;
}

input {
  background:rgba(0, 0, 0, 0.2);
  color:#fff;
  text-shadow:1px 1px 0px rgba(0, 0, 0,0.3);
  display:block;
  width:269px;
  padding:15px;
  margin-bottom:10px;
  .rounded;
  .trans;
  outline:none;
}

input:focus {
  background:rgba(0, 0, 0, 0.1);
  .trans;
}

::-webkit-input-placeholder {
   color: rgba(225, 225, 225, 0.4);
}

:-moz-placeholder {
   color: rgba(225, 225, 225, 0.4); 
}

::-moz-placeholder {
   color: rgba(225, 225, 225, 0.4);
}

:-ms-input-placeholder {  
   color: rgba(225, 225, 225, 0.4);
}

button {
  position:relative;
  display:block;
  margin-top:15px;
  margin-bottom:15px;
  padding:17px;
  width:270px;
  .rounded;
  .trans;
  font-size:1.1em;
  background:@button;
  color:@base;
  box-shadow:0px 3px 0px @bottom;
  cursor:pointer;
  background-color: #64e6f2;
    color:@base;
  text-shadow:1px 1px 0px rgba(0, 0, 0, 0.7);
  font-weight:700;
}

button:active {
  top:3px;
  box-shadow:none;

}
</style>