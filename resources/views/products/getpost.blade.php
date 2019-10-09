@php




use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;




class a extends Controller{

//<!-- 6 elements, 100% -->

public function perfectmatch($color,$brandname,$size,$price,$year,$series)
    {
        $perfectmatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('price',$price)
        ->where('brandname',$brandname)
        ->where('size',$size)
        ->where('year',$year)
        ->where('series',$series)
        ->get();

        if (!$perfectmatch->isEmpty()) {
            return $perfectmatch;
        }
        return false;

    }

   // <!-- 1 element,16.67% -->

    public function onepercentmatch($color,$brandname,$size,$price,$year,$series)
    {
        $colormatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('price','!=',$price)
        ->where('brandname','!=',$brandname)
        ->where('size','!=',$size)
        ->where('year','!=',$year)
        ->where('series','!=',$series);

        $brandmatch = DB::table('saleshoes')
        ->where('brandname',$brandname)
        ->where('price','!=',$price)
        ->where('color','!=',$color)
        ->where('size','!=',$size)
        ->where('year','!=',$year)
        ->where('series','!=',$series);

        $sizematch = DB::table('saleshoes')
        ->where('size',$size)
        ->where('price','!=',$price)
        ->where('brandname','!=',$brandname)
        ->where('color','!=',$color)
        ->where('year','!=',$year)
        ->where('series','!=',$series);

        $pricematch = DB::table('saleshoes')
        ->where('price',$price)
        ->where('size','!=',$size)
        ->where('brandname','!=',$brandname)
        ->where('color','!=',$color)
        ->where('year','!=',$year)
        ->where('series','!=',$series);

        $yearmatch = DB::table('saleshoes')
        ->where('year',$year)
        ->where('price','!=',$price)
        ->where('brandname','!=',$brandname)
        ->where('size','!=',$size)
        ->where('color','!=',$color)
        ->where('series','!=',$series);

        $seriesmatch = DB::table('saleshoes')
        ->where('series',$series)
        ->where('price','!=',$price)
        ->where('brandname','!=',$brandname)
        ->where('size','!=',$size)
        ->where('year','!=',$year)
        ->where('color','!=',$color)
        ->union($colormatch)
        ->union($brandmatch)
        ->union($sizematch)
        ->union($pricematch)
        ->union($yearmatch)
        ->get();

        if (!$seriesmatch->isEmpty()) {
            return $seriesmatch;
        }
        return false;

    }


//<!-- 5 elememts,83.33% -->

public function nomatch($color,$brandname,$size,$price,$year,$series)
    {
        $nocolormatch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('price',$price)
        ->where('brandname',$brandname)
        ->where('size',$size)
        ->where('year',$year)
        ->where('series',$series);

        $nobrandmatch = DB::table('saleshoes')
        ->where('brandname','!=',$brandname)
        ->where('price',$price)
        ->where('color',$color)
        ->where('size',$size)
        ->where('year',$year)
        ->where('series',$series);

        $nosizematch = DB::table('saleshoes')
        ->where('size','!=',$size)
        ->where('price',$price)
        ->where('brandname',$brandname)
        ->where('color',$color)
        ->where('year',$year)
        ->where('series',$series);

        $nopricematch = DB::table('saleshoes')
        ->where('price','!=',$price)
        ->where('size',$size)
        ->where('brandname',$brandname)
        ->where('color',$color)
        ->where('year',$year)
        ->where('series',$series);

        $noyearmatch = DB::table('saleshoes')
        ->where('year','!=',$year)
        ->where('price',$price)
        ->where('brandname',$brandname)
        ->where('size',$size)
        ->where('color',$color)
        ->where('series',$series);

        $noseriesmatch = DB::table('saleshoes')
        ->where('series','!=',$series)
        ->where('price',$price)
        ->where('brandname',$brandname)
        ->where('size',$size)
        ->where('year',$year)
        ->where('color',$color)
        ->union($nocolormatch)
        ->union($nobrandmatch)
        ->union($nosizematch)
        ->union($nopricematch)
        ->union($noyearmatch)
        ->get();

        if (!$noseriesmatch->isEmpty()) {
            return $noseriesmatch;
        }
        return false;


    }

//<!-- 4 elements,66.67% -->

public function fourmatch($color,$brandname,$size,$price,$year,$series)
    {
        $nocbmatch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('brandname','!=',$brandname)
        ->where('price',$price)
        ->where('size',$size)
        ->where('year',$year)
        ->where('series',$series);

        $nocsmatch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('size','!=',$size)
        ->where('price',$price)
        ->where('brandname',$brandname)
        ->where('year',$year)
        ->where('series',$series);


        $nocpmatch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('price','!=',$price)
        ->where('brandname',$brandname)
        ->where('size',$size)
        ->where('year',$year)
        ->where('series',$series);

        $nocymatch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('price',$price)
        ->where('brandname',$brandname)
        ->where('size',$size)
        ->where('year','!=',$year)
        ->where('series',$series);


        $nocssmatch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('price',$price)
        ->where('brandname',$brandname)
        ->where('size',$size)
        ->where('year',$year)
        ->where('series','!=',$series);

        $nobsmatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('price',$price)
        ->where('brandname','!=',$brandname)
        ->where('size','!=',$size)
        ->where('year',$year)
        ->where('series',$series);

        $nobpmatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('price','!=',$price)
        ->where('brandname','!=',$brandname)
        ->where('size',$size)
        ->where('year',$year)
        ->where('series',$series);

        $nobymatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('price',$price)
        ->where('brandname','!=',$brandname)
        ->where('size',$size)
        ->where('year','!=',$year)
        ->where('series',$series);

        $nobssmatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('price',$price)
        ->where('brandname','!=',$brandname)
        ->where('size',$size)
        ->where('year',$year)
        ->where('series','!=',$series);

        $nospmatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('price','!=',$price)
        ->where('brandname',$brandname)
        ->where('size','!=',$size)
        ->where('year',$year)
        ->where('series',$series);

        $nosymatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('price',$price)
        ->where('brandname',$brandname)
        ->where('size','!=',$size)
        ->where('year','!=',$year)
        ->where('series',$series);

        $nosssmatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('price',$price)
        ->where('brandname',$brandname)
        ->where('size','!=',$size)
        ->where('year',$year)
        ->where('series','!=',$series);

        $nopymatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('price','!=',$price)
        ->where('brandname',$brandname)
        ->where('size',$size)
        ->where('year','!=',$year)
        ->where('series',$series);

        $nopssmatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('price','!=',$price)
        ->where('brandname',$brandname)
        ->where('size',$size)
        ->where('year',$year)
        ->where('series','!=',$series);

        $noyssmatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('price',$price)
        ->where('brandname',$brandname)
        ->where('size',$size)
        ->where('year','!=',$year)
        ->where('series','!=',$series)
        ->union($nocbmatch)
        ->union($nocsmatch)
        ->union($nocpmatch)
        ->union($nocymatch)
        ->union($nocssmatch)
        ->union($nobsmatch)
        ->union($nobpmatch)
        ->union($nobymatch)
        ->union($nobssmatch)
        ->union($nospmatch)
        ->union($nosymatch)
        ->union($nosssmatch)
        ->union($nopymatch)
        ->union($nopssmatch)
        ->get();

        if (!$noyssmatch->isEmpty()) {
            return $noyssmatch;
        }
        return false;

    }

