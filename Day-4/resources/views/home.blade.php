<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Generate Randome values : {{rand()}}</h1>
    <h2>Displaying Array of objects First 5 even ids in descending order</h2>

    <h2>WAY 1 : For each</h2>
    @php
        $filteredUsers = collect($users)
            ->filter(function($user) { return $user->id % 2 == 0; })
            ->sortByDesc('id')
            ->take(5);
    @endphp

    @foreach ($filteredUsers as $user)
        <p>ID: {{ $user->id }}, Name: {{ $user->name }}, Email: {{ $user->email }}, Password: {{ $user->password }}</p>
    @endforeach

    <h2>WAY 2 : For loop</h2> 
    {{-- Variable Declaration in PHP and its manipulation down below --}}
    @php 
        $limit = 5 ; 
    @endphp

    @for($i = count($users) - 1 ; $i > 0 ; $i-- ) 
        @if ($limit >= 0 && $i%2 != 0 && $i > 0) 
            <p>ID: {{ $users[$i]->id }}, Name: {{ $users[$i]->name }}, Email: {{ $users[$i]->email }}, Password: {{ $users[$i]->password }}</p>
            @php 
                $limit-- ;
            @endphp  
        @endif
    @endfor 

</body>
</html>