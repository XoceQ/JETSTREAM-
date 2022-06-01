@props(['color' => 'red'])


<div role="alert">
    <div class="bg-{{$color}}-500 text-black font-bold rounded-t px-3 py-3">
        Danger
    </div>
    <div class="border border-t-10 border-{{$color}}-400 rounded-b bg-{{$color}}-100 px-4 py-3 text-{{$color}}-700">
        <p>{{$slot}}</p>
    </div>
        
</div>
        