        //<!-- 3 elements, 50% -->

    public function threematch($color,$brandname,$size,$price,$year,$series)
    {
        $cbsmatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('price','!=',$price)
        ->where('brandname',$brandname)
        ->where('size',$size)
        ->where('year','!=',$year)
        ->where('series','!=',$series);

        $cbpmatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('price',$price)
        ->where('brandname',$brandname)
        ->where('size','!=',$size)
        ->where('year','!=',$year)
        ->where('series','!=',$series);

        $cbymatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('brandname',$brandname)
        ->where('size','!=',$size)
        ->where('price','!=',$price)
        ->where('year',$year)
        ->where('series','!=',$series);

        $cbssmatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('brandname',$brandname)
        ->where('size','!=',$size)
        ->where('price','!=',$price)
        ->where('year','!=',$year)
        ->where('series',$series);

        $cspmatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('brandname','!=',$brandname)
        ->where('size',$size)
        ->where('price',$price)
        ->where('year','!=',$year)
        ->where('series','!=',$series);

        $csymatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('brandname','!=',$brandname)
        ->where('size',$size)
        ->where('price','!=',$price)
        ->where('year',$year)
        ->where('series','!=',$series);

        $csssmatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('brandname','!=',$brandname)
        ->where('size',$size)
        ->where('price','!=',$price)
        ->where('year','!=',$year)
        ->where('series',$series);

        $cpymatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('brandname','!=',$brandname)
        ->where('size','!=',$size)
        ->where('price',$price)
        ->where('year',$year)
        ->where('series','!=',$series);

        $cpssmatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('brandname','!=',$brandname)
        ->where('size','!=',$size)
        ->where('price',$price)
        ->where('year','!=',$year)
        ->where('series',$series);

        $cyssmatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('brandname','!=',$brandname)
        ->where('size','!=',$size)
        ->where('price','!=',$price)
        ->where('year',$year)
        ->where('series',$series);

        $bspmatch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('brandname',$brandname)
        ->where('size',$size)
        ->where('price',$price)
        ->where('year','!=',$year)
        ->where('series','!=',$series);

        $bsymatch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('brandname',$brandname)
        ->where('size',$size)
        ->where('price','!=',$price)
        ->where('year',$year)
        ->where('series','!=',$series);

        $bsssmatch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('brandname',$brandname)
        ->where('size',$size)
        ->where('price','!=',$price)
        ->where('year','!=',$year)
        ->where('series',$series);

        $bpymatch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('brandname',$brandname)
        ->where('size','!=',$size)
        ->where('price',$price)
        ->where('year',$year)
        ->where('series','!=',$series);

        $bpssmatch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('brandname',$brandname)
        ->where('size','!=',$size)
        ->where('price',$price)
        ->where('year','!=',$year)
        ->where('series',$series);

        $byssmatch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('brandname',$brandname)
        ->where('size','!=',$size)
        ->where('price','!=',$price)
        ->where('year',$year)
        ->where('series',$series);

        $spymatch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('brandname','!=',$brandname)
        ->where('size',$size)
        ->where('price',$price)
        ->where('year',$year)
        ->where('series','!=',$series);

        $spssmatch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('brandname','!=',$brandname)
        ->where('size',$size)
        ->where('price',$price)
        ->where('year','!=',$year)
        ->where('series',$series);

        $syssmatch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('brandname','!=',$brandname)
        ->where('size',$size)
        ->where('price','!=',$price)
        ->where('year',$year)
        ->where('series',$series);

        $pyssmatch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('brandname','!=',$brandname)
        ->where('size','!=',$size)
        ->where('price',$price)
        ->where('year',$year)
        ->where('series',$series)
        ->union($cbsmatch)
        ->union($cbpmatch)
        ->union($cbymatch)
        ->union($cbssmatch)
        ->union($cspmatch)
        ->union($csymatch)
        ->union($csssmatch)
        ->union($cpymatch)
        ->union($cpssmatch)
        ->union($cyssmatch)
        ->union($bspmatch)
        ->union($bsymatch)
        ->union($bsssmatch)
        ->union($bpymatch)
        ->union($bpssmatch)
        ->union($byssmatch)
        ->union($spymatch)
        ->union($spssmatch)
        ->union($syssmatch)
        ->get();

        if (!$pyssmatch->isEmpty()) {
            return $pyssmatch;
        }
        return false;
    }

