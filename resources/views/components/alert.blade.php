<!-- /resources/views/test.blade.php  -->
<div>
  @props(['button' =>'info'])
    <button>click</button>
  <div {{$attributes->merge(["class" =>"alert alert-".$type])}}>welcome aler </div>
</div>