@extends('layouts.app')
@section('content')
  <footer id="MyFooter" style="margin-top:-2%">
        <div class="row">
            <div class="col-md-12 col-sm-6 footer-navigation">
                <h3><a href="#"> Profile setting </a></h3></div>
            <div class="clearfix visible-sm-block"></div>
        </div>
    </footer>
<div class="container">
<div class="row">
<div class="col-xs-4">

  <div id="tg-sortable" class="tg-tabs-nav tg-sortable" role="tablist" >


    <div id="user-short">
      <img class="user__avatar" src="https://udemy-images.udemy.com/user/200_H/anonymous.png" alt="">
      <hgroup class="tooltip-container">


        </span>

      </hgroup>
    </div>

    <ul class="list-group"></ul>
    <div class="well" ><a href="# "><span>Profile </span></a></div>
    <div class="well"><a href="# "><span>Photo </span></a></div>
    <div class="well"><a href="# "><span>Password </span></a></div>
    <div class="well"><a href="{{ url('/tttt') }}"><span>compte </span></a></div>
      <div class="clearfix"></div>
          <div class="well"><a href="{{ url('/pro-registre') }}"><span>become a professionel membre</span></a></div>

  </div>
</div>

<div class="col-xs-6">
  <form class="bootstrap-form-with-validation" style="margin-top:25%">
         <h2 class="text-center"> basic informations</h2>
         <div class="form-group">
             <label class="control-label" for="text-input">First name</label>
             <input class="form-control" type="text" name="text-input" id="text-input">
         </div>
         <div class="form-group">
             <label class="control-label" for="text-input">Last name</label>
             <input class="form-control" type="text" name="text-input" id="text-input">
         </div>
         <div class="form-group">
             <label class="control-label" for="text-input">user name</label>
             <input class="form-control" type="text" name="text-input" id="text-input">
         </div>
         <div class="form-group">
             <label class="control-label" for="email-input">Email </label>
             <input class="form-control" type="email" name="email-input" id="email-input">
         </div>
         <div class="form-group">
             <label class="control-label" for="textarea-input">discription </label>
             <textarea class="form-control" name="textarea-input" id="textarea-input"></textarea>
         </div>
         <div class="form-group"></div>
         <div class="form-group"></div>
         <div class="form-group">
             <button style="margin-bottom:25px" class="btn btn-primary" type="submit">save</button>
         </div>
     </form>

</div>
</div>
</div>

@endsection