   // <!-- 2 elements,33.3% -->


public function twomatch($color,$brandname,$size,$price,$year,$series)
    {
        $cbmatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('brandname',$brandname)
        ->where('price','!=',$price)
        ->where('size','!=',$size)
        ->where('year','!=',$year)
        ->where('series','!=',$series);

        $csmatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('size',$size)
        ->where('price','!=',$price)
        ->where('brandname','!=',$brandname)
        ->where('year','!=',$year)
        ->where('series','!=',$series);

        $cpmatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('price',$price)
        ->where('brandname','!=',$brandname)
        ->where('size','!=',$size)
        ->where('year','!=',$year)
        ->where('series','!=',$series);

        $cymatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('price','!=',$price)
        ->where('brandname','!=',$brandname)
        ->where('size','!=',$size)
        ->where('year',$year)
        ->where('series','!=',$series);

        $cssmatch = DB::table('saleshoes')
        ->where('color',$color)
        ->where('price','!=',$price)
        ->where('brandname','!=',$brandname)
        ->where('size','!=',$size)
        ->where('year','!=',$year)
        ->where('series',$series);

        $bsmatch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('price','!=',$price)
        ->where('brandname',$brandname)
        ->where('size',$size)
        ->where('year','!=',$year)
        ->where('series','!=',$series);

        $bpmatch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('price',$price)
        ->where('brandname',$brandname)
        ->where('size','!=',$size)
        ->where('year','!=',$year)
        ->where('series','!=',$series);

        $bymatch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('price','!=',$price)
        ->where('brandname',$brandname)
        ->where('size','!=',$size)
        ->where('year',$year)
        ->where('series','!=',$series);

        $bssmatch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('price','!=',$price)
        ->where('brandname',$brandname)
        ->where('size','!=',$size)
        ->where('year','!=',$year)
        ->where('series',$series);

        $spmatch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('price',$price)
        ->where('brandname','!=',$brandname)
        ->where('size',$size)
        ->where('year','!=',$year)
        ->where('series','!=',$series);

        $symatch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('price','!=',$price)
        ->where('brandname','!=',$brandname)
        ->where('size',$size)
        ->where('year',$year)
        ->where('series','!=',$series);

        $sssmatch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('price','!=',$price)
        ->where('brandname','!=',$brandname)
        ->where('size',$size)
        ->where('year','!=',$year)
        ->where('series',$series);

        $pymatch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('price',$price)
        ->where('brandname','!=',$brandname)
        ->where('size','!=',$size)
        ->where('year',$year)
        ->where('series','!=',$series);

        $pssmatch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('price',$price)
        ->where('brandname','!=',$brandname)
        ->where('size','!=',$size)
        ->where('year','!=',$year)
        ->where('series',$series);

        $yssmatch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('price','!=',$price)
        ->where('brandname','!=',$brandname)
        ->where('size','!=',$size)
        ->where('year',$year)
        ->where('series',$series)
        ->union($cbmatch)
        ->union($csmatch)
        ->union($cpmatch)
        ->union($cymatch)
        ->union($cssmatch)
        ->union($bsmatch)
        ->union($bpmatch)
        ->union($bymatch)
        ->union($bssmatch)
        ->union($spmatch)
        ->union($symatch)
        ->union($sssmatch)
        ->union($pymatch)
        ->union($pssmatch)
        ->get();

        if (!$yssmatch->isEmpty()) {
            return $yssmatch;
        }
        return false;

    }

//<!-- 0 element,0% -->

