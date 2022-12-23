<!DOCTYPE html>
<html lang="en">
    @if ($data->template == 1)
        @include('index')
    @elseif($data->template == 2)
        @include('template.template2')
    @elseif($data->template == 3)
        @include('template.template3')
    @elseif($data->template == 4)
        @include('template.template4')
    @endif
</html>