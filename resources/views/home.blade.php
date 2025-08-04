<!-- @include('common.inner',["data" => "Data from home page "]) -->
@includeIf('common.inner',["data" => "Data from home page "]) 
<!-- handle error if file not exist -->
<!-- including innner file like this  -->
<h1>This is home page </h1>
<a href="/about/{from-home-page}">go to about page </a>
<h1>Name from controllers : {{$name}}</h1>
<h1>users : {{$users[0]}}</h1>

@if($name == "dinesh")
<h2>my name is dinesh</h2>
@elseif($name =="same")
<h2>This is same</h2>
@else
<h2>other users</h2>
@endif

<div>
    @foreach($users as $user)
    <h5>{{$user}}</h5>
    @endforeach
</div>

<div>
    @for($i=0;$i<=4;$i++)
    <h3> {{$i}}</h3>
    @endfor 
</div>


<!-- using message component -->
<x-message />
<x-message msg="user loged in successfully" class="success"/>
<style>
.success{
    background: lightgreen;
    color: green;
    padding: 3px 10px;
    border-radius: 2px;
    display: inline-block;
    margin: 10px;
}
</style>