    public function zeromatch($color,$brandname,$size,$price,$year,$series)
    {
        $onematch = DB::table('saleshoes')
        ->where('color','!=',$color)
        ->where('brandname','!=',$brandname)
        ->where('size','!=',$size)
        ->where('price','!=',$price)
        ->where('year','!=',$year)
        ->where('series','!=',$series)
        ->get();

        if (!$onematch->isEmpty()) {
            return $onematch;
        }
        return false;

    }

}

$a=new a;

$productx=$a->perfectmatch($color,$brandname,$size,$price,$year,$series);
$productno=$a->nomatch($color,$brandname,$size,$price,$year,$series);
$productfour=$a->fourmatch($color,$brandname,$size,$price,$year,$series);
$productthree=$a->threematch($color,$brandname,$size,$price,$year,$series);
$producttwo=$a->twomatch($color,$brandname,$size,$price,$year,$series);
$productone=$a->onepercentmatch($color,$brandname,$size,$price,$year,$series);
$productzero=$a->zeromatch($color,$brandname,$size,$price,$year,$series);




@endphp

@extends('layouts.menu')
@section('css')
@endsection

@section('content')
<style type="text/css">
#display{visibility :hidden;}
</style>

<input type="button" onclick="display();" value="Details">
<input type="button" onclick="displaysimple();" value="Simple">

  <div id="displaysimple">
<table class="table table-striped table-bordered table-hover">

        <thead><tr><th>Image</th>
          <th>Similarity</th></tr></thead>
        <tbody>


          @if(!empty($productx))
            @foreach($productx as $product)
            <tr><td><img src="../../../../../../{{$product->img}}"></td>

              <td> 100% </td></tr>
            @endforeach
          @endif

          @if(!empty($productno))
            @foreach($productno as $product)
            <tr><td><img src="../../../../../../{{$product->img}}"></td>

                  <td> 83.33% </td></tr>
            @endforeach
          @endif

          @if(!empty($productfour))
            @foreach($productfour as $product)
            <tr><td><img src="../../../../../../{{$product->img}}"></td>

              <td> 66.67% </td></tr>
            @endforeach
          @endif

          @if(!empty($productthree))
            @foreach($productthree as $product)
            <tr><td><img src="../../../../../../{{$product->img}}"></td>

              <td> 50% </td></tr>
            @endforeach
          @endif

          @if(!empty($producttwo))
            @foreach($producttwo as $product)
            <tr><td><img src="../../../../../../{{$product->img}}"></td>

              <td> 33.33% </td></tr>
            @endforeach
          @endif

          @if(!empty($productone))
            @foreach($productone as $product)
            <tr><td><img src="../../../../../../{{$product->img}}"></td>

                <td> 16.67% </td></tr>
            @endforeach
          @endif

          @if(!empty($productzero))
            @foreach($productzero as $product)
            <tr><td><img src="../../../../../../{{$product->img}}">

              <td> 0% </td></tr>
            @endforeach
          @endif


        </tbody>
    </table>
   </div>

  <div id="display">
