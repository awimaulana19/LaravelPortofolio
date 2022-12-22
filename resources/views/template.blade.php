<!DOCTYPE html>
<html lang="en">
    @if ($data->template == 1)
        @include('index')
    @elseif($data->template == 2)
        @include('template.template2')
    @endif
</html>