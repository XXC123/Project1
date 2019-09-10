@php




use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;




$pm=0;
$cbm=0;
$csm=0;
$bsm=0;

class a extends Controller{


public function perfectmatch($color,$brandname,$size)
    {
        $perfectmatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('brandname',$brandname)
        ->where('size',$size)
        ->get();

        if (!$perfectmatch->isEmpty()) {
            return $perfectmatch;
        }
        return false;

    }
    public function onepercentmatch($color,$brandname,$size)
    {
        $onematch = DB::table('saleshoes')
        ->where('color',$color)
        ->orwhere('brandname',$brandname)
        ->orwhere('size',$size)
        ->get();

        if (!$onematch->isEmpty()) {
            return $onematch;
        }
        return false;


    }
     public function colorbrandmatch($color,$brandname)
    {
        $cbmatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('brandname',$brandname)
        ->get();

        if (!$cbmatch->isEmpty()) {
            return $cbmatch;
        }
        return false;


    }
    public function colorsizematch($color,$size)
    {
        $csmatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('size',$size)
        ->get();

        if (!$csmatch->isEmpty()) {
            return $csmatch;
        }
        return false;


    }
    public function brandsizematch($brandname,$size)
    {
        $bsmatch = DB::table('saleshoes')
        ->where('brandname',$brandname)
        ->where('size',$size)
        ->get();

        if (!$bsmatch->isEmpty()) {
            return $bsmatch;
        }
        return false;


    }

}

$a=new a;

if($a->perfectmatch($color,$brandname,$size)){
	$message= "These are perfect matches(100%).";
    $products= $a->perfectmatch($color,$brandname,$size);

	$pm=1;
}
else{

if($a->colorbrandmatch($color,$brandname)){
	$message= "These are color and brand matches(66%).";
    $products= $a->colorbrandmatch($color,$brandname);
	$cbm=1;
}
if($a->colorsizematch($color,$size)){
	$message= "These are color and size matches(66%).";
    $products= $a->colorsizematch($color,$size);
	$csm=1;
}
if($a->brandsizematch($brandname,$size)){
	$message= "These are size and brand matches(66%).";
    $products= $a->brandsizematch($brandname,$size);
	$bsm=1;
}
if(!$cbm&&!$csm&&!$bsm){

	if($a->onepercentmatch($color,$brandname,$size)){
	$message= "There are only one element matches(33%).";
    $products= $a->onepercentmatch($color,$brandname,$size);
}
else{
	$message= "Sorry there is no matches.";
}
}
}


@endphp


@extends('layouts.default')
@section('title', $message)

@section('content')


<table class="table table-striped table-bordered table-hover">
        <thead><tr><th>ID</th><th>Brandname</th><th>Color</th><th>Size</th></tr></thead>
        <tbody>
            @foreach($products as $product)
            <tr><td>{{ $product->id }}</td><td>{{ $product->brandname }}</td><td>{{ $product->color }}</td><td>{{ $product->size }}</td></tr>
            @endforeach
        </tbody>
    </table>
<div>
    <strong><p>{{$message}}</p></strong>
</div>
@stop