<table class="table table-striped table-bordered table-hover">

        <thead><tr><th>Image</th>

            <th >ID</th><th >Brandname</th><th >Color</th><th >Size</th><th >Price</th><th >Year</th><th >Series Name</th>
          </div>
          <th>Similarity</th></tr></thead>
        <tbody>


          @if(!empty($productx))
            @foreach($productx as $product)
            <tr><td><img src="../../../../../../{{$product->img}}"></td>
                <td >{{ $product->id }}</td><td >{{ $product->brandname }}</td><td >{{ $product->color }}</td><td >{{ $product->size }}</td><td >{{ $product->price }}</td><td >{{ $product->year }}</td><td >{{ $product->series }}</td>
              <td> 100% </td></tr>
            @endforeach
          @endif

          @if(!empty($productno))
            @foreach($productno as $product)
            <tr><td><img src="../../../../../../{{$product->img}}"></td>
                <td >{{ $product->id }}</td><td >{{ $product->brandname }}</td><td >{{ $product->color }}</td><td >{{ $product->size }}</td><td >{{ $product->price }}</td><td >{{ $product->year }}</td><td >{{ $product->series }}</td>
                  <td> 83.33% </td></tr>
            @endforeach
          @endif

          @if(!empty($productfour))
            @foreach($productfour as $product)
            <tr><td><img src="../../../../../../{{$product->img}}"></td>
                <td >{{ $product->id }}</td><td >{{ $product->brandname }}</td><td >{{ $product->color }}</td><td >{{ $product->size }}</td><td >{{ $product->price }}</td><td >{{ $product->year }}</td><td >{{ $product->series }}</td>
              <td> 66.67% </td></tr>
            @endforeach
          @endif

          @if(!empty($productthree))
            @foreach($productthree as $product)
            <tr><td><img src="../../../../../../{{$product->img}}"></td>
                <td >{{ $product->id }}</td><td >{{ $product->brandname }}</td><td >{{ $product->color }}</td><td >{{ $product->size }}</td><td >{{ $product->price }}</td><td >{{ $product->year }}</td><td >{{ $product->series }}</td>
              <td> 50% </td></tr>
            @endforeach
          @endif

          @if(!empty($producttwo))
            @foreach($producttwo as $product)
            <tr><td><img src="../../../../../../{{$product->img}}"></td>
                <td >{{ $product->id }}</td><td >{{ $product->brandname }}</td><td >{{ $product->color }}</td><td >{{ $product->size }}</td><td >{{ $product->price }}</td><td >{{ $product->year }}</td><td >{{ $product->series }}</td>
              <td> 33.33% </td></tr>
            @endforeach
          @endif

          @if(!empty($productone))
            @foreach($productone as $product)
            <tr><td><img src="../../../../../../{{$product->img}}"></td>
                <td >{{ $product->id }}</td><td >{{ $product->brandname }}</td><td >{{ $product->color }}</td><td >{{ $product->size }}</td><td >{{ $product->price }}</td><td >{{ $product->year }}</td><td >{{ $product->series }}</td>
                <td> 16.67% </td></tr>
            @endforeach
          @endif

          @if(!empty($productzero))
            @foreach($productzero as $product)
            <tr><td><img src="../../../../../../{{$product->img}}">
                <td >{{ $product->id }}</td><td >{{ $product->brandname }}</td><td >{{ $product->color }}</td><td >{{ $product->size }}</td><td >{{ $product->price }}</td><td >{{ $product->year }}</td><td >{{ $product->series }}</td>
              <td> 0% </td></tr>
            @endforeach
          @endif


        </tbody>
    </table>
   </div>

<script type="text/javascript">
      function display(){
        var a=document.getElementById("displaysimple");
         var b=document.getElementById("display");

        a.style.display="none";
        b.style.visibility="visible";

      }
      function displaysimple(){
        var a=document.getElementById("displaysimple");
         var b=document.getElementById("display");

        a.style.display="block";
        b.style.visibility="hidden";

      }
    </script>


@stop
