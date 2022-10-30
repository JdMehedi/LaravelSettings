<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <form action="{{route('setting.store')}}" method="POST">
        @csrf
        <label for="value">Value 1</label>
        <input type="text" name="value[]" id="" value="@if (!empty($resultArray[0]['value'])) {{$resultArray[0]['value']}} @endif">
        <input type="text" name="key[]" id="" value="1" class="hidden">
        <label for="value">Value 2</label>
        <input type="text" name="value[]" id="" value="@if (!empty($resultArray[1]['value'])) {{$resultArray[1]['value']}} @endif">
        <input type="text" name="key[]" id="" value="2" class="hidden">

        <label for="value">Value 3</label>
        <input type="text" name="value[]" id="" value="@if (!empty($resultArray[2]['value'])) {{$resultArray[2]['value']}} @endif">
        <input type="text" name="key[]" id="" value="3" class="hidden">

        <button type="submit">Submit</button>
    </form>
</body>

</html>