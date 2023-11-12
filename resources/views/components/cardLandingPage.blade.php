@props(['img','text'])

<?php
$styleCard = "h-64 w-64 flex justify-center flex-col items-center";
$styleImg = 'w-32';
$styleWrapperImg ='';
$styleText = "text-color2 font-semibold text-2xl capitalize w-full text-center " ;

?>
<div class="{{$styleCard}} ">
    <div class="{{ $styleWrapperImg }}">
        <img src="{{ asset($img) }}" alt="{{$text}}" class="{{ $styleImg }}">
    </div>
    <p class="{{$styleText}}">{{$text}}</p>
</div>