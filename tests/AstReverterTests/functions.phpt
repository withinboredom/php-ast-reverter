Function Test
<=======>
<?php

function test(int $a=[],$b=null,StdClass ...$c, &... $d){}
if (1){
function &test(){}}
function a(){static $a =a();}
function a(){return;}
<=======>
<?php

function test(int $a = [], $b = null, StdClass ...$c, &...$d)
{
}
if (1) {
    function &test()
    {
    }
}
function a()
{
    static $a = a();
}
function a()
{
    return;
}
